<?php

session_start();
   include 'meta.php';

   template_meta('Enregistrement des commandes');

   if($_SESSION["roles"] == 'admin'){
    template_headerAdmin();
 
}elseif($_SESSION["roles"] == 'notadmin'){

    template_headerNotAdmin();
}elseif($_SESSION == False){
    header("Location: connect.php");
}
?>

<section class="enregcommande">

<h1>Enregistrement des commandes</h1>

<div class="content6 row">


    <div class="col-5"></div>
    <div class="col-3 form6">

        <form action="#" method="post">
            <label id="lab7" for="code">Code de l'école</label>
            <input id="inp5" type="text" placeholder="Code">
            <label id="lab7" for="">Type de commandes</label>
            <select name="" id="">
                    <option value="individuel">Individuel</option>
                </select>
            <br>
            <input id="inpc2" type="checkbox" checked>
            <label id="lab8" for="Auto">scan des bons de commandes</label>
            <br>
            <input id="inpc2" type="checkbox">
            <label id="lab8" for="notAuto">Tableau</label>
            <br>
            <input id="inpc2" type="checkbox">
            <label id="lab8" for="notAuto">Manuellement</label>
        </form>
        <button id="b7">Importation</button>

    </div>

</div>

</section>

<?php template_footer() ?>
