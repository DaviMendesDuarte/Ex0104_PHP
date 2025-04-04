<?php
    $n = $_POST['num'];
    $i = 0;
    
    for ($i = 1; $i <= $n ; $i++)
    {
        if ($i % 2 == 0)
        {
            echo $i." ";
        }
    }
?>