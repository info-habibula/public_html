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
    <style type="text/css">
  body {
    background: #F5F5F5;
    background-image: -webkit-gradient(
        linear,
        left top,
        right top,
        color-stop(.34, rgba(230,237,241,.05)),
        color-stop(.67, rgba(230,237,241,0)));
    -webkit-background-size: 5px 5px;
 }
  
  input {
   background: -moz-linear-gradient(#D0ECF4, #5BC9E1, #D0ECF4);
   background: -webkit-gradient(linear, 0 0, 0  100%, from(#D0ECF4), to(#D0ECF4), color-stop(0.5, #5BC9E1));
   filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
   padding: 3px 7px;
   color: #333;
   -moz-border-radius: 5px;
   -webkit-border-radius: 5px;
   border-radius: 5px;
   border: 1px solid #666;
   margin-top: 20%;
   font-size: 25pt;

  }
  </style>
 </head>
    <body>
      <center>  <form action="/form_reg.php" method="POST" >
            <input name="myActionName"  type="submit" value="Колькулятор" style="width:300Px;height:80Px"/>
        </form> </center>
    </body>
 </html>