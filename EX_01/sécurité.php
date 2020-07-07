<?php

if ($_POST["password"]=="2020"){
    session_start();
    $_SESSION["id"]=$_POST["login"];
    setcookie("id", $_SESSION ["id"]);
    header ('Location: mini-site-routing.php?page=1');

}
else {

echo"<p>Mauvais couple identifiant / mot de passe.</p>";
echo "<a href= mini-site-routing.php?page=connexion> lien connexion </a>";

}
?>
