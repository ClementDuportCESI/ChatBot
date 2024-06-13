<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(9);
        return view('product.index', ["products" => $products]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->appends(['query' => $query]);

        return view('product.search', compact('products', 'query'));
    }


    public function create()
    {
        return view('product.create');
    }


    public function store(CreateProductRequest $request)
    {
        $products = Product::create(
            $request->validated()
        );

        return redirect()->route("product.index", $products);
    }


    public function show(Product $product)
    {
        return view('product.show', compact("product"));
    }


    public function edit(Product $product)
    {
        return view('product.edit', compact("product"),);
    }


    public function update(UpdateProductRequest $request, Product $product)
    {

        $product->update($request->validated());
        return redirect()->route("product.index");
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("product.index");
    }
}
