<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Service;

class ServicesController extends Controller
{
    public function categories()
    {
        $categories = Category::all();

        return view('serviceCategories', ['categories' => $categories]);
    }

    public function category($id)
    {
        $category = Category::with('services')->findOrFail($id);
        $cat_name = $category->title;
        $category = $category->services;
        return view('serviceCategory', ['category' => $category, 'cat_name' => $cat_name]);
    }

    public function service($id)
    {
        $service = Service::with('subscriptions.price')->findOrFail($id);
        $subscriptions = $service->subscriptions;
        return view('serviceSubs', ['subscriptions' => $subscriptions, 'service' => $service]);
    }
}