<?php

function template_meta($title) {
    echo<<<EOT
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/prunelle.css">
    </head>

    <body>
EOT;
}


function template_header() {
    echo<<<EOT
    <header class="row align-items-center ">

        <a href="./formulaires.php" class="col-2">Formulaire</a>
        <a href="./bdd.php" class="col-1">BDD</a>
        <a href="./affichage.php" class="col-1">Affichage</a>
        <a href="./factures.php" class="col-1">Factures</a>
        <a href="./ficheecoles.php" class="col-1">Fiches écoles</a>
        <a href="./enregcommande.php" class="col-2">Enregistrement des commandes</a>
        <a href="./admin.php" class="col-2">Administrateur</a>
        <button class="col-2" onclick="location.href='./deco.php'" >Se déconnecter</button>
 
    </header>

    
EOT;
}

function template_headerEmpty($title) {
    echo<<<EOT

    <header>


    </header>

    

EOT;
}

function template_footer(){
    echo<<<EOT

    <footer>
        <script src="../js/index.js"></script>
    </footer>
    
    </body>

    </html>
EOT;
}

?>

