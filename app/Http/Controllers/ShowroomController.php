<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Http\Requests\ShowroomRequest;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index()
    {
        $showrooms = Showroom::with('user', 'cars')->get();
        return response()->json($showrooms);
    }

    public function store(ShowroomRequest $request)
    {
        $showroom = Showroom::create($request->validated());
        return response()->json($showroom, 201);
    }

    public function show($id)
    {
        $showroom = Showroom::with('user', 'cars')->findOrFail($id);
        return response()->json($showroom);
    }

    public function update(ShowroomRequest $request, $id)
    {
        $showroom = Showroom::findOrFail($id);
        $showroom->update($request->validated());
        return response()->json($showroom);
    }

    public function destroy($id)
    {
        $showroom = Showroom::findOrFail($id);
        $showroom->delete();
        return response()->json(null, 204);
    }
}
