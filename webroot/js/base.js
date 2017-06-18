$(function() {
    // enabel close button
    $('.message .close').on('click', function() {
        $(this).closest('.message').transition('fade');
    });
});
