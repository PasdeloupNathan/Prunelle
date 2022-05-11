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


<section class="produitAdd">

<h1>Produits</h1>
<div class="formAddProduit row">


    <div class="col-5"></div>
    <div class="col-3 form10">

        <form action="#" method="post">
            <label for="Nom du produit" id="lab11">Nom du produit</label>
            <input type="text" placeholder="Nom du produit" name="nom" required>
            <label for="Code du produit" id="lab11">Code du produit</label>
            <input type="text" placeholder="Code du produit" name="codeproduit" required>
            <label for="prix" id="lab11">Prix du produit</label>
            <input type="text" placeholder="Prix du produit" name="prix">
            <br>
            <input type="hidden" name="affichagenom" value="non"> 
            <input id="inpc4" type="checkbox" value="non" name="affichagenom" onclick='checkboxvalue2();'>
            <label for="affichagenom"> Affichage des noms possible</label>

            <button id="b11" name="produitAdd" type="submit">Enregistrer</button>
        </form>
       

    </div>

</div>
</section>


<?php
        if(isset($_POST['produitAdd'])){
            $nom=$_POST["nom"];
            $codeproduit=$_POST["codeproduit"];
            $affichagenom=$_POST["affichagenom"];
            $prix=$_POST["prix"];

    $stmt = $pdo->prepare("SELECT * FROM produit WHERE codeproduit=?");
    $stmt->execute([$codeproduit]);
    $produits = $stmt->fetch();
    if($produits){
        echo 'Ce produit existe deja<p>';
    }else{
        echo '<script LANGUAGE="javascript">document.location.href="produitList.php"</script>';
 die(produitAdd($nom,$codeproduit,$affichagenom,$prix));
    }
}

?>

<?php template_footer() ?>