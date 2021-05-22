function connectUser() {
    $.ajax({
        type: "post",
        url: "connexion.php",
        data: $("#formLogins").serialize(),
        success: function(data) {
            if (data != "email ou mot de passe incorrect") window.location.replace("modifier.php");
            else alert(data);
        }
    })
}