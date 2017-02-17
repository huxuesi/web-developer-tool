$(function(){
	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
	$('.imgcutyes').on('click', '#download', function(){
		var url = $(this).attr('imgurl')
		
				objIframe = document.createElement("IFRAME"); 
				document.body.insertBefore(objIframe); 
				objIframe.outerHTML = "<iframe name=a1 style='width:400px;hieght:300px' src=" + url + "></iframe>"; 

	})
})