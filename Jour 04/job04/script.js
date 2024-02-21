$(document).ready(function () {

    function getUsers() {
        fetch('users.json')
            .then(res => res.json())
            .then(data => {
                for (const user of data) {
                    
                        $("#update").append("<ul><li>" + user.id +
                        "</li><li>" + user.nom +
                        "</li><li>" + user.prenom +
                        "</li><li>" + user.mail +
                        "</li></ul>");
                }
            })
    }

     $("#update").click(function(){
         getUsers();
       })
});
