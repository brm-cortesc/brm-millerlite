var _validFileExtensions = [".jpg", ".jpeg", ".gif", ".png"];
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                alert("Lo sentimos, " + sFileName + " tiene una extension invalida. ");
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
var validTitu=false;
var validHist=false;
var validFile=true;
var maxTitu=25;
var maxHist=201;

$(document).ready(function(){
    $('#titulo').keyup('keypress',function(){
        console.log("Ingreso");
        var valor=$(this).val();
        var log = parseInt(valor.toString().length+1);
        $("#carcTitulo").html(maxTitu-log);
    }).focusout(function () {
        // body...
        var valor=$(this).val();
        var log = parseInt(valor.toString().length+1);
        if(log<=maxTitu && log>0){
            validTitu=true;
        }else{

            validTitu=false;
        }
    });
    $('#historia').keyup('keypress',function(){
        var valor=$(this).val();
        var log = parseInt(valor.toString().length+1);
        $("#carcHist").html(maxHist-log);
    }).focusout(function () {
        // body...
        var valor=$(this).val();
        var log = parseInt(valor.toString().length+1);
        if(log<=maxHist && log>0){
            console.log("historia valida");
            validHist=true;
        }else{
            validHist=false;
        }
    })
     $('#fileupload').bind('fileuploadsubmit', function (e, data) {
          ValidateSingleInput(this);
          jQuery('.blueGradBTNPerfil').hide('fade');
        });
    $('#fileupload').fileupload({
        url: 'fotoHistoria/indexSound.php',
        dataType: 'json',
         done: function (e, data) {
                // Add each uploaded file name to the #files list
                $.each(data.result.files, function (index, file) {

                $('<p/>').text("Archivo seleccionado: " + file.name).appendTo('#files');
                jQuery('#imagen').val(file.url);
                jQuery('#fileupload').val();
                 setTimeout(function(){
                    jQuery('#progresoArchivo').find('.meter').css('background','green');
                    //jQuery('#mensajeUpload').html('<h5>Tu imagen ha sido cargada con &eacute;xito</h5><br>');
                    jQuery('.blueGradBTNPerfil').show('fade');
                }, 3000);

                });

            },

        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);


            $('#progresoArchivo .meter').animate({
                width: [ progress + '%' ],
              }, 1000, "linear");


            if(progress>=100){
               validFile=true;

            }
        }
    }).prop('enabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
    //VALIDACION DEL FORMULARIO
    $("#msform").validate({
        rules: {
            titulo:{
                required: true,
                minlength: 3,
                maxlength:25
            },
            historia:{
                required: true,
                minlength: 4,
                maxlength:200
            }
        },
        messages: {
            titulo:{
                required:'* Requerido',
                minlength: 'Debe ser mayor a 10 carácteres',
            },
            historia:{
                required: '* Requerido',
                minlength: 'Debe ser mayor a 10 carácteres',
            },


        }
    });
    $("#enviar").click(function (argument) {
        // body...
        if(jQuery("#msform").valid()){
            if(validTitu && validFile && validHist){
                jQuery("#msform").submit();
            }
        }else{
            return false;
        }
    });

})