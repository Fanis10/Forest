<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--  Title -->
    <title>
      Коттеджный поселок Forestkzn - земельные участки в Пестречинском районе
    </title>

    <!-- Font Google -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="assets/img/favicon.ico"
      type="image/x-icon"
    />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!-- custom styles (optional) -->

    <link href="/style1.css" rel="stylesheet" />
    <link href="/responsive1.css" rel="stylesheet" />
    
    <style>
    .modal-catalog-background {
  background-color: rgba(35, 35, 35, 0.9);
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 13;
  backdrop-filter: blur(2px);
  overflow: hidden;
  pointer-events: all;
}
    .booking_modal {
      
        zoom:0.7;
        overflow-y: scroll;
  display: none;
  position: fixed;
  top: 0;
  z-index: 9999;
  width: 100%;
  height: 100%;
  align-items: center;
  justify-content: center;
      padding-top: 30px;
}

.error_container1 {
  z-index: 30;
  position: relative;
  width: 635px;

  background-color: #d9d9d9;
  border-radius: 40px;
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: center;
      margin-top: auto;
    margin-bottom: 30px;
}

.error_container1 form {
  gap: 20px;
  display: flex;
  flex-direction: column;

  align-items: center;
}

.btn-close-catalog-modal {
  z-index: 30;
  position: absolute;
  top: -25px;
  right: -25px;
  cursor: pointer;
}

.slider_btn {
  cursor: pointer;
}

.catalog_input {
  width: 500px;
  height: 60px;
  font-weight: 200;
  color: #000000;
  font-size: 32px;
  border-color: #00000023;
  background-color: transparent;
  font-family: "Montserrat", Helvetica;

  border-top: none;
  border-right: none;
  border-left: none;
}

.modal_button {
  width: 370px;
    border: 4px solid #15282f;
  height: 60px;
  border-radius: 40px;
  cursor: pointer;
  color: #15282f;

  font-family: "Montserrat";
  font-size: 30px;
  font-style: normal;
  font-weight: 900;
}

.catalog_input:focus-visible {
  outline: none;
}

.btn {
  position: absolute;
  width: 450px;
  height: 83px;
  border-radius: 40px;
  box-shadow: 0px 4px 4px #00000040, 0px 0px 7.2px #ffffff;
  background-color: white;
  font-family: "Montserrat", Helvetica;
  font-weight: 900;
  color: #15282f;
  font-size: 49px;
  border: none;
  bottom: 102px;
  right: 127px;
}

input[type="radio"]:checked,
input[type="radio"]:not(:checked) {
  position: absolute;
  left: -9999px;
}

input[type="radio"]:checked + label,
input[type="radio"]:not(:checked) + label {
  display: inline-block;
  position: relative;
  padding-left: 44px;

  cursor: pointer;
}

input[type="radio"]:checked + label:before,
input[type="radio"]:not(:checked) + label:before {
  content: "";
  position: absolute;
  left: 0px;
  background-color: #ffffff;
  width: 32px;
  height: 32px;
  top: 4px;
  left: 0;
  border-radius: 800px;
  border: 2px solid;
  border-color: #a1a1a1;
}

input[type="radio"]:checked + label:after,
input[type="radio"]:not(:checked) + label:after {
  content: "";
  position: absolute;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

input[type="radio"]:checked + label:after,
input[type="radio"]:not(:checked) + label:after {
  width: 18px;
  height: 18px;
  top: 13px;
  left: 9px;
  border-radius: 100%;
  background-color: #15282f;
}

input[type="radio"]:not(:checked) + label:after {
  opacity: 0;
}

input[type="radio"]:checked + label:after {
  opacity: 1;
}

input[type="radio"].invalid + label:before {
  border-color: red;
}

input[name="name"].invalid::placeholder {
  color: red;
}

input[name="phone"].invalid::placeholder {
  color: red;
}

.modal-radio {
  width: 500px;
  height: 60px;
}

.radio-title {
  line-height: 25px;
  font-family: "Montserrat", Helvetica;
  font-weight: 700;
  color:black;
}

.genplan_button {
  position: absolute;
  padding: 10px 25px;
  height: 83px;
  border-radius: 40px;
  box-shadow: 0px 4px 4px #00000040, 0px 0px 7.2px #ffffff;
  background-color: white;
  font-family: "Montserrat", Helvetica;
  font-weight: 900;
  color: #15282f;
  font-size: 49px;
  border: none;
  bottom: 70px;
  right: -70px;
  cursor: pointer;
}

small {
  color: #dc3545;
  display: block;
  width: 100%;
  font-family: "Montserrat", Helvetica;
  font-weight: 400;
}

.form-field.error input {
  border-bottom: 2px solid #dc3545;
  margin-bottom: 9px;
  transition: all 0.5s;
}

.form-field.success input {
  border-bottom: 2px solid #28a745;
  transition: all 0.5s;
}

.thankyou_modal {
  display: none;
  position: fixed;
  top: 0;
  z-index: 9999;
  width: 100%;
  height: 100%;
  align-items: center;
  justify-content: center;

  & .error_container1 {
    padding: 30px;
    width: 680px;
    height: 260px;
    justify-content: space-around;
  }
}

.thankyou_text {
  line-height: normal;
  font-family: "Montserrat", Helvetica;
  font-weight: 700;
  color: #15282f;
  font-size: 26px;
  text-align: center;
}

.thankyou_text1 {
  font-size: 36px;
}
.form-field{
    color:black;
}



@media only screen and (max-width: 739px) {
    
.error_container1 {
    z-index: 99999999;
    position: relative;
    width: 90%;

    background-color: #d9d9d9;
    border-radius: 40px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    align-items: center;
    padding-top: 50px;
    
      margin-top: auto;
    margin-bottom: 20px;

}

.error_container1 form {


    display: flex;
    flex-direction: column;
    gap: 20px;
    align-items: center;


}

.btn-close-catalog-modal {
    z-index: 30;
    position: absolute;
    top: -45px;
    right: 0;
    cursor: pointer;

}



.slider_btn {
    cursor: pointer;
}

.catalog_input {
    width: 100%;
    height: 60px;
    font-weight: 200;
    color: #000000;
    font-size: 32px;
    border-color: #00000023;
    background-color: transparent;
    font-family: "Montserrat", Helvetica;
    border-top: none;
    border-right: none;
    border-left: none;
    border-radius: 0;
}

.modal-radio {
    width: 100%;
    height: 60px;
}

.radio_catalog {
    line-height: 25px;
    font-family: "Montserrat", Helvetica;
    font-weight: 700;
}

.modal_button {
    margin-top: 45px;
    width: 95%;
       border: 4px solid #15282f;
    height: 60px;
    border-radius: 40px;
    cursor: pointer;
    color: #15282F;
    font-family: "Montserrat";
    font-size: 1.6em;
    font-style: normal;
    font-weight: 900;
}

.catalog_input:focus-visible {
    outline: none;
}

.btn {
    position: absolute;
    width: 191px;
    height: 45px;
    border-radius: 40px;
    box-shadow: 0px 4px 4px #00000040, 0px 0px 7.2px #ffffff;
    background-color: white;
    font-family: "Montserrat", Helvetica;
    font-weight: 900;
    color: #15282f;
    font-size: 24px;
    border: none;
    bottom: -658px;
    right: 121px;
}

input[type="radio"]:checked,
input[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}

input[type="radio"]:checked+label,
input[type="radio"]:not(:checked)+label {
    display: inline-block;
    position: relative;
    padding-left: 44px;

    cursor: pointer;
}

input[type="radio"]:checked+label:before,
input[type="radio"]:not(:checked)+label:before {
    content: "";
    position: absolute;
    left: 0px;
    background-color: #ffffff;
    width: 32px;
    height: 32px;
    top: 4px;
    left: 0;
    border-radius: 800px;
    border: 2px solid;
    border-color: #a1a1a1;

}


input[type="radio"]:checked+label:after,
input[type="radio"]:not(:checked)+label:after {
    content: "";
    position: absolute;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}


input[type="radio"]:checked+label:after,
input[type="radio"]:not(:checked)+label:after {
    width: 18px;
    height: 18px;
    top: 13px;
    left: 9px;
    border-radius: 100%;
    background-color: #15282f;
}


input[type="radio"]:not(:checked)+label:after {
    opacity: 0;
}


input[type="radio"]:checked+label:after {
    opacity: 1;
}

input[type="radio"].invalid+label:before {
    border-color: red;
}

input[name="name"].invalid::placeholder {
    color: red;
}

input[name="phone"].invalid::placeholder {
    color: red;
}
.booking_modal {
    overflow-y: scroll;
    display: none;
    position: fixed;
    top: 0;
    z-index: 99999999;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
    padding-top:20px;

}

.genplan_button {
    position: absolute;
    padding: 0 20px;
    height: 40px;
    border-radius: 40px;
    box-shadow: 0px 4px 4px #00000040, 0px 0px 7.2px #ffffff;
    background-color: white;
    font-family: "Montserrat", Helvetica;
    font-weight: 900;
    color: #15282f;
    font-size: 22px;
    border: none;
    bottom: 55px;
    right: calc(50% - 129px);
}

.booking_modal .radio-title {
    line-height: 25px;
    font-family: "Montserrat", Helvetica;
    font-weight: 700;
}

small {
    color: #dc3545;
    display: block;
    width: 100%;
    font-family: "Montserrat",
        Helvetica;
    font-weight: 400;
}

.form-field.error input {
    border-bottom: 2px solid #dc3545;
    margin-bottom: 9px;
    transition: all 0.5s;

}


.form-field.success input {
    border-bottom: 2px solid #28a745;
    transition: all 0.5s;

}

.thankyou_modal {
    display: none;
    position: fixed;
    top: 0;
    z-index: 9999;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;

    & .error_container1 {
        padding: 30px;
        width: 90%;
        height: 260px;
        justify-content: space-around;
    }
}

.thankyou_text {
    line-height: normal;
    font-family: "Montserrat", Helvetica;
    font-weight: 700;
    color: #15282f;
    font-size: 22px;
    text-align: center;
}

.thankyou_text1 {
    font-size: 1.8em;
}
}

    </style>
    
  </head>

  <body data-dsn-grid-mousemove="true">
    <div class="header-top nav-mobile" style="position: relative;">
      <div class="header-container">
        <div class="logo">
          <a href="/">
            <img src="/FOREST.png" alt="" />
          </a>
        </div>

       
      </div>
         <div class="menu_btn">
        <span>МЕНЮ</span>
        <div class="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="menu_wrapper">
        <div class="menu_container">
          <div class="menu-back">МЕНЮ</div>
          <div class="menu_list">
            <div class="menu_item">
              <a href="../index.php">Главная</a>
              <span>00</span>
            </div>
           <div class="menu_item">
              <a href="map.php">Генеральный план</a>
              <span>01</span>
            </div>
            <div class="menu_item">
              <a href="projects.html">Проекты домов</a>
              <span>02</span>
            </div>
            <div class="menu_item">
              <a href="?houses">Готовые дома</a>
              <span>03</span>
            </div>
            <div class="menu_item">
              <a href="timeline.html">Ход строительства</a>
              <span>04</span>
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
          <div class="menu_contacts">
            <div class="str">СТРОИТЕЛЬНАЯ КОМПАНИЯ ВМ СТРОЙ</div>
            <p class="srr" style="margin-bottom: 25px">
              Казань Шаляпина 32 <br />1 этаж
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
    </div>

    <main class="root">
      <div style="padding-top: 70px;" class="title_container">
        <div>
          <span  class="title_text_top">Выберите участок</span>
        </div>
    
      </div>
      <div class="projects_wrapper">
        <div class="projects_container">
    <? 
            
require_once("Mobile_Detect.php");
$mbdt= new Mobile_Detect;
    if ($mbdt->isMobile()) 
    require ("2/svg.php");
    else   require ("svg.php");
    ?>
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
                                 <input name="map" value="1" type="hidden" />
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
            
            <div style="width: 100vw; height: 100%;">
            <img src="vmap.webp" />
            </div>
      <footer class="footer">
        <a href="/privacy-policy.pdf" target="_blank"
          >Политика конфиденциальности</a
        >
        <p>Предложение не является публичной офертой</p>
        <div>КП FOREST VILLAGE, 2024</div>
      </footer>
    </main>
  </body>
    <script src="jquery.js"></script>
    <script src="splide.min.js"></script>
     <script src="md.js"></script>
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


        


      
<?  if ($mbdt->isMobile()) $btnnum=2; else $btnnum=3;?>
        let btnBooking = document.querySelector('.genplan_button<?=$btnnum?>');
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
        }



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
                    url: "genplan<?  if ($mbdt->isMobile()) echo 'm';?>.php",
                    data: {
                        "id": id

                    }
                })
                .done(function(data) {
                    document.querySelector('body').style['overflow'] = 'hidden';
                    bookingModal.style['display'] = 'flex';

                    $(".modalgenplan").show();
                    $(".modalgenplan").html(data);
      var md = new MobileDetect(window.navigator.userAgent);
                 if (md.mobile()) {
                                    var viewport = window.visualViewport;
                                    var scaleee = 1 / viewport.scale;
                                    $(".error_container1").css("transform", "scale(" + scaleee + ")");
        
                                }



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
</html>
