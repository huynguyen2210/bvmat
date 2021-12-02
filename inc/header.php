<header>
    <nav>
        <div class="container">
            <div class="nav-wrap">
                <div id="logo">
                    <a href="/">
                        <img src="/images/logo.jpg" />
                    </a>
                </div>
                <div id="contact">
                    <div id="hotline">
                        <span>Hotline</span>
                        <span id="number-phone">0909 019 419</span>
                    </div>
                    <div id="language-wrap">
                        <?php if($selected_language == 'vi') : ?>
                            <a href="?language=vi">VIE</a>
                            <a class="other-lang" href="?language=en">ENG</a>
                        <?php else: ?>
                            <a href="?language=en">ENG</a>
                            <a class="other-lang"  href="?language=vi">VIE</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>