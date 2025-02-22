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

$res=$mysql->query("SELECT * FROM forest WHERE g='{$_REQUEST['id']}'");
$ground=$res->fetch_assoc();
if ($ground['status']=='Бронь')
$status='<b style="color: #967f55; font-size: 16px;"> Забронирован</b></p>';
else if ($ground['status']=='Продано')
$status='<b style="color: red; font-size: 16px;"> Продан</b></p>';
else if ($ground['status']=='Строительство')
$status='<b style="color: #531854; font-size: 16px;">Идёт строительство</b></p>';

else if ($ground['status']=='Готовый дом')
$status='<b style="color: green; font-size: 16px;"> Готовый дом</b></p>';

else 
$status='<b style="color: green; font-size: 16px;"> Свободный</b></p>';



if ($ground['status']=='Свободно')
{
   $price = str_replace(" ","",$ground['price']);
   $ground['sotka'] = str_replace(",",".",$ground['sotka']);
    $price= $price* $ground['sotka'];
    $price = number_format($price,0,'.',' ');
  
$m='Montserrat';
echo '

          <div style="margin-top: 30px;" class="form-field">
                      <p style="font-family: '.$m.';font-size: 28px;">
                    Участок №'.$ground['g'].'
                    </div>
                    <div class="form-field">
                     <p style="font-family: '.$m.';font-size: 28px;    margin-top: 30px;">
                    Площадь: '.$ground['sotka'].' соток </p>
                    </div>
                      <div class="form-field">
                   <p style="font-family: '.$m.';font-size: 28px;    margin-top: 30px; margin-bottom: 30px;">
                    Стоимость: '.$price.' ₽</p>
                    </div>
                    
                    
                ';
}

else if ($ground['status']=='Готовый дом')
{
   $price = str_replace(" ","",$ground['price']);

    $price = number_format($price,0,'.',' ');
  
$m='Montserrat';
echo '

          <div style="margin-top: 30px;" class="form-field">
                      <p style="font-family: '.$m.';font-size: 28px;">
                    Участок №'.$ground['g'].'
                    </div>
                    <div class="form-field">
                     <p style="font-family: '.$m.';font-size: 28px;    margin-top: 25px;">
                    Площадь: '.$ground['sotka'].' соток </p>
                    </div>
                           <div class="form-field">
                   <p style="font-family: '.$m.';font-size: 28px;    margin-top: 30px;">
                    Стоимость: '.$price.' ₽</p>
                    </div>
                    
                            <div class="form-field">
                   <p style="font-family: '.$m.';font-size: 28px;    margin-top: 30px; margin-bottom: 25px;">
                    Проект: '.ruProject($ground['project']).' </p>
                    </div>
                  <div><a href="/projects/?house='.$ground['g'].'"><img class="imgmap" src="projectsImages/'.$ground['project'].'.webp"/></a></div>
                    
                    
                ';
}


function ruProject($pj){
    switch ($pj) {
        
        case 'almagach':
        return 'Алмагач';
        break;
        
             case 'almagachblack':
        return 'Алмагач Black';
        break;
        
        
             case 'kaen':
        return 'Каен';
        break;
        
        
             case 'kaenblack':
        return 'Каен Black';
        break;
        
             case 'karagach':
        return 'Карагач';
        break;
        
             case 'karagachblack':
        return 'Карагач Black';
        break;
        
            case 'kashtan':
        return 'Каштан';
        break;
                  case 'kashtanblack':
        return 'Каштан Black';
        break;
                  case 'kedr':
        return 'Кедр';
        break;
        
        
        
                     case 'kedrblack':
        return 'Кедр Black';
        break;
        
        
             case 'kiparis':
        return 'Кипарис';
        break;
        
        
             case 'kiparisblack':
        return 'Кипарис Black';
        break;
        
             case 'narat':
        return 'Нарат';
        break;
        
             case 'naratblack':
        return 'Нарат Black';
        break;

        
    }
}
?>