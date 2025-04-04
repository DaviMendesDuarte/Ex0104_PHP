<?php
    $p = $_POST['palavra'];
    $qnt = $_POST['quantidade'];
    $i = 0;
    
    for ($i = 0; $i < $qnt ; $i++)
    {
        echo $p."<br>";
    }
?>