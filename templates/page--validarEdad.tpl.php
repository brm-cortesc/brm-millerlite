 <meta property="og:type" content="website" />
    <meta property="og:title" content="Lite Tributes" />
    <meta property="og:url" content="http://millerlite.com.co/" />
    <meta property="og:description" content="¡Vive los Lite Tributes!" />
    <meta property="og:site_name" content="http://millerlite.com.co/" />
    <meta property="og:image" content="http://millerlite.com.co/images/lite_tributes_home.jpg" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <header>
            <!-- Inicio de la barra de carga esta es simulada -->

        <div class="load-bar" >
            <div class="charge-Load-Bar"></div>
                <div class="progress-label"></div>
        </div>

        <!-- final barra de carga -->
            <div class="container">
                <div class="row">

                    <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-0 logo-cont">
                        <h1 class="p-cent-log">
                          <?php 
                            if ($site_logo):
                              print $site_logo; 
                            endif; ?>
                        </h1>
                    </div>

                    <div class="hidden-xs hidden-sm col-md-3 col-md-offset-9 logo-sounds-cont">
                        <img src="/images/sos_logo.svg" alt="Season of sounds| Miller Lite Colombia">
                    </div>

                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 hidden-md hidden-lg logo-sounds-cont">
                        <img src="/images/sos_logo_mb.svg" alt="Season of sounds| Miller Lite Colombia">
                    </div>

                </div>
            </div>

            <div style="display:none;">
                <ul class="nav navbar-nav">
                    <li><a href="home.html"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li id="tribute"><a href="Tributes.php">lite tributes</a></li>
                    <li id="muse"><a href="Muse.php">muse</a></li>
                    <li id="jam"><a href="PearlJam.php">pearl jam</a></li>
                    <li id="sonar"><a href="Sonar.php">s&oacute;nar</a></li> 
                    <li id="color"><a href="lifeinColor.php">Life in Color</a></li>
                </ul>
            </div>
        </header>

        <!-- final de la cabecera -->

        

        <!-- Inicio del contenido general -->

        <div class="container">

            <div class="row gral-cont">

                <!-- inicio del form validador de edad -->

                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-4">

                    <div class="gral-white-cont">
                        <h1>
                            BIENVENIDO A MILLER <br>LITE COLOMBIA
                        </h1>

                        <p>
                            Para ingresar debes ser mayor de edad, por favor escribe tu fecha de nacimiento.
                        </p>

                        <form action="" class="age-validator validationDateWrapper">
                            
                            <div class="row diasWrapper" id="diasWrapper">

                                <div class="col-xs-4 ">
                                    <label for="anio">AÑO</label>
                                    <input type="text" class="form-control" placeholder="AAAA" name="anio" id="anio" tabindex="1" onkeypress="return justAnio(event);" maxlength="4"> 
                                </div>

                                <div class="col-xs-4">
                                    <label for="mes">MES</label>
                                    <input type="text" class="form-control" placeholder="MM" name="mes" id="mes" tabindex="2" onkeypress="return justMes(event);" maxlength="2"> 
                                </div>

                                <div class="col-xs-4">
                                     <label for="dia">DÍA</label>
                                    <input type="text" class="form-control" placeholder="DD" name="dia" id="dia" tabindex="3" onkeypress="return justDia(event);" maxlength="2"> 
                                </div>
                                <div class="errorEdad" style="display:none;">Debes ser mayor de edad para poder ingresar.</div>

                            </div>
                            <div style="display:none;" id="enviar" class="col-xs-12 col-md-12  btnNueInd"><br>
                                    <button class="btn grl-btn blue " style="width:315px;">ENVIAR</button>
                            </div>

                        </form>


                            

                        <span style="font-size:1rem;">
                            Al suministrar tu edad, estás dando tu consentimiento expreso al dueño de la página para recopilar cierta información no personal y almacenar información en tu computador en la forma de "cookie" o un archivo similar.
                        </span>
                    </div>

                </div>

                <!-- final form validador de edad -->

                <!-- Inicio del contenedor de la lata -->

                

                <!-- final del contenedor de la lata -->

            </div>
        </div>