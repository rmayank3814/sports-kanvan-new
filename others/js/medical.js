$(document).ready(function() {

    $('#medical_form').submit(function(e) {
        //e.preventDefault();
        var physical_examination = $('#physical_examination').val();
        var explain = $('#explain').val()
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();
        var shift = $('#shift').val();
        var address = $('#address').val();
        var i = 0;

        $(".error").remove();

        if (physical_examination == '') {
            $('#physical_examination').after('<span class="error">This field is required</span>');
            i++;
        }
        if (explain == '') {
            $('#explain').after('<span class="error">This field is required</span>');
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