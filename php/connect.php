<?php
   include 'meta.php';

   template_meta('Administrateur');

   template_headerEmpty('Admin');
?>


<section class="connexion align-items-center">

<H1>Connexion</H1>

<div class="row form">
    <div class="col-4"></div>
    <form action="#" method="post" class="col-4">
        <label for="id">Identifiant</label>
        <div class="input-group">
            <input type="Id" placeholder="Identifiant" name="loginId" />
        </div>
        <label for="password">Mot de passe</label>
        <div class="input-group">
            <input type="password" placeholder="Mot de passe" name="loginPassword" />
        </div>
        <button id="submit bc" type="submit" class="login-button">Se connecter</button>
    </form>
</div>
</section>

<?php 
?>