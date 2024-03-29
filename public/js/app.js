/*Loader*/
window.addEventListener("load", function(){
	const loader = document.querySelector(".loader"); loader.className += " hidden"; 
});
/*Lazy-Img*/
var loadImages;
$(document).ready(function(){
	$(".lazy img").on('load', function(){ $(this).addClass("loaded"); });
	$(document).on("scroll",function(){	loadImages(); });

	(loadImages = function(){
		$.each($(".lazy"), function(){
			var block = $(this);
			var image = block.find("img");
			if(isOnScreen(block)){
				var url = image.data("url");
				if(image.attr("src") != url){
					image.attr("src", url);
				};
			}
		});
	})();
});
function isOnScreen(element){
	var win = $(window);
	var screenTop = win.scrollTop();
	var screenBottom = screenTop + win.height();
	var elementTop = element.offset().top;
	var elementBottom = elementTop + element.height();
	return elementBottom > screenTop && elementTop < screenBottom;
}
