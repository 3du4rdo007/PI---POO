document.addEventListener('DOMContentLoaded', function() {
  var cadastrosGeraisLink = document.getElementById('cadastros-gerais-link');
  var cadastrosGeraisOptions = document.getElementById('cadastros-gerais-options');

  cadastrosGeraisLink.addEventListener('click', function(e) {
      e.preventDefault();
      cadastrosGeraisOptions.classList.toggle('hidden');
      cadastrosGeraisLink.parentElement.classList.toggle('submenu-active');
  });

  document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      fetch('cadastrar_cliente.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.text())
      .then(data => console.log(data));
  });
});
