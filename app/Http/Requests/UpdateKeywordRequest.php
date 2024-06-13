<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKeywordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $keywordId = $this->route('keyword')->id;

        return [
            'keyword' => 'required|string|max:255|unique:keywords,keyword,' . $keywordId,
            'products' => 'nullable|array',
            'products.*' => 'exists:products,id',
        ];
    }

    public function messages()
    {
        return [
            'keyword.required' => 'Le champ mot-clé est obligatoire.',
            'keyword.string' => 'Le champ mot-clé doit être une chaîne de caractères.',
            'keyword.max' => 'Le champ mot-clé ne peut pas dépasser 255 caractères.',
            'keyword.unique' => 'Ce mot-clé existe déjà.',
            'products.array' => 'Le champ produits doit être un tableau.',
            'products.*.exists' => 'Le produit sélectionné est invalide.',
        ];
    }
}
