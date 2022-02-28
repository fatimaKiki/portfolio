<?php
$visible = true;
$message = "";

if (isset($_POST['form_nom'], $_POST['form_prenom'])) {
    $nom = $_POST["form_nom"];
    $prenom = $_POST["form_prenom"];

    if (($nom != "") && ($prenom != "")) {
        $message = "<div class='reponseSubmit'>
                        <div class='centerSubmit purple'>
                        <span>Merci  $nom $prenom</span>
                        <p>Votre message est : ... </p>
                        <p>Fatima vous remercie de votre intérêt et vous contactera très prochainement !</p>
                        </div>
                    </div>";

        $visible = false;
    } else {
        $message = "Veuillez complétez tous les champs svp !";
    }
}

?>

<div class="container-fluid qui blue ">
    <div class="row justify-content-center">
        <div class="offset-2 col text_qui">
            <h1>Contacter</h1>
            <img class="blob_title" src="public/images/blob_title.svg" alt="">
        </div>
        <div class="plante2" id="animation_container">
            <canvas id="canvas" style=" display: block; background-color:rgba(255, 255, 255, 0.00);"></canvas>
            <div id="dom_overlay_container">
            </div>
        </div>

        <?php
        if ($visible) :
        ?>
            <div class=" form justify-content-center">
                <form method="POST" action="#">
                    <div class="mb-2">
                        <label for="form_nom" class="form-label">Nom</label>
                        <input type="text" name="form_nom" class="form-control" id="form_nom" placeholder="Nom">
                    </div>
                    <div class="mb-2">
                        <label for="form_prenom" class="form-label">Prénom</label>
                        <input type="text" name="form_prenom" class="form-control" id="form_prenom" placeholder="Prénom">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="bouton_qui" type="submit">Envoyer</button>
                    </div>
                    <div class="overlay2">
                        <div class="text2">
                            <a class="contact_mail" href="mailto:elharraoui.fatima@hotmail.com"> Pour m'envoyer un email<br>Cliquez ici</a>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
</div>
<?php
        endif;
?>
<?= $message; ?>