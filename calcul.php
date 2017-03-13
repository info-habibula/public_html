<?php
$chislo1=$_GET['chislo1'];
$chislo2=$_GET['chislo2'];
$znaki=$_GET['znaki'];
$rezultat=$_GET['rezultat'];
   switch ($znaki) {
   	case '-':
       echo $chislo1 - $chislo2;
   	break;
   	case '*':
       echo $chislo1 * $chislo2;
   	break;
} 
 ?>