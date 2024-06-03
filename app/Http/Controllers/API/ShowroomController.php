<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function getAllShowrooms()
    {
        return response()->json([
            'showrooms' => Showroom::all()
        ], 200);
    }

    public function getShowroomById($id)
    {
        $showroom = Showroom::find($id);

        if (!$showroom) {
            return response()->json([
                'message' => 'Showroom not found'
            ], 404);
        }

        return response()->json([
            'showroom' => $showroom
        ], 200);
    }

    public function createShowroom(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'profile_photo' => 'nullable|string|max:255',
            'banner' => 'nullable|string|max:255',
            'about' => 'nullable|string'
        ]);

        $showroom = Showroom::create($validatedData);

        return response()->json([
            'message' => 'Showroom created successfully',
            'showroom' => $showroom
        ], 201);
    }

    public function updateShowroom(Request $request, $id)
    {
        $showroom = Showroom::find($id);

        if (!$showroom) {
            return response()->json([
                'message' => 'Showroom not found'
            ], 404);
        }

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'profile_photo' => 'nullable|string|max:255',
            'banner' => 'nullable|string|max:255',
            'about' => 'nullable|string'
        ]);

        $showroom->update($validatedData);

        return response()->json([
            'message' => 'Showroom updated successfully',
            'showroom' => $showroom
        ], 200);
    }

    public function deleteShowroom($id)
    {
        $showroom = Showroom::find($id);

        if (!$showroom) {
            return response()->json([
                'message' => 'Showroom not found'
            ], 404);
        }

        $showroom->delete();

        return response()->json([
            'message' => 'Showroom deleted successfully'
        ], 200);
    }
}
