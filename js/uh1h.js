/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * pre load top image high resolution
 */
var topImage = $('#myCarousel').css('background-image').replace(/^url\(([^\)]+)\)$/, '$1').replace('_low.jpg', '_high.jpg')
var image = $('<img/>').css('display', 'non_e');
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