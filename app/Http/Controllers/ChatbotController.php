<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use App\Models\Product;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $keywordsArray = array_filter(explode(' ', $query));

        // Rechercher des mots-clés similaires dans la base de données
        $keywords = Keyword::where(function ($q) use ($keywordsArray) {
            foreach ($keywordsArray as $keyword) {
                $q->orWhere('keyword', 'LIKE', "%{$keyword}%");
            }
        })->pluck('id');

        // Rechercher des produits associés à ces mots-clés et aux critères supplémentaires
        $products = Product::where(function ($q) use ($keywordsArray) {
            foreach ($keywordsArray as $keyword) {
                $q->orWhere('name', 'LIKE', "%{$keyword}%")
                ->orWhere('size', 'LIKE', "%{$keyword}%")
                ->orWhere('color', 'LIKE', "%{$keyword}%")
                ->orWhereHas('keywords', function ($query) use ($keyword) {
                    $query->where('keyword', 'LIKE', "%{$keyword}%");
                });
            }
        })->get();

        return response()->json(['products' => $products]);
    }
}
