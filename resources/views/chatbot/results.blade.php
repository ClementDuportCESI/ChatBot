<x-layout>
<div class="mt-2 px-6">
    <div class="mt-4">
        <h2>Résultats de la recherche</h2>
        @if($products->isEmpty())
            <p>Aucun produit trouvé.</p>
        @else
            @foreach($products as $product)
                <div class="product-result mt-4 p-4 border rounded-md">
                    <h4>{{ $product->name }}</h4>
                    <p>Taille: {{ $product->size }}</p>
                    <p>Couleur: {{ $product->color }}</p>
                    <a href="/products/{{ $product->id }}" class="text-blue-500 hover:underline">Voir</a>
                </div>
            @endforeach
        @endif
    </div>
</div>
</x-layout>