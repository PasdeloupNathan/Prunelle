<?php

include 'meta.php';

template_meta('Produits');

template_header('Produits');

?>


<section class="produitAdd">

<h1>Produits</h1>
<div class="formAddProduit row">


    <div class="col-5"></div>
    <div class="col-3 form10">

        <form action="#" method="post">
            <label for="nomproduit" id="lab11">Nom du produit</label>
            <input type="text" placeholder="Nom du produit">
            <label for="codeproduit" id="lab11">Code du produit</label>
            <input type="text" placeholder="Code du produit">
            <label for="tailleproduit" id="lab11">Taille</label>
            <input type="text" placeholder="Taille">
            <br>
            <input id="inpc4" type="checkbox">
            <label for="admin">Affichage des noms possible</label>


        </form>
        <button id="b11">Enregistrer</button>

    </div>

</div>
</section>

</body>

</html>



<?php
?>