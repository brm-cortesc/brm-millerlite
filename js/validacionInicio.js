var valid = true;

var edad = function() {
    if ($('#anio').val() !== "" && $('#mes').val() !== "" && $('#dia').val() !== "" && valid) {
        //var recordar
        if ($("#recordadDatos").attr('checked')) {
            recordar = 'S';
        } else {
            recordar = 'N';
        }

        var anio = parseInt($('#anio').val());
        var mes = parseInt($('#mes').val());
        var dia = $('#dia').val();
        var edad = new Date((anio + 18), (mes - 1), $('#dia').val());
        var fecha = new Date();
        if (edad > fecha) {
            Animar('diasWrapper', 'wobble');
            $('.errorEdad').show();
            var esmenor= 'ml_accesoF';
            var valor= '3sm3nor43d4d';
            var caducidad = 86400;
            setCookie(esmenor, valor, caducidad);
            window.location="http://www.alianzamas18.com/";
        } else {
            $.ajax({
                url: "index.php",
                method: 'post',
                beforeSend: function() {
                    var progressbar = $(".load-bar");
                    progressLabel = $(".charge-Load-Bar");
                    var val = 0;
                    var porce = 0;

                    function progress() {
                        progressLabel.width(val + "%");
                        $(".progress-label").text(porce + "%");
                        val += 1;
                        porce++;
                        console.log(val);
                        if (val <= 100) {
                            setTimeout(progress, 60);
                        } else {
                            $(".progress-label").text("Completo");
                        }
                    }
                    setTimeout(progress, 1000);
                },
                data: {
                    'guardar': 'true',
                    'anio': anio,
                    'mes': mes,
                    'dia': dia,
                }
            }).success(function(respuesta) {
                location.reload();
            })
            var elm = document.getElementById('recordar');
            if(elm.checked == true){
                var esmenor= 'ml_accesoF';
                var caducidad = 100000000;
                setCookie(esmenor, 'n0', caducidad);
            }else{
                var esmenor= 'ml_accesoF';
                var caducidad = 86400;
                setCookie(esmenor, 'n0', caducidad);
            }
            
        }
    }
};

function abrir_login(){
    //$('.cont-ini-sesion').css('display','block');
    $('.cont-ini-sesion').slideDown('fade');
}
function cerrar_login(){
     $('.cont-ini-sesion').slideUp('fade');
}

function justAnio(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum >= 48) && (keynum <= 57)) {
        var number = [];
        number[48] = "0";
        number[49] = "1";
        number[50] = "2";
        number[51] = "3";
        number[52] = "4";
        number[53] = "5";
        number[54] = "6";
        number[55] = "7";
        number[56] = "8";
        number[57] = "9";
        valor = $('#anio').val() + number[keynum];
        log = valor.toString().length;
        valor = parseInt(valor);
        // console.log(valor);
        //console.log(valor >= 1990);
        if (log == 4) {
            if (valor >= 1900 && valor <= 2015) {
                $('#anio').val(valor).attr('disabled', 'disabled');
                $("#mes").focus();
            } else {
                $('#anio').val("").removeAttr('disabled');
                Animar('anio', 'wobble');
            }
        } else {
            if (log < 4) {
                return true;
            } else {
                Animar('anio', 'wobble');
                return false;
            }
        }
        return true;

    } else {
        Animar('anios', 'wobble');
        return /\d/.test(String.fromCharCode(keynum));
    }
}

function justMes(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    var valor = "";
    var number = [];
    number[48] = "0";
    number[49] = "1";
    number[50] = "2";
    number[51] = "3";
    number[52] = "4";
    number[53] = "5";
    number[54] = "6";
    number[55] = "7";
    number[56] = "8";
    number[57] = "9";

    if ((keynum >= 48) && (keynum <= 57)) {
        //es numero
        valor = $('#mes').val() + number[keynum];
        log = valor.toString().length;
        valor = parseInt(valor);
        //console.log(valor);
        if (log == 2 && valor > 0 && valor < 13) {
            $('#mes').val($('#mes').val() + number[keynum]).attr('disabled', 'disabled');
            $("#dia").focus();

            return true;
        } else {
            if (log == 1) {
                return true;
            } else {
                Animar('mes', 'wobble');
                return false;
            }
        }
    } else {
        $('#mes').val('');
        return /\d/.test(String.fromCharCode(keynum));
    }
}

function justDia(e) {
    //verifica que el mes este completo
    var valor = $('#mes').val();
    var log = valor.toString().length;
    if (log == 1) {
        $('#mes').val("0" + $('#mes').val()).attr('disabled', 'disabled');
    }
    var keynum = window.event ? window.event.keyCode : e.which;
    var valor = "";
    var number = [];
    number[48] = "0";
    number[49] = "1";
    number[50] = "2";
    number[51] = "3";
    number[52] = "4";
    number[53] = "5";
    number[54] = "6";
    number[55] = "7";
    number[56] = "8";
    number[57] = "9";
    if ((keynum >= 48) && (keynum <= 57)) {
        //es numero
        valor = $('#dia').val() + number[keynum];
        log = valor.toString().length;
        //console.log(log);
        if (log == 2) {
            valor = parseInt(valor);
            var mes = parseInt($('#mes').val());
            var mayor = 0;
            switch (mes) {
                case 1:
                    mayor = 31;
                    break;
                case 2:
                    if (EsBisiesto(parseInt($('#anio').val()))) {
                        mayor = 29;
                    } else {
                        mayor = 28;
                    }
                    break;
                case 3:
                    mayor = 31;
                    break;
                case 4:
                    mayor = 30;
                    break;
                case 5:
                    mayor = 31;
                    break;
                case 6:
                    mayor = 30;
                    break;
                case 7:
                    mayor = 31;
                    break;
                case 8:
                    mayor = 31;
                    break;
                case 9:
                    mayor = 30;
                    break;
                case 10:
                    mayor = 31;
                    break;
                case 11:
                    mayor = 30;
                    break;
                case 12:
                    mayor = 31;
                    break;

            }
            if (valor > 0 && valor <= mayor) {
                //Dia valido
                $('#dia').val($('#dia').val() + number[keynum]).attr('disabled', 'disabled');
                if ($('#anio').val() !== "" && $('#mes').val() !== "" && $('#dia').val() !== "") {
                    edad();
                }
            } else {
                //Fecha Invalida
                Animar('dia', 'wobble');
                return false;

            }
        } else {
            return true;
        }
    } else {
        $('#dia').val('');
        return /\d/.test(String.fromCharCode(keynum));
    }
}

function EsBisiesto(anio) {
    var resultado;
    //Comprobamos la regla general.
    //Si anio es divisible por 4, es decir, si el
    //resto de la división entre 4 es 0...
    if (anio % 4 == 0) {
        //Si es divisible por 4, ahora toca comprobar
        //la excepción
        if (
            (anio % 100 == 0) && //Si es divisible por 100
            (anio % 400 != 0) //y no por 400
        ) {
            resultado = false; //entonces no es bisiesto
        } else {
            resultado = true; //No cumple la excepción.
            //Lo dejamos como bisiesto por ser divisible por 4
        }
    } else //Si no cumple la regla general
    {
        //No es bisiesto.
        resultado = false;
    }
    return resultado;
}

function Animar(id, x) {
    $('#' + id).addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass(x + ' animated');
    });
};
$(document).ready(function() {
    $("#anio").focus();
    $("#enviar").show();
    jQuery("#enviar").click(function() {
        //alert("Click");
        edad();
    });


});


function setCookie(nombre, valor, caducidad) {
    
    var caducidad = 2592000;
 
    var expireDate = new Date() //coge la fecha actual
    expireDate.setDate(expireDate.getDate()+caducidad);
 
    //crea la cookie: incluye el nombre, la caducidad y la ruta donde esta guardada
    //cada valor esta separado por ; y un espacio
    document.cookie = nombre + "=" + escape(valor) + "; expires=" + expireDate.toGMTString() + "; path=/";
}