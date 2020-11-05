(function($) {
    "use strict";

    $(function() {
        var header = $(".start-style");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 5) {
                header.removeClass('start-style ').addClass("scroll-on sticky-header bg-light ");

            } else {
                header.removeClass("scroll-on sticky-header bg-light ").addClass('start-style ');
            }
        });
        $(window).on('load', function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 5) {
                header.removeClass('start-style ').addClass("scroll-on sticky-header bg-light ");

            } else {
                header.removeClass("scroll-on sticky-header bg-light ").addClass('start-style ');
            }
        });
    });

    $(document).ready(function() {
        var checkScrollBar = function() {
            $('.nav-link').css({
                color: $(this).scrollTop() >= 5 ?
                    '#6c757d' : '#fff'
            })
        }
        $(window).on('load resize scroll', checkScrollBar)
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $(".top-bar").addClass("sticky-top");
        } else {
            $(".top-bar").removeClass("sticky-top");
        }
    });


    //Animation

    $(document).ready(function() {
        $('body.hero-anime').removeClass('hero-anime');
    });

    //Menu On Hover

    $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
        if ($(window).width() > 750) {
            var _d = $(e.target).closest('.nav-item');
            _d.addClass('show');
            setTimeout(function() {
                _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
            }, 1);
        }
    });

    //Switch light/dark

    $("#switch").on('click', function() {
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $("#switch").removeClass("switched");
        } else {
            $("body").addClass("dark");
            $("#switch").addClass("switched");
        }
    });

})(jQuery);

var $body = $('body');

$body.on('click', '[data-dropdown-toggle]', (event) => {
    event.preventDefault();
    var $button = $(event.target),
        $data = $(event.target).data('dropdownToggle'),
        $dropdown = '#' + $data;

    $('.dropdown-menu:not(' + $dropdown + ')').hide();
    $('button:not(' + $data + ')').removeClass('active');
    $($dropdown).toggle();
    $($button).toggleClass("active");

});
/*newsletter*/
const notificationContainer = document.getElementById('notification-container');
const NOTIFICATION_TYPES = {
    INFO: 'info',
    SUCCESS: 'success',
    WARNING: 'warning',
    DANGER: 'danger'
}



$(document).on('click', '#closeNotify', function() {
    $(".notification").fadeOut(500);
    return false;

});

// $(document).on('click', '#openNotify', function(e) {
//     alert("thank you");
// });
$(document).on('click', '#openNotify', function() {

    Swal.fire({
        title: 'Thank You',
        text: "Would you like to increase your collection?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#00B2EE',
        cancelButtonColor: '#FF3030',
        confirmButtonText: 'Yes, Continue!'
    }).then((result) => {
        if (result.value) {
            window.location = "enquiry.html";
        }

    })

})

$(document).ready(function() {

    $('.counter').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

});
/*testimonial*/

// $(function() {
//     $('.testi3').owlCarousel({
//         loop: true,
//         margin: 30,
//         nav: false,
//         dots: true,
//         autoplay: true,
//         responsiveClass: true,
//         responsive: {
//             0: {
//                 items: 1,
//                 nav: false
//             },
//             1024: {
//                 items: 3
//             }
//         }
//     })
// });

/*slideout*/
$(function() {
    $('.feedback-popup').animate({
        left: 0
    });

    $("#closeFeedbackPopup,#closeFeedback").on('click', function(e) {
        e.preventDefault();
        $('.feedback-popup').animate({
            left: -290
        }).css('border-right', '10px solid #f25a2b');
    });

    $('.feedback-popup').on('click', function() {
        if ($(this).css('left') == '-290px') {
            $(this).animate({
                left: 0
            }).css('border-right', '1px solid #dce4e9');
        }
    });
});
$(function() {

    $(".progress").each(function() {

        var value = $(this).attr('data-value');
        var left = $(this).find('.progress-left .progress-bar');
        var right = $(this).find('.progress-right .progress-bar');

        if (value > 0) {
            if (value <= 50) {
                right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
            } else {
                right.css('transform', 'rotate(180deg)')
                left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
            }
        }

    })

    function percentageToDegrees(percentage) {

        return percentage / 100 * 360

    }

});



/*---validation----*/
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

/*scroll to top*/
if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function() {
        backToTop();
    });
    $('#back-to-top').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 100);
    });
}