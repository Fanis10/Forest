<?
if (!$_POST)
exit();
else echo 'post';
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


$message="*С квиза FOREST получена новая заявка на консультацию!*\xF0\x9F\x94\xA5\r\n
Имя: {$_POST['name']} \r\n
Контактный телефон:{$_POST['phone']} \r\n
Комментарий: {$_POST['text']}
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
		

send($response,"sendMessage");





$contacts['add']=array(
  array(
    'name'=>$_POST['name'],
    'created_at'=>time(),

    'custom_fields' => 
    array ( 
     array ('id' => 249933, 'values'=>array(array('value'=>$_POST['phone'])))
  
          )

  )
);


$contacts_id=amocrm('contacts',$contacts);



$title = 'FOREST - новая заявка';
$leads['add']=array(
  array(
    'name'=>$title,
    'created_at'=>time(),
    'responsible_user_id'=>6977086,
    'pipeline_id' => 7245022,
    'status_id' => 60424586,
    'contacts_id' => $contacts_id,
    'custom_fields' => 
    array ( 
     array ('id' => 248987, 'values'=>array(array('value'=>537711))),
     array ('id' => 249243, 'values'=>array(array('value'=>519049))),
     array ('id' => 249147, 'values'=>array(array('value'=>isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie')))
     
          ),  
    'tags' => 'forest' #Tags

  )
);



$note_id=amocrm('leads',$leads);

$notes['add']=array(
  array(
   'element_id' => $note_id,
      'element_type' => '2',
      'text' => $message,
      'note_type' => '4',
      'created_at' => time()

  )
);

amocrm('notes',$notes);


$tasks['add']=array(
  array(
      'element_id' => $note_id,
      'element_type' => '2',
      'text' => 'Перезвонить через 30 минут',
      'responsible_user_id'=>6977086,
      'complete_till' => (time() + (40*60)),
      'task_type' => '1',
      'created_at' => time()
      

  )
);

amocrm('tasks',$tasks);




function amocrm($method,$body)
{
  GLOBAL $mysql;  
$subdomain = 'vmstroy'; //Поддомен нужного аккаунта
$link = 'https://' . $subdomain . '.amocrm.ru/api/v2/'.$method; //Формируем URL для запроса

$res=$mysql->query("SELECT * FROM tbottoken WHERE id=1");
$token=$res->fetch_assoc();
$access_token = $token['access'];
$refresh_token = $token['refresh'];
$life_token = $token['time'] + $token['expires'];
if (time()>$life_token)
{
    
    $link2 = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token'; 

/** Соберем данные для запроса */
$data = array(
	'client_id' => '66402b5e-db37-4333-b06e-e25afef640f5',
	'client_secret' => '2mope829jilszXnlw9NqEXmyh47fknYtBAiGuOKzzq420mZ5Z85lffslsITfNxs5',
	'grant_type' => 'refresh_token',
	'refresh_token' => $refresh_token,
	'redirect_uri' => 'https://vm-stroy.site/amo/amo.php',
);

/**
 * Нам необходимо инициировать запрос к серверу.
 * Воспользуемся библиотекой cURL (поставляется в составе PHP).
 * Вы также можете использовать и кроссплатформенную программу cURL, если вы не программируете на PHP.
 */
$curl = curl_init(); 
/** Устанавливаем необходимые опции для сеанса cURL  */
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link2);
curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
curl_setopt($curl,CURLOPT_HEADER, false);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl); 
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
/** Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
$code = (int)$code;
$errors = [
	400 => 'Bad request',
	401 => 'Unauthorized',
	403 => 'Forbidden',
	404 => 'Not found',
	500 => 'Internal server error',
	502 => 'Bad gateway',
	503 => 'Service unavailable',
];

try
{
	/** Если код ответа не успешный - возвращаем сообщение об ошибке  */
	if ($code < 200 || $code > 204) {
		throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undefined error', $code);
	}
}
catch(\Exception $e)
{
	die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
}

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$response = json_decode($out, true);

$access_token = $response['access_token']; 
$refresh_token = $response['refresh_token'];

$expires_in = $response['expires_in']; 
 $time=time();   
    
    $mysql->query("UPDATE tbottoken SET time='$time',access='$access_token', refresh='$refresh_token', expires='$expires_in' WHERE id=1");
    
    
}




$headers = [
	'Authorization: Bearer ' . $access_token
];
    
 $curl = curl_init(); //Сохраняем дескриптор сеанса cURL
/** Устанавливаем необходимые опции для сеанса cURL  */
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link);
curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl,CURLOPT_HEADER, false);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
/** Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
$code = (int)$code;



/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$response = json_decode($out, true);   
 
 if ($method=='leads')   
return $response['_embedded']['items'][0]['id'];
 if ($method=='notes')   
return $response['_embedded']['items'][0]['id'];
 if ($method=='contacts')   
return $response['_embedded']['items'][0]['id'];   
}



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