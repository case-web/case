/**
 * Created by Cat on 19.03.2017.
 */
console.log('poshel nahyi');
console.log('poshel qnahyi');
$('button').mousedown(function () {
    $('button').css('box-shadow', 'none');
});
$('button').mouseup(function () {
    $('button').css('box-shadow', '0px 2px 4px 1px #2e2e2e');
});

$('button').mouseout(function () {
    $('button').css('box-shadow', '0px 2px 4px 1px #2e2e2e');
});
$('button').mouseover(function () {
    $('button').css('box-shadow', '0px 2px 7px 2px #2e2e2e');
});

$(document).ready(function() {
    window.onscroll = function () {
        if($('body').scrollTop() > 10) {
            $('.navbar').css('background-color', '#512DA8');
        } else {
            $('.navbar').css('background-color', 'transparent');
        }

    }
});
