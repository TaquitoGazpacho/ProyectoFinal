$("input[name=sexo]").on("change",function(event){
    var img = chicoOChica(event.target.value);
    ensenarImagenes(img);
    $("#editProfile #avatar .avatar").on("click", seleccionarAvatar);
});

function chicoOChica(sexo){
    if (sexo == "Femenino"){
        var sex = "chica";
    } else if (sexo == "Masculino"){
        var sex = "chico";
    } else {
        var sex = "Otro";
    }
    return sex;
}

function ensenarImagenes(img){
    $("#avatar").empty();
    if (img != "Otro") {
        for (var i = 1; i <= 6; i++) {
            $('<img/>', {
                src: "img/userImg/avatares/" + img + i + ".png",
                name: img+i,
                class: "avatar"
            }).appendTo("#avatar");
        }
    } else {
        $('<p/>', {
            text: "No existen avatares para el sexo 'Otro'",
            class: "inputText"
        }).appendTo("#avatar");
    }
}

$("#editProfile #avatar .avatar").on("click", seleccionarAvatar);

function seleccionarAvatar(){
    if ($(this).hasClass("seleccionada")){
        $(this).removeClass("seleccionada");
        $("#avatarForm")[0].value="none";
    }else{
        $(this).siblings().removeClass("seleccionada");
        $(this).addClass("seleccionada");
        $("#avatarForm")[0].value=$(this)[0].name;
    }
}

$("input[type=file]").change(function () {
    var i = $(this).prev('label').clone();
    var file = $(this)[0].files[0].name;
    $("#nombreArchivo").text(file);
});

// ------------------------ //
function quitarSombrasMovil() {
    if ($(window).width() <= 768) {
        $(".sombras").removeClass("sombras");
    }
}

$(document).ready(quitarSombrasMovil());