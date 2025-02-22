<?
if (!$_POST)
exit();

$mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql

ini_set('error_reporting', E_ALL);

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);





$ttoken='6660518983:AAF1Am45ASTUKKlDZBrBD3XIJ4ihj8YP87c';
$from='сайта';

$message="*С $from FOREST получена новая заявка на консультацию!*\xF0\x9F\x94\xA5\r\n
Имя: {$_POST['name']} \r\n
Контактный телефон:{$_POST['phone']} 
";

$response = array(
	'chat_id' => 160559132,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

send($response,"sendMessage");

$response = array(
	'chat_id' => 352403660,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

send($response,"sendMessage");

$response = array(
	'chat_id' => 565257599,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

//send($response,"sendMessage");

if ($_POST['catalog'])
header("Location: /FOREST.pdf");
else
header("Location: ./?thankyou");


function send($param,$method)
{
    GLOBAL $ttoken;
$ch = curl_init('https://api.telegram.org/bot' . $ttoken . '/'.$method);  
curl_setopt($ch, CURLOPT_POST, 1);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
}


?>