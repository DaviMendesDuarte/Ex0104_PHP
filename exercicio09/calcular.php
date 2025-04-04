<?php
    $n = $_POST['num'];
    $int = $_POST['int'];
    $i = 0;

    for ($i = 0; $i <= $n; $i++)
    {
        if ($i % $int == 0)
        {
            echo $i." ";
        }
    }
?>