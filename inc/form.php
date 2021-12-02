<div class="lead-form">
    <div class="text-center text-uppercase form-title"><?php echo $language['form_title'][$selected_language] ?></div>
    <form class="register-form">
        
        <div class="message"></div>
        <input type="text" name="full_name" 
            class="form-control" id="input-name" 
            aria-describedby="name" placeholder="<?php echo $language['form_name'][$selected_language] ?>" required>
        
        <input type="email" name="email" class="form-control" 
            id="input-email" aria-describedby="Email" placeholder="Email" required>

        <input type="tel" name="phone" class="form-control" 
            id="input-phone" aria-describedby="Điện thoại" placeholder="<?php echo $language['form_phone'][$selected_language] ?>" required>
    
        <div class="">
            <button type="button" class="btn-main btn-send"><span><?php echo $language['form_send'][$selected_language] ?></span></button>
        </div>

    </form>
</div>