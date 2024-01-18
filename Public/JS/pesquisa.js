// Public/JS/pesquisa.js

document.addEventListener('DOMContentLoaded', function () {
    const inputPesquisa = document.getElementById('inputPesquisa');
    const cardsProdutos = document.querySelectorAll('.card-title');

    if (inputPesquisa) {
        inputPesquisa.addEventListener('input', function () {
            const termoPesquisa = inputPesquisa.value.toLowerCase();

            cardsProdutos.forEach(function (card) {
                const nomeProduto = card.textContent.toLowerCase();
                const cardPai = card.parentElement;

                if (nomeProduto.includes(termoPesquisa)) {
                    cardPai.style.display = 'block';
                } else {
                    cardPai.style.display = 'none';
                }
            });
        });
    }
});
