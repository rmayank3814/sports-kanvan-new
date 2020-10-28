$(document).ready(function() {

    $('#registration_form').submit(function(e) {
        //e.preventDefault();
        var fname = $('#fname').val();
        var lname = $('#lname').val()
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();
        var shift = $('#shift').val();
        var address = $('#address').val();
        var i = 0;

        $(".error").remove();

        if (fname == '') {
            $('#fname').after('<span class="error">This field is required</span>');
            i++;
        }
        if (lname == '') {
            $('#lname').after('<span class="error">This field is required</span>');
            i++;
        }

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

        if (mobile == '') {
            $('#mobile').after('<span class="error">This field is required</span>');
            i++;
        }
        if (mobile != '') {
            var regEx = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            var validmobile = regEx.test(mobile);
            if (!validmobile) {
                $('#mobile').after('<span class="error">Enter a valid phone</span>');
                i++;
            }
        }
        if (dob == '') {
            $('#dob').after('<span class="error">This field is required</span>');
            i++;
        }
        if (gender == '') {
            $('#gender').after('<span class="error">This field is required</span>');
            i++;
        }
        if (shift == '') {
            $('#shift').after('<span class="error">This field is required</span>');
            i++;
        }
        if (address == '') {
            $('#address').after('<span class="error">This field is required</span>');
            i++;
        }
        if (i > 0) {
            return false;
        }
        //alert(i);
        //return false;
    });

});