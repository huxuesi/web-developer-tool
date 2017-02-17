$(function(){
	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
	$('.imgcutyes').on('click', '#download', function(){
		var url = $(this).attr('imgurl')
		window.location.href = "http://tool.akphp.com/index.php/Imgcut/imgdownload.html/remoteurl/"+url
	})
})