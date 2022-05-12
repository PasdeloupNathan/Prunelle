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

<section class="userList">

    <h1>Intervenant</h1>

<?php
$test = $pdo->prepare("SELECT * from intervenant");
$test->execute();
$intervenant= $test->fetchAll(\PDO::FETCH_ASSOC);
foreach($intervenant as $intervenants):echo
<<<user
  
    <li > $intervenants[prenom] | $intervenants[nom] | $intervenants[salaire] |</li>

user;
endforeach; ?>


<button id="b9" onclick="window.location.href='./intervenantCreate.php'">Nouveau</button>
</section>



<?php template_footer() ?>
