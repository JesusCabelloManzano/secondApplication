(function () {

    let enlaceBorrar = document.getElementById('enlaceBorrar');
    let enlacesBorrar = document.getElementsByClassName('enlaceBorrar');

    for(var i = 0; i < enlacesBorrar.length; i++) {
        enlacesBorrar[i].addEventListener('click', getClassConfirmation);
    }

    if(enlaceBorrar) {
        enlaceBorrar.addEventListener('click', getConfirmation);
    }

    function getConfirmation() {
        let retVal = confirm('¿Seguro que quieres borrar el ticket?');
        if(retVal) {
            var formDelete = document.getElementById('formDelete');
            formDelete.submit();
        }
    }

    function getClassConfirmation(event) {
        let id = event.target.dataset.id;
        let retVal = confirm('¿Seguro que quieres borrar el ticket #' + id + '?');
        if(retVal) {
            var formDelete = document.getElementById('formDelete');
            formDelete.action += '/' + id;
            formDelete.submit();
        }
        else{
            abc();
            abc(1, 2, 3, 4);
        }
    }

    function abc(){
        console.log(arguments.length);
        console.log(arguments);
    }
})();