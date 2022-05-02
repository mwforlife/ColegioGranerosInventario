<?php
require '../controller/controller.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar Codigo de Barras</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="icon" type="icon" href="../img/logo/logo.jpg">
    <style>
        #root{
            display: flex !important;
            flex-wrap: wrap !important;
            padding: 20px;
        }

        body{
            width: 100%;
            height: 100ch;
            margin: 0;
            padding: 0;
        }
        
        .barra{
            width: 200px;
            height: 85px;
        }
    </style>
</head>
<body>
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="card w-100 d-flex flex-column align-items-center justify-content-center text-center">
            <img class="margin-auto" width="150" src="../img/logo/log.png" alt=""><br>
            <h3>Generador de codigos de Barras</h3>
            <form class="w-100" action="imprimir.php" method="POST">
            <div class="row text-start justify-content-center w-100">
                
                <div class="col-md-4">
                    <label for="">Tipo:</label>
                    <select name="type" id="type" class="form-control">
                        <?php
                        $c = new Controller();

                        $lista = $c->ListarTipoComponente();

                        if (count($lista)>0) {
                            for ($i=0; $i < count($lista); $i++) { 
                                $CGCT = $lista[$i];
                                echo "<option value='".$CGCT->getId()."'>".$CGCT->getNombre()."</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center" >
                    <label for="">Cantidad</label>
                    <input min="1" required type="text" name="cantidad" id="cantidad" class="text-center form-control" placeholder="Ingrese el Codigo">
                </div>
            </div>
                   
            <div class="row justify-content-center">
               <div class="col-md-5">
                   
               <button type="button" onclick="agregar()" class="btn btn-secondary">Agregar</button>
               <button type="button" onclick="generar()" class="btn btn-primary">Generar</button>
                <button type="submit" class="btn btn-success">Generar Inmediato</button>
                        
               </div>
          </div>
            </form>
        </div>
        
        <!--<div id="root" class="card w-100 d-flex flex-row">
            
        </div>-->
    </div>
    
    
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/MooTools-Core-1.6.0.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="js/barcode_script.js"></script>
</body>
</html>