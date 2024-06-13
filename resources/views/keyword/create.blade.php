<x-layoutadmin>

<div class="mt-2 px-6">

    <div class="flex mt-3">
        <a href="{{ route('keyword.index') }}" class="hover:-translate-y-1 transition-all border rounded-3xl px-3 py-3 text-sm font-medium">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
    </div>


<div class="mt-4">
    <form action="{{ route('keyword.store') }}" method="post" enctype="multipart/form-data"> {{--enctype for enabled file post--}}
        @csrf
        
        <div class="mb-12">
            <label for="keyword" class=" block text-m font-semibold leading-6 text-gray-900">Mot-clé :</label>
            @error("keyword")
            <div class="text-red-500">{{$message}}</div>
            @enderror
            <div class="mt-2.5">
                <input type="text" name="keyword" id="keyword" value="{{ old('keyword') }}" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <label for="products">Produits liés à ce mot-clé :</label>

            <table class="w-full text-sm text-left rtl:text-right text-zinc-50">
                <thead class="text-xs text-zinc-50 uppercase border-b border-black/50">
                    <tr>
                        <th scope="col" class=" font-bold text-black px-6 py-3">
                            Nom du produit
                        </th>
                        <th scope="col" class="text-end text-black px-6 py-3">
                            Taille
                        </th>
                        <th scope="col" class="text-end text-black pl-6 pr-12 py-3">
                            Couleur
                        </th>
                        <th scope="col" class=" font-bold text-black py-3">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="border-b border-black/20">
                        <td class="text-black px-6 py-3">{{ $product->name }}</td>
                    
                        <td class="text-end text-black px-6 py-3">{{ $product->size }}</td>
                  
                        <td class="text-end text-black pl-6 pr-12 py-3">{{ $product->color }}</td>
                   
                        <td class="text-black py-3"><input type="checkbox" id="product_{{ $product->id }}" name="products[]" value="{{ $product->id }}"></td>
                    </tr>
                    @endforeach
                </tbody>
                    
            </table>
            
                
               
            </div>
            @error('products')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-10">
            <button type="submit" class="block w-full border rounded-3xl px-3 py-3 text-m font-bold hover:-translate-y-1 transition-all">
                Ajouter
            </button>
        </div>
 
    </form>
</div>
</div>
</x-layoutadmin>