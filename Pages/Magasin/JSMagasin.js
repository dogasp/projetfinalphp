function ajouterOnClick() {

    var dest = document.getElementById("fct"); //on se place dans ID source
    var list = dest.getElementsByClassName("article"); //on se place dans ID source et on recupere tout les elements class
    //var list2 = dest.getElementsByName("name");
    for (var i = 0; i < list.length; i++) {
        list[i].setAttribute("onclick", "deplacer(this)"); //on ajoute un attribut onclick qui lance la function deplacer
        list[i].setAttribute("class", "noselect"); //on ajoute une class nomée noselect
    }
}

let total = 0;

function deplacer(article) {

    var id = article.getAttribute("id");
    var panier = document.getElementById('panier');
    if (id == "n0") {
        addTexte('<div> <br> Kit Sportswear : 35 € <button class="35" class="article" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 35;
    }
    if (id == "n1") {
        addTexte('<div> <br> Kit Sportswear Veste Zippée : 35 € <button class="35" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 35;
    }
    if (id == "n2") {
        addTexte('<div> <br> Kit Training : 20 € <button class="20" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 20;
    }
    if (id == "n3") {
        addTexte('<div> <br> Veste : 20 € <button class="20" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 20;
    }
    if (id == "n4") {
        addTexte('<div> <br> Veste Zippée : 20 € <button class="20" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 20;
    }
    if (id == "n5") {
        addTexte('<div> <br> Jogging : 20 € <button class="20" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 20;
    }
    if (id == "n6") {
        addTexte('<div> <br> Maillot Training : 15 € <button class="15" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 15;
    }
    if (id == "n7") {
        addTexte('<div> <br> Short Training : 10 € <button class="10" style="width: 25px; height: 25px;" onclick="supprimerpanier(this)">X</button></div>')
        total = total + 10;
    }
    panier.innerHTML = total + ' €';
    return total;
}

function addTexte(text) {
    artc = document.getElementById("ARTC");
    artc.innerHTML += text;
}

function supprimerpanier(ELT) {
    ELT.parentElement.remove();
}

function Formulaire() {
    var Prix = total;
    var prix = document.getElementById('prix');
    prix.innerHTML = Prix + ' €';

    var birthdate = document.getElementById("list"); //on se place dans ID list 
    for (var i = 1921; i < 2021; i++) { //probleme pour la boucle for : année de naissance
        var opt = document.createElement('option'); //on crée un une balise option
        opt.text = i; //avec comme texte i
        opt.value = i; //avec comme value i
        birthdate.appendChild(opt);
    }

    var checkbox = document.getElementById("mycheck"); //case a décocher de l'adresse de facturation
    var checkbox2 = document.getElementById("mycheck2"); //case a cocher pour l'adresse mail
    var elementemail = document.getElementById("email"); //input de l'email
    var elementfactu = document.getElementById("factu"); //input de la facture

    if (checkbox.checked == false) { //Si la case est décoché alors 
        factu.style.display = "block"; //on affiche la textarea pour entrer l'adresse de facturation
        elementfactu.setAttribute("required", "true"); //on ajoute l'attribut required à ce textarea 
    } else { //si la case est coché ou recoché
        factu.style.display = "none"; //on cache le textarea de l'adresse de facturation
        elementfactu.removeAttribute("required"); //on enleve l'attribut required pour pas créer de conflits avec le submit
    }

    if (checkbox2.checked == true) { //si la case est coché alors
        email.style.display = "block"; //on affiche la textarea 
        email2.style.display = "block"; //on affiche le label
        elementemail.setAttribute("required", "true"); //on ajoute l'attribut required à la zone d'email
    } else { //si la case est décoché
        email.style.display = "none"; //on cache la case pour entrer l'email
        email2.style.display = "none"; //on cache le label email
        elementemail.removeAttribute("required"); //on enleve l'attribut required pour pas créer de conflits avec le submit
    }
}