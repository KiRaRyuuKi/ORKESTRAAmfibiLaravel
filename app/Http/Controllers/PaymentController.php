<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Payment;
use App\Models\Showroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $payments = Payment::where('user_id', $user->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        $cars = Car::orderBy('created_at', 'DESC')
            ->take(9)
            ->get();

        return view('transaction', compact('payments', 'cars', 'user'));
    }

    public function sewa(Request $request)
    {
        $search = $request->input('search');
        $page = $request->input('page', 10);
        $current = $request->input('current', 1);

        $user = auth()->user();
        $showroomId = $user->showroom->id;

        $query = Payment::where('showroom_id', $showroomId)
            ->whereHas('car', function ($query) {
                $query->where('status', 'Disewakan');
            });

        if ($search) {
            $query->where('status', 'LIKE', "%{$search}%");
        }

        $payments = $query->orderBy('created_at', 'DESC')->paginate($page, ['*'], 'page', $current);

        return view('administrator.sewa_mobil.data-sewa', compact('payments', 'page', 'search'));
    }

    public function jual(Request $request)
    {
        $search = $request->input('search');
        $page = $request->input('page', 10);
        $current = $request->input('current', 1);

        $user = auth()->user();
        $showroomId = $user->showroom->id;

        $query = Payment::where('showroom_id', $showroomId)
            ->whereHas('car', function ($query) {
                $query->where('status', 'Dijual');
            });

        if ($search) {
            $query->where('status', 'LIKE', "%{$search}%");
        }

        $payments = $query->orderBy('created_at', 'DESC')->paginate($page, ['*'], 'page', $current);

        return view('administrator.penjualan.data-penjualan', compact('payments', 'page', 'search'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'user_id' => 'required|exists:users,id',
        //     'showroom_id' => 'required|exists:showrooms,id',
        //     'car_id' => 'required|exists:cars,id',
        //     'amount' => 'required|numeric',
        //     'card_holder' => 'required|string|max:255',
        //     'card_number' => 'required|string|max:16',
        //     'card_expiry' => 'required|string|max:5',
        //     'card_cvv' => 'required|string|max:3',
        //     'date' => 'required|string|max:255',
        //     'status' => 'required|string|max:255',
        // ]);

        $payment = Payment::create($request->all());

        return redirect()->route('transaction')->with('success', 'Transaksi berhasil.');
    }
}
