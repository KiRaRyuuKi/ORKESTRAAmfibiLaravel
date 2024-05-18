<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandCategoryController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $categorys = Category::all();

        return view('administrator.data_mobil.merek-&-kategori', compact('brands', 'categorys'));
    }
}

