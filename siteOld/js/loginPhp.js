window.fbAsyncInit = function() {
	FB.init({
		appId: '446080872230399',
		cookie: true,xfbml: true,
		channelUrl: 'channel.php',
		oauth: true
		});
	};
(function() {
	var e = document.createElement('script');
	e.async = true;e.src = document.location.protocol +'//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);}());

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
  window.location="processFB.php";
  //$("#results").html(''); //reset element html
}