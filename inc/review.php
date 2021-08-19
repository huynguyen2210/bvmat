<?php
$slides = [
    [
        'image' => './assets/images/review.png',
        'name' => 'Ca sĩ Nguyên Hà',
        'review' => 'Xuất phát là sinh viên kiến trúc, cặp kiếng cận đã gắn bó suốt thời sinh viên của Hà. Từ khi chọn con đường ca hát, cặp kính mang đến nhiều bất tiện cho Hà mỗi lần make up hay lúc đứng dưới ánh đèn sân khấu. Qua sự giới thiệu của
        đồng nghiệp đã từng mổ cận, Hà đã tin tưởng và lựa chọn Bệnh viện Mắt Sài Gòn để phẫu thuật xóa cận với phương pháp SMILE. Chỉ sau 3 ngày nghỉ ngơi sau mổ, thị lực của Hà đã phục hồi rất tốt ở mức 10/10 rồi. Cảm ơn Mắt Sài
        Gòn đã giúp Hà lấy lại thị lực hoàn hảo nhất.',
    ],
    [
        'image' => './assets/images/review.png',
        'name' => 'Ca sĩ Lynk Lee',
        'review' => 'Bị cận từ năm lớp 8, đến giờ đã 20 năm Linh sống chung cùng cặp kính cận. Vì tính chất công việc, Linh phải dùng lens nhưng mắt bị khô. 
        Qua sự giới thiệu của bạn bè đã từng mổ cận, Linh tin tưởng chọn Bệnh viện Mắt Sài Gòn và phẫu thuật với phương pháp Femto vì giác mạc của Linh mỏng. 
        Nguyện vọng có được một đôi mắt sáng khỏe đã trở thành hiện thực. Linh đã tháo kính thành công, tự tin tham gia Gương Mặt Thân Quen. Quan trọng nhất là được nhìn thấy khuôn mặt yêu thương của những người hâm mộ.
        ',
    ],
    [
        'image' => './assets/images/review.png',
        'name' => 'VĐV Lâm Quang Nhật',
        'review' => 'Là VĐV ở 3 môn phối hợp Bơi Đạp Chạy (Triathlon), mắt cận thị khiến mình gặp rất nhiều khó khăn trong tập luyện lẫn thi đấu. 
        May mắn khi tháng 10/2020 vừa rồi, mình được các anh chị trong nhóm Triathlon giới thiệu đến phương pháp mổ cận ReLEx SMILE tại Mắt Sài Gòn. 
        Sau khi thăm khám cùng bác sĩ, mình cảm nhận SMILE đúng là phương pháp sinh ra dành riêng cho giới vận động viên. 
        Ước mơ về 1 đôi mắt sáng khỏe giờ đã thành sự thật với mình. Hy vọng đôi mắt sáng sẽ cùng đồng hành và giúp mình chinh phục được những thành tích mới ở bộ môn này.
        ',
    ],
    [
        'image' => './assets/images/review.png',
        'name' => 'VĐV Phương Anh',
        'review' => 'Là VĐV bơi lội, cận thị khiến mình gặp nhiều khó khăn vì phải dùng kính bơi riêng cho người cận thị, tầm nhìn bị giới hạn.
        Mình đã ngỏ lời xin bố mẹ đi xóa cận. Sau khi tìm hiểu và biết đến Mắt Sài Gòn, mình đã đi thăm khám mắt chuyên sâu và được bác sĩ tư vấn phương pháp phù hợp nhất là SMILE. Cuộc phẫu thuật diễn ra nhanh hơn mình tưởng chỉ trong vài chục giây. 
        Cảm ơn Mắt Sài Gòn đã giúp mình tìm lại đôi mắt sáng.',
    ]
];
?>

<section class="review" id="review-rate">
    <div class="main-content">TRẢI NGHIỆM VÀ ĐÁNH GIÁ</div>
    <div class="container">
        <div id="kol-wrap-slide">
            <?php foreach( $slides as $slide ): ?>
            <div class="row">
                <div class="mt-5 d-lg-flex justify-content-center align-items-center">
                    <div class="review__img col-lg-7 col-12 clearfix">
                        <div class="review__img--main">
                            <img class="img-fluid" src="<?php echo  $slide['image'] ?>" />
                        </div>
                        <div class="review__img--rotate">
                            <img class="img-fluid" src="<?php echo  $slide['image'] ?>" />
                        </div>
                    </div>
                    <div class="review__text col-lg-5">
                        <div class="quote">“</div>
                        <div class="review__text--reviewer sub-content">
                        <?php echo  $slide['name'] ?>
                        </div>
                        <div class="review__text--content sub-content">
                        <?php echo  $slide['review'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>