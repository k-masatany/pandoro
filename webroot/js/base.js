$(function() {
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        if ($('.modal-content').length > 0) {
            $('.modal').modal();
            $('.modal').modal('open');
        }
    });
});
