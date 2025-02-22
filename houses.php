<?
session_start();
$_SESSION['lastId']='';

require_once("Mobile_Detect.php");
$mbdt= new Mobile_Detect;
$mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql
$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Готовые дома | Коттеджный посёлок FOREST</title>

    <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&family=Overpass:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Template Config -->
    <link type="text/css" rel="stylesheet" href="h/css/config.css">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href="h/css/libs.css">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href="h/css/style.css">
    <!-- Responsive -->
    
    <link type="text/css" rel="stylesheet" href="h/css/responsive.css">

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

        <style>
        :root {
        --anita-container-width: 1280px;
    }
    @media only screen and (max-width: 739px) {
        .anita-price-item-row .anita-data-background {
        height: 70vh;
        min-height: 320px;
    }
    }
    </style>
    <!-- Favicon -->

</head>
<body>
    <!-- Header -->
    <header id="anita-header" class="anita-header">
        <div class="anita-header-inner">
            <div class="anita-logo-wrapper">
                <!-- Logo -->
                <a href="/" class="anita-logo is-retina">
                  
                </a>
            </div>
            <div class="anita-menu-wrapper">
                <!-- Menu Toggle Button -->
                <a href="#" class="anita-menu-toggler">
                    <i class="anita-menu-toggler-icon"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Fullscreen Menu -->
    <div class="anita-fullscreen-menu-wrap">
        <nav class="anita-nav anita-js-menu"></nav>
    </div>

    <!-- Page Background -->


    <!-- Page Main -->
    <main class="anita-main">

        <!-- Page Container -->
		<div class="anita-container">

            <!-- Page Title -->
            <section class="anita-section">
                <h1 style="color: #d7a73e;" class="anita-page-title" data-aos="fade-up">Готовые дома</h1>
              
            </section>

            <!-- Section: Price Table - Wedding -->
            <section id="houses">
            
            <?
 
$res=$mysql->query("SELECT * FROM forest WHERE status='Готовый дом' LIMIT 3");

  $c=1;
while ($dom=$res->fetch_array())
{
   
            
            if ($mbdt->isMobile())
            {
                $pht=$dom['project']."_mobile.webp";
                $stt="";
            }
            else 
               {
                $pht=$dom['project'].".webp";
                $stt="background-size:contain;";
            }
   
     
        if ($c%2==0) $ccc='33-66';
        else $ccc='66-33';
        
        echo '
        
          <section class="anita-section anita-bottom-gap--small single-house" id="'.$dom['id'].'">
				<div  class="anita-grid anita-grid--'.$ccc.' anita-price-item-row anita-grid--tablet-2cols"> ';
                    
                    if ($mbdt->isMobile())
                    $domtext='<div class="anita-price-item">
                        <!-- Price Item Head -->
                        <div style="    text-align: center;" class="anita-price-item--head">
                        <div class="anita-price-item--price-descr">
                        ПРОЕКТ '.$dom['g'].'
                                </div> 
                            <div class="anita-price-item--heading">
                                 '.ruProject($dom['project']).'       
                            </div>
                            
                      
                        </div>
                        <!-- Price Item Content -->
                     
                        <!-- Price Item Footer -->
                        <div class="anita-price-item--footer">
                            <a href="https://forestkzn.com/projects/?house='.$dom['g'].'" class="anita-price-item-button anita-button">Подробнее о доме</a>
                        </div>
                    </div>';
                    
                    else 
                    $domtext='<!-- Price Item -->
                    <div class="anita-price-item" >
                        <!-- Price Item Head -->
                        <div class="anita-price-item--head">
                        <div class="anita-price-item--price-descr">
                        ПРОЕКТ '.$dom['g'].'
                                </div> 
                            <div class="anita-price-item--heading">
                                 '.ruProject($dom['project']).'       
                            </div>
                            
                      
                        </div>
                        <!-- Price Item Content -->
                        <div class="anita-price-item--content">
                         
                            <ul class="anita-price-item--list">
                               
                               
                                <li>
                                   Участок '.$dom['sotka'].' соток 
                                </li>
                               
                                <li>
                                   Подземная газификация
                                </li>
                                <li>
                                Подземная электрификация
                                </li>
                                <li>
                                    Высокоскоростной интернет
                                </li>
                                <li>
                                    Отмостка по периметру дома
                                </li>
                                    <li>
                                    Забор по периметру дома
                                </li>
                                    <li>
                                    Озеленение участка ( газон )
                                </li>
                                    <li>
                                    Центральное водоснабжение, ЛОС
                                </li>
                                    <li>
                                    Въездная зона, парковка
                                </li>
                          
                            </ul>
                        </div>
                        <!-- Price Item Footer -->
                        <div class="anita-price-item--footer">
                            <a href="https://forestkzn.com/projects/?house='.$dom['g'].'" class="anita-price-item-button anita-button">Подробнее о доме</a>
                        </div>
                    </div><!-- .anita-price-item -->';
                    
                    
                    $domimg='         <!-- Column with Background Image -->
					<div onclick="goHome(`https://forestkzn.com/projects/?house='.$dom['g'].'`)" style="cursor:pointer; '.$stt.' " class="anita-data-background"  data-src="https://forestkzn.com/projectsImages/'.$pht.'"></div>
			';
            
            
            if ($c%2==0) echo $domtext.$domimg;
            else echo $domimg.$domtext;
            
            $c++;
            
            
            
            
echo '
           	</div><!-- .anita-grid -->
			</section>
        
        ';
        
      
    
    
    
    
    }
    
    
    
    ?>
            
            
          
</section>
            <!-- Section: Price Table - Children -->
            	</div>

            <!-- Section: Get in Touch  -->
<!-- .anita-container -->
	</main>

    <!-- Footer -->


<script>
function goHome(url){

    
     window.location.href=url;
}

</script>
    <!-- JS Scripts -->
   <script src="https://europakzn.ru/assets/js/jquery-3.1.1.min.js"></script>
    <script src="h/js/lib/aos.min.js"></script>
    <script src="h/js/core.js"></script>
    
    
    
    <script type="text/javascript">
    var c=<?=$c?>;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() + 200 >= $(document).height()) {
            var lastId = $(".single-house:last").attr("id");
            $.ajax({
                        url: 'showMoreData.php',
                        type: "post",
                        dataType: "html",
                        data: {
                            "c":c,
                             "lastId":lastId    
                                 },
              
                        success: function (data) {
                            if (data.length > 10)
                            { 
                                 $("#houses").append(data);
                                 c++;
                                 }
                        }
            });
        }
    });
</script>
    
    
    
</body>
</html>
<?

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