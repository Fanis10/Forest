  <?
session_start();
  $mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql
require_once("Mobile_Detect.php");
$mbdt= new Mobile_Detect;

$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);

 

            $c=$_REQUEST['c'];
$res=$mysql->query("SELECT * FROM forest WHERE status='Готовый дом' AND id>'{$_REQUEST['lastId']}' LIMIT 1");
if (   $_SESSION['lastId']!= $_REQUEST['lastId'])
{
     $_SESSION['lastId']=$_REQUEST['lastId'];
     
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
                    <div class="anita-price-item">
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
					<div onclick="goHome(`https://forestkzn.com/projects/?house='.$dom['g'].'`)" style="cursor:pointer; '.$stt.' background-image: src(`https://forestkzn.com/projectsImages/'.$pht.'"`)" class="anita-data-background"  data-src="https://forestkzn.com/projectsImages/'.$pht.'"></div>
			';
            
            
            if ($c%2==0) echo $domtext.$domimg;
            else echo $domimg.$domtext;
            
            $c++;
            
            
            
            
            
echo '
           	</div><!-- .anita-grid -->
			</section>
            <script>
               	if (jQuery(".anita-data-background[data-src]:not(.is-loaded)").length) {
    		jQuery(".anita-data-background[data-src]:not(.is-loaded)").each(function() {
                let $this = jQuery(this);
                $this.css("background-image", "url("+ $this.attr("data-src") +")").addClass("is-loaded");
    		});
    	}
            </script>
        
        ';
        
      
    
    
    
    
    }
    
  
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