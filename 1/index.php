<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Коттеджный поселок Forest - земельные участки в Пестречинском районе" />
    <link rel="shortcut icon" type="image/png" href="../favicon.png">
    <link rel="stylesheet" href="1/style.css?v<?= hash_file('md5', '1/style.css') ?>" />
    <link rel="preload" fetchpriority="high" as="image" href="1/img/project.webp" type="image/webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <title> Коттеджный поселок Forest - земельные участки в Пестречинском районе </title>

    <link href="splide.min.css" rel="stylesheet">
    <style>
        iframe {
            border-radius: 10%;
        }
        .marquiz-widget__iframe {
            border-radius: 10px;
          }

        .map-widget-app {
            border-radius: 10%;
        }
    </style>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" async>
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97179832, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });

        <? if ($_GET['thankyou'] == 'view')
            echo "ym(97179832,'reachGoal','forma');";
        ?>
    </script>
    




    <noscript>
        <div><img src="https://mc.yandex.ru/watch/97179832" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->


</head>

<body style="    line-height: 0;">
    <div class="preloader">
        <div class="preloader__row">
            <img class="loader" src="../loader.svg" />
        </div>
    </div>


    <div class="element">
        <div class="div">
            <div class="menu_btn">
        <span>МЕНЮ</span>
        <div class="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="menu_wrapper">
        <div style="line-height:1;" class="menu_container">
          <div class="menu-back">МЕНЮ</div>
          <div class="menu_list">
            <div class="menu_item">
              <a href="/index.php">Главная</a>
              <span>00</span>
            </div>
            <div class="menu_item">
              <a href="map.php">Генеральный план</a>
              <span>01</span>
            </div>
            <div class="menu_item">
              <a href="/projects.html">Проекты домов</a>
              <span>02</span>
            </div>
            <div class="menu_item">
              <a href="/?houses">Готовые дома</a>
              <span>03</span>
            </div>
            <div class="menu_item">
              <a href="timeline.html">Ход строительства</a>
              <span>04</span>
            </div>
            <div
              class="menu_item"
              onclick="(function(){
                      document.querySelector('.menu_wrapper').classList.remove('activeMenu');
                      document.querySelector('.menu_btn').classList.remove('active');
                      document.querySelector('.burger').classList.remove('active');
                      document.querySelector('body').style.overflow = 'auto';
                    })();"
            >
              <a href="#footer">Контакты</a>
              <span>05</span>
            </div>
            <div class="mobile_soc">
              
              <a
                target="_blank"
                class="social2"
                href="https://youtube.com/@vmstroy?si=bX0a1x6jS0RiWEW9"
                >YOUTUBE</a
              >&nbsp;&nbsp;&nbsp;&nbsp;
              <a target="_blank" class="social2" href="https://t.me/vmstroyrf"
                >ТЕLEGRAM</a
              >
            </div>
          </div>
          <div style="line-height:1.6;" class="menu_contacts">
            <div class="str">СТРОИТЕЛЬНАЯ КОМПАНИЯ ВМ СТРОЙ</div>
            <p class="srr" style="margin-bottom: 25px">
              Казань Шаляпина 32 <br />1 Этаж
            </p>
            <div class="str">КОНТАКТНАЯ ИНФОРМАЦИЯ</div>
            <div class="srr">
              <a
                style="color: inherit; margin-bottom: 25px"
                href="tel:+79274944558"
                >+7 927 494-45-58</a
              >
            </div>

            <div class="str">ПОДПИСАТЬСЯ</div>
            <div class="">
              
              <a
                target="_blank"
                class="social2"
                href="https://youtube.com/@vmstroy?si=bX0a1x6jS0RiWEW9"
                >YOUTUBE</a
              >&nbsp;&nbsp;&nbsp;&nbsp;
              <a target="_blank" class="social2" href="https://t.me/vmstroyrf"
                >ТЕLEGRAM</a
              >
            </div>
          </div>
        </div>
      </div>
            <div class="overlap">
                <div class="overlap-group">
                    <div class="text-wrapper clbck" clbck="genplan">ГЕНПЛАН</div>
                </div>
                <div class="div-wrapper">
                    <div class="text-wrapper-2"><a href="tel:+7 927 494-45-58" style="color: #1e2f15;">+7 927 494-45-58</a></div>
                </div>
                <img class="vector" src="forest.svg" />
                <img class="COMFORT-CLASS" src="1/img/comfort-class.png" />
                <img class="image" src="1/img/image.png" />
            </div>
            <div class="text-wrapper-3">О ПРОЕКТЕ</div>
            <img class="img" src="1/img/forest.webp" />
            <p class="FOREST">
                <span class="span">Коттеджный поселок </span>
                <span class="text-wrapper-4">FOREST</span>
                <span class="span">
                    представляет собой идеальный выбор для желающих обзавестись готовым жильем, обладающим всеми
                    необходимыми
                    коммуникациями, в гармоничном сочетании с окружающим лесом и выполненным в едином архитектурном
                    стиле.</span>
                <span class="text-wrapper-5"> <br /></span>
                <span class="text-wrapper-5"></span>
            </p>

            <div class="image-2">ЛОКАЦИЯ</div>
            <div class="overlap-2">
                <div class="text-wrapper-6">ПЕСТРЕЧИНСКИЙ РАЙОН</div>
                <div class="text-wrapper-7">КАЗАНЬ</div>
            </div>
            <div style="top: 2146px;    left: 891px; position: absolute; border-radius: 10%;">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0fb63ac439e1f0f1cdbdda05bc23b668236bb544005d234e72c8d2f059890f8c&amp;width=727&amp;height=689&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <img class="img-3" src="1/img/1.webp" />
            <div class="view">
                <div class="overlap-group-2">
                    <div class="text-wrapper-8 road">МАРШРУТ</div>
                </div>
            </div>

            <div class="text-wrapper-10">9 МИНУТ ДО КАЗАНИ</div>
            <div class="overlap-4">
                <p class="p">
                    <span class="text-wrapper-11">Концепция </span>
                    <span class="text-wrapper-12">ЭКО-СТИЛЯ</span>
                    <span class="text-wrapper-11"> с натуральными материалами, <br />гармонично вписывающимися в
                        природу.</span>
                </p>
                <div class="text-wrapper-13">ПРОЕКТЫ</div>
                <div class="splide" id="slider1">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <img class="polygon-3" src="1/img/d/polygon-2.svg" />

                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <img class="polygon" src="1/img/d/polygon-1.svg" />
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/1.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/2.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/3.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/4.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/5.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/6.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/7.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/8.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/9.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/10.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/11.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide"><img class="img-8" src="1/img/projects/12.webp" />
                                <div class="overlap-group-wrapper slider_btn">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-15">КАТАЛОГ</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
            <div class="text-wrapper-16">АРХИТЕКТУРА</div>

            <!-- <div class="overlap-6">
                <img class="rectangle" src="1/img/slider/rectangle-428.svg" />
                <img class="rectangle-2" src="1/img/slider/rectangle-429.svg" />
                <img class="rectangle-3" src="1/img/slider/rectangle-430.svg" />
                <img class="rectangle-4" src="1/img/slider/rectangle-431.svg" />
                <img class="rectangle-5" src="1/img/slider/rectangle-433.svg" />
            </div> -->



            <div class="overlap-7">
                <div class="text-wrapper-18">БЕЗОПАСНОСТЬ</div>
            </div>
            <div class="overlap-14">
                <div class="splide" role="group" id="slider2">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <img class="polygon-3" src="1/img/d/polygon-2.svg" />

                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <img class="polygon" src="1/img/d/polygon-1.svg" />
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide" data-desc="Видеонаблюдение и пропускная система на въезде в посёлок. Вы можете не волноваться за
                        собственную
                        безопасность." data-title="БЕЗОПАСНОСТЬ"><img class="img-8" src="1/img/slider/1.webp" /></li>
                            <li class="splide__slide" data-desc="Асфальтированные дороги, тротуары из брусчатки, современное освещение и подземные коммуникации, окруженные объятием леса." data-title="БЛАГОУСТРОЙСТВА">
                                <img class="img-8" src="1/img/slider/2.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Асфальтированные дороги, тротуары из брусчатки, современное освещение и подземные коммуникации, окруженные объятием леса." data-title="БЛАГОУСТРОЙСТВА">
                                <img class="img-8" src="1/img/slider/3.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Асфальтированные дороги, тротуары из брусчатки, современное освещение и подземные коммуникации, окруженные объятием леса." data-title="БЛАГОУСТРОЙСТВА">
                                <img class="img-8" src="1/img/slider/4.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Асфальтированные дороги, тротуары из брусчатки, современное освещение и подземные коммуникации, окруженные объятием леса." data-title="БЛАГОУСТРОЙСТВА">
                                <img class="img-8" src="1/img/slider/5.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Коммерческая зона в поселке: уютные магазины и коворкинг, идеальное сочетание для покупок и работы в атмосфере гостеприимства." data-title="МАГАЗИН">
                                <img class="img-8" src="1/img/slider/6.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Яркая, безопасная зона для игр и отдыха семьи на свежем воздухе среди зелени. Резиновое покрытие, современный комплекс." data-title="ДЕТСКАЯ ЗОНА">
                                <img class="img-8" src="1/img/slider/8.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Баскетбольная и воркаут зоны в поселке: пространство для спорта и активности на свежем воздухе среди зеленых насаждений." data-title="СПОРТИВНАЯ ЗОНА">
                                <img class="img-8" src="1/img/slider/9.webp" />
                            </li>
                            <li class="splide__slide" data-desc="Парковая зона в поселке: тихое, зеленое убежище для прогулок и релаксации среди густой лесной растительности." data-title="ПАРКОВАЯ ЗОНА">
                                <img class="img-8" src="1/img/slider/10.webp" />
                            </li>

                            <li class="splide__slide" data-desc="Мечеть с общественным пространством в поселке: современный дизайн, место для духовности и собраний в гармонии с природой." data-title="МЕЧЕТЬ">
                                <img class="img-8" src="1/img/slider/11.webp" />
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="rectangle-7">
                    <p class="text-wrapper-26">
                        Видеонаблюдение и пропускная система на въезде в посёлок. <br />Вы можете не волноваться за
                        собственную
                        безопасность.
                    </p>
                </div>




            </div>
            <div class="overlap-8">
                <div class="text-wrapper-19">ИНФРАСТРУКТУРА</div>
                <div class="group">
                    <div class="overlap-9">
                        <img class="img-5" src="1/img/infrastuctura.webp" />
                        <button class='btn slider_btn'>КАТАЛОГ</button>
                    </div>


                </div>


            </div>
            <div id="genplan" style="top: 6950px; position: absolute;">
                <? require("svg.php"); ?>
                <button class="genplan_button">ЗАБРОНИРОВАТЬ</button>
            </div>
            <div class="overlap-16">

                <div class="view-9">
                    <form method="post" action="leed.php" class="overlap-17 form">
                        <button class="overlap-group-3" type="submit" disabled>
                            <div class="text-wrapper-27">ОТПРАВИТЬ</div>
                            <img class="mask-group-2" src="1/img/mask-group-2.png" />
                        </button>
                        <div class="text-wrapper-28">ЗАПИСАТЬСЯ НА ЭКСКУРСИЮ</div>
                        <div class="text-wrapper-29">
                            <input name="name" placeholder="Ваше имя" type="text" required />
                            <small></small>
                        </div>
                        <div class="text-wrapper-30">
                            <input name="phone" placeholder="Номер телефона" type="text" required />
                            <small></small>
                        </div>

                        <div class="div-2 radio-label">

                            <input class="radio" type="radio" name="pers" id="pers" checked>
                            <label for="pers" class="radio-title">Нажимая кнопку «Отправить»
                                я соглашаюсь с <a href="/privacy-policy.pdf" target="_blank"">Пользовательским соглашением</a></label>

                        </div>


                    </form>
                </div>
            </div>
            <div class="road_modal">
                <div class="error_container">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaaba87a2657395bd3792fc3f508d25e951fb448fe9915f9550a832d96722f532&amp;source=constructor" width="1280" height="720" frameborder="0" loading="lazy"></iframe>
                    <div class="btn-close-road-modal">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8787 18.0001L0.939331 3.06077L3.06065 0.939453L18 15.8788L32.9393 0.939453L35.0607 3.06077L20.1213 18.0001L35.0607 32.9395L32.9393 35.0608L18 20.1214L3.06065 35.0608L0.939331 32.9395L15.8787 18.0001Z" />
                        </svg>
                    </div>
                </div>
                <div class="modal-window-background">
                </div>
            </div>

            <div class="catalog_modal">
                <div class="error_container1">
                    <form method="post" action="leed.php">

                        <div class="form-field">
                            <input name="name" class="catalog_input" placeholder="Ваше имя" type="text" required />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <input name="phone" class="catalog_input" placeholder="Номер телефона" type="text" required />
                            <small></small>
                        </div>
                        <input name="catalog" type="hidden" value="1" />
                        <div class="modal-radio">
                            <input class="radio" type="radio" name="cat" id="cat" checked>
                            <label for="cat" class="radio-title">
                                Нажимая кнопку «Отправить»
                                я соглашаюсь с <a href="/privacy-policy.pdf" target="_blank">Пользовательским соглашением</a>
                            </label>
                        </div>

                        <button type="submit" class="modal_button" disabled>Отправить каталог</button>
                    </form>


                    <div class="btn-close-catalog-modal">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8787 18.0001L0.939331 3.06077L3.06065 0.939453L18 15.8788L32.9393 0.939453L35.0607 3.06077L20.1213 18.0001L35.0607 32.9395L32.9393 35.0608L18 20.1214L3.06065 35.0608L0.939331 32.9395L15.8787 18.0001Z" />
                        </svg>
                    </div>
                </div>
                <div class="modal-catalog-background">
                </div>
            </div>

            <div class="booking_modal">
                <div class="error_container1">
                    <div style="display: none; text-align: center;" class="modalgenplan">

                    </div>
                    <form method="post" action="leed.php">
                        <div class="form-field">
                            <input name="name" class="catalog_input" placeholder="Ваше имя" type="text" required />
                            <small></small>
                        </div>
                        <div class="form-field">
                            <input name="phone" class="catalog_input" placeholder="Номер телефона" type="text" required />
                            <small></small>
                        </div>



                        <div class="modal-radio">
                            <input class="radio" type="radio" name="cat" id="booking" checked>
                            <label for="booking" class="radio-title">
                                Нажимая кнопку «Забронировать»
                                я соглашаюсь с <a href="/privacy-policy.pdf" target="_blank">Пользовательским соглашением</a>
                            </label>
                        </div>

                        <button type="submit" class="modal_button" disabled>Забронировать</button>
                    </form>


                    <div class="btn-close-catalog-modal">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8787 18.0001L0.939331 3.06077L3.06065 0.939453L18 15.8788L32.9393 0.939453L35.0607 3.06077L20.1213 18.0001L35.0607 32.9395L32.9393 35.0608L18 20.1214L3.06065 35.0608L0.939331 32.9395L15.8787 18.0001Z" />
                        </svg>
                    </div>
                </div>
                <div class="modal-catalog-background">
                </div>
            </div>

            <div class="thankyou_modal">
                <div class="error_container1">
                    <div class="thankyou_text thankyou_text1">Спасибо за заявку!</div>
                    <div class="thankyou_text">В ближайшее время с Вами свяжется наш менеджер.</div>


                    <div class="btn-close-catalog-modal">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8787 18.0001L0.939331 3.06077L3.06065 0.939453L18 15.8788L32.9393 0.939453L35.0607 3.06077L20.1213 18.0001L35.0607 32.9395L32.9393 35.0608L18 20.1214L3.06065 35.0608L0.939331 32.9395L15.8787 18.0001Z" />
                        </svg>
                    </div>
                </div>
                <div class="modal-catalog-background">
                </div>
            </div>





            <div class="text-wrapper-33" id="footer">Хотите посмотреть <br />своими глазами?</div>
            <a class="text-wrapper-34" href="/privacy-policy.pdf" target="_blank">Политика конфиденциальности</a>
            <p class="text-wrapper-35">Предложение не является публичной офертой</p>
            <div class="text-wrapper-36">КП FOREST VILLAGE, 2024</div>
            <div class="text-wrapper-37">СТРОИТЕЛЬНАЯ КОМПАНИЯ ВМ СТРОЙ</div>
            <div class="text-wrapper-38">КОНТАКТНАЯ ИНФОРМАЦИЯ</div>
            <div class="text-wrapper-39">ПОДПИСАТЬСЯ</div>
            <div class="social">
                <a class="instagram-YOUTUBE" href="https://www.instagram.com/forest_kazan_rt?igsh=Nm1sZ3QxeGJmNjlk" target="_blank">INSTAGRAM</a>
                <a class="instagram-YOUTUBE" href="https://youtube.com/@vmstroy?si=bX0a1x6jS0RiWEW9" target="_blank">YOUTUBE</a>
                <a class="instagram-YOUTUBE" href="https://t.me/vmstroyrf" target="_blank">ТЕLEGRAM</a>
            </div>

            <p class="text-wrapper-40"> Казань Шаляпина 32 <br />1 Этаж</p>
            <div class="text-wrapper-41"><a href="tel:+7 927 494-45-58" style="color: aliceblue;">+7 927 494-45-58</a>
            </div>
            <p class="text-wrapper-42">
                Оставьте контакты и мы пригласим <br />Вас на экскурсию — покажем ход строительства и ответим на все
                вопросы.
            </p>
            <img id="contact" class="line-5" src="1/img/line-11.svg" />

            <!-- <div class="text-wrapper-43">КОММУНИКАЦИИ</div>
                <div class="text-wrapper-44">ДЕТСКАЯ ЗОНА</div> -->

            <!-- <img class="polygon-2" src="1/img/polygon-3.svg" />

            <img class="polygon-4" src="1/img/polygon-4.svg" /> -->
        </div>
    </div>

    <script src="jquery.js"></script>
    <script>

        
    </script>
    <script src="splide.min.js?v=3"></script>
    <script>
        window.onload = function() {
            document.body.classList.add('loaded_hiding');
            window.setTimeout(function() {
                document.body.classList.add('loaded');
                document.body.classList.remove('loaded_hiding');
            }, 500);
        }
        <?

        $mhost = 'localhost'; //	Хост mysql
        $muser = 'u0980170_default'; //	Пользователь mysql
        $mpass = '31_0lp7W'; //	Пароль mysql
        $mbase = 'u0980170_default'; //	База mysql


        $mysql = new mysqli($mhost, $muser, $mpass, $mbase);
        $charset = 'utf8';
        $mysql->set_charset($charset);
        if ($mysql->connect_errno)
            exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: ' . $mysql->connect_error);


        $res = $mysql->query("SELECT * FROM forest");
        while ($town = $res->fetch_assoc()) {
            if ($town['status'] == 'Продано') $fill = '#E13803';
            else if ($town['status'] == 'Бронь') $fill = '#969390';
            else if ($town['status'] == 'Свободно') $fill = '#35A005';
            else if ($town['status'] == 'Строительство') $fill = '#fff';
            else if ($town['status'] == 'Готовый дом') $fill = '#0A6697';

        ?>
            <? if ($fill == '#35A005' || $fill == '#0A6697' ) echo ('$("#' . $town['g'] . '").addClass("genplan_button3");'); ?>
            $("#<?= $town['g'] ?>").children().map(function() {
                if ($(this).attr('fill') != "#141414" && $(this).attr('fill') != "white" && $(this).attr('fill') != "#2C2C2C") {
                    $(this).attr("fill", "<?= $fill ?>");
                    <? if ($fill == '#35A005' || $fill == '#0A6697') echo ('$(this).addClass("genplan_button3");'); ?>
                    // $(this).addClass("genplan_button2");
                }
            });
        <? } ?>



        var slider = new Splide('#slider1', {
            height: '900px',
            width: '1507px',
            type: 'fade',
            rewind: 'true'

        });
        slider.mount();



        var splide = new Splide('#slider2', {
            height: '960px',
            width: '1507px',
            type: 'fade',
            rewind: 'true'
        });
        splide.mount();


        let sliderTwo = document.querySelector('#slider2')
        let title = document.querySelector('.text-wrapper-18');
        let textWrapper = document.querySelector('.text-wrapper-26');
        let slidesArray = Array.from(sliderTwo.querySelectorAll('.splide__slide'));
        let array = [];
        slidesArray.forEach((slide) => {
            if (slide.classList.contains('splide__slide--clone') == false) {
                array.push(slide)
            }
        })


        splide.on('moved', function(destIndex) {
            let slideTitle = array[destIndex].getAttribute('data-title');
            let desc = array[destIndex].getAttribute('data-desc');
            title.innerHTML = slideTitle;
            textWrapper.innerHTML = desc;
        });


            var zoom = jQuery(window).width() / 1728;
        $("body").css("zoom", zoom);
        if (zoom < 1) {
         var zoom2 = 1; }
        if (zoom >= 1) {
           var zoom2 = 0.7; }
        $(".booking_modal").css("zoom", zoom2);

        $(document).ready(function() {
            $('.clbck').click(function() {

                let clbck = $(this).attr('clbck');
                $('html, body').animate({
                    scrollTop: $("#" + clbck).offset().top * zoom
                }, 1000)
            })
        });


        let enterModal = document.querySelector('.road_modal');
        let btnCloseModal = enterModal.querySelector('.btn-close-road-modal');
        let backgroundModal = enterModal.querySelector('.modal-window-background');
        let roadBtn = document.querySelector('.road');
        roadBtn.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'hidden';
            enterModal.style['display'] = 'flex';
        });

        btnCloseModal.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'auto';
            enterModal.style['display'] = 'none';
        });

        backgroundModal.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'auto';
            enterModal.style['display'] = 'none';
        });


        let btns = document.querySelectorAll('.slider_btn')
        let catalogModal = document.querySelector('.catalog_modal');
        let btnCloseCatalog = catalogModal.querySelector('.btn-close-catalog-modal');
        let backgroundModalCat = catalogModal.querySelector('.modal-catalog-background');
        let catalogBtn = catalogModal.querySelector('.modal_button');
        let name = catalogModal.querySelector("input[name=name]");
        let phone = catalogModal.querySelector("input[name=phone]");

        btns.forEach((btn) => {
            btn.addEventListener('click', () => {
                document.querySelector('body').style['overflow'] = 'hidden';
                catalogModal.style['display'] = 'flex';
            });
        })


        btnCloseCatalog.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'auto';
            catalogModal.style['display'] = 'none';
        });

        backgroundModalCat.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'auto';
            catalogModal.style['display'] = 'none';
        });

        catalogBtn.addEventListener('click', () => {
            if (name.value != '' && phone.value != "") {
                window.location.href = "/FOREST.pdf"
            }

        });

        let btnBooking = document.querySelector('.genplan_button');
        //  let btnBooking2 = document.querySelector('.genplan_button2')
        let bookingModal = document.querySelector('.booking_modal');
        let btnCloseBookingModal = bookingModal.querySelector('.btn-close-catalog-modal');
        let backgroundBookingModal = bookingModal.querySelector('.modal-catalog-background');
        let bookingModalBtn = bookingModal.querySelector('.modal_button');
        let bookingModalName = bookingModal.querySelector("input[name=name]");
        let bookingModalPhone = bookingModal.querySelector("input[name=phone]");

        btnBooking.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'hidden';
            bookingModal.style['display'] = 'flex';
        });


        btnCloseBookingModal.addEventListener('click', () => {
            $(".modalgenplan").hide();
            document.querySelector('body').style['overflow'] = 'auto';
            bookingModal.style['display'] = 'none';
        });

        backgroundBookingModal.addEventListener('click', () => {
            document.querySelector('body').style['overflow'] = 'auto';
            bookingModal.style['display'] = 'none';
        });
    </script>
    <script>
        const usernameEl = document.querySelectorAll('input[name=name]');
        const phoneEl = document.querySelectorAll('input[name=phone]');
        const form = document.querySelectorAll('form');
        phoneEl.forEach((el) => {
            el.addEventListener('click', (e) => {
                el.value = '+7'  
            }) 
        })


        const checkUsername = (element) => {
            if (element) {
                let valid = false;
                const min = 2,
                    max = 25;
                const username = element.value.trim();

                if (!isRequired(username)) {
                    showError(element, 'Представьтесь, пожалуйста!');
                } else if (!isBetween(username.length, min, max)) {
                    showError(element, `Имя должно быть не короче ${min} и не длиннее ${max} символов.`)
                } else {
                    showSuccess(element);
                    valid = true;
                }
                return valid;
            }
            return true
        };

        const checkPhone = (element) => {
            if (element) {
                let valid = false;
                const phoneNum = element.value.trim();

                if (!isRequired(phoneNum)) {
                    showError(element, 'Введите ваш телефон!');
                } else if (!isPhoneCorrect(phoneNum)) {
                    showError(element, 'Неверно введен номер телефона')
                } else {
                    showSuccess(element);
                    valid = true;
                }
                return valid;
            }
            return true
        };

        const isPhoneCorrect = (phoneNum) => {
            const re = /^\+?[78][-\(]?\d{3}\)?-?\d{3}-?\d{2}-?\d{2}$/;
            return re.test(phoneNum);
        }

        const isRequired = value => value === '' ? false : true;
        const isBetween = (length, min, max) => length < min || length > max ? false : true;

        const showError = (input, message) => {
            // get the form-field element
            const formField = input.parentElement;
            // add the error class
            formField.classList.remove('success');
            formField.classList.add('error');

            // show the error message
            const error = formField.querySelector('small');
            error.textContent = message;
        };

        const showSuccess = (input) => {
            // get the form-field element
            const formField = input.parentElement;

            // remove the error class
            formField.classList.remove('error');
            formField.classList.add('success');

            // hide the error message
            const error = formField.querySelector('small');
            error.textContent = '';
        };



        const debounce = (fn, delay = 500) => {
            let timeoutId;
            return (...args) => {
                // cancel the previous timer
                if (timeoutId) {
                    clearTimeout(timeoutId);
                }
                // setup a new timer
                timeoutId = setTimeout(() => {
                    fn.apply(null, args)
                }, delay);
            };
        };


        form.forEach((el) => {
            el.addEventListener('input', debounce(function(e) {
                switch (e.target.name) {
                    case 'name':
                        checkUsername(e.target);
                        break;
                    case 'phone':
                        checkPhone(e.target);
                        break;
                }
                const submit = el.querySelector("button[type=submit]")
                let allValid = false;
                let radio = el.querySelector("input[type=radio]");
                if (checkUsername(el.querySelector('input[name=name]')) && checkPhone(el.querySelector('input[name=phone]')) && radio.checked) {
                    allValid = true;
                }

                if (allValid) {
                    submit.removeAttribute("disabled");

                } else {
                    submit.setAttribute("disabled", "");

                }
            }));
        });


        $(".genplan_button3").on("click", function() {
            // preventDefault();

            let id = $(this).attr('id');
            $.ajax({
                    method: "POST",
                    dataType: "html",
                    url: "genplan.php",
                    data: {
                        "id": id

                    }
                })
                .done(function(data) {
                    document.querySelector('body').style['overflow'] = 'hidden';
                    bookingModal.style['display'] = 'flex';

                    $(".modalgenplan").show();
                    $(".modalgenplan").html(data);





                });


        })
    </script>
     <script>
      let menuBtn = document.querySelector(".menu_btn");
      let menu = document.querySelector(".menu_wrapper");
      let burger = document.querySelector(".burger");

      menuBtn.addEventListener("click", () => {
        if (menuBtn.classList.contains("active")) {
          document.querySelector("body").style["overflow"] = "auto";
          menuBtn.classList.remove("active");
          burger.classList.remove("active");
          menu.classList.remove("activeMenu");
        } else {
          document.querySelector("body").style["overflow"] = "hidden";
          menuBtn.classList.add("active");
          burger.classList.add("active");
          menu.classList.add("activeMenu");
        }
      });
    </script>
</body>

</html>