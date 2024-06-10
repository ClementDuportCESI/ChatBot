<x-layout>

<div class="mt-2 px-6">

    <div class="flex mt-3">
        <a href="{{ route('keyword.index') }}" class="hover:-translate-y-1 transition-all font-title border bg-accent text-secondary rounded-3xl px-3 py-3 text-sm font-medium">
            <svg class="w-6 h-6 text-background" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
    </div>


<div class="mt-4">

    <form action="{{ route('keyword.update', $keyword) }}" method="post" enctype="multipart/form-data"> {{--enctype for enabled file post--}}
        @csrf
        @method('PUT')
        <div class="mb-4">
            <span>Mot-clé actuel : {{$keyword->keyword}}</span>

            <label for="keyword" class="font-title block text-m font-semibold leading-6 text-gray-900">Nouveau mot-clé :</label>
            
            @error("keyword")
            <div class="text-red-500">{{$message}}</div>
            @enderror
            <div class="mt-2.5">
                <input type="text" name="keyword" id="keyword" value="{{old("keyword")}}" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            
        </div>



        <div class="mt-10">
            <button type="submit" class="block w-full font-title border bg-accent text-background rounded-3xl px-3 py-3 text-m font-bold hover:-translate-y-1 transition-all">
                Modifier
            </button>
        </div>
 
    </form>
</div>
</div>
</x-layout>