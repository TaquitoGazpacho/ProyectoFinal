$("input[name=sexo]").on("change",function(event){
    var img = chicoOChica(event.target.value);
    ensenarImagenes(img);
    $("#editProfile #avatar .avatar").on("click", seleccionarAvatar);seleccionarAvatar();
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


function cambOficiReset(){
    //reset FORM
}