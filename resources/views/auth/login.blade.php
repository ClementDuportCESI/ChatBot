<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter - SneakMe</title>
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container mx-auto mt-10 max-w-lg px-4">
        <h1 class="text-4xl font-semibold text-center mb-8">Connexion</h1>
        <form method="post" action="{{ route('login') }}">
            @csrf 
            <div class="mb-4">
                <label for="email" class="block text-m font-semibold leading-6 text-gray-900">Identifiant</label>
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div class="mt-2.5">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="password" class="block text-m font-semibold leading-6 text-gray-900">Mot de passe</label>  

                <div class="mt-2.5">
                    <input type="password" name="password" id="password" class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="mt-10">
                <button type="submit" class="block w-full border rounded-md px-3 py-3 text-sm font-bold hover:-translate-y-1 transition-all">
                    Se connecter
                </button>
            </div>
        </form>
    </div>
    
</body>
</html>
