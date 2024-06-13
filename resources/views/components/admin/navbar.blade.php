<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div class="flex h-full px-3 pb-4 bg-accent pt-12 flex-col justify-between">
      <ul class="space-y-2 font-medium">
         <li>
            <a href={{route("product.index")}} class="{{Route::is('product.index') ? 'border-2 border-black/50 rounded-md' : ""}} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <svg class="w-6 h-6 text-black group-hover:text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="3 0 22 22">
                  <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Z" clip-rule="evenodd"/>
               </svg>
               <span class="flex-1 ml-2 text-black group-hover:text-accent font-title">Produits</span>
            </a>
         </li>
         <li>
            <a href={{route("keyword.index")}} class="{{Route::is('keyword.index') ? 'border-2 border-black/50 rounded-md' : ""}} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.2V5h11v1.2M8 5v14m-3 0h6m2-6.8V11h8v1.2M17 11v8m-1.5 0h3"/>
               </svg>
               <span class="flex-1 ms-3 text-black group-hover:text-accent font-title">Mots-clés</span>
            </a>
         </li>
         <li>
            <a href={{route("users.index")}} class="{{Route::is('users.index') ? 'border-2 border-black/50 rounded-md' : ""}} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <svg class="flex-shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-accent" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
               </svg>
               <span class="flex-1 ms-3 text-black group-hover:text-accent font-title">Utilisateurs</span>
            </a>
         </li>        
      </ul>
   </div>
</aside>