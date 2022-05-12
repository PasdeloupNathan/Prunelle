function checkboxvalue() {
    document.getElementById("inpc3").value = document.getElementById("inpc3").checked ? 'admin' : 'notadmin';

    console.log(document.getElementById("inpc3").value);
}


function checkboxvalue2() {
    document.getElementById("inpc4").value = document.getElementById("inpc4").checked ? 'oui' : 'non';
    console.log(document.getElementById("inpc4").value);
}

// const form = document.querySelector('form');
// console.log(form);

// form.addEventListener('submit', function(e) {
//     let inputval = document.getElementById('inputjs').value;
//     let inputval2 = document.getElementById('inputjs2').value;
//     let inputval3 = document.getElementById('inputjs3').value;

//     console.log(inputval);
//     console.log(inputval2);
//     console.log(inputval3);


//     if (inputval == '' || inputval2 == '' || inputval3 == '') {
//         document.getElementById('error').textContent = "Tout les champs ne sont pas remplis";
//         e.preventDefault();
//         window.history.back();
//         console.log('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa')
//     }
// })