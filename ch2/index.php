<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
        include "../header.php";
        ?>
        <div align="center">
        <?php
        echo "Hello PHP 7";
        //number of primitive types
        $var_bool = true;
        $var_int = 2;
        $var_string = "this is a string";
        $var_double = 2.5;
        $var_float = 2.5;
        //settype() function 
        

$gen = (function() {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

//echo $gen->getReturn(), PHP_EOL;

       //gettype() function
        
        
        //is_type function
        if(is_string($var_string))
        {
            echo "is_string returns true".$var_string;
        }
        
        
        include "../footer.php";
        // put your code here
        
        ?>
        </div> 
    </body>
</html>

