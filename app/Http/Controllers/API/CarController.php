<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function getAllCars()
    {
        return response()->json([
            'cars' => Car::all()
        ], 200);
    }

    public function getCarById($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'message' => 'Car not found'
            ], 404);
        }

        return response()->json([
            'car' => $car
        ], 200);
    }

    public function createCar(Request $request)
    {
        $validatedData = $request->validate([
            'showroom_id' => 'required|exists:showrooms,id',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'year' => 'required|integer',
            'fuel_type' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'price' => 'required|numeric',
            'status' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'license_plate' => 'required|string|max:255',
            'image1' => 'nullable|string|max:255',
            'image2' => 'nullable|string|max:255',
            'image3' => 'nullable|string|max:255',
            'image4' => 'nullable|string|max:255',
            'image5' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'accessories' => 'nullable|array',
        ]);

        $car = Car::create($validatedData);

        return response()->json([
            'message' => 'Car created successfully',
            'car' => $car
        ], 201);
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'message' => 'Car not found'
            ], 404);
        }

        $validatedData = $request->validate([
            'showroom_id' => 'required|exists:showrooms,id',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'year' => 'required|integer',
            'fuel_type' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'price' => 'required|numeric',
            'status' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'license_plate' => 'required|string|max:255',
            'image1' => 'nullable|string|max:255',
            'image2' => 'nullable|string|max:255',
            'image3' => 'nullable|string|max:255',
            'image4' => 'nullable|string|max:255',
            'image5' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'accessories' => 'nullable|array',
        ]);

        $car->update($validatedData);

        return response()->json([
            'message' => 'Car updated successfully',
            'car' => $car
        ], 200);
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'message' => 'Car not found'
            ], 404);
        }

        $car->delete();

        return response()->json([
            'message' => 'Car deleted successfully'
        ], 200);
    }
}
