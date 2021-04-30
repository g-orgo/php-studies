<?php
    $name = "Gabriel";
    $age = "21";
    $is_male = true; // renderiza como 1
    $height = 1.75;
    $salary = null; // null não é renderizado, assim como false também não.
    
    echo $name . '<br>'; // . "" é para concatenações
    echo $age.'<br>';
    echo $is_male.'<br>';
    echo $height.'<br>';
    
    echo gettype($salary).'<br>';
    var_dump(isset($adress)); 
    var_dump(is_string($name));

    // dois jeitos de definir uma constante
    const PI = 3.14;
    define('pi', 3.14);
    echo pi,PI;
    ?>