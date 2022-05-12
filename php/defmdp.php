
   <?php
    session_start();
   include 'meta.php';

   template_meta('Administrateur');

   template_headerEmpty('Admin');
?>

<section class="defmdp align-items-center">

<H1>Définition du mot de passe</H1>

<div class="row form">
    <div class="col-4"></div>
    <form action="#" method="post" class="col-4">
        <label for="id">Mot de passe</label>
        <div class="input-group">
            <input type="Id" placeholder="Identifiant" name="loginId" />
        </div>
        <label for="password">Confirmation mot de passe</label>
        <div class="input-group">
            <input type="password" placeholder="Mot de passe" name="loginPassword" />
        </div>
        <button id="submit" type="submit" class="login-button">Enregistrer</button>
    </form>
</div>
</section>


<?php template_footer() ?>
