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
    AOS.init();
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


    $('.btn-send').on('click', function(e){
        var form = $(this).closest('form');
        e.preventDefault();
        var data = $(form).serializeArray();

        data.push({ name: 'utm_source', value: getCookie('utm_source') });
        data.push({ name: 'utm_medium', value: getCookie('utm_medium') });
        data.push({ name: 'utm_campaign', value: getCookie('utm_campaign') });
        data.push({ name: 'utm_content', value: getCookie('utm_content') });
        data.push({ name: 'gclid', value: getCookie('gclid') });

        $(form).find('.message').html('');

        jQuery.ajax({
            url: 'https://lead.chinmedia.vn/api/v1/lead/theriverthuthiem',
            method: 'POST',
            data: data,
            beforeSend: function(){
                $('body').addClass('loading');
            },
            success: function( res ){
                $('body').removeClass('loading');
                if( res.success ){
                    $(form)[0].reset();
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event' : 'successRegistration',
                        'phone' : res.phone
                    });
                    window.location.href = '/success.php';
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



    $('#slide-bottom').slick({
        infinite: false ,
        slidesToShow: 1 ,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        arrows: false
    });


    
});