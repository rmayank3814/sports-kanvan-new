$(document).ready(function() {

    $('#registration_form').submit(function(e) {
        //e.preventDefault();
        var fname = $('#fname').val();
        var lname = $('#lname').val()
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var emergency = $('#emergency').val();
        var password = $('#password').val();
        var passconf = $('#passconf').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();
        var shift = $('#shift').val();
        var address = $('#address1').val();
        var i = 0;

        $(".error").remove();

        if (fname == '') {
            $('#fname').after('<span class="error">This field is required</span>');
            i++;
        }
        if (fname != '') {
            // var regEx = /^[a-zA-Z]+ [a-zA-Z]+$/;
            var validfname = regEx.test(fname);
            if (!validfname) {
                $('#fname').after('<span class="error">Enter a valid name</span>');
                i++;
            }
        }
        if (lname == '') {
            $('#lname').after('<span class="error">This field is required</span>');
            i++;
        }
        if (lname != '') {
            // var regEx = /^[a-zA-Z]+ [a-zA-Z]+$/;
            var validlname = regEx.test(lname);
            if (!validlname) {
                $('#lname').after('<span class="error">Enter a valid last name</span>');
                i++;
            }
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
        if (passconf != password) {
            $('#passconf').after('<span class="error">confirm Password does not Match</span>');
            i++;
        }
        if (passconf == '') {
            $('#passconf').after('<span class="error">This field is required</span>');
            i++;
        }
        if (emergency == '') {
            $('#emergency').after('<span class="error">This field is required</span>');
            i++;
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
            $('#address1').after('<span class="error">This field is required</span>');
            i++;
        }
        if (i > 0) {
            return false;
        }
        //alert(i);
        //return false;
    });

});