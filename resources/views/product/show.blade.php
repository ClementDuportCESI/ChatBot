<x-layout>

<div class="pt-4 px-6">
    <div class="flex mt-3 gap-2">
        <a href="{{ route('home.index') }}" class="hover:-translate-y-1 transition-all font-title border bg-accent text-secondary rounded-3xl px-3 py-3 text-sm font-medium">
            <svg class="w-6 h-6 text-background" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a> 
    </div>

<div class="mt-4 flex flex-row gap-16">
    <div> <h1 class="font-title text-4xl font-title font-semibold text-accent">{{$product->name}}</h1>
        
    </div>

    <div class="flex gap-6">
    <div>
        <h2 class="mt-4 font-title text-m leading-none font-semibold leading-6 text-accent">Couleur&nbsp;:</h2> 
        <div class="flex align-center mt-2 gap-4">
            <p class="max-w-screen-lg bg-table border-b border-accent p-2 rounded-md">{{$product->color}}</p>
        </div>
    </div>
    <div>
        <h2 class="mt-4 font-title text-m leading-none font-semibold leading-6 text-accent">Taille&nbsp;:</h2> 
        <div class="flex align-center mt-2 gap-4">
            <p class="max-w-screen-lg bg-table border-b border-accent p-2 rounded-md">{{$product->size}}</p>
        </div>
    </div>
</div>

    </div>
</div>
   
</div>

</x-layout>