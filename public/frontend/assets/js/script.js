
$('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: '<i class="fas fa-chevron-left banner-arrow  left-arrow"></i>',
    prevArrow: '<i class="fas fa-chevron-right banner-arrow right-arrow"></i>',
});

// banner slider end

$('.counter').counterUp({
    delay: 10,
    time: 1000
});

// counter Up area end

$('.showSidebar').on('click', function() {
    $('.sidebar').css('left', 0);
  });

  $('.sidebar-cross').on('click', function() {
    $('.sidebar').css('left', '-200%');
  });
//  responsive sidebar area end


$('.resSearchbarShow').on('click', function() {
    $('.res-searchbar').css('display', 'block');
});

$('.resSearch-cross').on('click', function() {
    $('.res-searchbar').css('display', 'none');
});

$('#res-dropShow').click(function() {
    if ($('.resGallery-dropdown').css('display') === 'none') {
        $('.resGallery-dropdown').css('display', 'block');
    } else {
        $('.resGallery-dropdown').css('display', 'none');
    }
});


//  responsive area end

$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('menuFix');
        } else {
            $('#header').removeClass('menuFix');
        }
    });
});

$(document).ready(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.responsiveNavbar').addClass('menuFix');
        } else {
            $('.responsiveNavbar').removeClass('menuFix');
        }
    });
});
