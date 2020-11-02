<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\OrderInvoice;
use Carbon\Carbon;
use App\Product;
use App\Order;
use App\User;
use Cookie;
use DB;

class OrderController extends Controller
{
    public function getUsers($id)
    {
        $users = Product::findOrFail($id);
        return response()->json($users, 1);
    }

    public function checkout()
    {
        return view('orders.checkout');
    }

    public function storeOrder(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required|string|max:100',
            'address' => 'required',
            'phone' => 'required|numeric'
        ]);

    public function generateInvoice()
    {
        $order = Order::orderBy('created_at', 'DESC');
        if ($order->count() > 0) {
            $order = $order->first();
            $explode = explode('-', $order->invoice);
            $count = $explode[1] + 1;
            return 'INV-' . $count;
        }
        return 'INV-1';
    }

    public function index(Request $request)
    {
        $users = User::orderBy('name', 'ASC')->get();
        $orders = Order::orderBy('created_at', 'DESC')->with('order_detail', 'user');

        if (!empty($request->user_id)) {
            $orders = $orders->where('user_id', $request->user_id);
        }
        
        if (!empty($request->start_date) && !empty($request->end_date)) {
            $this->validate($request, [
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date'
            ]);
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d') . ' 00:00:01';
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d') . ' 23:59:59';

            $orders = $orders->whereBetween('created_at', [$start_date, $end_date])->get();
        } else {
            $orders = $orders->take(10)->skip(0)->get();
        }

        return view('orders.index', [
            'orders' => $orders,
            'users' => $users
        ]);
    }

}
