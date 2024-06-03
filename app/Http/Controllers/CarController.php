<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use App\Models\Showroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $page = $request->input('page', 5);
        $current = $request->input('current', 1);

        $user = auth()->user();
        $showroomId = $user->showroom->id;

        $query = Car::query();

        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $query->where('showroom_id', $showroomId);

        $cars = $query->orderBy('created_at', 'DESC')->paginate($page, ['*'], 'current', $current);

        return view('administrator.data_mobil.data-mobil', compact('cars', 'page', 'search'));
    }

    public function welcome()
    {
        $cars = Car::orderBy('created_at', 'DESC')->take(6)->get();
        return view('welcome', compact('cars'));
    }

    public function market()
    {
        $cars = Car::orderBy('created_at', 'DESC')->get();
        return view('market', compact('cars'));
    }

    public function payment($id)
    {
        $car = Car::findOrFail($id);
        $user = Auth::user();
        return view('payment', compact('car', 'user'));
    }

    public function create()
    {
        $brands = Brand::orderBy('created_at', 'DESC')->get();
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $user = Auth::user();

        $showrooms = Showroom::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        return view('administrator.data_mobil.create', compact('brands', 'categories', 'showrooms', 'user'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'showroom_id' => 'required|exists:showrooms,id',
                'brand_id' => 'required|exists:brands,id',
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'year' => 'required|integer',
                'transmission' => 'required|string',
                'fuel_type' => 'required|string',
                'status' => 'required|string|in:Dijual,Disewakan,Digarasi',
                'color' => 'required|string',
                'capacity' => 'required|integer',
                'license_plate' => 'required|string',
                'price' => 'required|numeric',
                'image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string',
                'accessories' => 'nullable|string',
            ]);

            $imagePaths = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('image_' . $i)) {
                    $imagePath = $request->file('image_' . $i)->store('image_cars', 'public');
                    $imagePaths['image_' . $i] = '/storage/' . $imagePath;
                }
            }

            $car = Car::create(array_merge($validatedData, $imagePaths));

            return redirect()->route('data-mobil')->with('success', 'Mobil baru berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')->withInput();
        }
    }

    public function edit($id)
    {

        $car = Car::findOrFail($id);
        $brands = Brand::orderBy('created_at', 'DESC')->get();
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $user = Auth::user();
        $showrooms = Showroom::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        return view('administrator.data_mobil.edit', compact('car', 'brands', 'categories', 'showrooms', 'user'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'showroom_id' => 'required|exists:showrooms,id',
                'brand_id' => 'required|exists:brands,id',
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'year' => 'required|integer',
                'transmission' => 'required|string',
                'fuel_type' => 'required|string',
                'status' => 'required|string|in:Dijual,Disewakan,Digarasi',
                'color' => 'required|string',
                'capacity' => 'required|integer',
                'license_plate' => 'required|string|unique:cars,license_plate,' . $id,
                'price' => 'required|numeric',
                'image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image_5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string',
                'accessories' => 'nullable|string',
            ]);

            $car = Car::findOrFail($id);

            $imagePaths = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('image_' . $i)) {
                    $imagePath = $request->file('image_' . $i)->store('image_cars', 'public');
                    $imagePaths['image_' . $i] = '/storage/' . $imagePath;
                }
            }

            $car->update(array_merge($validatedData, $imagePaths));

            return redirect()->route('data-mobil')->with('info', 'Data mobil berhasil diedit.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')->withInput();
        }
    }

    public function destroy(Request $request)
    {
        $ids = $request->input('selected-ids');
        $idsArray = explode(',', $ids);

        foreach ($idsArray as $id) {
            $car = Car::findOrFail($id);
            $car->delete();
        }

        return redirect()->route('data-mobil')->with('danger', 'Cars deleted successfully');
    }
}
