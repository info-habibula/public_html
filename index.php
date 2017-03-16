<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_append_string', 'Биля :(');
ini_set('log_errors', 'On');
ini_set('error_log', '/var/log/php_errors.log');
?>                                                                                                            
<html>
 
 <head>
   <meta charset="utf-8">
   <title> Колькулейшен</title>
   <link rel="stylesheet" href="style.css">
 </head>
    <body>
      <center>  <form action="/form_reg.php" method="POST" >
            <input name="myActionName"  type="submit" value="Калькулятор" style="width:300Px;height:80Px"/>
        </form> </center>
    </body>
 </html>