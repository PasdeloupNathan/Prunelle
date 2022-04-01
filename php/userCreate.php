<?php
   include 'meta.php';

   template_meta('Utilisateur');

   template_header('Utilisateur');
?>



    <section class="userCreate">

<h1>Utilisateurs</h1>

<div class="formAddUser row">


    <div class="col-5"></div>
    <div class="col-3 form9">

        <form action="#" method="post">
            <label for="username" id="lab10">Nom d'utilisateurs</label>
            <input type="text" placeholder="Nom d'utilisateurs">
            <label for="mail" id="lab10">Email</label>
            <input type="text" placeholder="Email">
            <br>
            <input id="inpc3" type="checkbox">
            <label for="admin">Administrateur</label>


        </form>
        <button id="b8">Enregistrer</button>

    </div>

</div>

</section>

</body>

</html>
<?php

?>
