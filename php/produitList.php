<?php
session_start();

require 'model.php';
$pdo = pdo_connect_mysql();

include 'meta.php';

template_meta('Produits');

template_header('Produits');

?>
<section class="produitList">

<h1>Produits</h1>


<?php
$test = $pdo->prepare("SELECT * from produit");
$test->execute();
$produit= $test->fetchAll(\PDO::FETCH_ASSOC);
foreach($produit as $produits):echo
<<<produit
  
    <li > $produits[nom] | $produits[codeproduit] | $produits[taille] | $produits[affichagenom]</li>

produit;
endforeach; ?>


<button id="b10" onclick="window.location.href='./produitAdd.php'">Nouveau</button>
</section>

</body>

</html>

<?php

?>