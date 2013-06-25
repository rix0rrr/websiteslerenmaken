$(function() {
    $('.extra-info').click(function(ev) {
        $(this).find('.content').toggle('fast');
    });
    $('.extra-info .content').hide();
});
