"use strict";

//SLICKNAV MENU
//-------------------------------------------------
(function ($) {
    $('#nav').slicknav({
        prependTo: '#mobile_nav'
    });

    //create additional menu near slicknav menu
    //from menu items in the main navigation which have the class 'mmenu-show'
    $('#mobile_nav').find('.mmenu-show').prependTo('#mobile_nav').wrapAll('<ul class="mobile-nav-visible" />');

    //close slicknav menu after click outside an element
    $(document).on('click', function (event) {
        if (!$(event.target).closest('.slicknav_menu').length && !$(event.target).is('.slicknav_menu')) {
            if ($('.slicknav_open').size()) {
                $('#nav').slicknav('close');
            }
        }
    })

    $('.slicknav_btn').on('click', function () {
        if ($(this).hasClass('slicknav_open')) $('#header').addClass('mmenu-open');
        else $('#header').removeClass('mmenu-open');
    })
})(jQuery);

//TOP-SLIDER
//-------------------------------------------------
(function ($) {
    $('#top_slider').owlCarousel({
        singleItem: true,
        autoPlay: 7000,
        stopOnHover: true,
        transitionStyle: "fade"
    });
})(jQuery);

(function ($) {
    $('#top_slider-feedback').owlCarousel({
        singleItem: true,
        autoPlay: 7000,
        stopOnHover: true,
        transitionStyle: "fade"
    });
})(jQuery);

(function ($) {
    $('#js-customers-reviews-slider').owlCarousel({
        items: 3,
        autoPlay: 7000,
        navigation: true,
        navigationText: ["<img src='/wp-content/themes/ozessay/img/slider-rev-prev.png'>", "<img src='/wp-content/themes/ozessay/img/slider-rev-next.png'>"],
        stopOnHover: true,
        transitionStyle: "fade",
        responsive: {
            1170: {
                items: 2
            },
            992: {
                items: 1
            },
        },
    });
})(jQuery);

//SERVICES-SLIDER
//-------------------------------------------------
(function ($) {
    var $sync1 = $("#services_slider_2");
    var $sync2 = $("#services_slider_1");

    $sync1.owlCarousel({
        singleItem: true,
        autoPlay: 8000,
        stopOnHover: true,
        slideSpeed: 1000,
        pagination: true,
        dragBeforeAnimFinish: false,
        mouseDrag: false,
        touchDrag: false,
        responsiveRefreshRate: 200,
        transitionStyle: "fade",
        afterAction: syncPosition,
        afterInit: function (el) {
            this.owlControls.prependTo('#services_slider_controls');
        }
    });

    $sync2.owlCarousel({
        singleItem: true,
        pagination: false,
        dragBeforeAnimFinish: false,
        mouseDrag: false,
        touchDrag: false,
        responsiveRefreshRate: 100,
        transitionStyle: "fade",
        afterInit: function (el) {
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });

    function syncPosition(el) {
        var current = this.currentItem;
        $sync2.find(".owl-item")
            .removeClass("synced")
            .eq(current)
            .addClass("synced")
        if ($sync2.data("owlCarousel") !== undefined) center(current);
    }

    function center(number) {
        $sync2.trigger("owl.goTo", number);
    }
})(jQuery);

//WRITERS-SLIDER
//-------------------------------------------------
(function ($) {
    //rotateSlider plugin
    $.fn.rotateSlider = function () {
        var $this = this,
            $slide = $this.find('[data-rotateslider=slide]'),
            $nav = $this.find('[data-rotateslider=nav]'),
            totalSlides = $slide.length,
            defaultIndex = 1;

        changeIndex(defaultIndex);

        $nav.on('click', function (e) {
            var action = $(e.target).data('rotateslider'),
                nowIndex = $slide.index($this.find('.now'));

            if (action == 'next') {
                if (nowIndex === totalSlides - 1) changeIndex(0);
                else changeIndex(nowIndex + 1);
            } else if (action === 'prev') {
                if (nowIndex === 0) changeIndex(totalSlides - 1);
                else changeIndex(nowIndex - 1);
            }
        });

        function changeIndex(nowIndex) {
            $this.find('.now').removeClass('now');
            $this.find('.next').removeClass('next');
            $this.find('.prev').removeClass('prev');

            if (nowIndex === totalSlides - 1) $slide.eq(0).addClass('next');
            if (nowIndex === 0) $slide.eq(totalSlides - 1).addClass('prev');

            $slide.each(function (index) {
                if (index === nowIndex) $slide.eq(index).addClass('now');
                if (index === nowIndex + 1) $slide.eq(index).addClass('next');
                if (index === nowIndex - 1) $slide.eq(index).addClass('prev');
            });

        }

        return this;
    };


    //init rotateSlider plugin

    $('#writers_slider').rotateSlider();
})(jQuery);

//TESTIMONIALS-SLIDER
//-------------------------------------------------
(function ($) {
    $('#testim_slider').owlCarousel({
        singleItem: true,
        autoPlay: 10000,
        stopOnHover: true,
        transitionStyle: "fade"
    });
})(jQuery);

//ABOUT-US
//-------------------------------------------------
if (window.innerWidth <= 992) {
    (function ($) {
        $('.about-us-slider').owlCarousel({
            singleItem: true,
            autoPlay: 10000,
            stopOnHover: true,
            transitionStyle: "fade"
        });
    })(jQuery);
    $('.add-border').addClass('border');
} else if (window.innerWidth <= 700) {
    $('#header-text').empty();
    $('<h1>About Our Custom Essay Service</h1>' +
        '<p>We know everything about essay writing.' +
        ' In fact, we’ve already helped 100K customers' +
        ' achieve their academic goals.</p>').prependTo('#header-text');
} else if (window.innerWidth >= 992) {
    $(".about_us").removeClass(".about-us-slider");
}
//OUR TEAM
//-------------------------------------------------
if (window.innerWidth <= 992) {
    (function ($) {
        $('.meet-our-team-slider').owlCarousel({
            singleItem: true,
            autoPlay: 10000,
            stopOnHover: true,
            transitionStyle: "fade"
        });
    })(jQuery);
    $('.border-block').empty();
    $('<p>Besides academic essay writing, we also offer other ‘adjacent’ services like' +
        '<b> web content writing, blog post writing, grant writing, CVs and cover letters. </b>' +
        'So whenever you are contacting us to do the writing for you – you’ve come to the right place.</p>').prependTo('.border-block');
} else if (window.innerWidth <= 1200) {
    $('.border-block').empty();
    $('<p>Besides academic essay writing, we also offer other ‘adjacent’ services like<br>' +
        '<b>web content writing, blog post writing, grant writing, CVs and cover letters.</b><br>' +
        'So whenever you are contacting us to do the writing for you – you’ve come to the right place.</p>').prependTo('.border-block');
} else if (window.innerWidth >= 992) {
    $(".slider").removeClass(".meet-our-team-slider");
}

//CONTENT-ACCORDION
//-------------------------------------------------
(function ($) {
    $('[data-accordion=container]').on('click', accordionHandler);

    function accordionHandler(e) {
        var $header = $(e.target).closest('[data-accordion=header]');
        if ($header.length) {
            $header.toggleClass('open').next('[data-accordion=body]').not(":animated").slideToggle();
        }
    }
})(jQuery);

//SERVICES-TABS
//-------------------------------------------------
(function ($) {
    //TABS
    var tablist = $('[data-tabs=tablist]'),
        content = $('[data-tabs=content]'),
        activeTab = 'active-tab';

    tablist.on('click', function (e) {
        var $this = $(e.target);

        if (!$this.is('[data-tabs=tablist-item]')) return false;

        var index = $this.addClass(activeTab).index();

        $this
            .siblings().removeClass(activeTab);
        content.children().removeClass(activeTab).eq(index).addClass(activeTab);
    });
})(jQuery);

//COUNTERS
//-------------------------------------------------
$('.new-prefix_counter').counterUp({
    delay: 20,
    time: 2000
});

//SCROLL TOP BUTTON
//-------------------------------------------------
(function ($) {
    var findWindowHeight = function () {
        return windowHeight = $(window).height();
    };

    var addScrollButton = function () {
        if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
            var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
            $('body').append(scrollButton);
        } else if ($(window).scrollTop() < windowHeight && $('#scrollButton').size()) {
            $('#scrollButton').remove();
        }
    };

    var scrollPage = function () {
        $('body, html').animate({
            scrollTop: 0
        }, 800);
    };

    var windowHeight = findWindowHeight();

    $(window).scroll(addScrollButton);
    $(window).resize(findWindowHeight);

    $('body').on('click', '#scrollButton', scrollPage);
})(jQuery);

//ANIMATED HEADER
//-------------------------------------------------
(function ($) {
    var fixedItem = $('#header'),
        scrollheight = $('#header > .contact-row'),
        fixedClass = 'animated',
        minMarginTop;

    if (fixedItem.size() && !$('body').hasClass('page-template-page-order')) {
        var scrollTopValue = function () {
            return $(window).scrollTop()
        };

        var fixedFunc = function () {
            fixedItem.addClass(fixedClass);
        };

        var unfixedFunc = function () {
            fixedItem.removeClass(fixedClass);
        };

        var toggleFixedFunc = function () {

            minMarginTop = scrollheight.height();

            if (scrollTopValue() >= minMarginTop) {
                fixedFunc();
            } else if (scrollTopValue() < minMarginTop) {
                unfixedFunc();
            }
        };

        $(window).on('scroll', toggleFixedFunc);
        $(window).on('load', toggleFixedFunc);
    }
})(jQuery);


// video play pause
//-------------------------------------------------
(function ($) {

    var video = $('.content-calc #v-file');
    var videonavplay = $('.html-v-button-wrap .p-button');
    var videonavreplay = $('.html-v-button-wrap .r-button.replay');

    videonavplay.click(function () {
        if (!videonavreplay.hasClass('active')) {
            videonavreplay.addClass('active');
        }
        if (video.get(0).paused) {
            video.get(0).play();
            videonavplay.removeClass('fa-play');
            videonavplay.addClass('fa-pause');
        } else {
            video.get(0).pause();
            videonavplay.removeClass('fa-pause');
            videonavplay.addClass('fa-play');
        }
    });

    videonavreplay.click(function () {
        video.load();
        videonavplay.removeClass('fa-pause');
        videonavplay.addClass('fa-play');
        videonavreplay.removeClass('active');
    });

})(jQuery);


(function ($) {

    var slides = document.querySelectorAll('.faq-wrapper .faq-container');
    var currentSlide = 0;
    $('#articleNextFaqQuestion').click(function () {
        slides[currentSlide].className = 'faq-container';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].className = 'faq-container active';
    });


})(jQuery);

window.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("[data-crm-widget=form]");
    if (form !== null) {
        form.addEventListener("ready", function () {

            /*CURRENCY ACTIVE*/
            $('#essayform-currency label').has('input[value="AUD"]').addClass('active');
            $('#essayform-currency label').click(function () {
                $('#essayform-currency label').removeClass("active");
                $(this).addClass("active");
            });

        });
    }
});

//PRICE
window.addEventListener("DOMContentLoaded", function () {
    var formPrices = document.querySelector("[data-crm-widget=prices]");
    if (formPrices !== null) {
        formPrices.addEventListener("ready", function () {
            if (window.innerWidth > 1200) {
                $(".prices-format-container, .prices-total-price-container, .prices-order-btn-container, .price-table")
                    .wrapAll("<div class='custom-price-block'></div>");
                $(".prices-format-container, .prices-total-price-container, .prices-order-btn-container")
                    .wrapAll("<div class='custom-price-block-sidebar'></div>");
                $(".prices-format-left")
                    .before("<div class='custom-price-title'>Price Calculator</div><hr class='custom-price-line'>");
                $(".prices-format-right")
                    .after("<hr class='custom-price-line'>");
                $(".prices-currency-items-container")
                    .prepend("<span class='select-text-label'>Currency:</span>");
            }
        });
    }
});

// PLAGIARIZM CHECKER

(function () {
    if ($('body').hasClass('page-plagiarism-checker')) {
        $('.main__header').css('background-color', '#fff');
    }

    window.onload = function () {
        var dropTarget = document.getElementById('drop_checker');
        var textTarget = document.getElementById('text_input');
        var textTab = document.getElementById('text_tab');
        var fileTab = document.getElementById('file_tab');
        var confirm = document.getElementById('confirm');
        var iconBlock = document.getElementById('icon_block_drop');
        var closeBtn = document.getElementById('close_btn');
        //var closeBg = document.getElementById('closeBg');
        var dropInput = document.getElementById('file_input');
        var formChecker = document.getElementById('copy-check');
        var emailInput = document.getElementById('user-email');
        var nameInput = document.getElementById('user-name');
        var acceptFormat = ['.txt', '.doc', '.docx', '.pdf', '.odt'];
        var sendButton = document.getElementById('send_button');
        var maxFileSize = 20000000;
        var filesArray;
        var userText = '';
        var userEmail = '';
        var userName = '';


        function sendFile(file, userName, userEmail, userText) {
            var uri = "/wp-content/special/plagiarism/send.php";
            var xhr = new XMLHttpRequest();
            var fd = new FormData();
            fd.append('file', file);
            fd.append('name', userName);
            fd.append('email', userEmail);
            fd.append('text', userText);
            // console.log(fd);
            xhr.open("POST", uri, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var answer = JSON.parse(xhr.responseText);
                    if (answer.status = 'success') {
                        window.location.href = answer.data['paypal_link'];
                    } else {
                        alert(answer.data['message']);
                    }
                }
            };
            xhr.send(fd);
        }

        function acceptCheck(file) {
            var fileFormat = file.name.substring(file.name.lastIndexOf('.'));
            if (acceptFormat.indexOf(fileFormat) === -1) {
                alert('Use this formats: txt, doc, docx, pdf, odt"');
                reset();
                return false;
            }
        }

        function maxSizeCheck(file) {
            if (file.size > maxFileSize) {
                alert('Maximum file size 20 MB. Download the file to 20 MB');
                reset();
                return false;
            }
        }

        function showFileName(file) {
            var name = document.getElementById('file_name');
            dropTarget.style.background = "#f9fbe7";
            iconBlock.style.display = 'block';
            if (!file) {
                iconBlock.style.display = 'none';
                // dropTarget.style.background = 'url(wp-content/themes/grademiners-ux/img/plagiarism-checker/drop_bg.png) center center no-repeat #fff';
                name.innerHTML = "";
            } else if (file.name.length > 24) {
                var fileName = file.name.substring(0, 17) + '..' + file.name.substring(file.name.lastIndexOf('.'));
                name.innerHTML = fileName;
            } else {
                name.innerHTML = file.name;
            }
        }

        // function reset() {
        //     showFileName();
        //     formChecker.reset();
        //     filesArray = undefined;
        //     userText = '';
        //     userEmail = '';
        //     userName = '';
        //     emailInput.value = '';
        // }
        document.querySelector('body').addEventListener("dragover", function (e) {
            e.preventDefault();
            return false;
        });

        document.querySelector('body').addEventListener("drop", function (e) {
            e.preventDefault();
            return false;
        });

        if (closeBtn !== null) {
            closeBtn.addEventListener('click', function () {
                document.getElementById('pop-up-bg').style.display = 'none';
                document.getElementById('pop-up-main').style.display = 'none';
            });
        }

        /*closeBg.addEventListener('click', function(){
         document.getElementById('pop-up-bg').style.display = 'none';
         document.getElementById('pop-up-main').style.display = 'none';
         });*/
        if (sendButton !== null) {
            sendButton.addEventListener('click', function (event) {
                dataLayer.push({
                    'event': 'GAEvent',
                    'eventCategory': 'button',
                    'eventAction': 'cheсk',
                    'eventLabel': undefined,
                    'eventValue': undefined
                });
                event.stopPropagation();
                if ('undefined' == typeof filesArray && userText == '') return;

                document.getElementById('pop-up-bg').style.display = 'block';
                document.getElementById('pop-up-main').style.display = 'block';
                if (window.innerWidth < 1200) {
                    document.getElementById('pop-up-body').style.width = '100%';
                    document.getElementById('pop-up-main').style.width = '100%';
                    document.getElementById('pop-up-main').style.height = '100%';
                    document.getElementById('user-email').style.marginRight = "0px";
                    document.getElementById('user-email').style.width = "auto";
                    document.getElementById('user-name').style.width = "auto";
                    document.getElementById('confirm').style.width = "auto";
                    document.getElementById('pop-up-main').style.top = '0';
                }

            });
        }
        if (textTarget !== null) {
            textTarget.addEventListener('keyup', function () {
                var re = /[^\w\s\/`~$%#{}[\].:\\@!,+();&<>"'^*?=|-]/gi;
                textTarget.value = textTarget.value.replace(re, "");
                userText = textTarget.value;
            });
        }
        if (confirm !== null) {
            confirm.addEventListener('click', function () {
                var re = /([\w-\.])+@((?:[\w]+\.))([A-z]{2,4})$/i;
                if (!emailInput.value.match(re)) {
                    document.querySelector(".error-message").style.display = 'block';
                    emailInput.className += 'error';
                    return false;
                } else {
                    document.querySelector(".error-message").style.display = 'none';
                    document.querySelector("#confirm").style.display = 'none';
                    document.querySelector("#loader").style.display = 'block';
                    emailInput.className -= 'error';
                    userEmail = emailInput.value;
                    userName = nameInput.value;
                    sendFile(filesArray, userName, userEmail, userText);
                }
            });
        }
        // textTab.addEventListener('click', function () {
        //     reset();
        // });
        // fileTab.addEventListener('click', function () {
        //     reset();
        // });
        // dropTarget.addEventListener('click', function () {
        //     dropInput.click();
        // });
        if (dropInput !== null) {
            dropInput.addEventListener('change', function (event) {
                var file = event.target.files[0];
                showFileName(file);
                maxSizeCheck(file);
                acceptCheck(file);
                filesArray = event.target.files[0];
            });
        }
        if (dropTarget !== null) {
            dropTarget.ondragstart = function (event) {
                event.stopPropagation();
                event.preventDefault();
            };

            dropTarget.ondragover = dropTarget.ondragenter = function (event) {
                event.stopPropagation();
                event.preventDefault();
            };
            dropTarget.addEventListener("dragenter", function (event) {
                dropTarget.style.border = '2px solid #00a8ff';
            }, false);
            dropTarget.addEventListener("dragleave", function (event) {
                dropTarget.style.border = '';
            }, false);
            dropTarget.ondrop = function (event) {
                event.stopPropagation();
                event.preventDefault();
                dropTarget.style.border = '';
                var file = event.dataTransfer.files;
                if (file.length > 1) {
                    alert("You can check only one file at a time");
                    return false;
                }
                filesArray = event.dataTransfer.files[0];
                showFileName(filesArray);
                maxSizeCheck(filesArray);
                acceptCheck(filesArray);
                formChecker.reset();
            };
        }

    };


})(jQuery);


//crutches

window.addEventListener("DOMContentLoaded", function () {
    var formEmailPage = document.querySelector("[data-crm-widget=emailCollector]");

    if (formEmailPage !== null) {

        formEmailPage.addEventListener("ready", function () {

            //sidebar

            var newDiv = document.createElement('div');

            newDiv.innerHTML = '<a class="collector-continue-btn" href="/order?dsc_code=first7">Proceed</a>';

            var btn = document.querySelector('.sidebar .collector-continue-btn');

            if (btn !== null) {

                document.querySelectorAll('.sidebar #w0')[0].appendChild(newDiv);

                document.querySelectorAll('.sidebar .collector-continue-btn')[0].style.display = "none";
            }


            //valid mail

            $('#emailCollectorForm .collector-continue-btn').css('pointer-events', 'auto');
            var mail = $('#collectorform-email');
            var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;

            mail.blur(function () {
                if (mail.val() != '') {
                    if (mail.val().search(pattern) == 0) {

                        $('#emailCollectorForm .collector-continue-btn').css('pointer-events', 'auto');

                    } else {
                        $('#emailCollectorForm .collector-continue-btn').css('pointer-events', 'none');

                    }
                } else {

                    $('#emailCollectorForm .collector-continue-btn').css('pointer-events', 'none');

                }
            });

            $('#emailCollectorForm .collector-continue-btn').click(function () {
                if (mail.val() === '') {
                    mail.css('border', '1px solid red');
                    return false;
                } else {
                    mail.css('border', '0');
                }
            });

        });
    }
});

//preview
window.addEventListener("DOMContentLoaded", function () {
    var formPreview = document.querySelector("[data-crm-widget=preview]");

    if (formPreview !== null) {

        formPreview.addEventListener("ready", function () {

            $('.ofs-paypal, .ofs-g2s').wrapAll('<div class="ofs-pay">');

        });
    }
    /* Начало "так себе" блока */
    if ($(window).width() < 1200) {

        $('.sub-menu > .menu-item').has('a + .sub-menu').addClass('sub-arrow');

        $('.sub-menu > .menu-item').has('a + .sub-menu').click(function (e) {
            $(this).toggleClass('sub-arrow');
            $(this).toggleClass('sub-arrow-rotate');
            // e.preventDefault();
        });
        //var targetLink = $('.menu-header-new').children('.with-sub').children('.slicknav_row');

        var allNewHeaderItemsForSub = document.querySelectorAll('.additional__item.slicknav_parent');
        allNewHeaderItemsForSub.forEach(function (item) {

            item.classList.add('with-sub-menu');

        });
        $('.js-additional').click(function () {
            $(this).toggleClass('active-item')
        });
        $('.additional__item').click(function () {
            //$('.menu-header-new>li>a')[0].click();
            $('.menu-header-new>li.with-sub>ul').slideUp(1);
            $('.menu-header-new>li.with-sub').removeClass('active-item');

        });
        //если кликаем на любой элемент кроме первого, первый закрывается
        $('.menu-header-new>li:not(:first)').click(function () {
            $('.menu-header-new>li.with-sub>ul').slideUp(1, function () {
                $('.menu-header-new>li.with-sub>ul').slideUp(1);
            });
            $('.menu-header-new>li.with-sub').removeClass('active-item');
        });
        $('.js-see-all').click(function () {
            $(this).fadeOut();
            setTimeout(function () {
                $('.service-list__items_hide').fadeIn();
            })
        });

        $('.menu-header-new>li>a').click(function () {

            $(this).parent().toggleClass('active-item');
            $('.menu-header-new>li.with-sub>ul').slideDown(1, function () {
                $('.menu-header-new>li.with-sub>ul').slideDown(1);
            });
            $(this).parent().children().children('.divider').children('ul').slideDown(1);

        });

        $('.menu-header-new>li>ul>li.divider>ul>li>a>a').on('click', function (evt) {
            var href = evt.target.hasAttribute('href') ?
                evt.target.getAttribute('href') :
                evt.currentTarget.getAttribute('href');

            document.location.href = href; // А после совершаем переход по ссылке
        });

        $('.menu-header-new>li>ul>li>a>a').on('click', function (evt) {
            var href = evt.target.hasAttribute('href') ?
                evt.target.getAttribute('href') :
                evt.currentTarget.getAttribute('href');

            document.location.href = href; // А после совершаем переход по ссылке
        });
    }
});

/* конец "так себе" блока*/

//custom writing
if (window.innerWidth <= 769) {
    $('.site_why_we__block-1').remove();
    $('.site_why_we__block-2').remove();
}
$(".site_why_we__block-mobile").owlCarousel({

    nav: true,
    pagination: false,
    navigation: true,
    navigationText: ["<img src='/wp-content/themes/ozessay/img/custom-writing/custom-prev.png'>", "<img src='/wp-content/themes/ozessay/img/custom-writing/custom-next.png'>"]

});

//our writers
window.addEventListener("DOMContentLoaded", function () {
    var formWriters = document.querySelector("[data-crm-widget=ourWriters]");

    if (formWriters !== null) {
        formWriters.addEventListener("ready", function () {
            if (window.innerWidth <= 1025) {
                $('.cw-ourWriters-filter-tabs').remove();
            }
        })
    }
});


//question block
//-------------------------------------------------

$(document).ready(function () {
    $("#menu-questions").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top - 90;
        $('body,html').animate({scrollTop: top}, 1500);

        $("a.questions-active").removeClass("questions-active");
        $(this).addClass('questions-active');

        $("span.questions-circle-active").removeClass("questions-circle-active");
        $(id + '> span').addClass('questions-circle-active');
    });
});


// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide');
$('.questions__read-more, .questions__read-hide').removeClass('hide');

// Set up the toggle effect:
$('.questions__read-more').on('click', function (e) {
    $(this).next('.read-more-content').removeClass('hide');
    $(this).addClass('hide');
    e.preventDefault();
});

// Changes contributed by @diego-rzg
$('.questions__read-hide').on('click', function (e) {
    var p = $(this).parent('.read-more-content');
    p.addClass('hide');
    p.prev('.questions__read-more').removeClass('hide'); // Hide only the preceding "Read More"
    e.preventDefault();
});


$(".site_why_entrust__block-mobile").owlCarousel({

    nav: true,
    pagination: false,
    navigation: true,
    navigationText: ["<img src='/wp-content/themes/ozessay/img/custom-writing/custom-prev.png'>", "<img src='/wp-content/themes/ozessay/img/custom-writing/custom-next.png'>"]

});

$(".site_why_do__block-mobile").owlCarousel({

    nav: true,
    pagination: false,
    navigation: true,
    navigationText: ["<img src='/wp-content/themes/ozessay/img/custom-writing/custom-prev.png'>", "<img src='/wp-content/themes/ozessay/img/custom-writing/custom-next.png'>"]

});

//removed white line in top
window.addEventListener("load", function () {

    var widgetUsage = document.querySelector("[data-crm-widget=cookiesUsage]");
    var display = $("[data-crm-widget=cookiesUsage]").css("display");

    if (display === "block") {

        $("#main").css({"margin-top": "90px"});
        if (window.innerWidth <= 1025) {
            $("#main").css({"margin-top": "0"});
        }

    }
    $('#cw-cookieUsageContainer > button').on('click', function () {

        if (widgetUsage !== null) {
            $("#main").css({"margin-top": "132px"});
            if (window.innerWidth <= 1025) {
                $("#main").css({"margin-top": "60px"});
            }
            if (window.innerWidth < 768) {
                $("#main").css({"margin-top": "47px"});
            }
        }

    });

});

// Star plagin rateyo
$(function () {

    var reviewsResult = localStorage.getItem('ratingResult');

    // Default value
    $("#rateYo").rateYo({
        starWidth: "20px",
        rating: 4.5
    });

    // Getter
    $("#rateYo").rateYo("option", "readOnly");
    if ($('*').is('#rateYo')) {
        if (localStorage.getItem('rating') !== null) {
            var rating = ($("#rateYo").rateYo("rating"));
            // Setter
            $("#rateYo").rateYo("option", "readOnly", "true");
            $('.product__review > p > span')[2].innerHTML = localStorage.getItem('ratingResult');
        } else {
            $("#rateYo").one('click', function () {
                var reviews = $('.product__review > p > span')[2].innerHTML;
                var reviewsN = Number(reviews) + 1;

                reviewsResult += $('.product__review > p > span')[2].innerHTML = reviewsN;

            });
        }
    }
    $("#rateYo").one('click', function () {
        var rating = ($("#rateYo").rateYo("rating"));
        localStorage.setItem('rating', 'added');
        localStorage.setItem('ratingResult', reviewsResult);
        // Setter
        $("#rateYo").rateYo("option", "readOnly", "true");


    });


});
//home
function homeRate() {

    var reviewsResult = localStorage.getItem('ratingResult');

    // Default value
    $("#rateYoHome").rateYo({
        starWidth: "20px",
        rating: 4.5
    });

    // Getter
    $("#rateYoHome").rateYo("option", "readOnly");
    if ($('*').is('#rateYoHome')) {
        if (localStorage.getItem('rating') !== null) {
            var rating = ($("#rateYoHome").rateYo("rating"));
            // Setter
            $("#rateYoHome").rateYo("option", "readOnly", "true");

            $('.testimonials-new__review > p > span')[2].innerHTML = localStorage.getItem('ratingResult');

        } else {
            $("#rateYoHome").one('click', function () {
                var reviews = $('.testimonials-new__review > p > span')[2].innerHTML;
                var reviewsN = Number(reviews) + 1;

                reviewsResult += $('.testimonials-new__review > p > span')[2].innerHTML = reviewsN;

            });
        }
    }

    $("#rateYoHome").one('click', function () {
        var rating = ($("#rateYoHome").rateYo("rating"));
        localStorage.setItem('rating', 'added');
        localStorage.setItem('ratingResult', reviewsResult);
        // Setter
        $("#rateYoHome").rateYo("option", "readOnly", "true");


    });


};

homeRate();

//front-page
//first-class-writers-slider
(function ($) {
    $('#js-first-class-writers-slider').owlCarousel({
        items: 3,
        dots: false,
        //autoPlay: 7000,
        navigation: true,
        navigationText: ["<img src='/wp-content/themes/ozessay/img/front-page-new/slider-rev-prev.png'>", "<img src='/wp-content/themes/ozessay/img/front-page-new/slider-rev-next.png'>"],
        stopOnHover: true,
        transitionStyle: "fade",
        responsive: {
            1170: {
                items: 2
            },
            992: {
                items: 1
            }
        }
    });
})(jQuery);

//benefits
$(".benefits__mobile-block").owlCarousel({
    dots: false,
    pagination: true,
    navigation: true,
    autoPlay: 7000,
    stopOnHover: true,
    transitionStyle: "fade",
    responsive: {
        1170: {
            items: 2
        },
        992: {
            items: 1
        }
    }
});

$(".how-to-start__mobile").owlCarousel({
    dots: false,
    pagination: true,
    navigation: true,
    autoPlay: 7000,
    stopOnHover: true,
    transitionStyle: "fade",
    responsive: {
        1170: {
            items: 2
        },
        992: {
            items: 1
        }
    }
});
if (window.innerWidth <= 800) {

    $(".experience .row").owlCarousel({
        dots: false,
        pagination: true,
        navigation: true,
        autoPlay: 7000,
        stopOnHover: true,
        transitionStyle: "fade",
        responsive: {
            1170: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });

    $(".solutions__wrap").owlCarousel({
        dots: false,
        pagination: true,
        navigation: true,
        autoPlay: 7000,
        stopOnHover: true,
        transitionStyle: "fade",
        responsive: {
            1170: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });

    $(".front-page-content__wrap").owlCarousel({
        dots: false,
        pagination: true,
        navigation: true,
        //autoPlay: 7000,
        stopOnHover: true,
        transitionStyle: "fade",
        responsive: {
            1170: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
}
$(".testimonials-new__main").owlCarousel({
    items: 2,
    dots: false,
    //autoPlay: 7000,
    navigation: true,
    navigationText: ["<img src='/wp-content/themes/ozessay/img/front-page-new/slider-rev-prev.png'>", "<img src='/wp-content/themes/ozessay/img/front-page-new/slider-rev-next.png'>"],
    stopOnHover: true,
    transitionStyle: "fade",
    responsive: {
        1170: {
            items: 2
        },
        992: {
            items: 1
        }
    }
});
//initialize WOW plugin
new WOW().init();
//Timer script
$(function () {
    var note = $('#note'),
        ts = new Date("2018/09/04"),
        promo = true;

    if ((new Date()) > ts) {
        ts = (new Date()).getTime() + 10 * 24 * 60 * 60 * 1000;
        promo = false;
    }

    $('#countdown').countdown({
        timestamp: ts,
        callback: function (days, hours, minutes, seconds) {

            var message = "";

            message += "Days: " + days + ", ";
            message += "Hours: " + hours + ", ";
            message += "Minutes: " + minutes + ", ";
            message += "Seconds: " + seconds + "<br />";

            note.html(message);
        }
    });
});

//BLOG
//-------------------------------------------------

document.addEventListener("DOMContentLoaded", function() {

    var navLinks = document.querySelectorAll('.blog__nav-tag-item');
    var numPosts = "";

    // Added class clicked nav and filter
    $(".blog__nav-tag-item").click(function (e) {

        e.preventDefault();

        $(".blog__nav-tag-item").removeClass('clicked');

        $("#letter-filter").removeClass('clicked');

        $("#date-filter").removeClass('clicked');

        $(this).addClass('clicked');

        $("#letter-filter").click(function () {
            $("#date-filter").removeClass('clicked');
            $("#letter-filter").addClass('clicked');
        });
        $("#date-filter").click(function () {
            $("#letter-filter").removeClass('clicked');
            $("#date-filter").addClass('clicked');
        });
    });
    $("#letter-filter").click(function () {
        $("#date-filter").removeClass('clicked');
        $("#letter-filter").addClass('clicked');
    });
    $("#date-filter").click(function () {
        $("#letter-filter").removeClass('clicked');
        $("#date-filter").addClass('clicked');
    });

    function ajaxRequestListPostsTag(id_tag) {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'http://ozessay.com.au.local/wp-json/wp/v2/posts?tags=' + id_tag + '&per_page=' + numPosts,
            success: function (data) {
                var objJson = JSON.stringify(data);
                var result = $.parseJSON(objJson);

                // Filter Alphabetizing
                document.getElementById("letter-filter").addEventListener('click', function (e) {

                    e.preventDefault();
                    result.sort(function (a, b) {
                        return (a.title.rendered > b.title.rendered) ? 1 : ((b.title.rendered > a.title.rendered) ? -1 : 0);
                    });

                    var total = result.map(function (name, index) {
                        return '<h4><a href="' + result[index].link + '">' + result[index].title.rendered + '</a></h4>'
                    });

                    var ul = $("<ul/>"),
                        letterBlock, sub, obj = {},
                        letter;

                    $.each(total, function (index, el) {

                        letter = total[index].split('">')[1].charAt(0);
                        if (!obj[letter]) {
                            obj[letter] = true;

                            letterBlock = $("<li/>", {
                                "text": letter.toUpperCase()
                            });

                            letterBlock.addClass("blog__letter-block");
                            letterBlock.appendTo(ul);
                            sub = $("<ul/>").appendTo(letterBlock);

                        }

                        var renderLink = $("<li>").html('<h4><a class="blog__item-link" href="' + result[index].link + '">' + result[index].title.rendered + '</a></h4>');
                        renderLink.appendTo(sub);

                    });


                    // Array partitioning
                    /*function chunkify(a, n, balanced) {

                     if (n < 2)
                     return [a];

                     var len = a.length,
                     out = [],
                     i = 0,
                     size;

                     if (len % n === 0) {
                     size = Math.floor(len / n);
                     while (i < len) {
                     out.push(a.slice(i, i += size));
                     }
                     }

                     else if (balanced) {
                     while (i < len) {
                     size = Math.ceil((len - i) / n--);
                     out.push(a.slice(i, i += size));
                     }
                     }

                     else {

                     n--;
                     size = Math.floor(len / n);
                     if (len % size === 0)
                     size--;
                     while (i < size * n) {
                     out.push(a.slice(i, i += size));
                     }
                     out.push(a.slice(size * n));

                     }

                     return out;
                     }

                     var initializationFunc = chunkify(letterBlockCount, 2, true);
                     var firstArr = JSON.stringify(initializationFunc[0]);
                     var secondArr = "";
                     if (letterBlockCount > 1) {
                     secondArr = JSON.stringify(initializationFunc[1]);
                     }

                     $("#content").html('<div class="col-md-6">' + firstArr + '</div><div class="col-md-6">' + secondArr + '</div>');*/

                    // This end function array partitioning



                    $("#content").html(ul);

                    // Bifurcation
                    // 26 - the number of letters in the alphabet
                    var items = document.querySelectorAll('.blog__letter-block');
                    var wrap;
                    for (i = 0; i < items.length; i ++) {
                        if (items.length > 26) {
                            if (i%13 === 0) {
                                wrap = document.createElement('div');
                                wrap.className = "col-md-4";
                                document.querySelector('#content > ul').appendChild(wrap);
                            }
                        } else if (items.length < 26) {
                            if (i%13 === 0) {
                                wrap = document.createElement('div');
                                wrap.className = "col-md-6";
                                document.querySelector('#content > ul').appendChild(wrap);
                            }
                        }
                        wrap.appendChild(items[i]);
                    }

                });
                // End filter alphabetizing



                //List rendering
                var total = result.map(function (name, index) {
                    return '<h4><a' + ' class="' + 'blog__item-link' + '" href="' + result[index].link + '">' + result[index].title.rendered + '</a></h4><p>' + result[index].date_gmt + '</p>';
                });
                $("#content").html(total);
            }
        });

    }

    function ajaxRequestListPosts() {
        // Default click A to Z
        $("#letter-filter").addClass('clicked');
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'http://ozessay.com.au.local/wp-json/wp/v2/posts?per_page=' + numPosts,
            success: function (data) {
                var objJson = JSON.stringify(data);
                var result = $.parseJSON(objJson);

                // Filter Alphabetizing
                //document.getElementById("letter-filter").addEventListener('click', function (e) {
                //e.preventDefault();
                result.sort(function (a, b) {
                    return (a.title.rendered > b.title.rendered) ? 1 : ((b.title.rendered > a.title.rendered) ? -1 : 0);
                });

                var total = result.map(function (name, index) {
                    return '<h4><a href="' + result[index].link + '">' + result[index].title.rendered + '</a></h4>'
                });

                var ul = $("<ul/>"),
                    letterBlock, sub, obj = {},
                    letter;

                $.each(total, function (index, el) {

                    letter = total[index].split('">')[1].charAt(0);
                    if (!obj[letter]) {
                        obj[letter] = true;

                        letterBlock = $("<li/>", {
                            "text": letter.toUpperCase()
                        });

                        letterBlock.addClass("blog__letter-block");
                        letterBlock.appendTo(ul);
                        sub = $("<ul/>").appendTo(letterBlock);

                    }

                    var renderLink = $("<li>").html('<h4><a class="blog__item-link" href="' + result[index].link + '">' + result[index].title.rendered + '</a></h4>');
                    renderLink.appendTo(sub);

                });

                $("#content").html(ul);

                // Bifurcation
                // 26 - the number of letters in the alphabet
                var items = document.querySelectorAll('.blog__letter-block');
                var wrap;
                for (i = 0; i < items.length; i ++) {
                    if (items.length > 26) {
                        if (i%13 === 0) {
                            wrap = document.createElement('div');
                            wrap.className = "col-md-4";
                            document.querySelector('#content > ul').appendChild(wrap);
                        }
                    } else if (items.length < 26) {
                        if (i%13 === 0) {
                            wrap = document.createElement('div');
                            wrap.className = "col-md-6";
                            document.querySelector('#content > ul').appendChild(wrap);
                        }
                    }
                    wrap.appendChild(items[i]);
                }

                //});
                // End filter alphabetizing


                // Filter Alphabetizing
                document.getElementById("date-filter").addEventListener('click', function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'GET',
                        dataType: 'json',
                        url: 'http://ozessay.com.au.local/wp-json/wp/v2/posts?filter[orderby]=date&order=desc&per_page=' + numPosts,
                        success: function (data) {
                            var objJson = JSON.stringify(data);
                            var result = $.parseJSON(objJson);
                            var total = result.map(function (name, index) {
                                return '<h4><a href="' + result[index].link + '">' + result[index].title.rendered + '</a></h4><p>' + result[index].date_gmt + '</p>'
                            });
                            $("#content").html(total);
                        }
                    });

                });

                //List rendering
                /*
                var total = result.map(function (name, index) {
                 return '<p><a' + ' class="' + 'blog__item-link' + '" href="' + result[index].link + '">' + result[index].title.rendered + '</a></p>'
                 });

                 $("#content").html(total);
                 */
            }
        });

    }

    // Number posts;
    (function () {
        $.get('http://ozessay.com.au.local/wp-json/wp/v2/posts', function (data, status, request) {
            numPosts += request.getResponseHeader('x-wp-total');
            $("#number-posts").html(numPosts + " articles");

            // Default output
            ajaxRequestListPosts();

        });
    })();

    // Attach click listeners for each of the nav links.
    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', function (e) {
            e.preventDefault();

            if (this.dataset.index == 1) {
                // Arg: id tag
                ajaxRequestListPostsTag(13);

            }

            else if (this.dataset.index == 2) {

                ajaxRequestListPostsTag(14);

            }

            else if (this.dataset.index == 3) {

                ajaxRequestListPostsTag(15);

            }

            else if (this.dataset.index == 4) {

                ajaxRequestListPostsTag(16);

            }

            else if (this.dataset.index == 5) {

                ajaxRequestListPostsTag(17);

            }

            else if (this.dataset.index == 6) {

                ajaxRequestListPostsTag(18);

            }

        });
    }
});