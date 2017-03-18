<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_append_string', 'Биля :(');
ini_set('log_errors', 'On');
ini_set('error_log', '/var/log/php_errors.log');
$host='localhost'; $db='forma_reg'; $user="root"; $pass="1";
?>                                                                                                            
<html>
 
 <head>
   <meta charset="utf-8">
   <title> Регистрация</title>
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
        <center><form>

            <label for=''>Фамилия Имя Отчество</label></br>
            <input type='text'  id='fio' name='fio' required style="width:300Px;height:25Px"></br>

            <label for=''>Год рождения</label></br>
            <input type='date'  id='god_rojd' name='god_rojd' required style="width:300Px;height:25Px"></br>

            <label for=''>Логин</label></br>
            <input type='text'  id='login_user' name='login_user' required style="width:300Px;height:25Px"></br>
       
            <label for=''>Пароль</label></br>
            <input type="password"  id='pass_user' name='pass_user' required style="width:300Px;height:25Px"></br>

            <label for=''>Введите секретный вопрос</label></br>
            <input type='text'  id='vopros' name='vopros' required style="width:300Px;height:25Px"></br>
            
            <label for=''>Ответ</label></br>
            <input type='text'  id='otvet' name='otvet' required style="width:300Px;height:25Px"></br>

            <label for=''>Ваши домашние животные</label></br>
            <input type='text'  id='jivot_user' name='jivot_user' required style="width:300Px;height:25Px"></br>
     
            <label for=''>Кратко о себе</label></br>
            <textarea id='o_sebe'  name='o_sebe' required style="width:300Px;height:100Px"></textarea></br></br>
     
            <input type="submit" value='Регистрация' style="width:130Px;height:40Px"></br>
      
    </form></center> 

    <?php 
         $fio=$_GET['fio'] ?? '';
         echo $fio;
         $god_rojd=$_GET['god_rojd'] ?? ''; echo $god_rojd;
         $login_user=$_GET['login_user'] ?? ''; echo $login_user;
         $pass_user=$_GET['pass_user'] ?? ''; echo $pass_user;
         $vopros=$_GET['vopros'] ?? ''; echo $vopros;
         $otvet=$_GET['otvet'] ?? ''; echo $otvet;
         $jivot_user1=$_GET['jivot_user'] ?? ''; echo $jivot_user1;
         $o_sebe=$_GET['o_sebe'] ?? ''; echo $o_sebe;

           
        $dsn="mysql:host=$host;dbname=$db;charset=UTF8";
        $pdo=new PDO($dsn,$user,$pass);
            try {
                if (
                       

                	)

                
                $fio_zapros = 'insert into info_user (f_i_o, god_roj, o_sebe) value ("'.$fio.'", "'.$god_rojd.'", "'.$o_sebe.'")';
                $stmt = $pdo->prepare($fio_zapros);
                $stmt->execute();
                
                $res = $pdo->query('SELECT * FROM info_user order by id_user DESC limit 1');
				foreach ($res as $key => $value) {
					var_dump($value);
				}


                $parol_zapros = 'insert into pass_user (login_user, parol_user, vopros, otvet) value ("'.$login_user.'", "'.$pass_user.'", "'.$vopros.'", "'.$otvet.'")';
                $stmt2 = $pdo->prepare($parol_zapros);
                $stmt2->execute();
                

                //$jivot_zapros = 'insert into jivot_user (1_jivot, 2_jivot, 3_jivot) value (?,?,?)';
                $stmt3 = $pdo->prepare('insert into jivot_user (1_jivot, 2_jivot, 3_jivot) value (?,?,?)');
                                //try{
                    $stmt3->execute(array($jivot_user1,'0','0'));
                    
                    
                //}catch (PDOException $e) {
                  //      print "Error!: " . $e->getMessage() . "<br/>";
                    //    die();
                    //}
                /*$fio_zapros= 'select * from info_user where opertion_id>100;';
                $history= $pdo->query($fio_zapros);
                foreach ($history as $key => $value) {
                        echo "<pre>";
                    var_dump ($value);
                    echo "</pre>";
                
                foreach ($value as $key2 => $value2) {
                    echo "<pre>";
                    var_dump ($value2);
                    echo "</pre>";
                }
                
            }
            die();
            $pdo = null;*/
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    ?>
 </form>
 </body>
 </html>





?>