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
        //how to set error handler
        function myHandler(int $errNo, string $errMsg, string $file, int $line) {
           echo "<br>Error #[$errNo] occurred in [$file] at line [$line]: [$errMsg]";
        }
        set_error_handler('myHandler');
        try {
           // This does not throw an Error
                    5 / 0 ;
        } catch ( Throwable $e ) {
            echo '<br>Error handler set';
        echo '<br>Caught error : ' . $e->getMessage();
        }
        
        // how to use predefined exceptions
        try{
        functionnotdeclared();

        } catch (Throwable $e) {
          echo "<br>Error caught: " . $e->getMessage();
          echo "<br>" + $e->getLine();
        }
        
        //custom define exception
        $divisor = 0;
        if ($divisor == 0) {
        user_error("<br>Cannot divide by divisor zero " , E_USER_ERROR);
        }
        
        //application defined exception
        class ValidationException extends Exception { }
        function myValidation() {
        if (empty($_POST)) {
        throw new ValidationException('<br>No form fields entered');
        }
        }
        try{
        myValidation();
        } catch (ValidationException $e) {
        echo "<br>Validation exception caught ";
        echo $e->getMessage();
        }catch(Exception $e){
        echo "<br> Some other error ".$e->getMessage();
        }

    

  ?>
    </body>
</html>

