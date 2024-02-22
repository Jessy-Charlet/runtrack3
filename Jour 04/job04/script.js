$(document).ready(function () {

    function updateTable() {
        // Utiliser Fetch pour récupérer les données depuis users.php
        fetch('users.php')
            .then(response => response.json())
            .then(data => {
                // Mettre à jour le tableau HTML avec les données récupérées
                const userTableBody = document.getElementById('userTableBody');
                userTableBody.innerHTML = '';

                data.forEach(user => {
                    const row = document.createElement('tr');
                    row.innerHTML = `<td>${user.id}</td><td>${user.nom}</td><td>${user.prenom}</td><td>${user.email}</td>`;
                    userTableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des utilisateurs:', error));
    }
      document.getElementById("update").addEventListener("click", function(e) {
        updateTable();
      });
})
