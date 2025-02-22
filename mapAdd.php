<?
$mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql


$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);


$mysql->query("INSERT INTO forest (`g`) VALUES ('{$_REQUEST['id']}')");

//$mysql->query("UPDATE urman23 SET d='{$_REQUEST['d']}' WHERE number='{$_REQUEST['id']}' ");


?>