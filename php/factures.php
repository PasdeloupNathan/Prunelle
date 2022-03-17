<?php
   include 'meta.php';

   template_meta('Factures');

   template_header('factures');
?>

<section class="factures">

        <h1>Factures</h1>

        <div class="content4 row">

            <div class="col-5"></div>
            <div class="col-3 form4">

                <form action="#" method="post">
                    <label id="lab4" for="code">Code de l'école</label>
                    <input id="inp4" type="text" placeholder="Code">
                    <label id="lab4" for="">Type de Pdv</label>
                    <select name="" id="">
                        <option value="individuel">Individuel</option>
                    </select>
                    <br>
                    <input id="inpc" type="checkbox" checked>
                    <label id="lab5" for="Auto">A partir des fiches</label>
                    <br>
                    <input id="inpc" type="checkbox">
                    <label id="lab5" for="notAuto">Manuellement</label>

                </form>
                <button id="b5">Générer la facture</button>

            </div>

        </div>

    </section>

<?php

?>