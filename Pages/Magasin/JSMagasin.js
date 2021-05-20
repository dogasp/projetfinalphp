let total = 0;

let ids = "";

function panier(button) {
    //fonction pour ajouter un article au panier
    tmp = button.name.split(",");
    prix = tmp[0];
    text = tmp[1].replaceAll("_", " ");
    id = button.id;
    document.getElementById("panierText").innerHTML += "<div>" + text + "    <button type='button' name ='" + prix + "," + id + "' onclick='viderPanier(this)' style='width:20px;height:20px;'>X</button>" + "</div>";
    ids += id;
    total += parseInt(prix);
    document.getElementById("panierPrice").innerText = total;
    document.getElementById("panierButton").disabled = false;
}

function viderPanier(button) {
    //fonction pour retirer un element du panier
    tmp = button.name.split(",");
    prix = tmp[0];
    id = tmp[1];
    total -= parseInt(prix);
    ids.replace(id, "");
    button.parentNode.remove();
    document.getElementById("panierPrice").innerText = total;
    if (total == 0) document.getElementById("panierButton").disabled = true;
}

function validerPanier() {
    //remplissage des valeurs avant de les transmettre au paiement.
    document.getElementById("ids").value = ids;
    document.getElementById("price").value = total;

    document.getElementById("FormPanier").submit();
}