<?php
include("view/page/contact.php");

// var_dump('je suis là');
?>
<?php

$message = "";
// var_dump('je suis là2');

if (isset($_POST['form_nom'], $_POST['form_prenom'])) {
    var_dump('je suis là3');

    var_dump($_POST['form_nom']);
    $nom = $_POST["form_nom"];
    $prenom = $_POST["form_prenom"];
    // var_dump('je suis là 4');

    if (($nom != "") && ($prenom != "")) {
        // var_dump('je suis là5');

        $message = "<div class='reponseSubmit'>
                        <div class='centerSubmit purple'>
                        <span>Merci  $nom $prenom</span>
                        <p>Votre message est : ... </p>
                        <p>Fatima vous remercie de votre intérêt et vous contactera très prochainement !</p>
                        </div>
                    </div>";
        var_dump('je suis là6');
    } else {
        $message = "Veuillez complétez tous les champs svp !";
        var_dump('je suis là7');
    }
}

?>
