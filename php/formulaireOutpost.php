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
<section class="OutpostForm align-items-center">

    <H1>Formulaires Outpost</H1>

    <div class="formContent2 row">

        <div class="col-5"></div>
        <div class="formOutpost col-3">

            <form action="#" method="post" class="row">

                <label for="codeecole" >Code de l'école</label>
                <input type="text"  placeholder="Code de l'école">
                <label for="nomecole" >Nom de l'école</label>
                <input type="text"  placeholder="Nom de l'école">
                <label for="ville" >Ville</label>
                <input type="text" placeholder="Ville">
                <label for="datePDV" >Date création job</label>
                <input type="date">
                <label for="createurjob" >Nom du créateur du Job </label>
                <select name="" "></select>
                <label for="typejob" >Type de Job </label>
                <select name="">
                    <option value="Indiv+groupe ou indiv seulement">Indiv+groupe ou indiv seulement</option>
                    <option value="Groupe seulement">Groupe seulement</option>
                </select>
                <button type="submit">Enregistrer</button>

            </form>

        </div>

    </div>

</section>

        <?php template_footer() ?>
