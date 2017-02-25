$(function(){
	if( currnav != '' ){
		$(".list-group-item[data-hover='"+currnav+"']").addClass('active')
		$(".list-group-item[data-hover='"+currnav+"']").parent('.collapse').collapse('show')
	}else{
		$('#collapse1').collapse('show')
	}

	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
})