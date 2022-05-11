<?php
    session_start();

    require 'model.php';
    $pdo = pdo_connect_mysql();

    include 'meta.php';

    template_meta('Administrateur');

    template_headerEmpty('Admin');
?>


<section class="connexion align-items-center">

<H1>Connexion</H1>

<div class="row form">
    <div class="col-4"></div>
    <form action="#" method="post" class="col-4">
        <label for="id">Identifiant</label>
        <div class="input-group">
            <input type="Id" placeholder="Identifiant" name="mail" />
        </div>
        <label for="password">Mot de passe</label>
        <div class="input-group">
            <input type="password" placeholder="Mot de passe" name="password" />
        </div>
        <button id="submit bc" type="submit" class="login-button" name="connexion">Se connecter</button>
    </form>
</div>
</section>

<?php
        if(isset ($_POST['connexion'])){
           $mail=$_POST["mail"];
           $password=$_POST["password"];
        if($mail!= '' AND $password != ''){
            $test = $pdo->prepare("select * from user where mail = ?");
            $test->execute([$mail]);
            $user= $test->fetchAll(\PDO::FETCH_ASSOC);
            foreach($user as $users){
                var_dump($users);
                    //déclaration data
                if($users['password']==$password){
                    $_SESSION['roles']=$users['roles'];
                    $_SESSION['username']=$users['username'];
                    $_SESSION['password']=$users['password'];
                    $_SESSION['id']=$users['id'];

                    echo '<script LANGUAGE="javascript">document.location.href="formulaires.php"</script>';
                }else{
                    echo '<p>Vos information sont incorrect<p>';
                }

        }

        }

    }
?>

<?php template_footer() ?>
