<div class="menu">
    <script src="/Generic/header.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <ul id="nav">
        <li><a href="/index.php">Accueil</a></li>
        <li><a href="/Pages/Event/Event.php">Events</a></li>
        <li><a href="/Pages/Magasin/Magasin.php">Magasin</a></li>
        <?php
            if ($_SESSION["USER"] == -1){
                echo "<li><a href='/Pages/Utilisateur/User.php'>Se connecter</a></li>";
            }
            else{
                $users = explode("\n", file_get_contents($_SERVER['DOCUMENT_ROOT']."/BDD/user.txt", true)); #extraction des utilisateurs
                $list = explode("|", $users[$_SESSION["USER"]]);
                if ($list[8] == 2){
                    echo '<li><a href="/Pages/Admin/Admin.php">Administration</a></li>';
                }
                else{
                    echo '<li><a href="/Pages/Utilisateur/modifier.php">Profil</a></li>';
                }
                echo "<li><a href='' onclick='disconnect()'>Se deconnecter</a></li>";
            }
        ?>
        </ul>
    </li>
</div>