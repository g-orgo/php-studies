<?php
    $name = "Gabriel";
    $age = "21";
    $is_male = true; // renderiza como 1
    $height = 1.75;
    $salary = null; // null não é renderizado, assim como false também não.
    // . "" é para concatenações
    echo $name .  '<br>';
    echo $age.'<br>';
    echo $is_male.'<br>';
    echo $height.'<br>';
    // echo $salary . '<br>';
    
    echo gettype($salary).'<br>';
    var_dump($name);
    ?>