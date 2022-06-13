$(window).on('load', function() {
    $('.main').fadeOut(1000, function() {
        $('#carouselExampleFade').css('right', '0')
    })
});
$('#carouselExampleFade').on('slid.bs.carousel', function() {
    var totalItems = $(this).find('.carousel-item').length;
    var currentIndex = $(this).find('.carousel-item.active').index() + 1;
    if (currentIndex == totalItems) {
        $(this).find('.carousel-control-next').fadeOut(100);
        $('a.next').fadeIn(100)
    } else {
        $(this).find('.carousel-control-next').fadeIn(100);
        $('a.next').fadeOut(100)
    }
});
$(function() {
    $(".carousel").css({
        height: $(window).innerHeight() + 'px'
    });
    $(window).on('resize', function() {
        $(".carousel").css({
            height: $(window).innerHeight() + 'px'
        })
    })
})