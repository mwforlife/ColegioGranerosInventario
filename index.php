<?php
session_start();
if(isset($_SESSION['id_usu'])){
    header("Location: Inventario");

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <!-----------Configuration------------------->
    <meta charset="UTF-8">
    <meta name="author" content="Wilkens Mompoint">
    <meta name="application-name" content="Colegio Graneros - Sistema de Inventario">
    <title>Sistema de  Inventario - Login</title>
    
    
    <!-------------Stylesheets---------------------->
    <link rel="icon" type="icon" href="img/logo/logo.jpg">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main_styles.css">
</head>
<body>
    
   <main class="container">
       <div class="login">
           <div class="login__content">
               <div class="borde__izquierdo">
                    <img src="img/logo/log.png" width="150" alt="">
                   <h3 class="login__title">Colegio Graneros</h3>
                   <h4 class="login__name">Sistema de Inventario</h4>
               </div>
               <div class="borde__derecho">
                  <form action="" class="form__login">    
                   <img src="img/svg__icon/login.svg" alt="" class="login__logo">
                   <input type="text" id="txtusu" placeholder="Nombre de Usuario" class="input__form input__form--user">
                   <input type="password" id="txtpas" placeholder="Contraseña" class="input__form input__form--password">
                   <span class="reset">¿Olvidaste tu Contraseña? <a href="#">Restablecer</a></span>
                   <button type="button" onclick="login()" class="submit__form">LOGIN</button>
                  </form>
                   
               </div>
           </div>
       </div>
   </main>
    
    
    <!-------------JAVASCRIPTS-------------------->
    <script src="js/jquery-3.6.0.js"></script>
    <!--<script src="js/animation.main.js"></script>-->
    <script src="js/anime.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.animatedheadline.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/animation-text-wrap.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/process/login__main.js"></script>
</body>
</html>