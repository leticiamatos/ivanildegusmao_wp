(function ($, root, undefined) {
	
	$(function() {
		// console.log("oi!");
		$('.bxslider').bxSlider({
		  auto: true,
		  pager: true,
		  mode: 'horizontal',
		  pause: 8000
		});

		//Menu dropdown
		$("#menu-menu_primary").menu();



	})
	// $(document).ready(function() { 
	// 	$('.menu > li').bind('mouseover', openSubMenu); 
	// 	$('.menu > li').bind('mouseout', closeSubMenu); 

	// 	function openSubMenu() { 
	// 		$(this).find('ul').css('visibility', 'visible'); 
	// 	}; 
	// 		function closeSubMenu() { 
	// 		$(this).find('ul').css('visibility', 'hidden'); 
	// 	}; 
	// });
	
})(jQuery, this);
