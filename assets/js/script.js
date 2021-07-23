var headerHeight = $("header").innerHeight();
$("main").css("margin-top",headerHeight);
$(".hamburger").click(function(e){
    e.preventDefault();
    $("body").toggleClass("nav-active");
});
// $(".close").click(function(e){
//     e.preventDefault();
//     $("body").toggleClass("nav-active");
// });
$(".wrap_area").click(function(){
    $("body").toggleClass("nav-active");
});

$(".js-menu a").click(function(){
    $("body").toggleClass("nav-active");
});



$(window).scroll(function () {
    if (window.innerWidth >= 992) {
        if ($(window).scrollTop() > 200) 
          {
            $("body").addClass('js-mn-scroll-active');
          }
          else if ($(window).scrollTop() <= 200) 
          {
            $("body").removeClass('js-mn-scroll-active');
          }
    } 
     
});

// scroll to target
$(document).on('click', 'a[href*="#"]:not([href="#"])', function (e) {

let offsetTop = 80;
if (window.innerWidth <= 992) {
    offsetTop = 70;
} 
if (window.innerWidth <= 768) {
    offsetTop = 60;
} 
if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
    if (target.length) {
        $("html, body").animate({ scrollTop: target.offset().top - offsetTop, }, 700);
        return false;
    }
}
});

$(function() {
    window.scrollTo(0, 0);
    let posX = -80; 
    if (window.matchMedia('(max-width:992px)').matches) {
        posX = -50;
    }
    // *only* if we have anchor on the url
    if(window.location.hash) {
        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + posX + 'px'
        }, 500, '');
    }
});

// for go to top
$(document).ready(function () {
    const footer = document.querySelector('footer');
    const toTop = $(`<a id="toTop" href="#"><span></span></a>`);
    $('body').append(toTop)
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        toTop.fadeIn();
      } else {
        toTop.fadeOut();
      }
      const fTop = footer.getBoundingClientRect().top;
            if (window.innerHeight > fTop) {
                $(toTop).css({
                    bottom: (window.innerHeight - fTop + 10),
                    transition: 'unset'
                });
            }
            else {
                $(toTop).css({
                    bottom: '',
                    transition: ''
                });
            }
    });
  
    toTop.click(function (event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, 500);
    });

       
    // var height = header.height();
    // $(this).scrollTop() > height ? $("header").addClass('small') : $("header").removeClass('small');

});