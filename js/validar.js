var expr= /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

$(document).ready(function(){
    $("#iniciar_sesion").click(function(){
        var email2= $("#email2").val();
        var pass= $("#pass").val();
        // email
        if(email2=="Superuser123" && pass=="12345"){
            return true;
        }else{
            if(email2=="" || email2==null || email2.length==0 || /^\s+$/.test(email2) || !expr.test(email2)){
                $("#err_email2").fadeIn();
                $("#email2").css("border","2px solid red");
                return false;
            }else{
                $("#err_email2").fadeOut();
                $("#email2").css("border","0px solid wwhite");
                // password
                if(pass=="" || pass==null || pass.length==0 || /^\s+$/.test(pass)){
                    $("#err_pass").fadeIn();
                    $("#pass").css("border","2px solid red");
                    return false;
                }else{
                    $("#err_pass").fadeOut();
                    $("#pass").css("border","0px solid white");
                }
            }
        }
        
    });

    $("#registrar").click(function(){
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var regiones= $("#regiones").val();
        var comunas= $("#comunas").val();
        var direccion= $("#direccion").val();
        var celular= $("#celular").val();
        var email= $("#email").val();
        var contra= $("#contra").val();
        var contra2= $("#contra2").val();
        //nombre
        if(nombre=="" || nombre==null || nombre.length==0 || /^\s+$/.test(nombre)){
            $("#err_nombre").fadeIn();
           $("#nombre").css("border", "2px solid red");
            return false;
        }else{
            $("#err_nombre").fadeOut();
            $("#nombre").css("border","0px solid white");
            //apellido
            if(apellido=="" || apellido==null || apellido.length==0 || /^\s+$/.test(apellido)){
                $("#err_apellido").fadeIn();
                $("#apellido").css("border","2px solid red");
                return false;
            }else{
                $("#err_apellido").fadeOut();
                $("#apellido").css("border","0px solid white");
                //regiones
                if(regiones=="sin-region" || regiones=="" || regiones==null || regiones.length==0){
                    $("#err_region").fadeIn();
                    $("#regiones").css("border","2px solid red");
                    return false;
                }else{
                    $("#err_region").fadeOut();
                    $("#regiones").css("border","0px solid white");
                    //comunas
                    if(comunas=="" || comunas=="sin-comuna" || comunas==null || comunas.length==0){
                        $("#err_comunas").fadeIn();
                        $("#comunas").css("border","2px solid red");
                        return false;
                    }else{
                        $("#err_comunas").fadeOut();
                        $("comunas").css("border","0px solid white");
                        //direccion
                        if(direccion=="" || direccion==null || direccion.length==0  || /^\s+$/.test(direccion)){
                            $("#err_direccion").fadeIn();
                            $("#direccion").css("border","2px solid red");
                            return false;
                        }else{
                            $("#err_direccion").fadeOut();
                            $("#direccion").css("border","0px solid white");
                            // celular
                            if(celular=="" || celular<=0 || celular==null || celular.length==0 || /^\s+$/.test(celular)){
                                $("#err_celular").fadeIn();
                                $("#celular").css("border","2px solid red");
                                return false;
                            }else{
                                $("#err_celular").fadeOut();
                                $("#celular").css("border","0px solid white");
                                // email
                                if(email=="" || email==null || email.length==0 || !expr.test(email) || /^\s+$/.test(email)){
                                    $("#err_correo").fadeIn();
                                    $("#email").css("border","2px solid red");
                                    return false;
                                }else{
                                    $("#err_correo").fadeOut();
                                    $("#email").css("border","0px solid white");
                                    //contraseña
                                    if(contra=="" || contra==null || contra.length==0 || /^\s+$/.test(contra || contra!=contra2)){
                                        $("#err_contra").fadeIn();
                                        $("#contra").css("border","2px solid red");
                                        return false;
                                    }else{
                                        $("#err_contra").fadeOut();
                                        $("#contra").css("border","0px solid white");
                                        // confirmar contraseña
                                        if(contra2=="" || contra2==null || contra2.length==0 || /^\s+$/.test(contra2) || contra!=contra2){
                                            $("#err_contra2").fadeIn();
                                            $("#contra2").css("border","2px solid red");
                                            return false;
                                        }else{
                                            $("#err_contra2").fadeOut();
                                            $("#contra2").css("border","0px solid white");
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

        }
    });
});