$(function(){
	$(".list-group-item[data-hover='"+currnav+"']").addClass('active')
	$(".list-group-item[data-hover='"+currnav+"']").parent('.collapse').collapse('show')

	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
})