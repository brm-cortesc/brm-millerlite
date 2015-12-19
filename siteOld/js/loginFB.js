//Datos App
window.fbAsyncInit = function() {
    FB.init({
      appId      : '446080872230399',
      xfbml      : true,
      cookie     : true,
      version    : 'v2.3'
    });
  };

//Login FB
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=446080872230399&display=page";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



//Funcion para obtener los permisos al momento de login
function getPermissions() {
  obtenerFotoPerfil();
  FB.login(function(a) {
    if (a.authResponse) {
      FB.api('/me', function(response) {

        var fbid=jQuery("#fbId").val(response.id);
        var name=jQuery("#name").val(response.first_name);
        var apellido=jQuery("#last").val(response.last_name);
        var mail=jQuery("#mail").val(response.email);
        var genero=jQuery("#gender").val(response.gender);

        var url='processFB.php';
        var data=jQuery('#fblogin').serialize();
       // if(genero.val()!=''){
         // jQuery('#fblogin').submit();
        //}
        jQuery.ajax({
          url : url,
          type : 'POST',
          data : data,
          datatype : "json",
          async : true,
          success : function(data) {
            app=navigator;
            //console.log(app);
            //alert(data);
            //console.log(data);
            if(data=='Home'){
              if (app.vendor == "Apple Computer, Inc.") {

                 window.location.href='Home.php';
              }else{
                window.location.href='Home.php';
              }
              //console.log('hola');
             window.location.href='Home.php';
            }else if(data=='Registro'){
              //alert(data);
              ////alert(app.vendor);
               if (app.vendor == "Apple Computer, Inc.") {

                 window.location.href='Registro.php';
              }else{
                //alert(data);

                window.location.href='Registro.php';
              }
              ////alert(data);
              //console.log('adios');
              //window.location.href'Registro.php';
            }
            //redirect...
            //window.location='Registro.php';

          }
        });


      //console.log(fbid);
      });
    } else {
    }

  }, {
   scope : 'email,public_profile,user_friends'
  })
}

//Funcion para obtener la foto de perfil del usuario de facebook
function obtenerFotoPerfil(){
  FB.api('/me/picture?width=325&height=325', function(responseI) {
    var profileImage = responseI.data.url;
      var fbid=jQuery("#pictureP").val(profileImage);


    //console.log(profileImage);
  });
}

function getLogin() {
  FB.login(function(a) {
    if (a.authResponse) {
      FB.api('/me', function(response) {

        var fbid=jQuery("#fbId").val(response.id);
        var name=jQuery("#name").val(response.first_name);
        var apellido=jQuery("#last").val(response.last_name);
        var mail=jQuery("#mail").val(response.email);
        var genero=jQuery("#gender").val(response.gender);

        var url='processFB.php';
        var data=jQuery('#fblogin').serialize();
        jQuery.ajax({
          url : url,
          type : 'POST',
          data : data,
          datatype : "jsonp",
          async : true,
          success : function(data) {
            //console.log(data);
            if(data=='Home'){
              //console.log('hola');
              window.location='Home.php';
            }else if(data=='Registro'){
              //console.log('adios');
              window.location='Login.php';
            }
            //redirect...
            //window.location='Registro.php';

          }
        });


      //console.log(fbid);
      });
    } else {
    }

  }, {
   scope : 'email,public_profile,user_friends'
  })
}

//Falta válidar rutas y el restod del texto con facebook en el servidor

function Share() {
  FB.ui({
  method: 'share_open_graph',
  action_type: 'og:share',
  action_properties: JSON.stringify({
      object:'http://millerlite.com.co/',
  })
}, function(response){});



}


function CallAfterLogin(){
  FB.login(function(response) {
    if (response.status === "connected")
    {
      LodingAnimate(); //Animate login
      FB.api('/me', function(data) {

        if(data.email == null)
        {
          //Facbeook user email is empty, you can check something like this.
          alert("You must allow us to access your email id!");
          ResetAnimate();

        }else{
          AjaxResponse();
        }

      });
     }
  },
  {scope:'<?php echo $fbPermissions; ?>'});
}

//functions
function AjaxResponse()
{
   //Load data from the server and place the returned HTML into the matched element using jQuery Load().
   $( "#results" ).load( "process_facebook.php" );
}

//Show loading Image
function LodingAnimate()
{
  $("#LoginButton").hide(); //hide login button once user authorize the application
  $("#results").html('<img src="images/loading.gif" />'); //show loading image while we process user
}

//Reset User button
function ResetAnimate()
{
  $("#LoginButton").show(); //Show login button
  //$("#results").html(''); //reset element html
}

  // Stuff to do as soon as the DOM is ready;


  /*Funcion para hacer llamado a los permisos de la app sobre el usuario
  function obtenerPermisos () {
     FB.api('/me/permissions/', function(responseP) {
    console.log(responseP);
  });

  }*/

  jQuery(document).ready(function(){
    jQuery('.new_bg').click(function(){
      window.location='Sonar.php';
    })
  });