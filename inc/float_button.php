<!-- <div id="float-button">
    <div class="banner__popup d-flex flex-column justify-content-center align-items-center">
        <div class="mb-3">
            <a href="tel:1900552553">
                <img src="./assets/images/phone-popup.png" alt="">
            </a>
        </div>
    </div>
</div> -->

<a href="tel:1900555553" rel="nofollow">
    <div class="mh-alo-phone" style="bottom: 90px;">
    <div class="animated infinite zoomIn mh-alo-ph-circle"></div>
    <div class="animated infinite pulse mh-alo-ph-circle-fill"></div>
    <div class="animated infinite tada mh-alo-ph-img-circle"></div>
    </div>
</a>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v9.0'
    });
};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
attribution=setup_tool
page_id="1543750059200286"
logged_in_greeting="Cảm ơn bạn đã nhắn tin cho chúng tôi. Xin vui lòng đợi trong giây lát! "
logged_out_greeting="Cảm ơn bạn đã nhắn tin cho chúng tôi. Xin vui lòng đợi trong giây lát! ">
</div>
