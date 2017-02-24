$(function(){
	document.querySelector(".list-group-item[data-hover='"+currnav+"']").className += " active"
	$(".list-group-item[data-hover='"+currnav+"']").parent('.collapse').collapse('show')

	$(".xs-nav-top").autoHidingNavbar({animationDuration:500})
})