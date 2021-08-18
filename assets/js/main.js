function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


$(document).ready(function() {
    var modalThankYou = new bootstrap.Modal(document.getElementById('popup-thankyou'))
    var modalRegistered = new bootstrap.Modal(document.getElementById('popup-registered'))

    // Store cookie
    var url = new URL(window.location.href);

    if ( url.searchParams.get('utm_source') != null ) {
        setCookie('utm_source', url.searchParams.get('utm_source') , 30 );
    }
    if ( url.searchParams.get('utm_medium') != null ) {
        setCookie('utm_medium', url.searchParams.get('utm_medium') , 30 );
    }
    if ( url.searchParams.get('utm_campaign') != null ) {
        setCookie('utm_campaign', url.searchParams.get('utm_campaign') , 30 );
    }
    if ( url.searchParams.get('utm_content') != null ) {
        setCookie('utm_content', url.searchParams.get('utm_content') , 30 );
    }
    if ( url.searchParams.get('gclid') != null ) {
        setCookie('gclid', url.searchParams.get('gclid') , 30 );
    }


    $('.register-form .btn-send').on('click', function(e){
        var form = $(this).closest('form');
        e.preventDefault();
        var data = $(form).serializeArray();

        data.push({ name: 'utm_source', value: getCookie('utm_source') });
        data.push({ name: 'utm_medium', value: getCookie('utm_medium') });
        data.push({ name: 'utm_campaign', value: getCookie('utm_campaign') });
        data.push({ name: 'utm_content', value: getCookie('utm_content') });
        data.push({ name: 'gclid', value: getCookie('gclid') });

        $('.register-form .message').html('');

        jQuery.ajax({
  
            url: 'https://adx.chinmedia.vn/api/v1/msg',
            method: 'POST',
            data: data,
            beforeSend: function(){
                $('body').addClass('loading');
            },
            success: function( res ){
                $('body').removeClass('loading');
                if( res.success ){
                    $(form)[0].reset();
                    modalThankYou.show();
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event' : 'successRegistration',
                        'phone' : res.phone
                    });

                }else if( res.code == 'USER_REGISTERED' )  {
                    
                    
                    $('#popup-registered #campaign-registered').html( res.marketing_program );
                    modalRegistered.show();

                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event' : 'duplicateRegistration',
                        'phone' : res.phone
                    });
                }
             
                // $('#message').addClass('alert alert-success').html('Cám ơn bạn đã gửi dữ liệu thành công');
            },
            error: function( err ){
                $('body').removeClass('loading');
                for( var key in err.responseJSON ){
                    var newkey = key.split('.').join('-');
                    $(form).find('[name='+newkey+']').next('label').remove();
                    $(form).find('[name='+newkey+']').after('<label class="error" for="">'+err.responseJSON[key]+'</label>');
                }
               
            }
        })

    })

    
    $(".nav-link").click(function() {
        $(".close-icon").trigger("click");
    });

    $('.slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
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
                    // arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});