<?php 
$slides = [
    'img' => '/images/slideform.png'
] 
?>
<div id="block4">
    <div class="container">
        <div id="slide-bottom" class="">
            <?php foreach($slides as $slide): ?>
                <img src="<?php echo $slide ?>"/>
            <?php endforeach?>
        </div>
        <div id="bottom-form">
            <?php require_once("inc/form.php") ?>
        </div>
        
    </div>
</div>