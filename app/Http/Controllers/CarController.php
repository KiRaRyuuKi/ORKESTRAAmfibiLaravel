<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('created_at', 'DESC')->get();
        return view('administrator.data_mobil.data-mobil', compact('cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'showroom_id' => 'required|exists:showrooms,id',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'year' => 'required|integer',
            'fuel_type' => 'required|string',
            'transmission' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|string|in:rental,sale',
            'color' => 'required|string',
            'capacity' => 'required|integer',
            'license_plate' => 'required|string|unique:cars',
            'image1' => 'nullable|string',
            'image2' => 'nullable|string',
            'image3' => 'nullable|string',
            'image4' => 'nullable|string',
            'image5' => 'nullable|string',
            'accessories' => 'nullable|array',
        ]);

        $car = Car::create($request->all());
        return response()->json($car, 201);
    }

    public function show($id)
    {
        $car = Car::with('showroom', 'brand', 'category', 'rentalCar', 'saleCar')->findOrFail($id);
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'showroom_id' => 'required|exists:showrooms,id',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'year' => 'required|integer',
            'fuel_type' => 'required|string',
            'transmission' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|string|in:rental,sale',
            'color' => 'required|string',
            'capacity' => 'required|integer',
            'license_plate' => 'required|string|unique:cars,license_plate,'.$id,
            'image1' => 'nullable|string',
            'image2' => 'nullable|string',
            'image3' => 'nullable|string',
            'image4' => 'nullable|string',
            'image5' => 'nullable|string',
            'accessories' => 'nullable|array',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());
        return response()->json($car);
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(null, 204);
    }
}
