<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateKeywordRequest;
use App\Http\Requests\CreateKeywordRequest;
use App\Models\Keyword;
use App\Models\Product;
use Illuminate\Http\Request;

class KeywordController extends Controller
{

    public function index()
    {
        $keywords = Keyword::orderBy('created_at', 'desc')->paginate(9);
        return view('keyword.index', ['keywords' => $keywords]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $keywords = Keyword::where('keyword', 'LIKE', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->appends(['query' => $query]);

        return view('keyword.search', compact('keywords', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('keyword.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(CreateKeywordRequest $request)
    {
        $keyword = Keyword::create($request->validated());

        if ($request->has('products')) {
            $keyword->products()->attach($request->products);
        }

        return redirect()->route('keyword.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keyword $keyword)
    {
        $products = Product::all();
        return view('keyword.edit', compact('keyword', 'products'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeywordRequest $request, Keyword $keyword)
    {
        
        $keyword->update($request->validated());

        
        if ($request->has('products')) {
            $keyword->products()->sync($request->input('products'));
        } else {
            
            $keyword->products()->detach();
        }
        return redirect()->route("keyword.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keyword $keyword)
    {
        $keyword->delete();
        return redirect()->route("keyword.index");
    }
}

