<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'sometimes|required|string|max:255|unique:users,username,' . $id,
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'ktp' => 'nullable|string',
            'kk' => 'nullable|string',
            'profile_photo' => 'nullable|string',
            'addresses' => 'nullable|array',
            'addresses.*.label' => 'nullable|string',
            'addresses.*.address' => 'nullable|string',
            'addresses.*.pin' => 'nullable|string',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        if ($request->has('addresses')) {
            foreach ($request->addresses as $addressData) {
                $user->addresses()->updateOrCreate(
                    ['label' => $addressData['label']],
                    $addressData
                );
            }
        }

        return response()->json($user->load('addresses'));
    }
}
