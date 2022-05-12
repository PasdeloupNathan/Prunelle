<?php
 session_start();
   include 'meta.php';

   template_meta('Formulaires');

   if($_SESSION["roles"] == 'admin'){
    template_headerAdmin();
 
}elseif($_SESSION["roles"] == 'notadmin'){

    template_headerNotAdmin();
}elseif($_SESSION == False){
    header("Location: connect.php");
}
?>
     <section class="formPDV">

<h1>Formulaire Prise De Vue</h1>

<div class="formContent1 row">


    <div class="col-5"></div>
    <div class="col-3 form7">

        <form action="#" method="post">
            <label for="photographename" id="lab9">Nom du photographe 1</label>
            <select name="" id=""></select>
            <label for="photographename" id="lab9">Nom du photographe 2</label>
            <select name="" id=""></select>
            <label for="duréePDV" id="lab9">Durée de PDV en heure</label>
            <input type="text" placeholder="Nombres d'heures">
            <label for="écolename" id="lab9">Nom de l'école</label>
            <input type="text" placeholder="Nom de l'école">
        </form>
        
        <button id="b8">Enregistrer</button>

    </div>

</div>

</section>

<?php template_footer() ?>
