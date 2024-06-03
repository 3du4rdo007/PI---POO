document.addEventListener('DOMContentLoaded', function() {
    var cadastrosGeraisLink = document.getElementById('cadastros-gerais-link');
    var cadastrosGeraisOptions = document.getElementById('cadastros-gerais-options');

    cadastrosGeraisLink.addEventListener('click', function(e) {
        e.preventDefault();
        cadastrosGeraisOptions.classList.toggle('hidden');
        cadastrosGeraisLink.parentElement.classList.toggle('submenu-active');
    });

    // Event listeners for buttons (if needed)
    document.getElementById('novo').addEventListener('click', function() {
        // Add functionality for the "Novo" button
    });

    document.getElementById('editar').addEventListener('click', function() {
        // Add functionality for the "Editar" button
    });

    document.getElementById('excluir').addEventListener('click', function() {
        // Add functionality for the "Excluir" button
    });
});
