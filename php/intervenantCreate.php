<?php
    session_start();
    
    require 'model.php';
    $pdo = pdo_connect_mysql();

    include 'meta.php';

    template_meta('Intervenant');

    if($_SESSION["roles"] == 'admin'){
        template_headerAdmin();
     
    }elseif($_SESSION["roles"] == 'notadmin'){
    
        header("Location: formulaires.php");
    }elseif($_SESSION == False){
        header("Location: connect.php");
    }
?>



    <section class="intervenantCreate">

<h1>Intervenant</h1>

<div class="formAddIntervenant row">


    <div class="col-5"></div>
    <div class="col-3 form13">

        <form action="#" method="POST">
            <label for="prenom" id="lab13">Prenom</label>
            <input type="text" placeholder="Prenom" name="prenom" required>
            <label for="nom" id="lab13">Nom</label>
            <input type="text" placeholder="nom" name="nom" required>
            <label for="salaire" id="lab13">Salaire</label>
            <input type="text" placeholder="Salaire" name="salaire" required>
            <button id="b13" name="intervenantCreate" type="submit"'>Enregistrer</button>
            <p id="error"></p>
        </form>
        

    </div>

</div>

</section>


<?php
    if(isset($_POST['intervenantCreate'])){
        $prenom=$_POST["prenom"];
        $nom=$_POST["nom"];
        $salaire=$_POST["salaire"];
        $stmt = $pdo->prepare("SELECT * FROM intervenant WHERE nom=?");
        $stmt->execute([$nom]);
        $intervenant = $stmt->fetch();
        $stmt2 = $pdo->prepare("SELECT * FROM intervenant WHERE prenom=?");
        $stmt2->execute([$prenom]);
        $intervenant2 = $stmt2->fetch();
        if($intervenant && $intervenant2){
            echo "l'intervant existe deja <p>";
        }else{
            echo '<script LANGUAGE="javascript">document.location.href="intervenantList.php"</script>';
        die(intervenantCreate($prenom,$nom,$salaire));
    }
}




template_footer()
?>
