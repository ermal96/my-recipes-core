(function ($) {
	var socialShareBtn = $('.open-social-sharing');
	var socialModal = $('.social-sharing-modal');
	var linkText = $('#link-text');
	var copyLinkButton = $('.copy-link-btn');



	socialShareBtn.on('click',function(event){
		event.stopPropagation();
		socialModal.addClass('visible');
	})

	socialModal.on('click', function(event){
		event.stopPropagation();
	})


	$(window).click(function() {
		socialModal.removeClass('visible');
	});


	copyLinkButton.on('click', function () {
		var url = $(this).attr('data-value');
		var el = document.createElement('textarea');
		el.value = url;
		document.body.appendChild(el);
		el.select();
		document.execCommand('copy');
		document.body.removeChild(el);
		linkText.text(mrSocialShare.messageLinkCopied);
		setTimeout(function()  {
			linkText.text(' ');
		}, 3000);
	});

	

})(jQuery);