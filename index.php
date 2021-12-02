<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Trang Chủ - theriverthuthiem';
    $description = 'Năm 2009, chúng tôi mang City Garden – dự án dân cư đẳng cấp với phong cách nghỉ dưỡng sang trọng bậc nhất đến TP.Hồ Chí Minh. Qua một thập kỷ ghi dấu ấn trên nền trời thành phố, City Garden trở thành cái tên được yêu mến bởi nhiều cư dân trong nước và …';
    $keyword = 'theriverthuthiem, the river thu thiem'; 
    $image = '';
    $url = 'https://theriverthuthiem.vn/';
    $GTM_ID = '';
    $FB_PIXEL_ID = '';
    $selected_language = isset($_GET['language']) ? $_GET['language'] : 'vi'; 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="keywords" content="<?php echo $keyword ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    
    <meta property="og:image" content="<?php echo $image ?>" />
    <meta property="og:image:secure_url" content="<?php echo $image ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="583" />
    <meta property="og:image:type" content="image/jpg" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant&display=swap" rel="stylesheet">

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.min.css" />
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="./assets/css/slick-theme.min.css" />
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/style.min.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo $GTM_ID ?>');</script>
    <!-- End Google Tag Manager -->
  
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?php echo $FB_PIXEL_ID ?>');
    fbq('track', 'PageView');
    </script>

</head>

<body>

    <noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=<?php echo $FB_PIXEL_ID ?>&ev=PageView&noscript=1"/></noscript>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $GTM_ID ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="page">
        <?php require_once("inc/header.php") ?>
        <main>

            <?php require_once("inc/banner.php") ?>
            <?php require_once("inc/block1.php") ?>
            <?php require_once("inc/block2.php") ?>
            <?php require_once("inc/block3.php") ?>
            <?php require_once("inc/block4.php") ?>
            <?php require_once("inc/block5.php") ?>
        </main>
        <?php require_once("inc/footer.php") ?> 
    </div><!-- end #page -->
    <div id="loading" class="d-flex align-items-center justify-content-center">
        <img src="images/loading.gif" alt="">
    </div>
    <?php require_once("inc/float_button.php") ?>
 
    <script type="text/javascript" src="./assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./assets/js/popper.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/js/slick.min.js"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>

</html>