<?php
 session_start();
   include 'meta.php';

   template_meta('BDD');

   if($_SESSION["roles"] == 'admin'){
    template_headerAdmin();
 
}elseif($_SESSION["roles"] == 'notadmin'){

    template_headerNotAdmin();
}elseif($_SESSION == False){
    header("Location: connect.php");
}
   ?>

<section class="bddAdd">

<h1>Base de données</h1>

<div class="formBdd row">


    <div class="col-4"></div>
    <div class="col-4 form11">

        <form action="#" method="post" class="row">
            <div class="col-6 form11G">
                <label for="">Code école</label>
                <input type="text">
                <label for="">Date PDV</label>
                <input type="text">
                <label for="">Date PDV groupe</label>
                <input type="text">
                <label for="">Genre</label>
                <select name="" id="">
                    <option value="groupscolaire">Groupe scolaire</option>
                </select>
                <label for="">Raison sociale</label>
                <input type="text">
                <label for="">Ville</label>
                <input type="text">
            </div>
            <div class="col-6 form11D">
                <label for="">Email</label>
                <input type="text">
                <label for="">Adresse</label>
                <input type="text">
                <label for="">Code postal</label>
                <input type="text">
                <label for="">Téléphone</label>
                <input type="text">
                <label for="">Direction</label>
                <input type="text">
                <label for="">Nombre d'élèves</label>
                <input type="text">
            </div>
        </form>
        <button id="b12">Enregistrer</button>

    </div>

</div>

</section>

</body>

</html>

<?php template_footer() ?>
