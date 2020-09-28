<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BodyTech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
    
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                <form class="mt-5" action="bodytech.php" method="POST">
                <h4>CALCULAR IMC</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Peso (kg)" name="peso">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Altura (m) " name="altura">
                            </div>

                        </div>
                        <br>
                            <button type="submit" class="btn btn-primary" name="botonimc">Calcular IMC</button>
                    </form>
                     

                    <?php if(isset($_POST["botonimc"])){

                    

                        
                        $peso=$_POST["peso"];
                        $altura=$_POST["altura"];
                        $imc;
                        

                    
                        $imc= $peso /($altura * $altura);
                        echo"<br>";
                        echo "El IMC es: " . $imc;
                        
                        if ($imc < 18.5) {
                            echo " Peso insuficiente";
                        }
                        elseif ($imc >= 18.5 && $imc <= 24.9 ) {
                            echo " Normopeso";
                        }
                        elseif ($imc >= 25 && $imc <= 26.9 ) {
                                echo " Sobrepeso grado I";
                            }
                            elseif ($imc >= 27 && $imc <= 29.9 ) {
                                echo "  Sobrepeso grado II (preobesidad)";
                            }
                        
                            elseif ($imc >= 30 && $imc <= 34.9 ) {
                                    echo "  Obesidad de tipo I";
                                }
                                elseif ($imc >= 35 && $imc <= 39.9 ) {
                                    echo "  Obesidad de tipo II";
                                }
                            
                            elseif ($imc >= 40 && $imc <= 49.9 ) {
                                    echo "  Obesidad de tipo III (mórbida)";
                                }
                                elseif ($imc >= 50 ) {
                                    echo "  Obesidad de tipo IV (extrema)";
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
            
                            