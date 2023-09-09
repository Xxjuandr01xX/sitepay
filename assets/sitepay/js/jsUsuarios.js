$(document).ready(function(){
    let Url = window.location.href.split("/")[6];
    if(Url == "add"){
        inicializar_inputs();
    }else if(Url == "index"){
        inicializar_tabla_usuarios();
    }else{

    }
});

let inicializar_tabla_usuarios = function(){

}

let inicializar_inputs = function(){
    $("#dni_us").inputmask({"mask" : "9{1,10}"});
    $("#nom_us").css({"text-transform" : "uppercase"});
    $("#ape_us").css({"text-transform" : "uppercase"});
    $("#pho_us").inputmask({
        "placeholder" : "(____)-_______",
        "mask"        : "(9999)-9999999"
    });
    /*$("#mail_us").inputmask({
        "placeholder" : "xx@xx.com",
        "mask"        : "a{1,30}"
    });*/
    $("#birt_us").inputmask({
        "placeholder" : "__/__/____",
        "mask"        : "99/99/9999"
    });
    //$("#dir_us").css({"text-transform" : "uppercase"});
}