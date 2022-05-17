console.log(window.location.pathname);

if (window.location.pathname == '/Prunelle/php/userCreate.php') {

    function checkboxvalue() {
        document.getElementById("inpc3").value = document.getElementById("inpc3").checked ? 'admin' : 'notadmin';

        // console.log(document.getElementById("inpc3").value);
    }
}

if (window.location.pathname == '/Prunelle/php/produitAdd.php') {

    function checkboxvalue2() {
        document.getElementById("inpc4").value = document.getElementById("inpc4").checked ? 'oui' : 'non';
        // console.log(document.getElementById("inpc4").value);
    }
}


if (window.location.pathname == '/Prunelle/php/intervenantCreate.php') {

    const form = document.querySelector('form');
    // console.log(form);

    form.addEventListener('submit', function(event) {
        let inputval = document.getElementById('inputjs').value.trim();
        let inputval2 = document.getElementById('inputjs2').value.trim();
        let inputval3 = document.getElementById('inputjs3').value.trim();

        console.log(inputval);
        console.log(inputval2);
        console.log(inputval3);

        if (inputval == null || inputval == "", inputval2 == null || inputval2 == "", inputval3 == null || inputval3 == "") {
            document.getElementById('error').textContent = "Tout les champs ne sont pas remplis";
            event.preventDefault();
        }


    })
}

if (window.location.pathname == '/Prunelle/php/userCreate.php') {

    const form = document.querySelector('form');


    form.addEventListener('submit', function(event) {
        let inputval4 = document.getElementById('inputjs4').value.trim();
        let inputval5 = document.getElementById('inputjs5').value.trim();

        console.log(inputval4);
        console.log(inputval5);

        if (inputval4 == null || inputval4 == "", inputval5 == null || inputval5 == "") {
            document.getElementById('error').textContent = "Tout les champs ne sont pas remplis";
            event.preventDefault();
        }


    })
}