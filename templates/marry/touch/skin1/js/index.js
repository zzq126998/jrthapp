$(function () {
    // banner轮播图
    new Swiper('.banner .swiper-container', {pagination:{ el: '.banner .pagination'} ,slideClass:'slideshow-item',loop: true,grabCursor: true,paginationClickable: true,slidesPerView : 1.22,spaceBetween : 25,centeredSlides : true,autoplay:{delay: 2500,}});

    //类别切换
    $('.nav-tab li').click(function(){
        $(this).addClass('curr').siblings().removeClass('curr');
        var i = $(this).index();
        $('.filter .container').eq(i).addClass('show').siblings().removeClass('show');
    });

});
