<?php
 session_start();

 require 'model.php';
 $pdo = pdo_connect_mysql();

include 'meta.php';

template_meta('Utilisateur');

if($_SESSION["roles"] == 'admin'){
    template_headerAdmin();
 
}elseif($_SESSION["roles"] == 'notadmin'){

    header("Location: formulaires.php");
}elseif($_SESSION == False){
    header("Location: connect.php");
}
?>

<section class="userList">

    <h1>Utilisateurs</h1>

<?php
$test = $pdo->prepare("SELECT * from user");
$test->execute();
$user= $test->fetchAll(\PDO::FETCH_ASSOC);
foreach($user as $users):echo
<<<user
  
    <li > $users[username] | $users[mail] | $users[roles]</li>

user;
endforeach; ?>


<button id="b9" onclick="window.location.href='./userCreate.php'">Nouveau</button>
</section>



<?php template_footer() ?>
