<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Http\Requests\ShowroomRequest;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $showrooms = Showroom::where('user_id', $user->id)->get();

        return view('administrator.pengaturan', ['showrooms' => $showrooms]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'phone' => 'string|max:255',
            'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about' => 'string|max:255',
            'address' => 'string|max:255',
        ]);

        $showroom = Showroom::findOrFail($id);

        if ($request->hasFile('banner')) {
            $bannerPath = $request->file('banner')->store('banners', 'public');
            $validatedData['banner'] = '/storage/' . $bannerPath;
        }

        if ($request->hasFile('profile_photo')) {
            $profilePath = $request->file('profile_photo')->store('profile_showrooms', 'public');
            $validatedData['profile_photo'] = '/storage/' . $profilePath;
        }

        $showroom->update($validatedData);

        return redirect()->route('administrator.pengaturan.index')->with('success', 'Showroom updated successfully!');
    }

    public function store(ShowroomRequest $request)
    {
        $showroom = Showroom::create($request->validated());
        return response()->json($showroom, 201);
    }

    public function destroy($id)
    {
        $showroom = Showroom::findOrFail($id);
        $showroom->delete();
        return response()->json(null, 204);
    }
}
