<?php
  define('BASE_URL', 'http://exposolidaria.com');
  define('YEAR', 2017);
  function base_url($path=''){ return BASE_URL . '/' . $path; }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Exposolidaria 2017 - Una forma de hacer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="Sitio web de la ExpoSolidaria <?php echo YEAR; ?>">
    <meta name="author" content="Indary">
    <meta name="theme-color" content="#e82583">
    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@exposolidara">
    <meta name="twitter:creator" content="@indary">
    <meta name="twitter:title" content="Expo Solidaria">
    <meta name="twitter:description" content="Sitio web de la ExpoSolidaria <?php echo YEAR; ?>">
    <meta name="twitter:image:src" content="<?php echo base_url('img/art/logo.png')?>">
    <!-- FACEBOOK -->
    <meta property="og:site_name" content="Expo Solidaria">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Exposolidaria">
    <meta property="og:description" content="Sitio web de la ExpoSolidaria <?php echo YEAR; ?>">
    <meta property="og:image" content="<?php echo base_url('img/art/logo.png')?>">
    <!-- G++ -->
    <meta itemprop="name" content="Exposolidaria">
    <meta itemprop="description" content="Sitio web de la ExpoSolidaria <?php echo YEAR; ?>">
    <meta itemprop="image" content="<?php echo base_url('img/art/logo.png')?>">
    <link rel="shortcut icon" type="image/png" href="img/art/favicon.png" />
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="libs/wow/css/libs/animate.css" type="text/css">
    <link rel="stylesheet" href="libs/indary/css/indary.css" type="text/css">
    <link rel="stylesheet" href="libs/vegas/vegas.min.css" type="text/css">

    <script src="libs/jquery/jquery-1.11.3.min.js"></script>
    <script src="libs/vegas/vegas.min.js"></script>
    <script src="libs/materialize/js/materialize.min.js"></script>
    <script src="js/global.js"></script>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>
      //facebook
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=1379359142086926";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      //analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-86160268-2', 'auto');
      ga('send', 'pageview');
    </script>
    <header>
      <nav id="nav">
        <div class="nav-wrapper">
          <div class="brand-logo center">
            <img id="logo_blue" src="img/art/logo.png"/>
          </div>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="menu" class="right hide-on-med-and-down">
            <li class="menu-item" data-target="about">ACERCA DE</li>
            <!--<li class="menu-item" data-target="program">PROGRAMA</li>-->
            <li class="menu-item" data-target="ongs">PARTICIPAN</li>
            <li class="menu-item" data-target="contact">CONTACTO</li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li class="menu-item" data-target="about">ACERCA DE</li>
            <!--<li class="menu-item" data-target="program">PROGRAMA</li>-->
            <li class="menu-item" data-target="ongs">PARTICIPAN</li>
            <li class="menu-item" data-target="contact">CONTACTO</li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="bg">
      <div class="override"></div>
      <div class="center">
        <h1>#ExpoSolidaria</h1>
        <h3>UNA FORMA DE HACER</h3>
        <h4>03 DE NOVIEMBRE</h4>
        <h6>COMODORO RIVADAVIA</h6>
        <div id="timer"></div>
      </div>
    </div>
    <div id="full-wrapper">
      <section id="about" class="">
        <div class="container">
          <p>
            La Expo-solidaria surge con el fin de generar lazos y conocimiento entre las diferentes organizaciones que se encuentran trabajando de forma voluntaria en Comodoro Rivadavia, y dar a conocer a la comunidad en general sobre la misión del trabajo, accionar y planes a futuro, de los distintos grupos, para crear conciencia y motivar la participación activa de la sociedad en las temáticas que atraviesan nuestra sociedad.
          </p>
          <p>
            Durante el transcurso de la misma, se llevarán a cabo diferentes actividades como exposiciones y charlas de información relacionadas con las temáticas del evento ya que el objetivo del mismo es aprender, reflexionar y entender que todos pueden participar, que la solidaridad no tiene exclusividad, barreras ni límites, y los interesados en sumarse al trabajo podrán hacerlo.
          </p>
          <div id="info" class="center">
            <div><b>Lugar:</b> Centro de Informacion pública</div>
            <div><b>Día:</b> 03 de Noviembre de <?php echo YEAR; ?></div>
            <div><b>Hora:</b> 14:00 Hs</div>
          </div>
        </div>
      </section>
      <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2778.4452858240275!2d-67.4747542706295!3d-45.86240013634444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8af8c1ef0469af6!2sCentro+de+Informacion+Publica!5e0!3m2!1ses-419!2sar!4v1477261571090" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
      <div class="quote">
        <div class="quote-content">
          <h3><b>CUANDO YO DOY ME DOY A MÍ MISMO</b></h3>
          <h4>Walt Whitman</h4>
        </div>
      </div>
      <section id="ongs">
        <div class="container">
          <h5 class="title tpink">PARTICIPAN</h5>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-blue">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/esperanzayvida.jpg">
                  </div>
                  <div class="ong-description">
                    Esperanza vida es una fundación en trámite conformada por un grupo de pacientes trasplantados, en lista de espera y en diálisis que nos reunimos con la misión de promover la donación de órganos en la ciudad de Comodoro Rivadavia.
                    <br><br>Brindamos contención y asistencia a los pacientes trasplantados y en espera. Nos ocupamos de sus  necesidades. Estamos abocados especialmente a hacer cumplir con la Ley de trasplante.
                  </div>
                  <div class="ong-name">Esperanza Y Vida</div>
                  <div class="ong-contact">
                    (297) 537-5159<br>
                    fundacionesperanzayvida2016@gmail.com<br>
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/fundacionesperanzayvida2016" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-orange">
                <div class="ong-box-container"></div>
                <div class="ong-box-links"></div>
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/payamedicos.jpg">
                  </div>
                  <div class="ong-description">
                    Nuestra mision es contribuir a la salud emocional del paciente hospitalizado. Para tal fin utilizamos recursos psicologicos y artisticos relacionados con el payaso teatral, juegos, música, teatro, magia y el arte humoristico en general.
                    <br><br>Realizamos intervenciones escenico-terapeuticas con un abordaje a traves de la tecnica del payaso teatral adaptandola al ambito hospitalario con una etica, estetica y deontologia propia.
                  </div>
                  <div class="ong-name">Payamedicos</div>
                  <div class="ong-contact">
                    payamedicoscomodoro@gmail.com
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/payamedicos.chubut" target="_blank"><span class="facebook"></span></a>
                  <a href="www.payamedicos.org" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-green">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/voluntariado.png">
                  </div>
                  <div class="ong-description">
                    Somos un grupo de personas que donan tiempo y dedicación al servicio del paciente internado y familiares.<br><br>
                    Nuestro objetivo es: dar amor y consuelo al enfermo, colaborar con el paciente y sus familiares, escuchar las angustias del paciente., ayudar a afrontar su enfermedad sin sentirse solo.
                  </div>
                  <div class="ong-name">Voluntariado Hospital Regional</div>
                  <div class="ong-contact">
                    Hipólito Irigiyen 950 Piso 4<br>
                    4442222<br>
                    voluntariadocomodororivadavia@gmail.com<br>
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/Voluntariado-Hospital-Regional-Comodoro-Rivadavia-280606538649608" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-pink">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/corazoncitofeliz.jpg">
                  </div>
                  <div class="ong-description">
                    Somos un grupo de personas que aprecian la vida, que entienden la solidaridad como una actitud constante.<br><br>
                    Buscamos crear un lazo entre las familias y que ellas sean las protagonistas de transformar sus vidas.
                  </div>
                  <div class="ong-name">Juntos por un corazoncito feliz</div>
                  <div class="ong-contact">
                    (297) 401-9411<br>
                    uncorazoncitofeliz@gmail.com<br>
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/JuntosPorUnCorazoncitoFeliz" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-purple">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/apaec.jpg">
                  </div>
                  <div class="ong-description">
                    El objetivo fundamental de la Institución es la prevención, concientización y detección temprana de los distintos cánceres que hoy afectan a la población del mundo, como también la asistencia a los pacientes durante su  tratamiento, especialmente a quienes  no poseen obra social.
                  </div>
                  <div class="ong-name">APAeC</div>
                  <div class="ong-contact">
                    Avda.Sargento Cabral 351<br>
                    (297) 447-5450<br>
                    prevencionyasistenciaen_c@yahoo.com
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/prevencion.cancer" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-blue">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/astra.jpg">
                  </div>
                  <div class="ong-description">
                    Fundada en el año 2007 por un grupo de los vecinos, comprometidos con la realidad social y con la cultura, que viendo la necesidad de los niños, jóvenes y adultos tomaron la decisión de conformar esta asociación civil con el fin de promover el desarrollo de la cultura y la educación permanente.
                  </div>
                  <div class="ong-name">Biblioteca Popular Astra</div>
                  <div class="ong-contact">
                    Simeon Savino 1120 - Astra<br>
                    (297) 486-5057<br>
                    hola@labibliotecadeastra.com<br>
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/labibliotecadeastra" target="_blank"><span class="facebook"></span></a>
                  <a href="www.labibliotecadeastra.com" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-orange">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/elumduham.jpg">
                  </div>
                  <div class="ong-description">
                    Nuestra misión es el desarrollo de la comunidad mediante la organizaciòn de actividades culturales y recreativas, asì como el prèstamo de libros
                  </div>
                  <div class="ong-name">Biblioteca Popular Elum Duham</div>
                  <div class="ong-contact">
                    Av. Polonia 1785<br>
                    2976235857<br>
                    elumduham@yahoo.com.ar
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/Biblioteca-Popular-ELUM-DUHAM-Dar-Memoria-189284524476152" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-green">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/tupapel.png">
                  </div>
                  <div class="ong-description">
                    Plantamos arboles y sembramos conciencia...<br><br>
                    Desde el comienzo (mediados de 2014) a la fecha encaminamos el reciclado de mas de 48.000 kg de papel y sumamos 225 nuevos arboles a la ciudad.
                  </div>
                  <div class="ong-name">Tu papel es muy importante</div>
                  <div class="ong-contact">
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/groups/668232696598054" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-pink">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/ceviof.jpg">
                  </div>
                  <div class="ong-description">
                    Brindamos asesoramiento, información y acompañamiento en temas de Violencia Familiar, Maltrato infantil y Abuso sexual Infantil, tanto a víctimas como a referentes de la comunidad e instituciones.
                    <br><br>
                    Además, realizamos acciones de capacitación, investigación y difusión de la problemática de la Violencia Familiar, tendientes a la sensibilización y la creación de redes de contención.
                  </div>
                  <div class="ong-name">Centro de Violencia Familiar</div>
                  <div class="ong-contact">
                    procapi@yahoo.com.ar
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/PROCAPI-143994762360094" target="_blank"><span class="facebook"></span></a>
                  <a href="http://centroderecursos.com.ar" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-purple">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/patioabierto.png">
                  </div>
                  <div class="ong-description">
                    Nuestro primer objetivo es tratar de mejorar la situación en la que se encuentran los niños y adolescentes de los barrios Pietrobelli, Las Flores, La Floresta y Balcon del Paraíso, los cuales viven inmersos en una realidad de mucho conflicto y marginados del sistema social, cultural y educativo.
                  </div>
                  <div class="ong-name">Patio Abierto</div>
                  <div class="ong-contact">
                    Alem y Huergo<br>
                    (297) 446-2886​<br>
                    contacto@patioabierto.org
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/CentroJuvenilPatioAbierto" target="_blank"><span class="facebook"></span></a>
                  <a href="http://www.patioabierto.org/" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-blue">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/felizentudia.gif">
                  </div>
                  <div class="ong-description">
                    Nacimos hace dos años, en setiembre de 2014, con el propósito de festejar cumpleaños a chicos de familias de bajos recursos. Los realizamos gracias a las donaciones de la gente que ya conoce de nuestra actividad y de la que siempre se va sumando a medida que van conocciendo lo que hacemos.
                  </div>
                  <div class="ong-name">Feliz en tu día</div>
                  <div class="ong-contact">
                    (297) 414-7197<br>
                    (297) 623-9448
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/Felizentudiacomodoro" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-orange">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/fundacioncrecer.jpg">
                  </div>
                  <div class="ong-description">
                    La discapacidad no es un problema individual de la persona con discapacidad , sino los obstáculos y barreras que crea la sociedad impidiendo su inclusión.<br><br>
                    Desde 1986 trabajamos para Incluir a Personas con Discapacidad y niños con Necesidades Educativas Especiales y sus familias a la comunidad, por medio de cinco programas de atención integral: Consultorio de Especialidades Pediátricas, Centro Ocupacional, Centro de Rehabilitación, Centro de aprendizaje y Fortalecimiento Familiar.
                  </div>
                  <div class="ong-name">Fundación Crecer</div>
                  <div class="ong-contact">
                    Hipólito Yrigoyen 846<br>
                    (297) 446-4067<br>
                    (297) 446-7402<br>
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/fundacioncrecer.comodororivadavia" target="_blank"><span class="facebook"></span></a>
                  <a href="http://www.crecerfundacion.org.ar" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-green">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/rotary.png">
                  </div>
                  <div class="ong-description">
                    Institución Internacional Solidaria con la amplio programa de actividades comunitarias
                  </div>
                  <div class="ong-name">Rotary Club C.R. Oeste</div>
                  <div class="ong-contact">
                    San Martín 1584<br>
                    (297) 406-0732​<br>
                    rotaryoeste@comodoro.coop
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-pink">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/adc.jpg">
                  </div>
                  <div class="ong-description">
                    Este grupo surge como espacio integrador y de colaboración hacia un   voluntariado ambiental, ante la necesidad de abordar una problemática cada vez en aumento como la creación clandestina de “mini basurales” constituidos por residuos sólidos depositados en áreas abiertas (locaciones petroleras, baldíos y al costado de caminos) en los cerros Viteau y Hermite del Barrio Gral. Mosconi.
                  </div>
                  <div class="ong-name">Amigos del cerro</div>
                  <div class="ong-contact">
                    B° General Mosconi<br>
                    (297) 400-0635<br>
                    (297) 422-3300
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/Felizentudiacomodoro" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-purple">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/rotary.jpg">
                  </div>
                  <div class="ong-description">
                    Rotary se compone de un millón doscientos mil socios, entre los cuales encontrarás a vecinos, amigos y líderes comunitarios, que unidos impulsan cambios para mejorar la vida en la propia localidad y el mundo entero.
                    <br><br>
                    Las Prioridades estratégicas de RI:
                    <ul>
                      <li>Fomento de la paz, prevención y resolución de conflictos.</li>
                      <li>Prevención y tratamiento de enfermedades.</li>
                      <li>Suministro de agua y saneamiento.</li>
                      <li>Salud materno-infantil.</li>
                      <li>Alfabetización y salud básica.</li>
                      <li>Desarrollo económico e integral de la comunidad.</li>
                    </ul>
                  </div>
                  <div class="ong-name">Rotary</div>
                  <div class="ong-contact">
                    Figueroa Alcorta 564<br>
                    (297) 404-4487<br>
                    rotary.comodoro@gmail.com
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/RotaryComodoro" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-blue">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/leones.jpg">
                  </div>
                  <div class="ong-description">
                    La familia Leonística está compuesta por más de 1.400.000 hombres, mujeres y jóvenes, diferentes en muchos aspectos, pero con un mismo objetivo: producir cambios positivos en nuestras comunidades.
                    <br><br>En la actualidad hay más de 46.000 Clubes de Leones ubicados en 207 países y áreas geográficas, desde allí se preocupan por las necesidades de las comunidades locales y del mundo sirviendo con alegría a quienes más necesitan.
                  </div>
                  <div class="ong-name">Club de Leones de Rada Tilly</div>
                  <div class="ong-contact">
                    Combate de Quilmes 729<br>
                    (297) 15-476-0076
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/Club-De-Leones-Rada-Tilly-1432636833708030" target="_blank"><span class="facebook"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-orange">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/cruzroja.jpg">
                  </div>
                  <div class="ong-description">
                    Somos una asociación civil de bien común, humanitaria y de carácter voluntario. Fundada el día 10 de junio de 1880 y constituida de acuerdo con los Convenios de Ginebra de 1949.<br><br>
                    Tenemos por Misión Institucional la de: contribuir a mejorar la vida de las personas, en especial aquellas que se encuentren en situación de vulnerabilidad.
                    Para el cumplimiento de la misma desarrollará esencial y necesariamente, acciones humanitarias destinadas a personas y comunidades vulnerables.<br><br>
                    En el pais existen 65 Filiales, la de Comodoro fue creada el 01 de diciembre de 1944.
                  </div>
                  <div class="ong-name">Cruz Roja Argentina</div>
                  <div class="ong-contact">
                    Av. Del Libertador 659 - Km 3<br>
                    (297) 455-9374<br>
                    c-rivadavia@cruzroja.org.ar
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/CruzRoja.FilialComRiv" target="_blank"><span class="facebook"></span></a>
                  <a href="www.cruzroja.org.ar" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-green">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/alco.jpg">
                  </div>
                  <div class="ong-description">
                    ALCO (Organización de Lucha Contra la Obesidad) es un grupo de autoayuda mutua que brinda apoyo a personas con sobrepeso, obesidad y problemas alimentarios.
                  </div>
                  <div class="ong-name">ALCO</div>
                  <div class="ong-contact">
                  </div>
                </div>
                <div class="ong-box-links">
                  <a href="https://www.facebook.com/ALCO-Comodoro-153509769033" target="_blank"><span class="facebook"></span></a>
                  <a href="http://www.fundacionalco.org" target="_blank"><span class="web"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-pink">
                <div class="ong-box-container">
                  <div class="ong-image">
                    <img src="img/ongs/lombricultura.bmp">
                  </div>
                  <div class="ong-description">
                    Grupo creado para difundir la técnica de lombricultura con el objetivo de reutilizar los residuos orgánicos generados, que constituyen un 50% de nuestra basura diaria.
                    <br><br>
                    Se brinda asesoramiento, pero también se estimula que los participantes se ayuden entre sí mostrando sus experiencias y regalando lombrices a para que otros puedan sumarse a la técnica.
                  </div>
                  <div class="ong-name">Lombricultura</div>
                  <div class="ong-contact"></div>
                </div>
                <div class="ong-box-links"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col l6 m12 s12">
            <p class="center">
              Por dudas y sugerencias<br>
              <b>comunicacion@crecerfundacion.org.ar</b>
            </p>
            <p class="center author">
              <b class="i-white">Made with <span class="i-red i-heart">&#9825;</span> by</b><br>
              <a href="http://www.indary.org" target="_blank"><span class="indary i-white">Indary!</span></a>
            </p>
          </div>
          <div class="col l6 m12 s12">
            <div class="fb-page" data-href="https://www.facebook.com/exposolidariacr/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/exposolidariacr/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/exposolidariacr/">Expo Solidaria</a>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
