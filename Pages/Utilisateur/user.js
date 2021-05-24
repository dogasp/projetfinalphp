function connectUser() {
    $.ajax({
        type: "post",
        url: "connexion.php",
        data: $("#formLogins").serialize(),
        success: function(data) {
            if (data != "email ou mot de passe incorrect") {
                if (data == "2") {
                    window.location.replace("../Admin/Admin.php");
                } else window.location.replace("../../index.php");
            } else alert(data);
        }
    })
}

function saveChanges() {
    $.ajax({
        type: "post",
        url: "ajoutModif.php",
        data: $("#formModif").serialize(),
        success: function(data) {
            alert(data);
            location.reload();
        }
    })
}