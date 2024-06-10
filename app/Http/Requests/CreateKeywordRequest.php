<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKeywordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'keyword' => 'required|string|max:255|unique:keywords,keyword',
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
