<?php
session_start();
require_once '../controller/controller.php';
    if (!isset($_SESSION['id_usu'])) {
        header('Location: ../index.php');
    }

    $c = new Controller();
?>


<!DOCTYPE html>
<html lang="es">
<head>
   <!-----------Configuration------------------->
    <meta charset="UTF-8">
    <meta name="author" content="Wilkens Mompoint">
    <meta name="application-name" content="Colegio Graneros - Sistema de Inventario">
    <title>Sistema de  Inventario - Colegio Graneros</title>
    
    
    <!-------------Stylesheets---------------------->
    <link rel="icon" type="icon" href="../img/logo/logo.jpg">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/Datables_bootstap.css">
    <link rel="stylesheet" href="css/inventario_main_styles.css">
</head>
<body>


<script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/anime.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="js/Databales_bootstap5.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/inventario_main_js.js"></script>
    <script src="../js/MooTools-Core-1.6.0.js"></script>
    <script src="../js/process/inventario__insert__process.js"></script>
    <script src="../js/process/inventario__list__process.js"></script>
    <script src="../js/process/inventario__delete__process.js"></script>
    <script src="../js/process/inventario__modify__process.js"></script>
    <script src="../js/process/Inventario__details__component.js"></script>
    <script src="../js/process/invertario__search__process.js"></script>



    
    <div class="border__left">
    <div class="border__left-content">
        <div class="logo__picture">
            <img src="../img/logo/log.png" alt="" class="logo__img animate__animated animate__zoomInLeft">
        </div>

        <nav class="menu__left">
            <ul class="menu__items">
                <li class="menu__item"><a href="" class="menu__link"><img src="../img/svg__icon/dashboard.svg" alt="" class="item__img">Dashboard</a></li>

                <li class="menu__item"><a href="#" class="menu__link"><img src="../img/svg__icon/component.svg" alt="" class="item__img">Componentes</a>
                    <ul class="submenu__items">
                        <?php
                            if ($_SESSION['tipo'] == "Administrador") {
                                echo '<li class="submenu__item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#addcomponent" class="submenu__link">Agregar Componente</a></li>';

                            }
                                
                            
                        ?>
                        <li class="submenu__item"><a href="#" class="submenu__link" type="button" data-bs-toggle="modal" data-bs-target="#componentlist">Lista de componentes</a></li>
                    </ul>
                </li>

                <li class="menu__item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#registrarubicacion"  class="menu__link"><img src="../img/svg__icon/location.svg" alt="" class="item__img" >Ubicacion</a>

                </li>

                <li class="menu__item"><a href="#" class="menu__link"><img src="../img/svg__icon/docente.svg" alt="" class="item__img">Docentes</a>
                    <ul class="submenu__items">
                        <?php
                            if ($_SESSION['tipo'] == "Administrador") {
                                echo '<li class="submenu__item"><a href="#"  type="button" data-bs-toggle="modal" data-bs-target="#registrardocente"  class="submenu__link">Registrar Docentes</a></li>';
                            }

                        ?>
                        <li class="submenu__item"><a href="" class="submenu__link"  type="button" data-bs-toggle="modal" data-bs-target="#listardocente" >Lista de Docentes</a></li>
                    </ul>
                </li>

                <li class="menu__item"><a href="#" class="menu__link"><img src="../img/svg__icon/ubicacion.svg" alt="" class="item__img">Ajustes</a>
                    <ul class="submenu__items">
                        <li class="submenu__item"><a href="#"  type="button" data-bs-toggle="modal" data-bs-target="#miperfil"  class="submenu__link">Perfil de Usuario</a></li>
                    </ul>
                </li>
                
                <li class="menu__item"><a href="#" class="menu__link" type="button" data-bs-toggle="modal" data-bs-target="#registrarprestamo"><img src="../img/svg__icon/credit.svg" alt="" class="item__img"> Prestamos</a></li>
                
                

                <?php
                if ($_SESSION['tipo'] == "Administrador") {
                    echo '
                    <li class="menu__item"><a href="#" class="menu__link"><img src="../img/svg__icon/categorias.svg" alt="" class="item__img"> Categorias</a>
                        <ul class="submenu__items">
                            <li class="submenu__item"><a href="#" class="submenu__link" type="button" data-bs-toggle="modal" data-bs-target="#registrarestado">Estado</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__link" type="button" data-bs-toggle="modal" data-bs-target="#registrartipo">Tipo</a></li>
                            <li class="submenu__item"><a href="#" class="submenu__link" type="button" data-bs-toggle="modal" data-bs-target="#registrarstatus"> Status</a></li>
                        </ul>
                    </li>   
                    <li class="menu__item"><a href="#" class="menu__link" type="button" data-bs-toggle="modal" data-bs-target="#registrarusuarios"><img src="../img/svg__icon/user1.svg" alt="" class="item__img"> Usuarios</a></li>';
                }
                ?>
              </ul>
        </nav>
        </div>
    </div>
    
    <div class="border__right">
        <!----------------MENU HEADER-------------->
        <header class="border__rigth--header">
            <button class="menu__button" onclick="Show__hide()" value="1">
                <img src="../img/svg__icon/menu.svg" alt="" class="menu__button--img">
            </button>
            
            <div class="header__menu">
               <div class="search">
                  <form action="#" id="FormBuscar" >
                   <input type="text" id="inputBuscar" name="campo" placeholder="Buscar...." class="form-control buscar">
                  </form>
               </div>
                <ul class="header__menu--items">
                    <li class="header__menu--item"><a onclick="kaishi()" href="#" class="header__menu--link"><img src="../img/svg__icon/fullscreen.svg" alt="" class="header__menu--img" title="Pantalla Completa"></a></li>
                    
                    <li class="header__menu--item"><a href="#" title="Reporte" type="button" data-bs-toggle="modal" data-bs-target="#modalreport" class="header__menu--link"><img src="../img/svg__icon/report.svg" alt="" class="header__menu--img"></a></li>
                    
                    <li class="header__menu--item"><a href="#" class="header__menu--link"><img src="../img/svg__icon/user1.svg" alt="" class="header__menu--img"> <?php echo $_SESSION['nombre']?> <img src="../img/svg__icon/arrowbottom.svg" alt=""></a>
                    <ul class="header__submenu__items">
                        <li class="header__submenu__item"><a href="close.php" class="header__submenu__link">Cerrar Sesion</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </header>
        
        <main class="containr">
            <div class="" id="detallesbuscar">

            </div>
            <p class="welcome">Bienvenido <span class="user__name"><?php echo $_SESSION['nombre']?></span></p>
            
            <div class="componentes row">
               
                <div class="recientes container__bg card col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h3 class="card__title text-white">Componentes</h3>
                    <table id="recent-component" class="table table-dark table-striped text-center">
                       <thead>
                        <tr>
                            <th>ID</th>
                            <th>Componente</th>
                            <th>Estado</th>
                            <th>Ubicacion</th>
                            <th>Detalles</th>

                            <?php
                            if ($_SESSION['tipo'] == "Administrador") {
                                echo '<th>Eliminar</th>';
                            }
                            ?>
                        </tr>
                     </thead>
                    <tbody>
                        <?php
                        $lista = $c->ListarComponentes1();
                        
                        if (count($lista)>0) {
                            for ($i=0; $i < count($lista); $i++) { 
                                $CGC = $lista[$i];
                                echo "<tr>";
                                echo "<td>".$CGC->getId()."</td>";
                                echo "<td>".$CGC->getNombre()."</td>";
                                echo "<td>".$CGC->getEstado()."</td>";
                                echo "<td>".$CGC->getUbicacion()."</td>";
                                echo "<td><span class='badge bg-success'><a href='#' type='button' data-bs-toggle='modal' data-bs-target='#modaldetails' onclick='details(".$CGC->getId().")'><img src='../img/svg__icon/details.svg' alt=''></a></span></td>";
                                
                                if ($_SESSION['tipo'] == "Administrador") {
                                    echo "<td><span class='badge bg-danger'><a href='#' onclick='delete__component(".$CGC->getId().")'><img src='../img/svg__icon/delete.svg' alt=''></a></span></td>";
                                }
                                 echo "</tr>";

                                
                            }
                        }else{
                            echo "<tr>";
                            echo "<td colspan='7'><h3 class='text-center'>No hay componentes registrados</h3></td>";
                            echo "</tr>";
                        }
                        ?>


                    </tbody>
                    </table>
                </div>
            </div>

            <div class="componentes row">
                <div class="card col-md-12 col-lg-12 col-xl-6 container__bg content">
                   <h3 class="card__title text-white">Componentes en Prestamos</h3>
                    <table class="table table-dark table-striped">
                        <thead>
                           <tr>
                            <th>ID</th>
                            <th>Componente</th>
                            <th>Prestatario</th>
                            <th>Fecha</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            $lista = $c->ListarPrestamos();
                            if (count($lista)>0) {
                                for ($i=0; $i < count($lista); $i++) { 
                                    $CGC = $lista[$i];
                                    echo "<tr>";
                                    echo "<td>".$CGC->getId()."</td>";
                                    echo "<td>".$CGC->getId_com()."</td>";
                                    echo "<td>".$CGC->getId_doc()."</td>";
                                    echo "<td>".$CGC->getFecha_prest()."</td>";
                                    echo "</tr>";
                                }
                            }else{
                                echo "<tr>";
                                echo "<td colspan='4'><h6 class='text-center'>No hay prestamos registrados</h6></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                
                
                <div class="bodega container__bg col-md-12 col-lg-12 col-xl-6">
                    <h3 class="card__title text-white">Componentes en bodega</h3>
                    <table class="table table-dark table-striped table-responsive text-center">
                        <thead >
                            <tr>
                                <th>Folio</th>
                                <th>Componente</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            $lista = $c->listarcomponentesEnBodega();
                            if (count($lista)>0) {
                                for ($i=0; $i < count($lista) ; $i++) { 
                                    $CGC = $lista[$i];
                                    echo "<tr>";
                                    echo "<td>".$CGC->getFolio()."</td>";
                                    echo "<td>".$CGC->getNombre()."</td>";
                                    echo "<td>".$CGC->getUbicacion()."</td>";
                                    echo "</tr>";
                                }
                            }else{
                                echo "tr>";
                                echo "<td colspan='3'>No hay componentes en bodega</td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="card col-md-12 col-lg-12 col-xl-12 container__bg content">
                   <h3 class="card__title text-white">Componentes dado de baja</h3>
                    <table class="table table-dark table-striped">
                        <thead>
                           <tr>
                            <th>ID</th>
                            <th>Componente</th>
                            <th>Motivo de Baja</th>
                            <th>Fecha</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                                $lista = $c->listardebaja();
                                if (count($lista)>0) {
                                    for ($i=0; $i < count($lista) ; $i++) { 
                                        $CGC = $lista[$i];
                                        echo "<tr>";
                                        echo "<td>".$CGC->getId()."</td>";
                                        echo "<td>".$CGC->getId_com()."</td>";
                                        echo "<td>".$CGC->getMotivo()."</td>";
                                        echo "<td>".$CGC->getFecha()."</td>";
                                        echo "</tr>";
                                    }
                                }else{
                                    echo "<tr>";
                                    echo "<td colspan='4'><h6 class='text-center'>No hay componentes dado de baja</h6></td>";
                                    echo "</tr>";
                                }                      
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
            
                
                    
                        
            <div class="footer">
                <p class="copy animate__animated animate__zoomInRight">&copy ColegioGraneros | Desarrollado por Wilkens Mompoint</p>
            </div>    
        </main>
        
        
        
        
    </div>

    
    

<!-- Modal Registrar componentes -->
<div class="modal fade" id="addcomponent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title animate__animated animate__zoomInDown"><img src="../img/svg__icon/new.svg" alt="">Nuevo Componente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="CGComponentRegister" action="">
      <div class="modal-body">
       
        <div class="row">
            <div class="col-md-6">
                <label for="">Componente:</label>
                <input type="text" id="CGComponente" name="CGComponente" class="form-control" placeholder="Ingrese el componente" required min="2">
            </div>
            
            <div class="col-md-6">
                <label for="">Estado:</label>
                <select id="CGEstadoComponente" name="CGEStadoComponente" class="form-control">
                    <option value="0" selected>Seleccione el estado</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="">Ubicacion:</label>
                <select name="CGUbicacion" id="CGUbicacion" class="form-control">
                    <option value="0" selected>Seleccione una unicacion</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="">Tipo de Componente:</label>
                    <select name="CGTipoComponente" id="CGTipoComponente" class="form-control">
                        <option value="0" selected>Seleccione el Tipo</option>
                    </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <label for="">Status</label>
                <select name="CGStatus" id="CGStatus" class="form-control">
                    <option value="0" selected>Seleccione el status</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Descripcion</label>
                <textarea name="CGDescripcion" id="CGDescripcionComponente" cols="30" rows="10" class="form-control"></textarea>
            </div>
        
            <div class="col-md-6">
                    <label for="">Observacíon</label>
                    <textarea name="CGObservacion" id="CGObservacionComponente" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
        
      </div>
      <div class="modal-footer">
       <button type="reset" class="btn btn-warning">Restablecer</button>
        <button type="submit" class="btn btn-success">Registrar</button>
      </div>
          
      </form>
      
    </div>
  </div>
</div>

  
     
     <!-- Modal Listar Componente-->
<div class="modal fade" id="componentlist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="../img/svg__icon/list.svg" alt="">Lista de Componentes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <table class="table table-dark table-striped text-center">
                       <thead>
                        <tr>
                            <th>ID</th>
                            <th>Componente</th>
                            <th>Estado</th>
                            <th>Ubicacion</th>
                            <th>Detalles</th>
                            <?php
                            if ($_SESSION['tipo']=='Administrador') {
                               echo '<th>Eliminar</th>';
                            }
                            ?>
                        </tr>
                     </thead>
                    <tbody>
                        <?php
                        $lista = $c->ListarComponentes1();

                        if (count($lista)>0) {
                            for ($i=0; $i < count($lista); $i++) { 
                                $CGC = $lista[$i];
                                echo "<tr>";
                                echo "<td>".$CGC->getId()."</td>";
                                echo "<td>".$CGC->getNombre()."</td>";
                                echo "<td>".$CGC->getEstado()."</td>";
                                echo "<td>".$CGC->getUbicacion()."</td>";
                                echo "<td><span class='badge bg-success'><a href='#' type='button' data-bs-toggle='modal' data-bs-target='#modaldetails' onclick='details(".$CGC->getId().")'><img src='../img/svg__icon/details.svg' alt=''></a></span></td>";
                                if ($_SESSION['tipo']=='Administrador') {
                                    echo "<td><span class='badge bg-danger'><a href='#' onclick='delete__component(".$CGC->getId().")'><img src='../img/svg__icon/delete.svg' alt=''></a></span></td>";
                                
                                 }
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                    </table>
        
      </div>
      <div class="modal-footer">
       <button type="reset" class="btn btn-warning">Restablecer</button>
        <button type="submit" class="btn btn-success">Registrar</button>
      </div>
          
      
    </div>
  </div>
</div>
      
      
   <!-- Modal Registrar Docente-->
<div class="modal fade" id="registrardocente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="../img/svg__icon/new.svg" alt="">Registrar Docentes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" id="CGDocente__Form">
            <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="label">Nombre Docente</div>
                    <input type="text" class="form-control" name="CGDocente__name">
                </div>
                <div class="col-md-12">
                    <label for="">Apellido Docente</label>
                    <input type="text" class="form-control" name="CGDocente__apellido">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <label >Contacto telefonico:</label>
                    <input type="number" name="CGDocente__contact" placeholder="Ejemplo: 912345678" class="form-control">
                </div>
            </div>
                
            </div>
            <div class="modal-footer">
            <button type="reset" class="btn btn-warning">Restablecer</button>
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>
      </form>
      
    </div>
  </div>
</div>
    
    
    
     <!-- Modal Listar Docente-->
<div class="modal fade" id="listardocente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="../img/svg__icon/list.svg" alt="">Lista de Docentes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col">
           <table class="table table-dark table-striped">
               <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Numero de contacto</th>
                       <th>Eliminar</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $lista = $c->ListarDocente();
                   for ($i=0; $i < count($lista); $i++) { 
                       $CGDocente = $lista[$i];
                       echo "<tr>";
                       echo "<td>".$CGDocente->getNombre()."</td>";
                       echo "<td>".$CGDocente->getApellido()."</td>";
                       echo "<td>".$CGDocente->getContacto()."</td>";
                       echo "<td><span class='badge bg-danger'><a href='#' onclick='delete__docente(".$CGDocente->getId().")'><img src='../img/svg__icon/delete.svg' alt=''></a></span></td>";
                       echo "</tr>";
                   }
                   ?>
               </tbody>
           </table>
           </div>
       </div>
       
      </div>
      <div class="modal-footer">
       <button type="reset" class="btn btn-warning">Restablecer</button>
        <button type="submit" class="btn btn-success">Registrar</button>
      </div>
          
      
    </div>
  </div>
</div>
   
   
        <!-- Modal Mi perfil-->
<div class="modal fade" id="miperfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="../img/svg__icon/user.svg" alt="">Mi Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col text-center">
           <img src="../img/svg__icon/user.svg" width="80" alt="">
           </div>
       </div>
       
       <div class="row justify-content-center">
          <div class="col-md-10">
              <label for="" class="form-control text-center"><?php echo $_SESSION['tipo'] ?></label>
          </div>
           <div class="col-md-5">
               <label for="">Nombre</label>
               <input type="text" value="<?php echo $_SESSION['nombre']?>" class="form-control">
           </div>
           <div class="col-md-5">
               <label for="">Apellido</label>
               <input type="text" class="form-control" value="<?php echo $_SESSION['apellido']?>">
           </div>
           
           <div class="col-md-10">
               <label for="">Correo Electronico:</label>
               <input type="email" value="<?php echo $_SESSION['email']?>" class="form-control">
           </div>
          </div>
      </div>
      
      <div class="modal-footer">
       <button type="button" id="btn__modificar--perfil"  class="btn btn-warning"><img src="../img/svg__icon/edit.svg" alt="">Modificar</button>
        <button type="button" id="btn__guardar--perfil" disabled class="btn btn-success"><img src="../img/svg__icon/new.svg" alt="">Guardar</button>
      </div>
            
    </div>
  </div>
</div>
   
          
               
   <!-- Modal Registrar Ubicacion-->
<div class="modal fade" id="registrarubicacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="../img/svg__icon/new.svg" alt="">Registrar Ubicacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <?php
          if ($_SESSION['tipo'] == "Administrador") {
              echo '<form action="" id="UbicacionForm">
              <div class="row justify-content-center">
                  <div class="col-md-4">
                      <div class="label">Ubicacion</div>
                      <input name="UbicacionName" id="UbicacionName" type="text" class="form-control">
                  </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-md-4 text-center ">
                      <button type="reset" class="btn btn-warning">Restablecer</button>
                          <button type="submit" class="btn btn-success ">Registrar</button>
                          
                      </div>
                  </div>
            </form>';
          }
          ?>
          
        <hr class="w-100">
      <div class="row">
          <div class="col-md-12">
              <table id="tabla__ubicacion" class="table table-dark table-striped caption-top text-center">
                <caption>Lista de Ubicaciones</caption>
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $lista = $c->ListarUbicacion();

                      if (count($lista)>0) {
                          for ($i=0; $i < count($lista); $i++) { 
                              $CGCU = $lista[$i];
                              echo "<tr>";
                                echo "<td>".$CGCU->getId()."</td>";
                                echo "<td>".$CGCU->getNombre()."</td>";
                            echo "</tr>";
                          }
                      }
                      
                      ?>
                  </tbody>
              </table>
          </div>
      </div>
      </div>
      <div class="modal-footer">
      </div>
          
      
    </div>
  </div>
</div>            
   <!-- Modal REgistrar Tipo-->
   <div class="modal fade" id="registrartipo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img src="../img/svg__icon/new.svg" alt="">Registrar Tipo de Componente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="TipoForm">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="label">Nuevo Tipo</div>
                            <input name="TipoName" id="TipoName" type="text" class="form-control">
                        </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center ">
                            <button type="reset" class="btn btn-warning">Restablecer</button>
                                <button type="submit" class="btn btn-success ">Registrar</button>
                                
                            </div>
                        </div>
                </form>
                <hr class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark table-striped caption-top">
                        <caption>Lista de Tipos de componentes</caption>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $lista = $c->ListarTipoComponente();

                            if (count($lista)>0) {
                                for ($i=0; $i < count($lista); $i++) { 
                                    $CGCU = $lista[$i];
                                    echo "<tr>";
                                        echo "<td>".$CGCU->getId()."</td>";
                                        echo "<td>".$CGCU->getNombre()."</td>";
                                    echo "</tr>";
                                }
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>
                
            
            </div>
        </div>
    </div>

    <!-- Modal Registrar Estado-->
    <div class="modal fade" id="registrarestado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img src="../img/svg__icon/new.svg" alt="">Registrar Estado de Componente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="EstadoForm">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="label">Nuevo Estado</div>
                            <input name="EstadoName" id="EstadoName" type="text" class="form-control">
                        </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center ">
                            <button type="reset" class="btn btn-warning">Restablecer</button>
                                <button type="submit" class="btn btn-success ">Registrar</button>
                                
                            </div>
                        </div>
                </form>
                <hr class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark table-striped caption-top">
                        <caption>Lista de Estado de componentes</caption>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $lista = $c->ListarEstadoComponente();

                            if (count($lista)>0) {
                                for ($i=0; $i < count($lista); $i++) { 
                                    $CGCU = $lista[$i];
                                    echo "<tr>";
                                        echo "<td>".$CGCU->getId()."</td>";
                                        echo "<td>".$CGCU->getNombre()."</td>";
                                     echo "</tr>";
                                }
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>
                
            
            </div>
        </div>
    </div>
  
    <!-- Modal Registrar status-->
   <div class="modal fade" id="registrarstatus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img src="../img/svg__icon/new.svg" alt="">Registrar Status de Componente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="StatusForm">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="label">Status</div>
                            <input name="StatusName" id="StatusName" type="text" class="form-control">
                        </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center ">
                            <button type="reset" class="btn btn-warning">Restablecer</button>
                                <button type="submit" class="btn btn-success ">Registrar</button>
                                
                            </div>
                        </div>
                </form>
                <hr class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark table-striped caption-top">
                        <caption>Lista de Tipos de componentes</caption>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $lista = $c->ListarStatusComponentes();

                            if (count($lista)>0) {
                                for ($i=0; $i < count($lista); $i++) { 
                                    $CGCU = $lista[$i];
                                    echo "<tr>";
                                        echo "<td>".$CGCU->getId()."</td>";
                                        echo "<td>".$CGCU->getNombre()."</td>";
                                       echo "</tr>";
                                }
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>
                
            
            </div>
        </div>
    </div>

    <!-- Modal Registrar Prestamo-->
   
    <div class="modal fade" id="registrarprestamo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img src="../img/svg__icon/new.svg" alt="">Prestamos de Componente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <?php
            if ($_SESSION['tipo']=='Administrador') {
                echo '
                <form action="" id="PrestamosForm" name="PrestamosForm">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                        <label class="label< w-100">ID Componente</label>
                        </div>
                        </div>

                        <div class="row justify-content-center">
                        <div class="col-md-6 d-flex justify-align-content-between">
                            <input name="ComponentID" id="ComponentID" type="number" class="form-control w-100 gap-3">
                            <button type="button" class="btn btn-success" onclick="searchComponent()"><img width="20" src="../img/svg__icon/search.svg"></button>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col detalles__prestamos" id="detalles__componente">

                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="">Prestatario</label>
                                <select autocomplete="TRUE" name="CGPrestatario__Component" id="CGPrestatario__Component" class="form-control">
                                    <option value="0">Seleccione el prestatario</option>
                                   ';
                                   $lista = $c->ListarDocente();
                                   for ($i=0; $i < count($lista); $i++) { 
                                       $CGCU = $lista[$i];
                                       echo "<option value='".$CGCU->getId()."'>".$CGCU->getNombre()." ".$CGCU->getApellido()."</option>";                                        
                                   }
                echo '
                                </select>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="">Fecha de Prestamo</label>
                                    <input type="date" name="CGFecha__Prestamos" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Observacion</label>
                                <textarea name="CGObservacion__Prestamos" id="CGObservacion__Prestamos" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center ">
                            <button type="reset" class="btn btn-warning">Restablecer</button>
                                <button type="submit" class="btn btn-success ">Registrar</button>
                                
                            </div>
                        </div>
                </form>';
            }
            ?>
                <hr class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dark table-striped caption-top">
                        <caption>Listado de Prestamos</caption>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Componente</th>
                                <th>Docente</th>
                                <th>Fecha de Prestamo</th>
                                <th>Fecha de Devolucion</th>
                                <th>Estado</th>
                                <?php
                                if ($_SESSION['tipo']=='Administrador') {
                                    echo '<th>Acciones</th>';
                                }
                                ?>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $lista = $c->ListarPrestamos();
                            
                            if (count($lista)>0) {
                                for ($i=0; $i < count($lista); $i++) { 
                                    $CGP = $lista[$i];
                                    echo "<tr>";
                                        echo "<td>".$CGP->getId()."</td>";
                                        echo "<td>".$CGP->getId_com()."</td>";
                                        echo "<td>".$CGP->getId_doc()."</td>";
                                        echo "<td>".$CGP->getFecha_prest()."</td>";
                                        echo "<td>".$CGP->getFecha_Dev()."</td>";
                                        echo "<td>".$CGP->getId_est()."</td>";
                                        if ($_SESSION['tipo']=='Administrador') {
                                            echo "<td>
                                                <button type='button' class='btn btn-success' onclick='editPrestamo(".$CGP->getId().")'><img width='20' src='../img/svg__icon/edit.svg'></button>
                                             </td>";
                                        }
                                    echo "</tr>";
                                }
                            }else{
                                echo "<tr>";
                                    echo "<td colspan='7' class='text-center'>No hay registros</td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
   
    <!-- Modal modal Details-->
    <div class="modal fade" id="modaldetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img src="../img/svg__icon/list.svg">Detalles Componente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
            <div class="row justify-content-center">
                <div id="detalles" class="col-md-12">
                    
                </div>
            </div>
            
            <div class="modal-footer">
            </div>

                    
            </div>
            </div>
        </div>
    </div>


    <!-- Modal modal Reporte-->
    <div class="modal fade" id="modalreport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><img src="../img/svg__icon/report.svg">Reportes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">            
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex flex-wrap justify-content-between align-items-center">
                    <a target="_blank" href="../reportes/ComponentList.php" class="btn btn-success btn-lg btn-block ">Listar todos los componentes</a>
                    <a target="_blank" href="../reportes/ComponentBodega.php" class="btn btn-secondary btn-lg btn-block ">Componentes en Bodega</a>
                    <a target="_blank" href="../reportes/ComponentPrestamo.php" class="btn btn-danger btn-lg btn-block w-74">Componentes en Prestamo</a>
                </div>
            </div>

            <?php
            if ($_SESSION['tipo']=='Administrador') {
                echo '<div class="row justify-content-center">
                    <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                        <a target="_blank" href="../reportes/Userlist.php" class="btn btn-warning btn-lg btn-block w-100">Listar todos los Usuaios</a>
                    </div>
                </div>';
            }
            ?>


            <div class="row">
                <div class="col">
                    <h3 class="text-center">Reportes personalizadas</h3>
                </div>
            </div>

            
                <div class="row">
                    <div class="col-md-6">
                        <form id="FormReporte" target="_blank" method="post" action="../reportes/ComponentType.php">
                            <h4 class=" text-center card-title">Listar Componentes por tipo</h4>
                            <div class="form-group">
                                <label for="">Seleccione el tipo de componente </label>
                                <select class="form-control" id="tipo" name="tipo">
                                    <?php
                                    $lista = $c->ListarTipoComponente();
                                    if (count($lista)>0) {
                                        for ($i=0; $i < count($lista); $i++) {
                                            $CGP = $lista[$i];
                                            echo "<option value='".$CGP->getId()."'>".$CGP->getNombre()."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <hr class="my-4"/>
                                <button type="submit" class="btn btn-lg btn-success btn-block w-100">Imprimir</button>
                            </div>
                            
                        </form>
                    </div>  
                    <div class="col-md-6">
                        <form id="" target="_blank" method="post" action="../reportes/ComponentUbicacion.php">
                            <h4 class=" text-center card-title">Listar Componentes por Ubicacion</h4>
                            <div class="form-group">
                                <label for="">Seleccione el tipo de componente </label>
                                <select class="form-control" id="ubicacionName" name="ubicacionName">
                                    <?php
                                    $lista = $c->ListarUbicacion();
                                    if (count($lista)>0) {
                                        for ($i=0; $i < count($lista); $i++) {
                                            $CGP = $lista[$i];
                                            echo "<option value='".$CGP->getId()."'>".$CGP->getNombre()."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <hr class="my-4"/>
                                <button type="submit" class="btn btn-lg btn-success btn-block w-100">Imprimir</button>
                            </div>
                        </form>
                    </div>   
                </div>
            
            <div class="modal-footer">
            </div>

                    
            </div>
            </div>
        </div>
    </div>

       <!-- Modal Registrar Usuarios-->
<div class="modal fade" id="registrarusuarios" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="../img/svg__icon/user1.svg" alt="">Registrar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" id="CGUser__Form">
            <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="label">Nombre</div>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre" name="CGUser__nombre">
                </div>
                <div class="col-md-6">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" placeholder="Ingrese el apellido" name="CGUser__apellido">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label >Correo:</label>
                    <input type="email" name="CGUser__email" placeholder="Ejemplo: 912345678" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label for="">Tipo de Usuario</label>
                    <select name="CGUser__tipo" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Login</label>
                    <input type="text" class="form-control" placeholder="Ingrese el login" name="CGUser__login">
                </div>
                <div class="col-md-6">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="Ingrese la Contraseña" name="CGUser__password">
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-end gap-3">
                <button type="reset" class="btn btn-warning">Restablecer</button>
                <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </div>
            
      </form>
      <div class="modal-footer justify-content-center">
          <div class="row justify-content-center">
              <div class="col-md-12 d-flex justify-content-center">
              <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Tipo de Usuario</th>
                        <th>Login</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = $c->ListarUsuarios();

                    for ($i=0; $i < count($lista) ; $i++) { 
                    
                    }
                    if (count($lista)>0) {
                        for ($i=0; $i < count($lista); $i++) { 
                            $CGCU = $lista[$i];
                            echo "<tr>";
                                echo "<td>".$CGCU->getId()."</td>";
                                echo "<td>".$CGCU->getNombre()."</td>";
                                echo "<td>".$CGCU->getApellido()."</td>";
                                echo "<td>".$CGCU->getEmail()."</td>";
                                echo "<td>".$CGCU->getTipo()."</td>";
                                echo "<td>".$CGCU->getLogin()."</td>";
                                echo "<td><span class='badge bg-warning'><a href='#' onclick='modificarusuario(".$CGCU->getId().")'><img src='../img/svg__icon/edit.svg' alt=''></a></span></td>";
                                echo "<td><span class='badge bg-danger'><a href='#' onclick='deleteuser(".$CGCU->getId().")'><img src='../img/svg__icon/delete.svg' alt=''></a></span></td>";
                            echo "</tr>";
                        }
                    }
                    
                    ?>
                </tbody>
            
            </table>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>



    
          
    <!-------------JAVASCRIPTS-------------------->
</body>
</html>