<?
ini_set('error_reporting', E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$mhost = 'localhost';//	���� mysql
$muser = 'u0980170_default';//	������������ mysql
$mpass = '31_0lp7W';//	������ mysql
$mbase = 'u0980170_default';//	���� mysql


$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">�� ������� ������������ � ��</h1><br>�������: '.$mysql->connect_error);


require_once("Mobile_Detect.php");
$mbdt= new Mobile_Detect;

 if ($mbdt->isMobile())
 require "2/index.php";
 else  require "1/index.php";

?>

