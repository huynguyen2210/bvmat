<?php
    $doctors = [
        [
            'img' => './assets/images/BS-Ket.png',
            'name' => 'BS CKII Trần Văn Kết',
            'bv' => 'Mắt Sài Gòn Cần Thơ',
            'bio' => '30 năm kinh nghiệm, chuyên gia nhãn khoa hàng đầu ĐBSCL',
        ],
        [
            'img' => './assets/images/BS-Huong.png',
            'name' => 'Ths BS Bùi Cẩm Hương',
            'bv' => 'Mắt Sài Gòn Đường Láng',
            'bio' => '11 năm kinh nghiệm, phẫu thuật trên 20.000 ca',
        ],
        [
            'img' => './assets/images/BS-Minh.png',
            'name' => 'BS CKII Trương Công Minh',
            'bv' => 'Mắt Sài Gòn Lê Thị Riêng',
            'bio' => '25 năm kinh nghiệm, phẫu thuật trên 50.000 ca',
        ],
        [
            'img' => './assets/images/BS-Tuong.png',
            'name' => 'BS CKII Trần Thị Hồng Tường',
            'bv' => 'Đa khoa Mắt Sài Gòn',
            'bio' => '18 năm kinh nghiệm, phẫu thuật trên 30.000 ca',
        ],
        [
            'img' => './assets/images/BS-Cong.png',
            'name' => 'BS CKII Lê Duy Công',
            'bv' => '<br/>',
            'bio' => '9 năm kinh nghiệm, phẫu thuật trên 20.000 ca',
        ],
        [
            'img' => './assets/images/BS-Cuong.png',
            'name' => 'Ths.BS CKI Lê Ng. Huy Cường',
            'bv' => 'Mắt Sài Gòn Ngô Gia Tự',
            'bio' => '17 năm kinh nghiệm, phẫu thuật trên 20.000 ca',
        ],
        [
            'img' => './assets/images/BS-Lan.png',
            'name' => 'Ths. BS Ngô Lan',
            'bv' => 'Mắt Sài Gòn Nguyễn Du',
            'bio' => '11 năm kinh nghiệm, Thạc sĩ nhãn khoa loại giỏi',
        ],
        [
            'img' => './assets/images/BS-Trung.png',
            'name' => 'BS CKII Nguyễn Nam Trung',
            'bv' => '<br/>',
            'bio' => '18 năm kinh nghiệm, phụ trách chuyên môn tại nhiều BV trên cả nước',
        ],
    ];
?>

<section class="humanResource" id="hr-doctor">
    <div class="container">
        <div class="main-content">Đội ngũ Bác sĩ đầu ngành</div>
        <div class="main-content2">Bác sĩ Giám đốc/ Giám đốc chuyên môn/ Trưởng khoa phẫu thuật khúc xạ được đào tạo bài bản tại Việt Nam và nước ngoài, nhiều năm kinh nghiệm, phẫu thuật trên 200.000 ca.</div>
        <div class="slider">
           

            <?php foreach ($doctors as $doctor): ?>
           
            <div class="slider__item">
                <div class="slider__item--img">
                    <span class="slider-mainbg"><span></span></span>
                    <img class="img-fluid" src="<?php echo $doctor['img'] ?>" alt="">
                </div>
                <div class="slider__item--text">
                    <div class="sub-content doc-name text-center"><?php echo $doctor['name'] ?></div>
                    <div class="sub-content text-center mb-3"><?php echo $doctor['bv'] ?></div>
                    <div class="sub-content-18 text-black">
                    <?php echo $doctor['bio'] ?>
                    </div>
                </div>
            </div>

            <?php endforeach ?>

        </div>
    </div>
</section>