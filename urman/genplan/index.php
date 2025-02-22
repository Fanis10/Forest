<?
ini_set('error_reporting', E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();
    if ($_SESSION['mzmd']!='sdh763gn86r2fg298213')
    {
    require ("ladm.php");
    exit();
    }
$mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql


$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);

function ruProject($pj){
    switch ($pj) {
        
        case 'amsterdam':
        return 'Амстердам';
        break;
        
             case 'bremen':
        return 'Бремен';
        break;
        
        
             case 'madrid':
        return 'Мадрид';
        break;
        
        
             case 'barselona':
        return 'Барселона';
        break;
        
             case 'bern':
        return 'Берн';
        break;
        
             case 'berlin':
        return 'Берлин';
        break;
        
                  case 'palermo':
        return 'Палермо';
        break;
        
                         case 'skandinavia':
        return 'Скандинавия';
        break;
        
                          case 'bavaria':
        return 'Бавария';
        break;
        
        
        
        
                                  case 'madrid-white':
        return 'Мадрид White';
        break;
        
        
                                  case 'palermowhite':
        return 'Палермо White';
        break;
        
        
                                  case 'bremenblack':
        return 'Бремен Black';
        break;
        
        
                                  case 'bavariamin':
        return 'Бавария SE';
        break;
        
        
                                  case 'bavariasewhite':
        return 'Бавария SE White';
        break;
        
        
                                  case 'bavariawhite':
        return 'Бавария White';
        break;
        
        
                                  case 'amsterdamblack':
        return 'Амстердам Black';
        break;
        
        
                                  case 'barselonawhite':
        return 'Барселона White';
        break;
        
    }
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.0/sb-1.3.3/datatables.min.css"/>
         <script src="../jquery.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.0/sb-1.3.3/datatables.min.js"></script>
</head>
<body>
<div style="margin: 50px;">
<?if ($_GET['id'])
{
  $mysql->query("UPDATE forest SET `status`='{$_GET['status']}',`sotka`='{$_GET['sotka']}', `price`='{$_GET['price']}', `pdkp`='{$_GET['pdkp']}', `dkp`='{$_GET['dkp']}', fio='{$_GET['fio']}', `source`='{$_GET['source']}' WHERE `id`='{$_GET['id']}'");
//exit();
header("Location: ./");
}
?>
<table id="example" class="nowrap display">
<thead>
<th>Номер</th>
<th>Статус</th>
<th>Площадь</th>
<th>Цена</th>
<th>ПДКП</th>
<th>ДКП</th>
<th>ФИО</th>
<th>Источник</th>
<th>Действие</th>
</thead>
<tbody>

<?
$res=$mysql->query("SELECT * FROM forest");
while ($ground=$res->fetch_assoc())
{
    if (!$ground['status']) $ground['status']="Свободно";
$statusOption="<select id='sts' name='status'>
<option "; if ($ground['status']=='Свободно') $statusOption.= 'selected'; $statusOption.=">Свободно</option>
<option "; if ($ground['status']=='Продано')  $statusOption.= 'selected'; $statusOption.=">Продано</option>
<option "; if ($ground['status']=='Бронь')  $statusOption.= 'selected'; $statusOption.=">Бронь</option>
<option "; if ($ground['status']=='Готовый дом')  $statusOption.= 'selected'; $statusOption.=">Готовый дом</option>

</select>";


   
$projectOption="<select id='pts' name='project'>
<option></option>
<option value='bern' "; if ($ground['project']=='bern') $projectOption.= 'selected'; $projectOption.=">Берн</option>
<option value='barselona' "; if ($ground['project']=='barselona')  $projectOption.= 'selected'; $projectOption.=">Барселона</option>
<option value='madrid' "; if ($ground['project']=='madrid')  $projectOption.= 'selected'; $projectOption.=">Мадрид</option>
<option value='bremen' "; if ($ground['project']=='bremen')  $projectOption.= 'selected'; $projectOption.=">Бремен</option>

<option value='amsterdam' "; if ($ground['project']=='amsterdam') $projectOption.= 'selected'; $projectOption.=">Амстердам</option>
<option value='berlin' "; if ($ground['project']=='berlin')  $projectOption.= 'selected'; $projectOption.=">Берлин</option>
<option value='vilnus' "; if ($ground['project']=='vilnus')  $projectOption.= 'selected'; $projectOption.=">Вильнюс</option>
<option value='palermo' "; if ($ground['project']=='palermo')  $projectOption.= 'selected'; $projectOption.=">Палермо</option>
<option value='skandinavia' "; if ($ground['project']=='skandinavia')  $projectOption.= 'selected'; $projectOption.=">Скандинавия</option>
<option value='bavaria' "; if ($ground['project']=='bavaria')  $projectOption.= 'selected'; $projectOption.=">Бавария</option>

<option value='madrid-white' "; if ($ground['project']=='madrid-white')  $projectOption.= 'selected'; $projectOption.=">Мадрид White</option>
<option value='palermowhite'"; if ($ground['project']=='palermowhite')  $projectOption.= 'selected'; $projectOption.=">Палермо White</option>
<option value='bremenblack'"; if ($ground['project']=='bremenblack')  $projectOption.= 'selected'; $projectOption.=">Бремен Black</option>
<option value='bavariamin'"; if ($ground['project']=='bavariamin')  $projectOption.= 'selected'; $projectOption.=">Бавария SE</option>
<option value='bavariasewhite'"; if ($ground['project']=='bavariasewhite')  $projectOption.= 'selected'; $projectOption.=">Бавария SE White</option>
<option value='barselonawhite'"; if ($ground['project']=='barselonawhite')  $projectOption.= 'selected'; $projectOption.=">Барселона White</option>
<option value='bavariawhite'"; if ($ground['project']=='bavariawhite')  $projectOption.= 'selected'; $projectOption.=">Бавария White</option>
<option value='amsterdamblack'"; if ($ground['project']=='amsterdamblack')  $projectOption.= 'selected'; $projectOption.=">Амстердам Black</option>

</select>";




    echo " <tr><form method='get'> <input type='hidden' name='id' value='".$ground['id']."'/><td>".$ground['g']."</td><td data-sort='".$ground['status']."'>".$statusOption."</td><td data-sort='".$ground['sotka']."'><input value='".$ground['sotka']."' name='sotka'/></td><td data-sort='".$ground['price']."'><input value='".$ground['price']."' name='price'/></td><td data-sort='".$ground['pdkp']."' ><input value='".$ground['pdkp']."' name='pdkp'/></td><td data-sort='".$ground['dkp']."'><input value='".$ground['dkp']."' name='dkp'/></td><td data-sort='".$ground['fio']."'><input value='".$ground['fio']."' name='fio'/></td><td data-sort='".$ground['source']."'><input value='".$ground['source']."' name='source'/></td><td><button type='submit' >Сохранить</button></td></form></tr>";
$projectOption='';
$statusOption='';
}
?>
</tbody>
</table>
</div>

<script>
$('#example').DataTable({
    
      language: {
            url: 'Russian.json'
        }
});


</script>
</body>
</html>
