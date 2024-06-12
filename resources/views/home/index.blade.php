<x-layout>
<div class="min-h-screen relative">
    <div class="chatbot-fixed bg-white text-black border rounded-full p-4 cursor-pointer w-16 h-16 flex justify-center items-center">
        <button id="chatbot-button">Chat</button>
    </div>
    

    <x-chatbot-form />

    <script>
        document.getElementById('chatbot-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var query = document.getElementById('chatbot-input').value;

            fetch("{{ route('chatbot.search') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ query: query })
            })
            .then(response => response.json())
            .then(data => {
                var resultsDiv = document.getElementById('chatbot-results');
                resultsDiv.className = 'grid grid-cols-2 gap-4';
                resultsDiv.innerHTML = '';
                if (data.products.length > 0) {
                    data.products.forEach(product => {
                        var productDiv = document.createElement('div');
                        productDiv.className = 'product-result border border-gray-300 p-2 rounded-md';
                        productDiv.innerHTML = `<h4>${product.name}</h4><p>Taille: ${product.size}</p><p>Couleur: ${product.color}</p><button onclick="window.location.href='/products/${product.id}'" class="text-blue-500 hover:underline">Voir</button>`;
                        resultsDiv.appendChild(productDiv);
                    });
                } else {
                    resultsDiv.innerHTML = '<p class="text-red-500">Aucun résultat</p>';
                }
            });
        });

        document.getElementById('chatbot-button').addEventListener('click', function() {
            var chatbot = document.getElementById('chatbot');
                        if (chatbot.style.display === 'none' || chatbot.style.display === '') {
                chatbot.style.display = 'block';
            } else {
                chatbot.style.display = 'none';
            }
        });
    </script>
</div>
</x-layout>
