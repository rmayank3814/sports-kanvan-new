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

// function addNotification(type, text) {
//     // create the DIV and add the required classes
//     const newNotification = document.createElement('div');
//     newNotification.classList.add('notification', `notification-${type}`);

//     const innerNotification = `
// 		<strong>${type}:</strong> ${text}
// 	`;

//     // insert the inner elements
//     newNotification.innerHTML = innerNotification;

//     // add the newNotification to the container
//     notificationContainer.appendChild(newNotification);

//     return newNotification;
// }

// function removeNotification(notification) {
//     notification.classList.add('hide');

//     // remove notification from the DOM after 0.5 seconds
//     setTimeout(() => {
//         notificationContainer.removeChild(notification);
//     }, 500);
// }

// adding and removing notification for DEMO purposes
// const info = addNotification(NOTIFICATION_TYPES.INFO, 'Info text added');
// setTimeout(() => {
//     removeNotification(info);
// }, 5000);

// $(document).on('click', '#closeNotify', function() {
//     $(".notification").fadeOut(500);
//     // return false;
// });

$(document).on('click', '#closeNotify', function() {
    $(".notification").fadeOut(500);
    return false;
    // const swalWithBootstrapButtons = Swal.mixin({
    //     customClass: {
    //         confirmButton: 'btn btn-success',
    //         cancelButton: 'btn btn-danger'
    //     },
    //     buttonsStyling: false
    // })

    // swalWithBootstrapButtons.fire({
    //     title: 'Are you sure?',
    //     text: "You won't be able to revert this!",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonText: 'Yes, delete it!',
    //     cancelButtonText: 'No, cancel!',
    //     reverseButtons: true
    // }).then((result) => {
    //     if (result.value) {
    //         $(".notification").fadeOut(500);
    //         // return false;
    //     } else if (
    //         /* Read more about handling dismissals below */
    //         result.dismiss === Swal.DismissReason.cancel
    //     ) {
    //         swalWithBootstrapButtons.fire(
    //             'Cancelled',
    //             'Your imaginary file is safe :)',
    //             'error'
    //         )
    //     }
    // })
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

$(function() {
    $('.testi3').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            1024: {
                items: 3
            }
        }
    })
});

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
/*======Donation========*/
$(document).ready(function() {
    $(document).on('click', '.add-row', function(e) {
        e.preventDefault();
        var markup = '<div class="row"><div class="col-md-6"><div class="form-group"> <label class="label-input" for="amount">Amount <span class="text-danger font-weight-medium">*</span></label><input type="text" name="amount" id="amount" class="form-control amount" placeholder="Enter Amount" value="" required=""><div class="invalid-feedback">Valid amount is required.</div></div></div><div class="col-md-5"><div class="form-group"> <label class="label-input" for="designation">Designation <span class="text-danger font-weight-medium">*</span></label><input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="" required=""> <div class="invalid-feedback"> Valid designation is required. </div></div></div><div class="col-md-1 action" style="padding-top:45px"><a class="add-row" href="" data-toggle="tooltip" data-placement="top" title="would you like to add one more?"><span class="fa fa-plus"></span></a> <a class="delete-row" href="" data-toggle="tooltip" data-placement="top" title="would you like to remove this row?"><span class="fa fa-minus"></span></a> </div></div>';
        $("#paymentRow").append(markup);
    });

    $(document).on('keyup', '.amount', function() {
        var t_a = 0;
        var amount = $('.amount');

        amount.each(function() {
            var temp_amount = $(this).val();
            if (!isNaN(temp_amount) && temp_amount != '') {
                t_a += parseInt($(this).val());
            }
        });

        // $('#ta').text('$' + t_a + '.00');
        $('#ta').val('$' + t_a + '.00');
    })

    // Find and remove selected table rows
    $(document).on('click', '.delete-row', function(e) {
        e.preventDefault();
        var row_count = $("#paymentRow").children('.row').length;
        if (row_count > 1) {
            $(this).parents(".row").remove();
            var t_a = 0;
            var amount = $('.amount');

            amount.each(function() {
                var total = $(this).val();
                if (!isNaN(total) && total != '') {
                    t_a += parseInt($(this).val());
                }
            });

            // $('#ta').text('$' + t_a + '.00');
            $('#ta').val('$' + t_a + '.00');
        } else {
            $("#paymentRow").find('.delete-row').remove();
        }


    });
});
/*---counter-----*/
// $(document).ready(function() {

//     $('.counter').each(function() {
//         $(this).prop('Counter', 0).animate({
//             Counter: $(this).text()
//         }, {
//             duration: 4000,
//             easing: 'swing',
//             step: function(now) {
//                 $(this).text(Math.ceil(now));
//             }
//         });
//     });

// });

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