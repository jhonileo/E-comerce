// Public/JS/pag.js

document.addEventListener('DOMContentLoaded', function () {
    const btnRealizarPagamento = document.getElementById('btnRealizarPagamento');

    if (btnRealizarPagamento) {
        btnRealizarPagamento.addEventListener('click', function () {
            // Obter os valores dos inputs
            const nomeCard = document.getElementById('nome_card').value;
            const numCard = document.getElementById('num_card').value;
            const dateCard = document.getElementById('date_card').value;
            const cvvCard = document.getElementById('CVV_card').value;

            // Verificar se todos os campos estão preenchidos
            if (nomeCard && numCard && dateCard && cvvCard) {
                // Verificar se o número do cartão tem 16 dígitos
                if (numCard.length === 16 && /^\d+$/.test(numCard)) {
                    // Realizar a lógica de pagamento e confirmação
                    const pagamentoConfirmado = true;

                    if (pagamentoConfirmado) {
                        alert('Pagamento confirmado!');
                        window.location.href = '/App/Inicio/Inicio.php';
                    } else {
                        alert('Falha no pagamento. Tente novamente.');
                    }
                } else {
                    alert('Número do cartão inválido. Certifique-se de inserir 16 números.');
                }
            } else {
                alert('Preencha todos os campos do cartão antes de prosseguir.');
            }
        });
    }
});
