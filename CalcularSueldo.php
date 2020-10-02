<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Sueldo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
    
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                <form class="mt-5" action="CalcularSueldo.php" method="POST">
    <h4>Calcular Sueldo Semanal</h4>
        <div class="row">
            <div class="col">
             <input type="text" class="form-control" placeholder="# de horas trabajadas" name="horas" >
            </div>
        </div>
             <button type="submit" class="btn btn-primary mt-5" name="Calcular">Calcular</button>
</form>

<?php 

if(isset($_POST["Calcular"])){

$horas=$_POST["horas"];
$horasExtra= $horas - 40;
$horasNormales=$horas-$horasExtra;
$valorHora=20000;
$valorExtra=25000;


$sueldo= $horas*$valorHora;
$sueldoNormal = $horasNormales * $valorHora;
$sueldoExtra = $horasExtra*$valorExtra;
$sueldoTotal = $sueldoNormal + $sueldoExtra;



if ($horas >=1 && $horas <= 40) 
{ 
  
  
echo("Su Sueldo es: ".$sueldo);
} 
elseif ($horas > 40) 
{  
    

echo ("Su Sueldo es: ". $sueldoTotal  ); 
}

}
   

?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    


</body>
</html>

