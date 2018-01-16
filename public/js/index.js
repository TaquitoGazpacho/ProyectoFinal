$( document ).ready( function() {
    var altura = parseInt(window.innerHeight) - parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    $('#nav').affix({
        offset: {
            top: altura
        }
    });

    $(function(){
        $(window).scroll(function() {
            var scroll = $(window).scrollTop(); // how many pixels you've scrolled
            var os = $('#nav').offset().top; // pixels to the top of div1
            //var ht = $('#div1').height(); // height of div1 in pixels
            // if you've scrolled further than the top of div1 plus it's height
            // change the color. either by adding a class or setting a css property
            if(scroll >= os){
                $('#servicios').addClass('vg');
                $('#droup').removeClass('dropup');
            } else{
                $('#servicios').removeClass('vg');
                $('#droup').addClass('dropup');
            }
        });
    });
});

function addEvent(){
    document.getElementById("contactanos").addEventListener('submit', validate);
}

function validate(event){
    event.preventDefault();
    var elementos = document.getElementById("contactanos").elements;
    var errors="";
    for (var i=0;i<elementos.length;i++){
        var eInput = elementos[i];
        if (eInput.name === "nombre"){
            if (eInput.value.length == 0) {
                errors += "<p>Tu nombre no puede estar vacío</p>";
            }
        }
        if (eInput.name === "textarea"){
            if (eInput.value.length <= 20){
                errors += "<p>Tu texto es demasiado corto</p>";
            }
        }
        if(eInput.name === "email"){
            if(!validateEmail(eInput.value)){
                //la validación esta dando FALSE
                errors+="<p>Tu email no es válido</p>";
            }
        }
    }

    if(errors!=""){
        event.preventDefault();
        document.getElementById('errores').innerHTML="<div class='alert alert-danger'>"+errors+"</div>";
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //esta otra también es válida
    //var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return re.test(email);
}



//ESTO ES PARA EL USUARIO, PARA LAS PESTAÑITAS
$('#userTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});

function sweetAlertSimple(titulo, texto, icono) {
    swal({
        title: titulo,
        text: texto,
        type: icono
    });
}





