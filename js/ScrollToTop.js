$(document).ready(function () {
$('.scroll-to-top').hide();
//Check to see if the window is top if not then display button
$(window).scroll(function () {
if ($(this).scrollTop() > 25) {
$('.scroll-to-top').fadeIn();
} else {
$('.scroll-to-top').fadeOut();
}
});
//Click event to scroll to top
$('.scroll-to-top').click(function () {
$('html, body').animate({ scrollTop: 0 }, 1500);
return false;
});
});