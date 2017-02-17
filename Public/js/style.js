$(function(){
	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
	$('.imgcutyes').on('click', '#download', function(){
		var url = this.imgurl
		alert(url)
	})
	function download(url){
		alert(url)
	}
})