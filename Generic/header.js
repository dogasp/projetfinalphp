function disconnect() {
    $.ajax({
        type: "post",
        url: "/Generic/disconnect.php",
        data: { "action": "disconnect" },
        success: function(data) {
            alert(data);
            location.reload();
        }
    })
}