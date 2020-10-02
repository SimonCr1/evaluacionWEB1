<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bancolombia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
    
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                <form class="mt-5" action="Bancolombia.php" method="POST">
                <h4>Usuario #1</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre " name="nombre1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Telefono " name="telefono1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Direccion" name="direccion1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Salario" name="salario1">
                            </div>
                        </div>
                        <!-- TERMINA -->
                        <h4>Usuario #2</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre " name="nombre2">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Telefono " name="telefono2">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Direccion" name="direccion2">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Salario" name="salario2">
                            </div>
                        </div>
                        <!-- TERMINA -->
                        <h4>Usuario #3</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre " name="nombre3">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Telefono " name="telefono3">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Direccion" name="direccion3">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Salario" name="salario3">
                            </div>
                        </div>
                        <!-- TERMINA -->
                        <h4>Usuario #4</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre " name="nombre4">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Telefono " name="telefono4">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Direccion" name="direccion4">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Salario" name="salario4">
                            </div>
                        </div>
                        <!-- TERMINA -->
                        <h4>Usuario #5</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre " name="nombre5">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Telefono " name="telefono5">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Direccion" name="direccion5">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Salario" name="salario5">
                            </div>
                        </div>
                        <!-- TERMINA -->
                        <br>
                            <button type="submit" class="btn btn-primary" name="botoncalcular">Calcular</button>
                    </form>
                     

                    <?php if(isset($_POST["botoncalcular"]))
                    {

                    

                       
                        $nombre1=$_POST["nombre1"];
                        $telefono1=$_POST["telefono1"];
                        $direccion1=$_POST["direccion1"];
                        $salario1=$_POST["salario1"];

                        $nombre2=$_POST["nombre2"];
                        $telefono2=$_POST["telefono2"];
                        $direccion2=$_POST["direccion2"];
                        $salario2=$_POST["salario2"];

                        $nombre3=$_POST["nombre3"];
                        $telefono3=$_POST["telefono3"];
                        $direccion3=$_POST["direccion3"];
                        $salario3=$_POST["salario3"];

                        $nombre4=$_POST["nombre4"];
                        $telefono4=$_POST["telefono4"];
                        $direccion4=$_POST["direccion4"];
                        $salario4=$_POST["salario4"];

                        $nombre5=$_POST["nombre5"];
                        $telefono5=$_POST["telefono5"];
                        $direccion5=$_POST["direccion5"];
                        $salario5=$_POST["salario5"];



                        $sumatoriaSalararios = $salario1 + $salario2 + $salario3 + $salario4 + $salario5 ;

                        $nombres = array("Nombre Usuario #1 "=>$nombre1,"Nombre Usuario #2 "=>$nombre2,"Nombre Usuario #3 "=>$nombre3,"Nombre Usuario #4 "=>$nombre4,"Nombre Usuario #5 "=>$nombre5 );
                        $telefonos = array("Telefono Usuario #1 "=>$telefono1,"Telefono Usuario #2 "=>$telefono2,"Telefono Usuario #3 "=>$telefono3,"Telefono Usuario #4 "=>$telefono5,"Telefono Usuario #5 "=>$telefono5 );
                        $direcciones = array("Direccion Usuario #1 "=>$direccion1,"Direccion Usuario #2 "=>$direccion2,"Direccion Usuario #3 "=>$direccion3,"Direccion Usuario #4 "=>$direccion4,"Direccion Usuario #5 "=>$direccion5 );
                        $salarios = array("Salario Usuario #1 "=>$salario1,"Salario Usuario #2 "=>$salario2,"Salario Usuario #3 "=>$salario3,"Salario Usuario #4 "=>$salario4,"Salario Usuario #5 "=>$salario5 );



                        foreach ($nombres as $clave=>$valor ) 
                        {
    
                            echo($clave.": ");
                            echo($valor);
                            echo("<br>");
                        }

                        
                        foreach ($telefonos as $clave=>$valor) 
                        {
    
                            echo($clave.": ");
                            echo($valor);
                            echo("<br>");
                        }

                        foreach ($direcciones as $clave=>$valor)
                         {
    
                            echo($clave.": ");
                            echo($valor);
                            echo("<br>");
                        }

                        
                        foreach ($salarios as $clave=>$valor) {
    

                            echo($clave.": ");
                            echo($valor);
                            echo("<br>");
                        }

                        if ($sumatoriaSalararios > 40000000) {
                            echo "La sucursal A tiene la mejor sumatoria de salarios con un salario total de: ". $sumatoriaSalararios;
                        }
                        else {
                            echo "La sucursal B tiene la mejor sumatoria de salarios con un salario total de: 40000000" ;
                        }

                
                        
                       
                          
                        
                        
                    
                    
                    
                    }
                    ?>
                </div>
            </div>

        </div>
    </main>
    <footer>
    </footer>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
