var valid = true;

 var edad = function() {
        if ($('#anio').val() !== "" && $('#mes').val() !== "" && $('#dia').val() !== "" && valid) {
            var recordar
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
                var d = new Date();
                        d.setTime(d.getTime() + (1*24*60*60*1000));
                        var expires = "expires="+d.toUTCString();
                        document.cookie = "validarEdad" + "=" + "2" + "; " + expires;
            } else {
                $.ajax({
                    url: "index.php",
                    method: 'post',
                    beforeSend: function(){
                      $('.loading').show();
                    },
                    data: {
                        guardar: true,
                        anio: anio,
                        mes: mes,
                        dia: dia,
                        recordar: recordar
                    }
                }).success(function(resultado) {
                        $('.loading').hide();
                        var d = new Date();
                        d.setTime(d.getTime() + (1*24*60*60*1000));
                        var expires = "expires="+d.toUTCString();
                        document.cookie = "validarEdad" + "=" + "1" + "; " + expires;
                        window.location="index.php";
                });
            }
        }
    };
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
       if (log== 4) {
            if (valor >= 1900 && valor <= 2015) {
                $('#anio').val(valor).attr('disabled', 'disabled');
                $("#mes").focus();
            } else {
                $('#anio').val("").removeAttr('disabled');
              	Animar('anio','wobble');
            }
        }else{
          if(log<4){
              return true;
            }else{
              Animar('anio','wobble');
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
            if(log==1){
              return true;
            }else{
              Animar('mes','wobble');
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
    if(log==1){
      $('#mes').val("0"+$('#mes').val()).attr('disabled', 'disabled');
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
$(document).ready(function(){
	$("#anio").focus();
});

//Mensaje politica de cookies
        function GetCookie(name) {
        var arg=name+"=";
        var alen=arg.length;
        var clen=document.cookie.length;
        var i=0;

             while (i<clen) {
                 var j=i+alen;

                 if (document.cookie.substring(i,j)==arg)
                     return "1";
                 i=document.cookie.indexOf(" ",i)+1;
                 if (i==0)
                     break;
             }

             return null;
            }

        function aceptar_cookies(){
            var expire=new Date();
            expire=new Date(expire.getTime()+7776000000);
            document.cookie="ml_miller=aceptada; expires="+expire;

            var visit=GetCookie("ml_miller");

            if (visit==1){
                popbox3();
            }
        }

        function abrir_login(){
            $(".cont-ini-sesion").css('display','block');
            $(".cont-search").css('display','none');
        }
        function abrir_search(){
            $(".cont-search").css('display','block');
            $(".cont-ini-sesion").css('display','none');
        }
        function cerrar_login(){
            $(".cont-ini-sesion").css('display','none');
        }
        function cerrar_search(){
            $(".cont-search").css('display','none');
        }

        $(function() {
            var visit=GetCookie("ml_miller");
            if (visit==1){ popbox3(); }
        });

        function popbox3() {
            $('#overbox3').toggle();
        }