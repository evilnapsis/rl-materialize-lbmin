
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Registro y Login con Materialize y Lb Min</title>

  <!-- CSS  -->
  <link href="materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="res/js/jquery.min.js"></script>

<script type="text/javascript" src="res/jquery.flexslider-min.js"></script>
<link rel="stylesheet" type="text/css" href="res/flexslider.css">

<link rel="stylesheet" type="text/css" href="res/remodal.css">
<link rel="stylesheet" type="text/css" href="res/remodal-default-theme.css">
<script type="text/javascript" src="res/remodal.js"></script>


</head>
<body>


  <nav class="indigo" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="./" class="brand-logo">REGISTRO Y LOGIN</a>
      <ul class="right hide-on-med-and-down">
        <?php if(isset($_SESSION["user_id"])):?>
        <li><a href="./?view=home">INICIO</a></li>


        <li><a href="./?action=access&opt=logout">SALIR</a></li>
      <?php else:?>
                <li><a href="./">INICIO</a></li>
        <li><a href="./?view=register">REGISTRO</a></li>
      <?php endif; ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="./">INICIO</a></li>
        <li><a href="./?view=register">REGISTRO</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<?php View::load("index");?>
   <!--
  <footer class="page-footer orange">
 
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
      </div>
    </div>
  </footer>

  -->
  <!--  Scripts-->
  <script src="materialize/js/materialize.js"></script>
<script>
  
  $(document).ready(function(){
  $(".dropdown-trigger").dropdown();
    $('select').formSelect();
  });
</script>
  </body>
</html>
