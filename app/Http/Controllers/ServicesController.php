<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function categories()
    {
        $categories = DB::table('main_categories')->get();
    
        return view('serviceCategories', ['categories' => $categories]);

    }
    
    public function category()
    {
        $services = DB::table('service')->get();
        return view('serviceCategory', ['services' => $services]);
    }
}