<section class="contact">
    <div class="container">
        <div class="d-lg-flex align-items-center">
            <div class="col-lg-6 order-lg-2"> <img class="img-fluid" src="./assets/images/Group-75.png" alt=""></div>
            <div id="zone-register" class="contact__form col-lg-6 order-lg-1 mt-lg-0 mt-4">
                <div class="contact__form--title">Nhập thông tin của bạn để chúng tôi liên lạc với bạn sớm nhất.</div>
                <form class="register-form">
                    <input type="hidden" name="campaign_name" value="<?php echo $campaign ?>">
                    <div id="message"></div>

                    <div class="input-group">
                        <img src="./assets/images/icon/family-icon.svg" alt="">
                        <input type="text" 
                            name="full_name" 
                            class="form-control" id="inputName" aria-describedby="name" placeholder="Nhập tên của bạn (*)" required>
                    </div>
                    <div class="input-group">
                        <img src="./assets/images/icon/mail-icon.svg" alt="">
                        <input type="email" name="email" 
                            class="form-control" id="inputEmail" aria-describedby="message" placeholder="Nhập email của bạn" required>
                    </div>
                    <div class="input-group">
                        <img src="./assets/images/icon/phone-icon.svg" alt="">
                        <input type="tel" 
                            name="phone"
                            class="form-control" id="inputTel" aria-describedby="tel" placeholder="Nhập số điện thoại của bạn (*)" required>
                    </div>
                    <div class="input-group">
                        <img src="./assets/images/icon/hotel-icon.svg" alt="">
                        <select name="register_city" class="form-select form-select-lg" 
                            id="type-question-select2" aria-label=".form-select-lg example">
                 
                            <option class="disable-opt" value="" selected disabled hidden>Nơi đăng ký khám (*)</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="HCM">Hồ Chí Minh</option>
                            <option value="Nha Trang">Nha Trang</option>
                            <option value="Vinh">Vinh</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            </select>

                    </div>
                    <div class="btn-send d-flex justify-content-center"><button 
                        type="button" class="btn btn-style"><span>Gửi</span></button></div>
                </form>
            </div>

        </div>
    </div>
</section>