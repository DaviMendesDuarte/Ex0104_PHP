<?php
    $n = $_POST['num'];
    $i = 1;

    for ($i = 1; $i <= 10; $i++) 
    {
        echo $n." x ".$i." = ".($n * $i)."<br>";
    }
?>