<?php
    $n = $_POST['num'];
    $i = $n;

    for ($i = $n; $i >= 0; $i--) 
    {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
?>