<x-layoutadmin>

<div class="mt-12 px-6">

    <div class="flex mt-3">
        <a href="{{ route('users.index') }}" class="hover:-translate-y-1 transition-all font-title border rounded-3xl px-3 py-3 text-sm font-medium">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
    </div>


    <div class=" mt-4">
        <form action="{{ route('users.update',  $user) }}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
       
             <div class="mb-4">
                <label for="role" class="hidden block text-m font-semibold leading-6 text-gray-900">Role</label>
                @error("role")
                <div class="text-red-500">{{$message}}</div>
                @enderror
                <div class="mt-2.5">
                   <select name="role" id="role"  class="block border w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="" class="text-gray-900">--Choissisez un role--</option>
                        <option {{$user->role === "customer" ? "selected" : ""}} value="customer" class="text-gray-900">Client</option>
                        <option {{$user->role === "admin" ? "selected" : ""}} value="admin" class="text-gray-900">Admin</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="block w-full border rounded-3xl px-3 py-3 text-m font-bold hover:-translate-y-1 transition-all">
                    Modifier statut
                </button>
            </div>
        </form>
    </div>

</div>
</x-layoutadmin>