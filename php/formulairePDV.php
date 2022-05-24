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
     <section class="formPDV">

<h1>Formulaire Prise De Vue</h1>

<div class="formContent1">


    <div class="form7">

        <form action="#" method="post" class="row">

            <!-- COL 1 -->

            <div class="col-2">

            <label for="codeecole" id="lab9">Code de l'école</label>
            <input type="text" id="inp8" placeholder="Code de l'école">
            <label for="photographename" id="lab9">Nom du photographe 1</label>
            <select name="" ></select>
            <label for="photographename" id="lab9">Nom du photographe 2</label>
            <select name="" "></select>
            <label for="duréePDV" id="lab9">Durée de PDV en heure</label>
            <input type="time" id="inp8">
            <label for="datePDV" id="lab9">Date PDV</label>
            <input type="date" id="inp8">

            </div>

            <!-- COL 2 -->

            <div class="col-2">  

            <label for="nomecole" id="lab9">Nom de l'école</label>
            <input type="text" id="inp8" placeholder="Nom de l'école">
            <label for="ville" id="lab9">Ville</label>
            <input type="text" id="inp8" placeholder="Ville">
            <label for="frequence" id="lab9">Fréquence</label>
            <select name="" >
                <option value="D1">D1</option>
                <option value="D1/D2">D1/D2</option>
                <option value="D1/D1">D1/D1</option>
                <option value="D2">D2</option>
                <option value="D2/D2">D2/D2</option>
            </select>
            <label for="nbreleve" id="lab9">Nombre d'élève</label>
            <input type="number" id="inp8" placeholder="Nombre d'élève">
            <label for="nbrclasse" id="lab9">Nombre de classe</label>
            <input type="number" id="inp8" placeholder="Nombre de classe">

            </div>

            <!-- COL 3 -->

            <div class="col-2">

            <label for="jdecharge" id="lab9">jour de décharge</label>
            <select name="" multiple >
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="Aucun">Aucun</option>
            </select>
            <label for="typePDV" id="lab9">Type de PDV</label>
            <select name="" id="">
                <option value="Photo individuelle + groupe ou indiv seul">Photo individuelle + groupe ou indiv seul</option>
                <option value="Photo groupe seule">Photo groupe seule</option>
            </select>
            <label for="ambianceprof" id="lab9">Ambiance et enseignant</label>
            <select name="" multiple>
                <option value="Photo ambiance">Photo ambiance</option>
                <option value="Photo individuelle enseignant">Photo individuelle enseignant</option>
                <option value="Photo groupe enseignant">Photo groupe enseignant</option>
            </select>
            <label for="bdd" id="lab9">Base de donnée</label>
            <select name="">
                <option value="oui">oui</option>
                <option value="oui">non</option>
            </select>
            <label for="groupeprenom" id="lab9">Photo Groupe : Prénom</label>
            <select name="">
                <option value="oui">oui</option>
                <option value="oui">non</option>
            </select>

            </div>

            <!-- COL 4 -->
            
            <div class="col-2">

            <label for="ideaclasse" id="lab9">Idéaclasse donné à l'école</label>
            <select name="" >
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select>
            <label for="theme" id="lab9">thèmes</label>
            <select name="" >
                <option value="ecolo">ecolo</option>
                <option value="table">table</option>
                <option value="mains">mains</option>
                <option value="stand">stand</option>
            </select>
            <label for="typevente" id="lab9">Type de vente</label>
            <select name=""> 
                <option value="Vente direct">Vente direct</option>
                <option value="Bon de commande">Bon de commande</option>
                <option value="Internet">Internet</option>
                <option value="Semi-Direct">Semi-Direct</option>
            </select>
            <label for="typeempochage" id="lab9">Type d'empochage</label>
            <select name="" multiple>
                <option value="Pochette plastique">Pochette plastique</option>
                <option value="Cartonnage">Cartonnage</option>
                <option value="Album tous les élèves">Album tous les élèves</option>
                <option value="Album nouveaux arrivants">Album nouveaux arrivants</option>
            </select>
            <label for="planchepocheteindiv" id="lab9">Planches pochette individuelle</label>
            <select name="" multiple>
                <option value="Multi avec marque-page">Multi avec marque-page</option>
                <option value="Double 9x13, 5x7 et 8 identités">Double 9x13, 5x7 et 8 identités</option>
                <option value="Portrait couleur">Portrait couleur</option>
                <option value="Portrait noir et blanc">Portrait noir et blanc</option>
                <option value="Double 13x18 (couleur et NB)">Double 13x18 (couleur et NB)</option>
                <option value="Quatre 9x13">Quatre 9x13</option>
                <option value="Calendrier">Calendrier</option>
                <option value="Cartes de voeux">Cartes de voeux</option>
                <option value="13x18 et identités">13x18 et identités</option>
                <option value="Photo de classe">Photo de classe</option>
                <option value="Photo de classe rigolo">Photo de classe rigolo</option>
                <option value="Photo toute l'école">Photo toute l'école</option>
                <option value="Montage trombi groupe">Montage trombi groupe</option>
                <option value="Page souvenir">Page souvenir</option>
                <option value="">Autre :</option>
            </select>

            </div>

             <!-- COL 5 -->

            <div class="col-2">

            <label for="prixecolepocheteindiv" id="lab9">Prix école pochette indiv</label>
            <input type="number" id="inp8" placeholder="Prix">
            <label for="prixparentpocheteindiv" id="lab9">Prix parents pochette indiv</label>
            <input type="number" id="inp8" placeholder="Prix">
            <label for="planchepocheteindiv" id="lab9">Planches pochette individuelle</label>
            <select name="" multiple>
                <option value="Multi avec marque-page">Multi avec marque-page</option>
                <option value="Double 9x13, 5x7 et 8 identités">Double 9x13, 5x7 et 8 identités</option>
                <option value="Portrait couleur">Portrait couleur</option>
                <option value="Portrait noir et blanc">Portrait noir et blanc</option>
                <option value="Double 13x18 (couleur et NB)">Double 13x18 (couleur et NB)</option>
                <option value="Quatre 9x13">Quatre 9x13</option>
                <option value="Calendrier">Calendrier</option>
                <option value="Cartes de voeux">Cartes de voeux</option>
                <option value="13x18 et identités">13x18 et identités</option>
                <option value="Page souvenir">Page souvenir</option>
                <option value="">Autre :</option>
            </select>
            <label for="prixparentpochetefratrie" id="lab9">Prix école pochette fratrie</label>
            <input type="number" id="inp8" placeholder="Prix">
            <label for="prixparentpochetefratrie" id="lab9">Prix parents pochette fratrie</label>
            <input type="number" id="inp8" placeholder="Prix">
            

            </div>

            <!-- COL 5 -->

            <div class="col-2">

            <label for="prixecoleplancheseule" id="lab9">Prix école planche seule</label>
            <input type="number" id="inp8" placeholder="Prix">
            <label for="prixparentplancheseule" id="lab9">Prix parents planche seule</label>
            <input type="number" id="inp8" placeholder="Prix">
            <label for="compopochetegroupe" id="lab9">Compo pochette groupe</label>
            <input type="text" id="inp8" placeholder="Compo pochette">
            <label for="prixecolepochetegroupe" id="lab9">Prix école pochette groupe</label>
            <input type="number" id="inp8" placeholder="Prix">
            <label for="prixparentpochetegroupe" id="lab9">Prix parents pochette groupe</label>
            <input type="number" id="inp8" placeholder="Prix">

            </div>

            <!-- `commentairepdv` varchar(400) NULL  -->
            
            <button id="b8" type="submit">Enregistrer</button>
        </form>
        
        

    </div>

</div>

</section>

<?php template_footer() ?>
