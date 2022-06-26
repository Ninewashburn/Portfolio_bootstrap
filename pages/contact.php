<?php ob_start();
require('../utile/formatage.php');
?>

<?php
if (isset($_POST['mail'])) {
    $to = "cenarius63@hotmail.fr";
    $from = $_POST['mail'];
    $object = $_POST['objet'];
    $message = $_POST['message'];
    mail($to, $object, $message, $from);
    ?>
    <div class="alert alert-success" role="alert">
        Message envoyé !
    </div>
    <?php
}
?>

    <div class="container text-center">
        <?php echo formatageTitre("Mes informations personnelles"); ?>
        <!--        <h2 class="m-5 perso_bgBlue text-white rounded-lg p-3">> Mes informations personnelles <</h2>-->
        <table class="table table-borderless">
            <thead>
            <tr>
                <td><img src="../sources/images/contact/tel.png" width="100px" alt=""></td>
                <td><img src="../sources/images/contact/github.png" width="100px" alt=""></td>
                <td><img src="../sources/images/contact/linkedin.png" width="100px" alt=""></td>
                <td><img src="../sources/images/contact/human-booster.png" width="100px" alt=""></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>06 07 65 99 43</td>
                <td><a href="https://github.com/Ninewashburn" target="_blank">GitHub</a></td>
                <td><a href="https://www.linkedin.com/in/renaud-m-063/" target="_blank">LinkedIn</a></td>
                <td><a href="https://humanbooster.com/programmes/formation-backpack-alternance/" target="_blank">Human Booster</a></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="container text-center">
        <?php echo formatageTitre("Formulaire de contact"); ?>
        <!--        <h2 class="m-5 perso_colorBlueLight">> Formulaire de contact <</h2>-->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse mail : </label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="mail"
                       placeholder="Entrez votre mail">
            </div>

            <div class="form-group">
                <label for="objet" class="form-label">Objet : </label>
                <select class="form-select form-select" id="objet" name="objet">
                    <option value="question">Question</option>
                    <option value="remarque">Remarque</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message : </label>
                <textarea class="form-control" id="message" rows="3"
                          name="message" placeholder="Entrez votre message"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
<?php
$content = ob_get_clean();
require "commons/template.php";
?>