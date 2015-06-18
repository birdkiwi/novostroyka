(function( $ ) {
    $.fn.btnUp = function() {
        var $btn = $('<a href="" class="to-top-scroll">наверх</a>');
        $('body').append($btn);
        $btn.click(function(){
            $('html,body').animate({
                scrollTop: 0
            }, 600);

            return false;
        });

        function btnState() {
            var scrolled = $(window).scrollTop();
            if(scrolled > 100) {
                $btn.addClass('active');
            } else {
                $btn.removeClass('active');
            }
        }

        btnState();

        $(window).scroll(function(){
            btnState();
        });
    };
})(jQuery);

(function( $ ) {
    $.fn.multipleCustomSelect = function() {
        var selector = ".multiple-custom-select";
        $(this).each(function(){
            var customSelect = $(this);
            var addButton = $(this).find(selector + "-add");
            var box = $(this).find(selector + "-box");
            var boxSubmit = $(this).find("[type='submit']");
            var text = $(this).find(selector + "-text");
            var textChosen = $(this).find(selector + "-text-chosen");
            var chosenValue = $(this).find(selector + "-text-chosen-value");
            var chosenClear = $(this).find(selector + "-clear");
            var checkboxes = $(this).find("input[type='checkbox']");

            function updateCheckboxes() {
                var count = 0;
                checkboxes.each(function() {
                    if ($(this).is(":checked")) {
                        count++;
                    }
                });

                if (count) {
                    textChosen.show();
                    text.hide();
                } else {
                    textChosen.hide();
                    text.show();
                }

                chosenValue.html(count);
            }

            updateCheckboxes();

            function hideEvent(e) {
                if(!$(e.target).closest(customSelect).length) {
                    box.fadeToggle('fast');
                    $(document).off('click', 'body', hideEvent);
                }
            }

            $([text, addButton]).each(function(){
                $(this).click(function(){
                    box.fadeToggle('fast');
                    $(document).on('click', 'body', hideEvent);
                    return false;
                });
            });

            boxSubmit.click(function(){
                box.fadeOut('fast');
                $(document).off('click', 'body', hideEvent);
                return false;
            });

            checkboxes.click(function(){
                updateCheckboxes()
            });

            chosenClear.click(function(){
                checkboxes.prop('checked', false);
                updateCheckboxes();
                return false;
            });
        });
    };
})(jQuery);

$.fn.spin.presets.small = {
    lines: 8 // The number of lines to draw
    , length: 6 // The length of each line
    , width: 4 // The line thickness
    , radius: 8 // The radius of the inner circle
    , scale: 1 // Scales overall size of the spinner
    , corners: 1 // Corner roundness (0..1)
    , opacity: 0.25 // Opacity of the lines
    , rotate: 0 // The rotation offset
    , direction: 1 // 1: clockwise, -1: counterclockwise
    , speed: 1 // Rounds per second
    , trail: 60 // Afterglow percentage
    , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
    , zIndex: 2e9 // The z-index (defaults to 2000000000)
    , className: 'spinner' // The CSS class to assign to the spinner
    , top: '50%' // Top position relative to parent
    , left: '50%' // Left position relative to parent
    , shadow: false // Whether to render a shadow
    , hwaccel: false // Whether to use hardware acceleration
    , position: 'absolute' // Element positioning
};

function updateScrollMenu() {
    //Disabled for touch devices
    if (!Modernizr.touch) {
        if ( $(window).scrollTop() > 1 && !($('.js-fixed-header').hasClass('fixed'))){
            $('.js-fixed-header').addClass('fixed');
            $('body').addClass('fixed-header');
        } else if ($(window).scrollTop() < 1) {
            $('.js-fixed-header').removeClass('fixed');
            $('body').removeClass('fixed-header');
        }
    }
}

(function( $ ) {
    $.fn.horizontalSelect = function() {
        this.each(function(){
            var buttons = $(this).find('.btn');
            var input = $(this).siblings('input[type="hidden"]');

            function updateValue() {
                var value = [];

                buttons.each(function(){
                    if ($(this).hasClass('active')) {
                        value.push($(this).data('value'));
                    }
                });

                input.val(value.toString());
            }

            buttons.click(function(){
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');

                    if ($(this).parent().next().length) {
                        $(this).parent().next().removeClass('next-to-active');
                    }
                } else {
                    $(this).addClass('active');

                    if ($(this).parent().next().length) {
                        $(this).parent().next().addClass('next-to-active');
                    }
                }

                updateValue();

                return false;
            });

            updateValue();
        });
    };
})(jQuery);

$(document).on('click', '[data-load-more]', function(){
    var btn = $(this);
    var parent = $(this).parent();
    var url = btn.data('load-more');
    var target = btn.data('load-more-target');

    parent.spin('small');
    btn.addClass('loading');

    $.ajax({
        type: "GET",
        url: url,
        success: function(data) {
            setTimeout(function(){
                $(target).append($(data));
                parent.spin(false);
                btn.removeClass('loading');
            }, 1000);
        }
    });
});

$(document).on('click', '.building-block-overview-map-expand', function(){
    if (!$(this).hasClass('active')) {
        $(this).addClass('active');
        $('.building-block-overview').addClass('map-active');
    } else {
        $(this).removeClass('active');
        $('.building-block-overview').removeClass('map-active');
    }

    $(".building-block-overview-map")
        .on("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd",
        function(e){
            myMap.container.fitToViewport();
            $(this).off(e);
        });

    return false;
});

$(document).on('click', '.main-header-toggler-wrap', function() {
    $(this).toggleClass('active');
    $('.main-header-fixed').toggleClass('open');

    return false;
});

$(document).ready(function(){
    $("[data-btn-up]").btnUp();
    $(".multiple-custom-select").multipleCustomSelect();
    $(".js-rooms-group").horizontalSelect();

    $(".js-validate").each(function(){
        $(this).validate({
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
                if ($(element).data('error-placeholder')) {
                    $(element).attr('placeholder', $(element).data('error-placeholder'));
                }
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
                if ($(element).data('error-placeholder')) {
                    $(element).attr('placeholder', $(element).data('default-placeholder'));
                }
            }
        });
    });

    $('[data-masked]').each(function(){
        var mask = $(this).data('masked');
        $(this).mask(mask);
    });

    $(".js-numeric-input").numericInput();

    $('.js-input-slider').slider();

    updateScrollMenu();
});

$(window).scroll(function () {
    updateScrollMenu();
});