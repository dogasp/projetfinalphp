function recupForm() {
    var dataBase = document.getElementById("dataSelect").name;
    var value = document.getElementById("dataSelect").value;
    if (value == "") return;
    $.ajax({
        type: "post",
        url: "detailList.php",
        data: { "db": dataBase, "id": value },
        success: function(data) {
            try {
                document.getElementById("Detail").remove();
            } catch {};
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

function saveChange() {
    $.ajax({
        type: "post",
        url: "save.php",
        data: $("#Detail").serialize(),
        success: function(data) {
            alert(data);
            location.reload();
        }
    })
}

function deleteElement() {
    id = document.getElementById("detailId").value;
    db = document.getElementById("detailDb").value;
    $.ajax({
        type: "post",
        url: "delete.php",
        data: { "db": db, "id": id },
        success: function(data) {
            alert(data);
            location.reload();
        }
    })
}