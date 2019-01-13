
    $(document).ready(function() {
      $(".lazy").slick({
          dots: true, 
		  autoplay: true
      });
    });

$(window).scroll(function() {
	bg_fix();
})

function bg_fix() {
    var scrollTop = $(window).scrollTop()
	$('#fixed-head-bg').css('background-position','center ' + (scrollTop*0.7) + 'px')
}
