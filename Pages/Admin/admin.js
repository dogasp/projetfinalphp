function recupForm() {
    var dataBase = document.getElementById("dataSelect").name;
    var value = document.getElementById("dataSelect").value;
    $.ajax({
        type: "post",
        url: "detailList.php",
        data: { "db": dataBase, "id": value },
        success: function(data) {
            $("#result_data").append(data);
        }
    })
}

function recupChoice() {
    var value = document.getElementById("dataSlect").value;
    $.ajax({
        type: "post",
        url: "detailData.php",
        data: { "id": value },
        success: function(data) {
            try {
                document.getElementById("dataSelect").remove();
                document.getElementById("result_data").remove();
            } catch {};
            $("#listChoice").append(data);
        }
    })
}

function saveChange(btn) {
    var tmp = btn.name.split(",");
    db = tmp[0];
    id = tmp[1];
    $.ajax({
        type: "post",
        url: "save.php",
        data: { "id": id, "db": db },
        success: function(data) {
            location.reload();
        }
    })
}