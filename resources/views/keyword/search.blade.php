<x-layoutadmin>
<div class="px-6">
    <div class="flex justify-between mb-1">
        <div class="flex gap-4 items-center">
            <div class="flex mt-3">
                <a href="{{ route('keyword.index') }}" class="hover:-translate-y-1 transition-all font-title border rounded-3xl px-3 py-3 text-sm font-medium">
                    <svg class="w-6 h-6 text-background" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                    </svg>
                </a>
            </div>
            <h1 class="text-3xl font-bold mt-4 mb-2">Résultats pour {{ request('query') }}</h1> 
        </div>
        
        <form action="{{ route('keyword.search') }}" method="GET" class="w-96 pt-2">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">
                Rechercher
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-table" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input
                    type="search"
                    id="default-search"
                    name="query"
                    class="border-2 autofill:text-black placeholder:text-black text-black block w-full p-4 ps-10 pr-[30%] text-sm table rounded-lg"
                    placeholder="Rechercher un mot-clé"
                    required
                />
                <button
                    type="submit"
                    class="absolute end-2.5 bottom-2.5 rounded-md transition-all text-xs inline-block font-bold border-2 py-2 px-4"
                >
                    Rechercher
                </button>
            </div>
        </form>
    </div>
    
    @if($keywords->isNotEmpty())

    <div class="relative rounded-md overflow-hidden my-4">
    <table class="w-full text-sm text-left rtl:text-right text-zinc-50">
        <thead class="text-xs text-zinc-50 uppercase border-b border-black/50">
            <tr>
                <th scope="col" class="font-bold text-black px-6 py-3">
                    Mot-clé
                </th>
                <th scope="col" class="flex justify-end font-bold text-black px-6 py-3">
                    Modifier / Supprimer
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($keywords as $keyword)
        
             <tr class="border-b border-black/50 text-slate-950">
                <th scope="row" class="px-6 py-4 font-sans font-bold text-slate-950 whitespace-nowrap ">
                   {{$keyword->keyword}}
                </th>
                <td class="flex flex-row justify-end px-6 py-4 gap-11">
                    <a href="{{route("keyword.edit", $keyword)}}" class="rounded-3xl px-2 py-2 text-sm font-medium hover:-translate-y-1 transition-all">
                        <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                        </svg>
                    </a>
                    <form method="post" action="{{route('keyword.destroy', $keyword)}}">
                        @csrf 
                        @method("DELETE")
                        <button type="submit" class="border-2 rounded-3xl px-2 py-2 text-sm font-medium hover:-translate-y-1 transition-all">
                            <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                            </svg>
                        </button>
                    </form>                   
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    </div>

    
    {{ $keywords->links() }}
    
    @else
        <p>Aucun mot-clé trouvé pour "{{ $query }}".</p>
    @endif

</div>

</x-layoutadmin>