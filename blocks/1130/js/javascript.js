 $('.navbar .dropdown').hover(function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
		}, function() {
		  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105);
		}
);
 $(document).ready(function(){
    $('#btn').click(function(){
        $('.an').slideToggle();            
    });
});