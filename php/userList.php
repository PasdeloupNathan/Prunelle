<?php
 session_start();

 require 'model.php';
 $pdo = pdo_connect_mysql();

include 'meta.php';

template_meta('Utilisateur');

template_header('Utilisateur');

$test = $pdo->prepare("SELECT * from user");
$test->execute();
$user= $test->fetchAll(\PDO::FETCH_ASSOC);
foreach($user as $users)
?>
<section class="userList">

<h1>Utilisateurs</h1>

<p><?= $users['username'];?> <?= $users['mail'];?> </p>

<button id="b9" onclick="window.location.href='./userCreate.php'">Nouveau</button>
</section>

</body>

</html>

<?php

?>