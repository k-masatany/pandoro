$(function() {
	$('.show.password')
        .on('mousedown', function(){
            $('#password').get(0).type = 'text';
        })
        .on('mouseup', function() {
            $('#password').get(0).type = 'password';
        });
});
