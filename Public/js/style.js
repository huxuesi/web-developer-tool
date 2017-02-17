$(function(){
	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
	$('.imgcutyes').on('click', '#download', function(){
		var url = $(this).attr('imgurl')
		alert(url)
	})
})