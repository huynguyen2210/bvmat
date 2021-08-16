$(document).ready(function() {
    $('.select2-box').select2({
        minimumResultsForSearch: -1,
        templateResult: function(option) {
            if (option.element && (option.element).hasAttribute('hidden')) {
                return null;
            }
            return option.text;
        }
    });

    $('.slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        // prevArrow: $('.btn-prev'),
        // nextArrow: $('.btn-next'),
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});