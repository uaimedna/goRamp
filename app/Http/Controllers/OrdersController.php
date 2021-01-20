<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Support\Facades\Auth;
use Silber\Bouncer\Bouncer;

class OrdersController extends Controller
{
    public function currentUserOrders()
    {
        return view('orders', [
            'orders' => Orders::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function allOrders()
    {
        return view('orders', [
            'orders' => Orders::all()
        ]);
    }

    public function allOrdersWithTrash()
    {
        return view('orders', [
            'orders' => Orders::withTrashed()->get()
        ]);
    }

    public function allTrashOrders()
    {
        return view('orders', [
            'orders' => Orders::onlyTrashed()->get()
        ]);
    }
}
