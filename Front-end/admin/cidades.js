document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cidadeForm');
    const cidadeList = document.getElementById('cidadeList');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const cidadeNome = document.getElementById('cidadeNome').value;
        
        if (cidadeNome) {
            const listItem = document.createElement('li');
            listItem.textContent = cidadeNome;
            cidadeList.appendChild(listItem);
            
            form.reset();
        }
    });
});
