$(document).ready(function () {

    let nomV = 0;
    let emailV = 0;
    let prenomV = 0;
    let passwordV = 0;
    let passwordCV = 0;

    /*** RegExp pour l'Email */
    function validateEmail(email) {
        let emailReg = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/i);
        return emailReg.test(email);
    }

    function inscription() {
        if (nomV + prenomV + emailV + passwordV + passwordCV == 5) {
            $("#inscription").prop('disabled', false);
            $("#inscription").addClass("active");
        } else {
            $("#inscription").prop('disabled', true);
        }
    }

    /*** Validation du formulaire inscription nom */
    $("#nom").on('focus', function () {
        $('#nomError').slideDown();
    })
    $("#nom").on('blur', function () {
        $('#nomError').slideUp();
    })
    $("#nom").on('keyup', function () {
        let nomValue = $(this).val();
        if (nomValue.match(/[a-z]/i) && !nomValue.match(/[0-9-!@#$%^&*]/g)) {
            $("#nom").addClass("active");
            $(".nom").addClass("active");
            nomV = 1;
        } else {
            $('#nom').removeClass("active");
            $('.nom').removeClass("active");
            nomV = 0;
        }
        inscription();
    })
    /*** Validation du formulaire inscription prenom */
    $("#prenom").on('focus', function () {
        $('#prenomError').slideDown();
    })
    $("#prenom").on('blur', function () {
        $('#prenomError').slideUp();
    })
    $("#prenom").on('keyup', function () {
        let prenomValue = $(this).val();
        if (prenomValue.match(/[a-z]/i) && !prenomValue.match(/[0-9-!@#$%^&*]/g)) {
            $("#prenom").addClass("active");
            $(".prenom").addClass("active");
            prenomV = 1;
        } else {
            $('#prenom').removeClass("active");
            $('.prenom').removeClass("active");
            prenomV = 0;
        }
        inscription();
    })

    /*** Valisation du formulaire inscription email et qu'elle n'existe pas déjà */
    $("#email").on('focus', function () {
        $('#emailError').slideDown();
    })
    $("#email").on('blur', function () {
        $('#emailError').slideUp();
    })
    $("#email").on('keyup', function () {
        let emailValue = $(this).val();
        var emailbdd = 0;
        if (emailbdd == 0) {
            $('#email1').addClass("active");
        }
        if (validateEmail(emailValue)) {
            $("#email2").addClass("active");
        } else {
            $('#email2').removeClass("active");
        }
        fetch('users.php')
            .then(response => response.json())
            .then(data => {
                data.forEach(user => {
                    if (user.email == emailValue) {
                        $("#email1").removeClass("active");
                    }
                    if ($('#email1').hasClass('active') && $('#email2').hasClass('active')) {
                        $("#email").addClass("active");
                        emailV = 1;
                    } else {
                        $("#email").removeClass("active");
                        emailV = 0;
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des utilisateurs:', error));

        inscription();
    })

    /*** Valisation du formulaire inscription password confirmation */
    $("#confirmPassword").on('focus', function () {
        $('#confirmPasswordError').slideDown();
    })
    $("#confirmPassword").on('blur', function () {
        $('#confirmPasswordError').slideUp();
    })
    $("#confirmPassword").on('keyup', function () {
        let confirmPasswordValue = $(this).val();
        if (confirmPasswordValue == $("#password").val()) {
            $("#confirmPassword").addClass("active");
            $(".verifpassword").addClass("active");
            passwordCV = 1;
        } else {
            $('#confirmPassword').removeClass("active");
            $(".verifpassword").removeClass("active");
            passwordCV = 0;
        }
        inscription();
    })

    /*** Validation du formulaire inscription password */
    $("#password").on('focus', function () {
        $('#passwordError').slideDown();
    })
    $("#password").on('blur', function () {
        $('#passwordError').slideUp();
    })
    $("#password").on('keyup', function () {
        let passValue = $(this).val();
        let min = false;
        let maj = false;
        let chi = false;
        let sym = false;
        let tai = false;
        if (passValue.match(/[a-z]/g)) {
            $(".minuscule").addClass("active");
            min = true;
        } else {
            $('.minuscule').removeClass("active");
        }
        if (passValue.match(/[A-Z]/g)) {
            $(".majuscule").addClass("active");
            maj = true;
        } else {
            $('.majuscule').removeClass("active");
        }
        if (passValue.match(/[0-9]/g)) {
            $(".chiffre").addClass("active");
            chi = true;
        } else {
            $('.chiffre').removeClass("active");
        }
        if (passValue.match(/[!@#$%^&*]/g)) {
            $(".symbole").addClass("active");
            sym = true;
        } else {
            $('.symbole').removeClass("active");
        }
        if (passValue.length > 7) {
            $(".taille").addClass("active");
            tai = true;
        } else {
            $('.taille').removeClass("active");
        }
        if (passValue == $("#confirmPassword").value) {
            $("#confirmPassword").addClass("active");
        } else {
            $("#confirmPassword").removeClass("active");
        }
        if (min == true && maj == true && chi == true && sym == true && tai == true) {
            $("#password").addClass("active");
            passwordV = 1;
        } else {
            $("#password").removeClass("active");
            passwordV = 0;
        }
        inscription();
    })

    
    $('input').on('keyup', function () {
        $('#connexion').prop('disabled', true);
        let connectEmailValue = $('#connectEmail').val();
        let connectPasswordValue = $('#connectPassword').val();
        $("#connectEmail").removeClass("active");
        $(".connectEmail").html("<span></span> Ce compte n'existe pas.");
        $("#connectPassword").removeClass("active") 
        $(".connectPassword").html('<span></span> Erreur de mot de passe.');
        fetch('users.php')
            .then(response => response.json())
            .then(data => {
                data.forEach(user => {
                    if (user.email == connectEmailValue) {
                        $("#connectEmail").addClass("active");
                        $(".connectEmail").text('');
                        if (user.password == connectPasswordValue){
                            $("#connectPassword").addClass("active") 
                            $(".connectPassword").text('');
                            $('#connexion').prop('disabled', false);
                        }
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des utilisateurs:', error));
        $('#connectPasswordError').slideDown();
        $('#connectEmailError').slideDown();
    });

    /*
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

    function inscription(event) {
        // Utiliser Fetch pour récupérer les données depuis users.php
        fetch('users.php')
            .then(response => response.json())
            .then(data => {
                
                var userEmail = document.getElementById('email').value;
                data.forEach(user => {
                    if (user.email == userEmail ){
                        document.getElementById('email').append('Email déjà utilisé')
                        event.preventDefault();
                    }
                    else {
                        console.log(userEmail);
                        console.log(user.email);S
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des utilisateurs:', error));
    }
*/


    //     document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
    // Vérifications du formulaire en JavaScript
    // inscription();

    // Si les vérifications échouent, utilisez event.preventDefault() pour empêcher l'envoi du formulaire
    //   });

    //   document.getElementById('connexionForm').addEventListener('submit', function(event) {
    // Vérifications du formulaire en JavaScript
    // ...

    // Si les vérifications échouent, utilisez event.preventDefault() pour empêcher l'envoi du formulaire
    //   });












})
