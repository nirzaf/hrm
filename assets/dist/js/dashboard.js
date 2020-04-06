$(document).ready(function () {
    "use strict"; // Start of use strict

    //back to top
    $('body').append('<div id="toTop" class="btn back-top"><span class="ti-arrow-up"></span></div>');
    $(window).on("scroll", function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on("click", function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    //lobipanel
    $('.lobidrag').lobiPanel({
        sortable: true,
        editTitle: {
            icon: 'ti-pencil'
        },
        unpin: {
            icon: 'ti-move'
        },
        reload: {
            icon: 'ti-reload'
        },
        minimize: {
            icon: 'ti-minus',
            icon2: 'ti-plus'
        },
        close: {
            icon: 'ti-close'
        },
        expand: {
            icon: 'ti-fullscreen',
            icon2: 'ti-fullscreen'
        }
    });

    $('.lobidisable').lobiPanel({
        reload: false,
        close: false,
        editTitle: false,
        sortable: true,
        unpin: {
            icon: 'ti-move'
        },
        minimize: {
            icon: 'ti-minus',
            icon2: 'ti-plus'
        },
        expand: {
            icon: 'ti-fullscreen',
            icon2: 'ti-fullscreen'
        }
    });
});