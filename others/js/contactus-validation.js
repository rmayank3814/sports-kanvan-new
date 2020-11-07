$(document).ready(function() {

    $('#contact-us').submit(function(e) {
        //e.preventDefault();
        var nameNine = $('#nameNine').val();
        var number = $('#number').val();
        var emailNine = $('#emailNine').val();
        var messageNine = $('#messageNine').val();
        var i = 0;

        $(".error").remove();

        if (nameNine == '') {
            $('#nameNine').after('<span class="error">This field is required</span>');
            i++;
        }
        if (number == '') {
            $('#number').after('<span class="error">This field is required</span>');
            i++;
        } else {
            var regEx = /^[0]?[6789]\d{9}$/;
            var validnumber = regEx.test(number);
            if (!validnumber) {
                $('#number').after('<span class="error">Enter a valid phone</span>');
                i++;
            }

            if (emailNine == '') {
                $('#emailNine').after('<span class="error">This field is required</span>');
                i++;
            } else {
                var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var validemailNine = regEx.test(emailNine);
                if (!validemailNine) {
                    $('#emailNine').after('<span class="error">Enter a valid email</span>');
                    i++;
                }
            }

        }
        if (messageNine == '') {
            $('#messageNine').after('<span class="error">This field is required</span>');
            i++;
        }
        if (i > 0) {
            return false;
        }
    });

});