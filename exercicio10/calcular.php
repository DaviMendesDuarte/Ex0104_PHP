<?php
    $n = $_POST['num'];
    $int = $_POST['int'];
    $i = $n;

    for ($i = $n; $i >= 0; $i--)
    {
        if ($i % $int == 0)
        {
            echo $i." ";
        }
    }
?>