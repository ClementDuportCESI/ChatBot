<x-layout>
<div class="mt-2 px-6">
    <div class="flex mt-3">
        <a href="{{ route('product.index') }}" class="hover:-translate-y-1 transition-all font-title border bg-accent text-secondary rounded-3xl px-3 py-3 text-sm font-medium">
            <svg class="w-6 h-6 text-background" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
    </div>

    <div class="mt-4">
        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-12">
                <label for="name" class="font-title block text-m font-semibold leading-6 text-gray-900">Nom du produit :</label>
                @error('name')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <div class="mt-2.5">
                    <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="mb-12">
                <label for="color" class="font-title block text-m font-semibold leading-6 text-gray-900">Couleur :</label>
                @error('color')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <div class="mt-2.5">
                    <input type="text" name="color" id="color" value="{{ old('color', $product->color) }}" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="mb-12">
                <label for="size" class="font-title block text-m font-semibold leading-6 text-gray-900">Taille :</label>
                @error('size')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <div class="mt-2.5">
                    <input type="text" name="size" id="size" value="{{ old('size', $product->size) }}" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="mt-10">
                <button type="submit" class="block w-full font-title border bg-accent text-background rounded-3xl px-3 py-3 text-m font-bold hover:-translate-y-1 transition-all">
                    Mettre à jour
                </button>
            </div>
        </form>
    </div>
</div>
</x-layout>