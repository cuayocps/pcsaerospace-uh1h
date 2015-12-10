/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * pre load top image high resolution
 */
var topImage = $('#myCarousel')
				.css('background-image')
				.replace(/^url\(([^\)]+)\)$/, '$1')
				.replace('_low.jpg', '_high.jpg')
				.replace(/["']?/g, '');

var image = $('<img/>').css('display', 'none');
$('body').append(image);
image.on('load', function () {
	$('#myCarousel').addClass('high');
	image.remove();
});
image.attr('src', topImage);



/**
 * navigator menu
 */
$("#navbar ul li a[href^='#']").on('click', function (e) {

	// prevent default anchor click behavior
	e.preventDefault();

	// store hash
	var hash = this.hash;

	// animate
	$('html, body').animate({
		scrollTop: $(hash).offset().top
	}, 300, function () {

	});

});

$('#contact [type="submit"]').click(function (event) {
	event.preventDefault();
	$('#contact form').submit();
});

$('#contact form').submit(function (event) {
	//event.preventDefault();
	$('#contact [type="submit"]').html('Sending...');
	$('#contact button').addClass('disabled').attr('disabled', 'disabled');
	$form = $(this);
	$form.attr('method', 'post');
	return;
	$.post($form.attr('action'), $form.serialize(), function (reply) {
		$('#contact button').removeClass('disabled').removeAttr('disabled');
		$('#contact [type="submit"]').html('Send');
		if (reply.error) {
		} else {
			$('#contact').modal('hide');
			$form[0].reset();
			alertModal('Successfully Sent');
		}
	})
});

function alertModal(text, status) {
	var title = $('<h4/>')
					.addClass('modal-title')
					.html(text);
	var close = $('<span/>')
					.addClass('glyphicon glyphicon-remove')
					.attr('aria-hidden', 'true');
	var button = $('<button/>')
					.addClass('close')
					.attr({type: 'button', 'data-dismiss': 'modal', 'aria-label': 'close'})
					.append(close);
	var header = $('<div/>')
					.addClass('modal-header alert-success')
					.append(button)
					.append(title);
	var content = $('<div/>')
					.addClass('modal-content')
					.append(header);
	var dialog = $('<div/>')
					.addClass('modal-dialog')
					.append(content);
	var modal = $('<div/>')
					.addClass('modal fade')
					.attr({tabindex: -1, role: 'dialog', 'aria-hidden': 'true'})
					.append(dialog);
	$('body').append(modal);
	$(modal).on('show.bs.modal', function () {
		var myModal = $(this);
		clearTimeout(myModal.data('hideInterval'));
		myModal.data('hideInterval', setTimeout(function () {
			myModal.modal('hide');
		}, 3000));
	});
	$(modal).on('hide.bs.modal', function () {
		$(this)[0].remove();
	});

	modal.modal();

}