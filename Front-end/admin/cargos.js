document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cargoForm');
    const cargoList = document.getElementById('cargoList');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const cargoNome = document.getElementById('cargoNome').value;
        
        if (cargoNome) {
            const listItem = document.createElement('li');
            listItem.textContent = cargoNome;
            cargoList.appendChild(listItem);
            
            form.reset();
        }
    });
});
