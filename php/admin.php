<?php
   include 'meta.php';

   template_meta('Administrateur');

   template_header('Admin');
?>

<section class="admin">

<h1>Espace administrateur</h1>

<div class="row content7">
    <h2 class="col-3">Codes outpost</h2>
    <h2 class="col-3" onclick="window.location.href='./produitList.php'">Produits</h2>
    <h2 class="col-3" onclick="window.location.href='./userList.php'">Comptes utilisateurs</h2>
    <h2 class="col-3">Tableau Comptable</h2>
</div>


</section>

<?php

?>


<?php template_footer() ?>
