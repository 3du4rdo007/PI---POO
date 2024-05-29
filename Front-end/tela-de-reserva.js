// tela-de-reserva.js

function mostrarDetalhes(button) {
    const card = button.closest('.grupo-carros');
    card.classList.add('flipped');
    card.querySelector('.detalhes').style.display = 'block';
    button.style.display = 'none';
}

function esconderDetalhes(button) {
    const card = button.closest('.grupo-carros');
    card.classList.remove('flipped');
    card.querySelector('.mostrar-detalhes').style.display = 'block';
    card.querySelector('.detalhes').style.display = 'none';
}
