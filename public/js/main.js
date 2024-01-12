(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        if ($('#sidebar').hasClass('active')) {
            $('.modal-dialog').css('margin-left', '0');
            $('.close').css('margin-right', '0');

        } else {
            $('.modal-dialog').css('margin-left', '250px');
            $('.close').css('margin-right', '250px');

        }
    });

})(jQuery);
