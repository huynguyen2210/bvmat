<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Siêu ưu đãi phẫu thuật Laser tại Bệnh viện Mắt Sài Gòn';
    $description = 'Giá giảm cực sâu, không đâu sánh bằng. Miễn phí khám 750k, giảm đến 30% phí phẫu thuật laser khi ghép nhóm. Đặc biệt giảm sâu 15 triệu khi phẫu thuật Femto.';
    $keyword = 'Phẫu thuật Laser, phương pháp phẫu thuật Laser, phẫu thuật Femto, Bệnh viện Mắt Sài Gòn'; 
    $image = 'http://lasik.matsaigon.com/images/share.jpg';
    $campaign = 'KM tháng 8-2021';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="keywords" content="<?php echo $keyword ?><">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url" content="http://lasik.matsaigon.com/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    
    <meta property="og:image" content="<?php echo $image ?>" />
    <meta property="og:image:secure_url" content="<?php echo $image ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="583" />
    <meta property="og:image:type" content="image/jpg" />
    <!-- <meta property="fb:app_id" content="2355408004490771" /> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WJZDLT6');</script>
    <!-- End Google Tag Manager -->
  
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WMZ8BB4');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '498588591242638');
    fbq('track', 'PageView');
    </script>

</head>

<body>

    <noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=498588591242638&ev=PageView&noscript=1"/></noscript>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJZDLT6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WMZ8BB4"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    <?php require_once("inc/header.php") ?>
    <main>
   
        <?php require_once("inc/modal.php") ?>
        <?php require_once("inc/banner.php") ?>
        <?php require_once("inc/surgical.php") ?>
        <?php require_once("inc/review.php") ?>
        <?php require_once("inc/features.php") ?>
        <?php require_once("inc/doctor.php") ?>
        <?php require_once("inc/equipment.php") ?>
        <?php require_once("inc/question.php") ?>
        <?php require_once("inc/contact.php") ?>
        <?php require_once("inc/footer.php") ?>


    </main>

    <div id="loading" class="d-flex align-items-center justify-content-center">
        <img src="images/loading.gif" alt="">
    </div>
    <?php require_once("inc/float_button.php") ?>

 
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>