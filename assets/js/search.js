jQuery(document).ready(function(){
	jQuery('.search-btn').on('click', function(){
		jQuery('.search-overlay').toggleClass('hide');
	});
	jQuery('.close-btn').on('click', function(){
		jQuery('.search-overlay').toggleClass('hide');
	});
});