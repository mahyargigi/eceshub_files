$(document).ready(function () {
    $('.is-liked').live('click' , function (e) {
        e.preventDefault();
        $(this).removeClass('is-liked');
        $(this).addClass('is-not-liked');
        $(this).find('.like-text').html('می پسندم');
        $(this).find('.like-img').attr('src' , 'http://localhost/eceshub/ow_userfiles/plugins/startups/agone-Heart.png');
    });
    $('.is-not-liked').live('click' , function (e) {
        e.preventDefault();
        $(this).removeClass('is-not-liked');
        $(this).addClass('is-liked');
        $(this).find('.like-text').html('پسندیدم');
        $(this).find('.like-img').attr('src' , 'http://localhost/eceshub/ow_userfiles/plugins/startups/1200px-Heart_corazón.png');
    });
});