<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::get()->where('isPublish', 1);

        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Formdaki name'lere göre verileri çektik

        // gönderilen verileri test etme
        // dd($request->all());

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->qty = $request->get('qty');
        $product->isPublish = $request->boolean('isPublish');
        $product->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        // id var mı kontrolü yapıldı
        // dd($id);

        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->qty = $request->get('qty');
        $product->isPublish = $request->boolean('isPublish');
        $product->save();

        return redirect()->back();
    }
}
