$(function(){
	$('.h-menu').on('click', function() {
		if ($('.nav,.mask').css("display") == "none") {
			$('.nav,.mask').show();
			$('.header').css('z-index', '101');

		} else {
			$('.nav,.mask').hide();
			$('.header').css('z-index', '99');

		}
	})
	$('.mask').on('touchmove', function() {
		$(this).hide();
		$('.nav').hide();

	})
	$('.mask').on('click', function() {
		$(this).hide();
		$('.nav').hide();
		$('.header').css('z-index', '99');

	})

    /*�����ͼ S*/
    $.fn.bigImage({
        artMainCon:".main-txt",  //ͼƬ���ڵ��б��ǩ
    });
})