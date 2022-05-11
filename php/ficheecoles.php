<?php
   include 'meta.php';

   template_meta('Fiches écoles');

   if($_SESSION["roles"] == 'admin'){
    template_headerAdmin();
 
}elseif($_SESSION["roles"] == 'notadmin'){

    template_headerNotAdmin();
}elseif($_SESSION == False){
    header("Location: connect.php");
}
?>

<section class="ficheecoles">

<h1>Fiches écoles</h1>
<div class="content5 row">
    <div class="col-5"></div>
    <div class="form5 col-3">
        <form action="#" method="post">
            <label id="lab6" for="codeecole">Code de l'école</label>
            <input id="inp5" type="text" placeholder="Code de l'école">
        </form>
        <button id="b6">Afficher</button>
    </div>
</div>

</section>

<?php template_footer() ?>
