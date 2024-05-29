document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    fetch('cadastrar_tipo_adicional.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text())
      .then(data => console.log(data));
});
