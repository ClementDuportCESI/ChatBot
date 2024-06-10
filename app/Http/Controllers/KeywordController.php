<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateKeywordRequest;
use App\Http\Requests\CreateKeywordRequest;
use App\Models\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{

    public function index()
    {
        $keywords = Keyword::paginate(10);
        return view('keyword.index', ["keywords" => $keywords]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $keywords = Keyword::where('keyword', 'LIKE', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10)
            ->appends(['query' => $query]);

        return view('keyword.search', compact('keywords', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keyword.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateKeywordRequest $request)
    {
        $keywords = Keyword::create(
            $request->validated()
        );

        return redirect()->route("keyword.index", $keywords);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keyword $keyword)
    {
        
        return view('keyword.edit', compact("keyword"),);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeywordRequest $request, Keyword $keyword)
    {

        $keyword->update($request->validated());
        return redirect()->route("keyword.index", $keyword);
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

