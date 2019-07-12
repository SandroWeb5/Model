/**/
new WOW().init();
$(".Bton").hide();
$(".Top").hide();
/*-------------------------------------------------------------------------------------------------------------*/
$(function () {
	$(".button-collapse").sideNav();
	$('[data-tooltip="tooltip"]').tooltip();
	$('.carousel').carousel({ interval: 8000 });
	$('#navbarA').collapse({ toggle: false });
	$('#navbarB').collapse({ toggle: false });
  $("#mdb-lightbox-ui").load("public/mdb-addons/mdb-lightbox-ui.html");
});
/*-------------------------------------------------------------------------------------------------------------*/
$(document).ready(function() {
    $('.mdb-select').material_select();
    $("ul li a").click(function(ev) {
    $(".collapse").collapse('hide');
  });
});
/*-------------------------------------------------------------------------------------------------------------*/
$(window).scroll(function(){
  if($(this).scrollTop() > 450){ $(".Bton").fadeIn(); }else{ $(".Bton").fadeOut(); }
  if($(this).scrollTop() > 360){ $(".Top").fadeIn(); }else{ $(".Top").fadeOut(); }
});
