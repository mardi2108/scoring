<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::with('user')->orderBy('created_at', 'DESC')->paginate(10);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:30',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'user_id' => 'required|exists:user,id',
        ]);

        try {
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'user_id' => $request->user_id,
            ]);
            return redirect('tiket')
                ->with(['success' => '<strong>' . $product->name . '</strong> Berhasil dikirim']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->back()->with(['success' => '<strong>' . $products->name . '</strong> Telah Dihapus!']);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('product.edit', compact('product', 'categories'));
    }

    public function sendItem(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|exists:user,username',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'user_id' => 'required|exists:user,id',
        ]);

        $user = User::where('username');
        $user->update([
            'username' => $request->username,
            'price' => $request->product->price->input('50000'),
            'stock' => $request->product->stock,
            'user_id' => $request->product->user_id,
        ]);

        return redirect('tiket')
            ->with(['success' => '<strong>' . $product->name . '</strong> Diperbaharui']);
    }
}