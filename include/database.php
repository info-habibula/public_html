<?php
$link=mysqli_connect('localhost','root00','1','patya');
if (mysqli_connect_errno()) {
	echo 'Ошибка в подключении к б/д ('.mysqli_connect_errno().'):'.mysqli_connect_error();
    exit();
}
?>