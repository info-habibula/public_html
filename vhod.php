<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_append_string', 'Биля :(');
ini_set('log_errors', 'On');
ini_set('error_log', '/var/log/php_errors.log');
$user="root";
$pass="1";
?>                                                                                                            
<html>
 
 <head>
   <meta charset="utf-8">
   <title> Вход</title>
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
} </style>
 </head>
    <body>
        <center><p><b>Выполните вход что бы получить VIP-версию нашего калькулятора ©</2b></p>
        <form action="" id="loginform" method="post" name="loginform">
            <p><label for="user_login">Имя пользователя<br>
            <input class="input" id="username" name="username"size="20"
            type="text" value="" required></label></p>
            <p><label for="user_pass" >Пароль<br>
            <input class="input" id="password" name="password"size="20"
            type="password" value="" required></label></p> 
            <button type="submit" style="width:100Px;height:25Px">Войти</button>
            <p class="regtext">Еще не зарегистрированы?<a href= "reg_user.php"">Регистрация</a>!</p>
        </form></center>


<!--<form>
<p><b> введите первое число...</b> <input type="text" autocomplete="off" name="chislo1" required> <Br> </p>
<p><b> введите второе число... </b> <input type="text" autocomplete="off" name="chislo2" required> <Br> </p> 
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
                echo "это результат $rezultat <br>";
                echo 'это результат $rezultat';
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
            $sql= 'select * from colculator where opertion_id>100;';
            $history= $dbh->query($sql);
            /*foreach ($history as $key => $value) {
                    echo "<pre>";
                    var_dump ($value);
                    echo "</pre>";
                
                foreach ($value as $key2 => $value2) {
                    echo "<pre>";
                    var_dump ($value2);
                    echo "</pre>";
                }
                
            }*/
            die();
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    ?>
 <input type="text" autocomplete="off" name="" value="<?php echo $oper; ?>" /></Br></br>
 </form>-->
 </body>
 </html>




