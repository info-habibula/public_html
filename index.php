<html>
 <head>
   <meta charset="utf-8">
   <title> Kалькулятор </title>
 </head>
    <body>
<form>
<p><b> введите первое число...</b> <input type="text" name="chislo1"> <Br> </p>
<p><b> введите второе число... </b> <input type="text" name="chislo2"> <Br> </p> 
<p><b>Выберите действие</b>
<select name="znaki"> 
<option value="-">минус</option>
<option value="*">умножить</option>
</select></p>
 		<p><button type="submit">Вычислить</button> <input  type="text" name="rezultat"></p>
</form>
 </body>
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
 </html>