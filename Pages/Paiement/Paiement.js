function pay() {
    $.ajax({
        type: "post",
        url: "confirm.php",
        data: $("#f1").serialize(),
        success: function(data) {
            alert(data);
        }
    })
}