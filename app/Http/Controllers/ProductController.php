<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $req)
    {
        $validated = $req->validate([
            'title' => 'required|string|min:2|max:200',
            'description' => 'required|string|min:2',
            'price' => 'required|numeric|min:1'
        ]);

        Product::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
        ]);

        return redirect()->route('products.index.view');
    }

    public function show(int $id): View
    {
        $product = Product::find($id);
        $product->update(['views' => $product->views + 1]);
        return view('products.show', compact('product'));
    }

    public function edit(): View
    {
        return view('products.edit');
    }

    public function update() {}

    public function delete() {}
}
