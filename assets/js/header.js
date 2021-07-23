// for hamburger menu
const navigation = document.getElementById("menu");
const hamburger = document.createElement('div');
hamburger.id = 'hamburger';
for (let i = 0; i < 3; i++) {
    hamburger.appendChild(document.createElement('span'));
}
navigation.append(hamburger);

const menu_mask = document.createElement('div');
// menu_mask.id = 'menu_mask';
// navigation.append(menu_mask);

$(hamburger).on({
    click: function (e) {
        e.preventDefault();
        $('body').toggleClass('nav-open noscroll');
        if ($('body').hasClass('noscroll')) {
            $(window).on('touchmove.noScroll', function (e) {
                e.preventDefault();
            });
        } else {
            $(window).off('.noScroll');
        }

        return false;
    },
    keypress: function (e) {
        if (e.keyCode === 13 || e.which === 13) {
            $(this).trigger('click');
        }
    }
});

$height = $('#menu').height();
// if ($(window).width() <= 992) {
//     $('main').css('margin-top', $height)
// }
$(window).resize(function () {
    $height = $('#menu').height();
    // if ($(window).width() <= 992) {
    //     $('main').css('margin-top', $height)
    // } else {
    //     $('main').css('margin-top', '0')
    // }
    if ($("body").hasClass('mn-scroll-active')) {
        $("body").removeClass('mn-scroll-active');
    }
});


// scroll to target
$(document).on('click', 'a[href*="#"]:not([href="#"])', function (e) {
    $('body').removeClass('nav-open noscroll');
    let offsetTop = 80;
    if (window.innerWidth <= 992) {
        offsetTop = 70;
    }
    if (window.innerWidth <= 768) {
        offsetTop = 50;
    }
    if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
            $("html, body").animate({
                scrollTop: target.offset().top - offsetTop,
            }, 700);
            return false;
        }
    }
});

function scrollToTarget(target) {
    const targetTo = document.getElementById(target);
    if (targetTo) {
        let offsetTop = targetTo.offsetTop
        if (window.innerWidth <= 768) {
            offsetTop += 50;
        }
        // else {
        //     offsetTop -= 130;
        // }
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}

$(window).scroll(function () {
    if (window.innerWidth >= 992) {
        if ($(window).scrollTop() > 600) {
            $("body").addClass('mn-scroll-active');
        } else if ($(window).scrollTop() <= 600) {
            $("body").removeClass('mn-scroll-active');
        }
    }
});