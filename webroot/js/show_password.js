$(function() {
	$('.show.password')
        .on('change', function(){
            if (this.checked) {
                $('#password').get(0).type = 'text';
            } else {
                $('#password').get(0).type = 'password';
            }
        });
});
