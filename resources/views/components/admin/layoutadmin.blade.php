<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'SneakMe' }}</title>
    <link rel="icon" type="image/x-icon" href="">
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">


          <x-navbar/>

          <nav class="fixed top-0 z-50 w-full bg-black">
            <div class="px-3 py-1">
              <div class="flex justify-between items-center">
                <div class="flex items-center justify-start rtl:justify-end">
                    <svg class="w-6 h-6 text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                    </svg>
                    <a href="{{ route('home.index') }}" class="text-white text-sm">Aller sur le site</a>
                </div>
                <div>
                  <p class="text-white font-title text-l">Bienvenue sur l'espace Admin, {{Auth::user()->name}}</p>
                </div>
                <div>
                  <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 group-hover:text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                        </svg>
                        <span class="text-start flex-1 ms-3 text-white group-hover:text-accent font-title">Se déconnecter</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </nav>

        <div class="mt-8 sm:ml-64 mb-8">
          {{$slot}}
        </div> 
      </div>

</body>
</html>