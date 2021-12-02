<div id="block3">
    <div class="container">
        <div class="">
            <h3 data-aos="zoom-in" data-aos-duration="1500" class="title-2 text-center">
                <?php if($selected_language == 'vi') : ?>
                    THÔNG TIN<br/>DỰ ÁN
                <?php else: ?>
                    Project <br/> Information
                <?php endif ?>
               
            </h3>
        </div>

        <div class="mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p data-aos="zoom-in" data-aos-duration="1500" class="block3-desc">
                    <?php if($selected_language == 'vi') : ?>
                        Tọa lạc tại vành đai 1 khu đô thị Thủ Thiêm, liền kề trung tâm thành phố, tiện nghi và hiện đại, 
                        mang dáng dấp một Phố Đông - Thượng Hải ngay trong lòng Sài Gòn, The River đang thiết lập chuẩn mới
                        về phong cách sống sang trọng. 
                        <?php else: ?>
                            With a prime location in the heart of the future CBD, in belt 1 of Thu Thiem which is likened 
                            to Shanghai's Pudong and direct access to the Saigon River, The River is an outstanding 
                            project that boasts stellar connection. 
                        <?php endif ?>
                    </p>
                </div>
            </div>
        </div>

        <?php
            $arrs = [
                [
                    'image' => '/images/info1.jpg',
                    'title' => [
                        'vi' => 'Vị trí',
                        'en' => 'Location'
                    ],
                    'desc' => [
                        'vi' => 'Tọa lạc tại trung tâm bán đảo Thủ Thiêm, tầm nhìn trực diện ra công viên và sông Sài Gòn.',
                        'en' => 'Located in the heart of Thu Thiem peninsula, The River enjoys direct views to the Saigon River and the river park'
                    ],
                    'icon' => '/images/icon-like.svg',
                    'animate' => 'fade-up'
                ],
                [
                    'image' => '/images/info2.jpg',
                    'title' => [
                        'vi' => 'Điều kiện bàn giao',
                        'en' => 'Hand-over Condition'
                    ],
                    'desc' => [
                        'vi' => 'Đầy đủ nội thất sang trọng, sẵn sàng dọn vào ở ngay hoặc cho thuê.',
                        'en' => 'Fully furnished, ready to move-in or rent-out apartments'
                    ],
                    'icon' => '/images/icon-like.svg',
                    'animate' => 'fade-down'
                ],
                [
                    'image' => '/images/info3.jpg',
                    'title' => [
                        'vi' => 'Thiết kế nội thất',
                        'en' => 'Interior Design'
                    ],
                    'desc' => [
                        'vi' => 'Đa dạng phong cách thiết kế nội thất để lựa chọn.',
                        'en' => 'Diverse interior design styles to choose'
                    ],
                    'icon' => '/images/icon-like.svg',
                    'animate' => 'fade-up'
                ],
                [
                    'image' => '/images/info4.jpg',
                    'title' => [
                        'vi' => 'Unit Plan',
                        'en' => 'Location'
                    ],
                    'desc' => [
                        'vi' => 'Bố trí mặt bằng tối ưu cho công năng sử dụng và thẩm mỹ.',
                        'en' => 'Optimal floor plan for both functional uasability and aesthetics.'
                    ],
                    'icon' => '/images/icon-like.svg',
                    'animate' => 'fade-down'
                ]
            ]
        ?>

        <div class="mt-5">
            <div class="row align-items-stretch">
                <?php foreach($arrs as $item): ?>
                <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
                    <div class="p-item " data-aos="<?php echo $item['animate'] ?>" data-aos-duration="1500">
                        <figure>
                            <img src="<?php  echo $item['image'] ?>" />
                        </figure>
                        <h3 class="title"><?php echo $item['title'][$selected_language] ?></h3>
                        <div class="p-desc">
                            <?php echo $item['desc'][$selected_language] ?>
                        </div>
                        <div class="p-icon">
                            <img src="<?php echo $item['icon'] ?>" />
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
  
            </div>
        </div>

        <div class="mt-5 text-center">
            <a href="#banner" class="scrol-to btn-main">
            <?php if($selected_language == 'vi') : ?>
                Nhận bảng giá ngay
            <?php else: ?>
                GET PRICE LIST NOW
            <?php endif ?>
                
            </a>
        </div>

    </div>
</div>