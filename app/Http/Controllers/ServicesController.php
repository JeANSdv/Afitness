<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Service;
use App\Models\SubPrice;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

    public function purchase(Request $request, $subId)
    {
        $user = Auth::user(); // Получаем авторизированного пользователя

        // Создаем транзакцию покупки
        $purchase = $user->purchases()->create([
            'user_id' => $user->user_id,
            'date_start' => Carbon::now(),
            'date_end' => Carbon::now()->addMonths(1),
            'subscription_id' => $subId
        ]);

        // dd($purchase);

        // Проверяем, успешно ли создана подписка
        if ($purchase) {
            return back()->with('success', 'Покупка абонемента успешно совершена.');
        } else {
            return back()->with('error', 'Произошла ошибка при покупке абонемента.');
        }
    }

}