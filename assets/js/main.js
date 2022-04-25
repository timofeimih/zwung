var $ = jQuery.noConflict();

$(document).ready(function () {


	const triggerFullPage = () => {
		new fullpage('#fullpage', {
			animateAnchor: false,
			paddingTop: '5rem',
			anchors: ['screen_1', 'screen_2', 'screen_3', 'screen_4', 'screen_5'],
			animateAnchor: false,
			menu: '.wrap_menu',
			responsiveWidth: 1200,
			afterLoad: function(){
	        	$('.section.active [data-aos]').addClass("aos-animate");
		    }
		});
	}

    triggerFullPage();

	
	

	$("#cliSettingsPopup").detach().insertAfter('#cookie-law-info-bar');

	initMegaMenu();

	$(window).on('resize', function () {
		initMegaMenu();
	});

	function initMegaMenu() {
		if ($(window).width() < 991) {
			$(document).on('click', '.burger', function (e) {
				$('.main_menu').toggleClass('open');
				$('body').toggleClass('overflow_body');
			});
		} else {
			resetMenuState();
		}

	}

	function resetMenuState() {
		$(".main_menu").removeClass('open');
		$('body').removeClass('overflow_body');
	}

	$(".main_menu A").on("click", function(){
		resetMenuState();
	})

	$(document).on('change', ".section_content_page.form_page .wrap__form .left_box input:file, #gform_3 input:file", function (){
		var fileName = $(this).val().split('\\').pop();
		$(this).closest('.ginput_container_fileupload').after($('<div class="filename"></div>'));
		$(this).closest('.ginput_container_fileupload').next('.filename').html(fileName);
	});

	document.addEventListener('wpcf7mailsent', function(event) {
        if ('40' == event.detail.contactFormId) {
            $('.team_2 .section_form').hide();
            $('.team_2 .content_page_contact').show();

        }
    }, false);

});
