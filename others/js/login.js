$(document).ready(function() {

    $('#login_form').submit(function(e) {
        //e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        var i = 0;

        $(".error").remove();

        if (email == '') {
            $('#email').after('<span class="error">This field is required</span>');
            i++;
        }
        if (email != '') {
            var regEx = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            var validEmail = regEx.test(email);
            if (!validEmail) {
                $('#email').after('<span class="error">Enter a valid email</span>');
                i++;
            }
        }
        if (password == '') {
            $('#password').after('<span class="error">This field is required</span>');
            i++;
        }
        if (password != '') {
            var regEx = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;
            var validPassword = regEx.test(password);
            if (!validPassword) {
                $('#password').after('<span class="error">Enter a valid password</span>');
                i++;
            }
        }

        if (i > 0) {
            return false;
        }
        //alert(i);
        //return false;
    });

});