<?php 
$slides = [
    '/images/slideform.png',
    '/images/slideform1.jpg',
    '/images/slideform2.jpg',
    '/images/slideform3.jpg',
    '/images/slideform4.jpg',
] 
?>
<div id="block5">
    <div class="container">
        <div id="slide-bottom" data-aos="fade-in" data-aos-duration="2000" class="">
            <?php foreach($slides as $slide): ?>
                <div>
                    <img class="img-fluid" src="<?php echo $slide ?>"/>
                </div>
            <?php endforeach?>
        </div>
        <div id="bottom-form" id="slide-bottom">
            <?php include("inc/form.php") ?>
        </div>
        
    </div>
</div>