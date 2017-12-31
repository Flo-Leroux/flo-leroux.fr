$(document).ready(function () {
    $('.menu__item--current').removeClass('menu__item--current');
    $('a[href="views/contact.php"]').parent('.menu__item').addClass('menu__item--current');

    setTimeout(() => {
        $('.revealer__layer').addClass('anim_out');
        setTimeout(() => {
            $('.revealer__layer').css('display', 'none');
        }, 2000);
    }, 1000);

    $('#messageDiv, #successDiv, #errorDiv').css('display', 'none');
});

function nextForm() {
    var email = $('#emailInput').val();
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        $('#emailDiv').fadeOut('slow', function() {
            $('#messageDiv').fadeIn('slow');    
        })    
    }
}