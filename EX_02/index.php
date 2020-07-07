<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
$page_title = "";
include ("header.php");
?>
    <?php

    if(isset($_GET['page'])){
        switch (strtolower($_GET['page'])) {
            case 'accueil':
                include("vitrine-accueil.php");
             break;
            case 'programme':
                include("vitrine-programme.php");
            break;
            case 'contact':
                include("vitrine-cont.php");
            break;
            case 'contact-form':
                include("contact-form.php");
            break;

            default :
                include("404.php");
            break;
        }
    }
    
    
    ?>

<?php
include ("footer.php");
?>


</body>
</html>

