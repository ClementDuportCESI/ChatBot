document.addEventListener('DOMContentLoaded', function () {
    const chatbotForm = document.getElementById('chatbot-form');
    if (chatbotForm) {
        chatbotForm.addEventListener('submit', function(event) {
            event.preventDefault();
            var query = document.getElementById('chatbot-input').value;

            fetch(window.chatbotSearchRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': window.csrfToken
                },
                body: JSON.stringify({ query: query })
            })
            .then(response => response.json())
            .then(data => {
                var resultsDiv = document.getElementById('chatbot-results');
                resultsDiv.innerHTML = '';
                if (data.products.length > 0) {
                    data.products.forEach(product => {
                        var productDiv = document.createElement('div');
                        resultsDiv.className = 'grid grid-cols-2 gap-4';
                        productDiv.className = 'product-result border border-gray-300 p-2 rounded-md';
                        productDiv.innerHTML = `<h4>${product.name}</h4><p>Taille: ${product.size}</p><p>Couleur: ${product.color}</p><button onclick="window.location.href='/produits/${product.id}'" class="text-blue-500 hover:underline">Voir</button>`;
                        resultsDiv.appendChild(productDiv);
                    });
                } else {
                    resultsDiv.innerHTML = '<div class="flex items-center gap-4"><p><span class="text-red-500">Aucun résultat</span>, contactez-nous :</p> <a href="/contact" class="rounded-md text-white bg-black py-2 px-3">Page Contact</a></div>';
                }
            });
        });
    }

    const chatbotButton = document.getElementById('chatbot-button');
    if (chatbotButton) {
        chatbotButton.addEventListener('click', function() {
            var chatbot = document.getElementById('chatbot');
            if (chatbot.style.display === 'none' || chatbot.style.display === '') {
                chatbot.style.display = 'block';
            } else {
                chatbot.style.display = 'none';
            }
        });
    }
});
