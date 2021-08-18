<?php
    $equipment = [
        [
            'image' => './assets/images/equip1.png',
            'name' => 'VISUMAX',
            'origin' => 'Carl Zeiss - Đức',
            'info' => 'Độc quyền công nghệ ReLEx SMILE. Phiên bản cập nhật 2021, hiện đại nhất thế giới.',
        ],
        [
            'image' => './assets/images/equip2.png',
            'name' => 'WAVELIGHT EX500',
            'origin' => 'Alcon - Thụy Sĩ',
            'info' => 'Công nghệ laser không chạm Streamlight, tính năng theo dõi mắt 6-sigma, hệ thống đo độ dày giác mạc trực tiếp.',
        ],
        [
            'image' => './assets/images/equip3.png',
            'name' => 'SCHWIND AMARIS 1050RS',
            'origin' => 'Schwind - Đức',
            'info' => 'Công nghệ laser không chạm Smart-surfACE, điều trị chỉ 1,3 giây cho mỗi độ cận, hệ thống theo dõi mắt không độ trễ.',
        ],
        [
            'image' => './assets/images/equip4.png',
            'name' => 'PENTACAM HR',
            'origin' => 'Oculus - Đức',
            'info' => 'Máy khảo sát bản đồ giác mạc hiện đại nhất. Phát hiện, loại trừ tối đa các nguy cơ trong và sau phẫu thuật.',
        ],

    ];
?>
<section class="equipment" id="special-equip">
    <div class="container">
        <div class="main-content text-center">MÁY MÓC VÀ THIẾT BỊ</div>
        <div class="equipmentGrid">
            <?php foreach ($equipment as $item): ?>
            <div class="equipmentGrid__item">
                <div class="equipmentGrid__item--img"><img src="<?php echo $item['image'] ?>" alt=""></div>
                <div class="equipmentGrid__item--text">
                    <div class="sub-content equip-name"><?php echo $item['name'] ?></div>
                    <div class="sub-content equip-origin"><?php echo $item['origin'] ?></div>
                    <div class="sub-content-18 equip-info text-black"><?php echo $item['info'] ?></div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>