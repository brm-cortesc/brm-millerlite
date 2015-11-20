<body class="totalizer">
<div class="loading"><img src="<?php print path_to_theme(); ?>/images/loading.gif"></div>
<div class="pageWrapper totalizer gradBG2">
<div class="beerSmoke"><img  src="<?php print path_to_theme(); ?>/images/coldBottle.png"></div>
  <div class="validationWrapper gradient row">
    <div class="small-12 medium-7 medium-centered large-uncentered large-offset-7 large-5 columns">
      <form class="validationDateWrapper">
      <div class="logoMillerLite"><img  src="<?php print path_to_theme(); ?>/images/millerLiteLogo.png"/></div>

        <h2>BIENVENIDO A </br>
          MILLER LITE COLOMBIA</h2>
        <h6>Para ingresar debes ser mayor de edad, por favor escribe tu fecha de nacimiento.</h6>
        <div class="diasWrapper" id="diasWrapper">
          <label class="validationDate"><p>Año</p>
            <input type="text" placeholder="AAAA" id="anio" tabindex="1" onkeypress="return justAnio(event);" maxlength="4" />
          </label>
          <label class="validationDate"><p>Mes</p>
            <input type="text" placeholder="MM" id="mes" tabindex="2" onkeypress="return justMes(event);"maxlength="3" onblur="ga('send', 'event', 'Miller-Lite', 'Mas-de-lo-que-me-gusta', 'Validar-Edad');"/>
          </label>

          <label class="validationDate"><p>Día</p>
            <input type="text" placeholder="DD" id="dia" tabindex="3" onkeypress="return justDia(event);"maxlength="2" />
          </label>
          <div class="errorEdad" style="display:none;color:white;">Debes ser mayor de edad para poder ingresar.</div>
        </div>
        <div class="avisoValidador">
          <div class="cheker hidden" style="display:none;">
            <label for="checkDatos">
            <p>Recordar mis datos.</p>
            <input type="checkbox" name="checkDatos" id="checkDatos" value="Sí">
            </label>
          </div>
          <p>Al suministrar tu edad, estás dando tu consentimiento expreso al dueño de la página para recopilar cierta información no personal y almacenar información en tu computador en la forma de "cookie" o un archivo similar.</p>
        </div>

      </form>
      <div class="millerTimeSmoke"><img src="<?php print path_to_theme(); ?>/images/itsMillerTimeSmoke.png"/></div>
    </div>
    <div class="iceCan">
    	<img class="minCan" src="<?php print path_to_theme(); ?>/images/coldCanMin.png">
    	<img class="largeCan" src="<?php print path_to_theme(); ?>/images/coldCan.png">
    </div>
  </div>
</div>
<div id="overbox3">
    <div id="infobox3">
        <p>Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si continúas navegando consideramos que aceptas su uso.
        <a onclick="aceptar_cookies();" style="cursor:pointer;">X Cerrar</a></p>
    </div>
</div>

<footer>
                    <nav><a href="http://www.talkingalcohol.com/espanol/index.asp" target="_blank" onClick="ga('send', 'event', 'Miller-Lite', 'Mas-de-lo-que-me-gusta', 'Hablemos-de-Alcohol');">Hablemos de Alcohol</a> | <a href="TerminosyCondiciones.php" target="_blank" onClick="ga('send', 'event', 'Miller-Lite', 'Mas-de-lo-que-me-gusta', 'Terminos-y-Condiciones');">Términos y Condiciones </a> | <a href="TerminosyCondiciones.php" target="_blank" onClick="ga('send', 'event', 'Miller-Lite', 'Mas-de-lo-que-me-gusta', 'Privacidad-y-Cookies');"> Privacidad Y Cookies</a></nav>
                    <div class="legalesFooter">
                        <div class="m18"></div>
                        <p>Prohíbase el expendio de bebidas embriagantes a menores de edad. El exceso de alcohol es perjudicial para la salud.</p>
                    </div>
                </footer>
</body>
<?php
//setcookie('validarEdad', '24', time() + 60);
?>