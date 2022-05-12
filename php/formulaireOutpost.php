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
    <section class="formPDV align-items-center">

        <H1>Formulaires Outpost</H1>
        </section>

        <?php template_footer() ?>
