<x-layout>
<div class="min-h-screen relative">
    <div class="chatbot-fixed bg-white text-black border rounded-full p-4 cursor-pointer w-16 h-16 flex justify-center items-center">
        <button id="chatbot-button">Chat</button>
    </div>
    

    <x-chatbot-form />

    <script>
        window.chatbotSearchRoute = "{{ route('chatbot.search') }}";
        window.csrfToken = "{{ csrf_token() }}";
    </script>

</div>
</x-layout>
