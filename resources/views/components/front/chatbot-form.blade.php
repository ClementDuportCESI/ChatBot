<div id="chatbot" class="hidden fixed bottom-24 overflow-auto max-h-[400px] right-5 w-[550px] bg-white border border-gray-300 shadow-lg rounded-lg p-5">
    <form id="chatbot-form">
        @csrf
        <p>Parlez-nous de vos chaussures de rêve...</p>
        <div class="block flex items-center w-full rounded-md border-0  text-gray-900 mb-2">
            <input type="text" name="query" id="chatbot-input" placeholder="Tapez ici..." class=" rounded-md max-w-full flex-1 focus:border-none py-2 px-3.5  shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-black/50">
            <button type="submit" class="max-w-fit bg-accent text-background rounded-md pl-3 py-2">

                <svg class="w-10 h-10 text-white bg-black rounded-md p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>


            </button>
        </div>
    </form>
    <div id="chatbot-results" class="mt-4"></div>
</div>
