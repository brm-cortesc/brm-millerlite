        var idBanda=null;
        var idRepresentante=null;
        var email="";

        /* Paso 1 */

        $("#btnPaso1").click(function() {
            if ($("#formPaso1").valid()) {
                $.ajax({
                    method: "POST",
                    url: "registroBanda.php",
                    dataType: "json",
                    data: $("#formPaso1").serialize() + "&accion=paso1",
                    success: function(data){
                        if (data.error==1) {
                            //Guardo bien
                            idBanda=data.idBanda;
                            $("#paso1").hide();
                            $("#paso2").show();
                        }else if (data.error==2) {
                            //Cancion ya existe
                            //alert("Ya existe");
                        }else {
                            //Cancion ya existe
                            alert("Ocurrio un error");
                        };
                    }
                })
            };
        });

        /* Paso 2 */

        $("#btnPaso2").click(function() {
            if ($("#formPaso2").valid()) {
                $.ajax({
                    method: "POST",
                    url: "registroBanda.php",
                    dataType: "json",
                    data: $("#formPaso2").serialize() + "&accion=paso2&idBanda="+idBanda,
                    success: function(data){
                        if (data.error==1) {
                            //Guardo bien
                            $("#idRepresentante").val(data.idRepresentante);
                            $("#paso1").hide();
                            $("#paso2").hide();
                            $("#paso3").show();
                        }else if (data.error==2) {
							$("#idRepresentante").val(data.idRepresentante);
                            //El representante ya esta
                            //alert("El representante ya esta");
                            $("#paso1").hide();
                            $("#paso2").hide();
                            $("#paso3").show();
                        }else {
                            //Error
                            alert("Ocurrio un error");
                        };
                        email = $("#email").val();
                    }
                })
            };
        });

         /* Paso 3 */

        $("#btnPaso3").click(function() {
            if ($("#formPaso3").valid()) {
                $.ajax({
                    method: "POST",
                    url: "registroBanda.php",
                    dataType: "json",
                    data: $("#formPaso3").serialize() + "&accion=paso3&idBanda="+idBanda+"&email="+email,
                    success: function(data){
                        if (data.error==1) {
                            //Guardo bien
							dataLayer.push({'event': 'registro-exitoso'});
                            window.location = "procesarMecanica.php"
                        }else {
                            //Error
                            alert("Ocurrio un error");
                        };
                    }
                })
            };
        });

        /*  Volver Paso 2 a paso 1*/
        $("#btnVolverPaso2").click(function() {
            $("#paso1").show();
            $("#paso2").hide();
            $("#paso3").hide();
        });

        /*  Volver Paso 3 a paso 2*/
        $("#btnVolverPaso3").click(function() {
            $("#paso1").hide();
            $("#paso2").show();
            $("#paso3").hide();
        });