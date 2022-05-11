<?php
    session_start();
    
    require 'model.php';
    $pdo = pdo_connect_mysql();

    include 'meta.php';

    template_meta('Utilisateur');

    template_header('Utilisateur');
?>



    <section class="userCreate">

<h1>Utilisateurs</h1>

<div class="formAddUser row">


    <div class="col-5"></div>
    <div class="col-3 form9">

        <form action="#" method="POST">
            <label for="username" id="lab10">Nom d'utilisateurs</label>
            <input type="text" placeholder="Nom d'utilisateurs" name="username" required >
            <label for="mail" id="lab10">Email</label>
            <input type="email" placeholder="Email" name="mail" required >
            <br>
            <input type="hidden" name="roles" value="notadmin">
            <input id="inpc3" type="checkbox" value="notadmin" name="roles" onclick='checkboxvalue();'>
            <label for="admin" id="lab10">Administrateur</label>

            <button id="b8" name="userCreate" type="submit">Enregistrer</button>
        </form>
        

    </div>

</div>

</section>


<?php
        if(isset($_POST['userCreate'])){
            $roles=$_POST["roles"];
            $username=$_POST["username"];
            $mail=$_POST["mail"];

    $stmt = $pdo->prepare("SELECT * FROM user WHERE mail=?");
    $stmt->execute([$mail]);
    $users = $stmt->fetch();
    if($users){
        echo 'cette addresse mail est deja utilisé<p>';
    }else{
        echo '<script LANGUAGE="javascript">document.location.href="userList.php"</script>';
 die(userCreate($roles,$username,$mail));
    }
}

// $to = "pasdeloupnathan@gmail.com, ";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: pasdeloupnathan@gmail.com" . "\r\n" .
// "CC: gamee8678@gmail.com";

// mail($to,$subject,$txt,$headers);

template_footer()
?>
