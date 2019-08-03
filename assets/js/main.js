// This is the javascript file for this theme
// Author : Md. Mashud Rana

(function($){
	$(document).ready(function(){
		$(".popup").each(function(){
			var img_url = $(this).find("img").attr("src");
			$(this).attr("href", img_url);
		});
	});
})(jQuery);