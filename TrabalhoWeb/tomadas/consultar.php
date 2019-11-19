<?php
$t1 = isset($_POST['tomada1']) ? $_POST['tomada1']: 0;
$t2 = isset($_POST['tomada2']) ? $_POST['tomada2']: 0;
$t3 = isset($_POST['tomada3']) ? $_POST['tomada3']: 0;
$t4 = isset($_POST['tomada4']) ? $_POST['tomada4']: 0;

if(($t1 >= 2 && $t1 <= 6) || ($t2 >= 2 && $t2 <= 6) || ($t3 >= 2 && $t3 <= 6) || ($t4 >= 2 && $t4 <= 6)){
    $tomadas = ($t1 + $t2 + $t3 + $t4) - 3;
    header('location:index.php?status='.$tomadas);
}else{
    header('location:index.php?erro=1');
}

?>