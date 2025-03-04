document.getElementById('produitForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData();
    formData.append('noms', document.getElementById('noms').value);
    formData.append('types', document.getElementById('types').value);
    formData.append('sizes', document.getElementById('sizes').value);
    formData.append('image', document.getElementById('image').files[0]);

    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Produit ajouté avec succès!');
            document.getElementById('produitForm').reset();
        } else {
            alert('Erreur lors de l\'ajout du produit');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});