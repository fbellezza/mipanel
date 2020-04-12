<<<<<<< HEAD
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Panel Federico Bellezza</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--
  plugins js
  -->
  
  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>

</head>

<body class="hold-transition sidebar-mini ">
<!-- Site wrapper -->
<div class="wrapper">

  <?php 

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] =="ok") {
    
    echo '<div class="wrepper">';

      include "modulos/head.php";//incluyo el archivo head que tiene el encabezado del AdminLTE

      include "modulos/menuLateral.php";//incluyo el modulo del menu lateral

      if(isset($_GET["ruta"])){
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "agenda" ||
            $_GET["ruta"] == "perfil" ||
            $_GET["ruta"] == "logout" ||
            $_GET["ruta"] == "salir" ) {
          
          include "modulos/".$_GET["ruta"].".php";//incluyo a $_GET["ruta"] para que me traiga el archivo que le paso por variable get
        }else{
          include "modulos/404.php";
        }
        }else{
          include "modulos/inicio.php";
      }

      include "modulos/footer.php";//invluyo el modulo footer 

     echo'</div>';
  }else{
      include "modulos/login.php";//invluyo el modulo login si $_SESSION es != ok 

  }
   ?>
  


</div>
<!-- ./wrapper -->

<!-- js propio -->
  <script src="vistas/js/plantilla.js"></script>
</body>
</html>
=======
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Panel Federico Bellezza</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--
  plugins js
  -->
  
  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>

</head>

<body class="hold-transition sidebar-mini ">
<!-- Site wrapper -->
<div class="wrapper">

  <?php 

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] =="ok") {
    
    echo '<div class="wrepper">';

      include "modulos/head.php";//incluyo el archivo head que tiene el encabezado del AdminLTE

      include "modulos/menuLateral.php";//incluyo el modulo del menu lateral

      if(isset($_GET["ruta"])){
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "agenda" ||
            $_GET["ruta"] == "perfil" ||
            $_GET["ruta"] == "logout" ||
            $_GET["ruta"] == "salir" ) {
          
          include "modulos/".$_GET["ruta"].".php";//incluyo a $_GET["ruta"] para que me traiga el archivo que le paso por variable get
        }else{
          include "modulos/404.php";
        }
        }else{
          include "modulos/inicio.php";
      }

      include "modulos/footer.php";//invluyo el modulo footer 

     echo'</div>';
  }else{
      include "modulos/login.php";//invluyo el modulo login si $_SESSION es != ok 

  }
   ?>
  


</div>
<!-- ./wrapper -->

<!-- js propio -->
  <script src="vistas/js/plantilla.js"></script>
</body>
</html>
>>>>>>> 04f803d... 'v1,2'
