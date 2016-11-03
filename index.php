<?php
  define('BASE_URL', 'http://exposolidaria.com');
  function base_url($path=''){
    return BASE_URL . '/' . $path;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Indary">
    <meta name="theme-color" content="#12356b">
    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@exposolidara">
    <meta name="twitter:creator" content="@indary">
    <meta name="twitter:title" content="Expo Solidaria">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:src" content="<?php echo base_url('img/logo.png')?>">
    <!-- FACEBOOK -->
    <meta property="og:site_name" content="Expo Solidaria">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Exposolidaria">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo base_url('img/logo.png')?>">
    <!-- G++ -->
    <meta itemprop="name" content="Exposolidaria">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo base_url('img/logo.png')?>">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="libs/wow/css/libs/animate.css" type="text/css">
    <link rel="stylesheet" href="libs/indary/css/indary.css" type="text/css">
    <script src="libs/jquery/jquery-1.11.3.min.js"></script>
    <script src="libs/materialize/js/materialize.min.js"></script>
    <script src="libs/wow/wow.min.js"></script>
    <script src="js/global.js"></script>
  </head>
  <body>
    <header>
      <nav id="nav">
        <div class="nav-wrapper">
          <div class="brand-logo center">
          </div>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="menu" class="right hide-on-med-and-down">
            <li class="menu-item" data-target="bg">INICIO</li>
          </ul>
          <ul class="side-nav bg-blue" id="mobile-demo">
            <li class="menu-item" data-target="bg">INICIO</li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="bg">
      <div class="override">
        <div class="container center">
          <h1 class="">#exposolidaria</h1>
          <h4 class="expo-date">04 DE DICIEMBRE - COMODORO RIVADAVIA</h4>
          <div id="timer"></div>
        </div>
      </div>
    </div>
    <div id="full-wrapper">
      <section id="about" class="">
        <div class="container">
          <h5 class="title">ACERCA DE</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a orci eu orci lacinia finibus. Aenean et mi eros. Nam in sodales dolor. Integer in pretium eros, ac finibus magna. Suspendisse potenti. Morbi sodales lorem eu lacus rutrum, a imperdiet orci consectetur. Vestibulum congue orci nisl, ut aliquam metus mattis ut. Nulla nibh sapien, varius ac gravida et, varius ut arcu. Aliquam vel rhoncus lectus. Proin dolor dui, placerat in augue vel, vestibulum fringilla nisl.</p>
          <p>Nam quis augue posuere ante tristique semper. Mauris eu tellus dui. Nulla rutrum eros eu leo facilisis malesuada. Duis non luctus lacus. Nunc venenatis faucibus tortor, sit amet faucibus sem malesuada eget. Donec venenatis mauris a sapien rutrum, vel dignissim sapien cursus. Praesent vel tristique eros. Nunc ultricies blandit tellus, ut lacinia massa bibendum a. Integer at magna vitae lorem tincidunt sodales tincidunt vestibulum nibh. Phasellus congue est odio, in luctus purus laoreet et. Suspendisse eu sem libero. Nullam posuere nunc ligula, eget gravida elit venenatis et. Nullam at ultrices quam. Sed interdum, orci et varius tristique, mi urna lacinia felis, ut maximus ligula mauris eget purus. Nunc egestas eget lorem at elementum.</p>
        </div>
      </section>
      <section id="program" class="">
        <div class="container">
          <h5 class="title gray">PROGRAMA</h5>
          <div class="program-box">
            <div class="program-item">
              <div class="hour">Hora: 14:00hs</div>
              <div>Apertura</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 14:30hs</div>
              <div>Barrileteada</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 14:30hs</div>
              <div>Cuenta cuentos</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 16:00hs</div>
              <div>Charla medio ambiente</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 17:00hs</div>
              <div class="name">Charla fortalecimiento a la organizaciones</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 17:40hs</div>
              <div>Charla motivacional</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 18:40hs</div>
              <div>Tango (Amigos del Tango)</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 18:40hs</div>
              <div>Banda de Rock (El Reflejo)</div>
            </div>
            <div class="program-item">
              <div class="hour">Hora: 18:40hs</div>
              <div>Banda de Rock</div>
            </div>
          </div>
        </div>
      </section>
      <div class="quote">
        <div class="quote-content">
          <div class="container center">
            <p>FRASE</p>
          </div>
        </div>
      </div>
      <section id="ongs">
        <div class="container">
          <h5 class="title">PARTICIPAN</h5>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-blue">
                <div class="ong-image">
                  <img src="img/ongs/honrarlavida.jpg">
                </div>
                <div class="ong-description">
                  Honrar la vida es una fundación en trámite conformada por un grupo de pacientes trasplantados, en lista de espera y en diálisis que nos reunimos con la misión de promover la donación de órganos en la ciudad de Comodoro Rivadavia.
                  Brindamos contención y asistencia a los pacientes trasplantados y en espera. Nos ocupamos de sus  necesidades. Estamos abocados especialmente a hacer cumplir con la Ley de trasplante.
                </div>
                <div class="ong-name">Honrar La Vida</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-orange">
                <div class="ong-image">
                  <img src="img/ongs/payamedicos.jpg">
                </div>
                <div class="ong-description">
                  Payamedicos Asociacion Civil es una ONG sin fines de lucro fundada en el año 2002 por el Dr Jose Pellucchi.<br>
                  Su mision es contribuir a la salud emocional del paciente hospitalizado. Para tal fin se utilizan recursos psicologicos y artisticos relacionados con el payaso teatral, juegos, musica, teatro, magia y el arte humoristico en general. Los Payamedicos realizan intervenciones escenico-terapeuticas con un abordaje a traves de la tecnica del payaso teatral adaptandola al ambito hospitalario con una etica, estetica y deontologia propia. El grupo esta cartografiado por psiquiatras y psicologos con amplia experiencia en niños y adultos internados por diversas patologias organicas.
                </div>
                <div class="ong-name">Payamedicos</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-green">
                <div class="ong-image">
                  <img src="img/ongs/voluntariado.png">
                </div>
                <div class="ong-description">
                  Somos un grupo de personas que donan tiempo y dedicación al servicio del paciente internado y familiares.<br>
                  El voluntariado es la organización de personas con gran dosis de humanidad que ofrece un servicio desinteresado, constante, y eficaz. Nuestro objetivo es: dar amor y consuelo al enfermo,colaborar con el paciente y sus familiares, escuchar las angustias del paciente., ayudar a afrontar su enfermedad sin sentirse solo.
                </div>
                <div class="ong-name">Voluntariado Hospital Regional</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-pink">
                <div class="ong-image">
                  <img src="img/ongs/corazoncitofeliz.jpg">
                </div>
                <div class="ong-description">
                  Somos un grupo de personas que aprecian la vida, que entienden la solidaridad como una actitud constante.<br>
                  Buscamos crear un lazo entre las familias y que ellas sean las protagonistas de transformar sus vidas.
                </div>
                <div class="ong-name">Juntos por un corazoncito feliz</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-purple">
                <div class="ong-image">
                  <img src="img/ongs/apaec.jpg">
                </div>
                <div class="ong-description">
                  El objetivo fundamental de la Institución es la prevención, concientización y detección temprana de los distintos cánceres que hoy afectan a la población del mundo, como también la asistencia a los pacientes durante su  tratamiento, especialmente a quienes  no poseen obra social.
                </div>
                <div class="ong-name">APAeC</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-blue">
                <div class="ong-image">
                  <img src="img/ongs/astra.jpg">
                </div>
                <div class="ong-description">
                  Fundada en el año 2007 por un grupo de los vecinos, comprometidos con la realidad social y con la cultura, que viendo la necesidad de los niños, jóvenes y adultos tomaron la decisión de conformar esta asociación civil con el fin de promover el desarrollo de la cultura y la educación permanente.
                </div>
                <div class="ong-name">Biblioteca Popular Astra</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-orange">
                <div class="ong-image">
                  <img src="img/ongs/elumduham.jpg">
                </div>
                <div class="ong-description">
                  Nuestra misiòn es el desarrollo de la comunidad mediante la organizaciòn de actividades culturales y recreativas, asì como el prèstamo de libros
                </div>
                <div class="ong-name">Biblioteca Popular Elum Duham</div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-green">
                <div class="ong-image">
                  <img src="img/ongs/#">
                </div>
                <div class="ong-description">

                </div>
                <div class="ong-name"></div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="ong-box ong-box-purple">
                <div class="ong-image">
                  <img src="img/ongs/#">
                </div>
                <div class="ong-description">

                </div>
                <div class="ong-name"></div>
                <div class="ong-contact">
                  Dirección<br>
                  Telefono<br>
                  email<br>
                  Facebook | Twitter
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2778.4452858240275!2d-67.4747542706295!3d-45.86240013634444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8af8c1ef0469af6!2sCentro+de+Informacion+Publica!5e0!3m2!1ses-419!2sar!4v1477261571090" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
    </div>
    <footer id="contact">
      <div class="container">
        <div class="row">
          <div class="title">DATOS  DE CONTACTO</div>
          <div class="col l6 m6 s12">
            <div class="row">
            </div>
          </div>
          <div class="col l6 m6 s12">
            <ul id="contact-list">
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="center">
        <div class="container">
          <div><span class="indary">Indary</span></div>
        </div>
      </div>
    </footer>
    <script>
      $('.ong-box').on('mouseenter', function(){
        $(this).find('.ong-description').css('min-height', $(this).height()).css('max-height', $(this).height()).fadeIn(1000);
      }).on('mouseleave', function(){
        $(this).find('.ong-description').fadeOut(500);
      });
    </script>
  </body>
</html>
