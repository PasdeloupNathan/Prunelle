<?php
session_start();

require 'model.php';
$pdo = pdo_connect_mysql();

include 'meta.php';

template_meta('Produits');

if($_SESSION["roles"] == 'admin'){
    template_headerAdmin();
 
}elseif($_SESSION["roles"] == 'notadmin'){

    header("Location: formulaires.php");
}elseif($_SESSION == False){
    header("Location: connect.php");
}

?>
<section class="produitList">

<h1>Produits</h1>


<?php
$test = $pdo->prepare("SELECT * from produit");
$test->execute();
$produit= $test->fetchAll(\PDO::FETCH_ASSOC);
foreach($produit as $produits):
    if ($produits['prix'] == 0){
        $produits['prix'] = '';
        $defprix = 'pas de prix';
    }
    else{
        $defprix = '€';
    }
    

echo
<<<produit
  
    <li > $produits[nom] | $produits[codeproduit] | $produits[prix] $defprix | $produits[affichagenom]  |</li>

produit;

endforeach;


?>


<button id="b10" onclick="window.location.href='./produitAdd.php'">Nouveau</button>
</section>



<?php template_footer() ?>
