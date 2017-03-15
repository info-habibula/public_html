<?php
$user="root";
$pass="1";
?>                                                                                                            
<html>
 <head>
   <meta charset="utf-8">
   <title> Kалькулятор +</title>
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
<button type="submit">Вычислить</button>
<?php
$chislo1=$_GET['chislo1'];
$chislo2=$_GET['chislo2'];
$znaki=$_GET['znaki'];
$rezultat=$_GET['rezultat'];
   switch ($znaki) {
    case '-':
        $rezultat=$chislo1 - $chislo2;
        $oper=$chislo1 ."-". $chislo2. '='. $rezultat;
    break;
    case '*':
        $rezultat=$chislo1 * $chislo2;
        $oper=$chislo1 ."*". $chislo2. '='. $rezultat;
            break;
} 
try {
    $dbh = new PDO('mysql:host=localhost;dbname=patya', $user, $pass);

    $sql = 'insert into colculator (operation, data_vip) value ("'.$oper.'", "'.date("Y-m-d H:i:s").'")';

    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 ?>
 <input type="text" name="" value="<?php echo $oper; ?>" />
</form>
 </body>
 </html>



