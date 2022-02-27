<?php
$message = " ";

if (isset($_GET["section"])) {
    switch ($_GET["section"]) {
        case 'accueil':
            include("controller/accueilController.php");
            break;
        case 'qui':
            include("controller/quiController.php");
            break;
        case 'portfolio':
            include("controller/portfolioController.php");
            break;
        case 'contact':
            include("controller/contactController.php");
            break;
        case 'solidarite':
            include("controller/solidariteController.php");
            break;

        default:
            # code...
            break;
    }
} else {
    include("controller/accueilController.php");
}
