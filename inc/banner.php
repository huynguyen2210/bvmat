<section class="banner">
    <div><img class="img-fluid" src="./assets/images/banner-lasik@2x.png" alt=""></div>
    <div class="container">
        <div class="banner__form">
            <div class="banner__form--title">Đăng ký lịch khám</div>
            <form class="register-form">
                <input type="hidden" name="campaign_name" value="<?php echo $campaign ?>">
                <div class="message"></div>

                <input type="text" name="full_name" 
                    class="form-control" id="inputName" 
                    aria-describedby="name" placeholder="Họ và Tên (*)" required>
                
                <input type="tel" name="phone" class="form-control" 
                    id="inputTel" aria-describedby="tel" placeholder="Điện thoại (*)" required>

                <input type="email" name="email" class="form-control" 
                    id="inputAddr" aria-describedby="address" placeholder="Email" required>
                
                <div class="form-group styled-select">
                    <select name="register_city" class="form-select" aria-label="Default select example">
                        <option class="disable-opt" value="" selected disabled hidden>Nơi đăng ký khám (*)</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="HCM">Hồ Chí Minh</option>
                        <option value="Nha Trang">Nha Trang</option>
                        <option value="Vinh">Vinh</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center">
                    <button
                        type="button" 
                        class="btn-send btn btn-style"><span>ĐĂNG KÝ NGAY</span></button>
                </div>

            </form>
        </div>
    </div>

</section>
