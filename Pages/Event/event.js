function souscrireEvent(btn) {
    var idEvent = btn.name;
    $.ajax({
        type: "post",
        url: "AddEvent.php",
        data: "id=" + idEvent,
        dataType: "html",
        success: function(data) {
            alert(data);
            location.reload();
        }
    })
}
