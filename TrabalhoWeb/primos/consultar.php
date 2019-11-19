<?php
$number = isset($_POST['numero']) ? $_POST['numero']: 0;

$i = 1;
$contador = 0;
while($i <= $number && $contador <= 2){
    if($number % $i == 0){
        $contador++;
    }
    $i++;
}

if($contador == 2){
    header('location:index.php?status=1&numero='.$number);
}else{
    header('location:index.php?status=2&numero='.$number);
}

?>