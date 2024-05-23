<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::with('user')->get();
        return response()->json($addresses);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'label' => 'nullable|string',
            'address' => 'nullable|string',
            'pin' => 'nullable|string',
        ]);

        $address = Address::create($request->all());
        return response()->json($address, 201);
    }

    public function show($id)
    {
        $address = Address::with('user')->findOrFail($id);
        return response()->json($address);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'sometimes|required|exists:users,id',
            'label' => 'nullable|string',
            'address' => 'nullable|string',
            'pin' => 'nullable|string',
        ]);

        $address = Address::findOrFail($id);
        $address->update($request->all());
        return response()->json($address);
    }

    public function destroy($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
        return response()->json(null, 204);
    }
}
