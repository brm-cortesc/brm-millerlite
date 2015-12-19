//VALIDACION DEL FORMULARIO


jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zñáéíóú\s]+[a-zñáéíóú\s]+[a-zñáéíóú\s]$/i.test(value);
}, "Solo letras");

   

$(document).ready(function(){

    /* Paso 1 */

    $("#formPaso1").validate({
        rules: {
            nomBanda:{
                required: true
            },
            genero:{
                required: true,
                lettersonly: true
            },
            numIntegrantes:{
                required: true,
                number: true
            }
        },
        messages: {
            nomBanda:{
                required:'* Requerido'
            },
            genero:{
                required:'* Requerido',
                lettersonly: 'Debe ingresar solo letras'
            },
            numIntegrantes:{
                required:'* Requerido',
                number: 'Debe ser ingresar numeros'
            }
        }
    });

    /* Paso 2 */

    $("#formPaso2").validate({
        rules: {
            representante:{
                required: true
            },
            tel:{
                required: true,
                number: true
            },
            cedula:{
                required: true,
                number: true
            },
            email:{
                required: true,
                email: true
            },
            direccion:{
                required: true
            },
            ciudad:{
                required: true
            }
        },
        messages: {
            representante:{
                required:'* Requerido'            },
            tel:{
                required:'* Requerido',
                number: 'Debe ser ingresar numeros'
            },
            cedula:{
                required:'* Requerido',
                number: 'Debe ser ingresar numeros'
            },
            email:{
                required:'* Requerido',
                email: 'Email incorrecto'
            },
            direccion:{
                required:'* Requerido'
            },
            ciudad:{
                required:'* Requerido'
            }
        }
    });

    /* Paso 2 */

    $("#formPaso3").validate({
        rules: {
            rutaFacebook:{
                //url: true
            },
            rutaYoutube:{
                //url: true
            },
            rutaTwitter:{
                //url: true
            },
            rutaVideo:{
                required: true,
                //url: true
            },
            nomVideo:{
                required: true
            },
            politcs:{
                required: true
            },
            terms:{
                required: true
            }
        },
        messages: {
            rutaFacebook:{
               //url:'Ruta incorrecta'
            },
            rutaYoutube:{
                //url:'Ruta incorrecta'
            },
            rutaTwitter:{
                //url:'Ruta incorrecta'
            },
            rutaVideo:{
                required:'* Requerido',
                //url:'Ruta incorrecta'
            },
            nomVideo:{
                required:'* Requerido'
            },
            politcs:{
                required:'* Requerido'
            },
            terms:{
                required:'* Requerido'
            }
        }
    });
});