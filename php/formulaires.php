<?php
    session_start();

    include 'meta.php';

    template_meta('Formulaires');

    if($_SESSION["roles"] == 'admin'){
        template_headerAdmin();
     
    }elseif($_SESSION["roles"] == 'notadmin'){
    
        template_headerNotAdmin();
    }elseif($_SESSION == False){
        header("Location: connect.php");
    }
?>
    <section class="formulaires align-items-center">

        <H1>Formulaires</H1>

        <div class="content1 row">

            <div class="inside1 col-3">
                <h3>Prise de vue</h3>
                <button id="b1" onclick="window.location.href='./formulairePDV.php'">Nouveau</a></button>
                <br>
                <select name="formulaires1" id="formulaires1"></select>
                <div class="row buttonRow">
                    <div class="col-6 buttonleft">
                        <button id="b2">Modifier</button>
                    </div>
                    <div class="col-6 buttonright">
                        <button id="b3">Effacer</button>
                    </div>
                </div>

            </div>
            <div class="inside1 col-3">
                <h3>Outpost</h3>

                <button id="b1" onclick="window.location.href='./formulaireOutpost.php'">Nouveau</button>
                <br>
                <select name="formulaires2" id="formulaires2"></select>

                <div class="row buttonRow">
                    <div class="col-6 buttonleft">
                        <button id="b2">Modifier</button>
                    </div>
                    <div class="col-6 buttonright">
                        <button id="b3">Effacer</button>
                    </div>
                </div>
            </div>
            <div class="inside1 col-3">
                <h3>Empocheur</h3>
                <button id="b1" onclick="window.location.href='./formulaireEmpocheur.php'">Nouveau</button>
                <br>
                <select name="formulaires3" id="formulaires3"></select>

                <div class="row buttonRow">
                    <div class="col-6 buttonleft">
                        <button id="b2">Modifier</button>
                    </div>
                    <div class="col-6 buttonright">
                        <button id="b3">Effacer</button>
                    </div>
                </div>
            </div>
            <div class="inside1 col-3">
                <h3>Livraison</h3>

                <button id="b1" onclick="window.location.href='./formulaireLivraison.php'">Nouveau</button>
                <br>
                <select name="formulaires4" id="formulaires4"></select>

                <div class="row buttonRow">
                    <div class="col-6 buttonleft">
                        <button id="b2">Modifier</button>
                    </div>
                    <div class="col-6 buttonright">
                        <button id="b3">Effacer</button>
                    </div>
                </div>
            </div>
        </div>
        <button id="b4">Afficher</button>

    </section>

    <?php template_footer() ?>
