window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
}


var slider = new Splide('#slider1', {
    height: '484px',
    width: '373px',
    type: 'fade',
    rewind: "true"

});
slider.mount();

var splide = new Splide('#slider2', {
    height: '634px',
    width: '373px',
    type: 'fade',
    rewind: "true"
});
splide.mount();

let sliderTwo = document.querySelector('#slider2')
let title = document.querySelector('.div4');
let textWrapper = document.querySelector('.p4');
let slidesArray = Array.from(sliderTwo.querySelectorAll('.splide__slide'));
let array = [];
slidesArray.forEach((slide) => {
    if (slide.classList.contains('splide__slide--clone') == false) {
        array.push(slide)
    }
})

splide.on('moved', function (destIndex) {
    let slideTitle = array[destIndex].getAttribute('data-title');
    let desc = array[destIndex].getAttribute('data-desc');
    title.innerHTML = slideTitle;
    textWrapper.innerHTML = desc;
});

     var zoom = jQuery(window).width() / 430;
        $("body").css("zoom", zoom);
        
               let zoom2 = 0.7/zoom;
        $(".booking_modal").css("zoom", zoom2);
        
$(document).ready(function () {
    $('.clbck').click(function () {

        let clbck = $(this).attr('clbck');
        $('html, body').animate({
            scrollTop: $("#" + clbck).offset().top * zoom
        }, 1000)
    })
});

let btns = document.querySelectorAll('.slider_btn')
let catalogModal = document.querySelector('.catalog_modal');
let btnCloseCatalog = catalogModal.querySelector('.btn-close-catalog-modal');
let backgroundModalCat = catalogModal.querySelector('.modal-catalog-background');
let catalogBtn = document.querySelector('.modal_button');
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
        window.location.href = "/FORESTVILLAGE04.pdf"
    }

});



let btnBooking2 = document.querySelector('.genplan_button2')
let bookingModal = document.querySelector('.booking_modal');
let btnCloseBookingModal = bookingModal.querySelector('.btn-close-catalog-modal');
let backgroundBookingModal = bookingModal.querySelector('.modal-catalog-background');
let bookingModalBtn = bookingModal.querySelector('.modal_button');
let bookingModalName = bookingModal.querySelector("input[name=name]");
let bookingModalPhone = bookingModal.querySelector("input[name=phone]");


btnBooking2.addEventListener('click', () => {
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

const usernameEl = document.querySelectorAll('input[name=name]');
const phoneEl = document.querySelectorAll('input[name=phone]');
const form = document.querySelectorAll('form');
phoneEl.forEach((el) => {
    el.addEventListener('click', (e) => {
        el.value = "+7";
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
    el.addEventListener('input', debounce(function (e) {
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
$(".genplan_button3").on("click", function () {
    // preventDefault();

    let id = $(this).attr('id');
    $.ajax({
        method: "POST",
        dataType: "html",
        url: "genplanm.php",
        data: {
            "id": id

        }
    })
        .done(function (data) {
            document.querySelector('body').style['overflow'] = 'hidden';
            bookingModal.style['display'] = 'flex';

            $(".modalgenplan").show();
            $(".modalgenplan").html(data);
            
          
                                    var viewport = window.visualViewport;
                                    var scaleee = 1 / viewport.scale;
                                    $(".error_container1").css("transform", "scale(" + scaleee + ")");
       
                                

        });

})