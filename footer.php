<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

        <div class="group">

            <div class="site-footer__col-one">
                <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/images/logo.png') ?>"
                            id="footer_logo"></a>

                <p><i class="fa-solid fa-phone"></i> <a href="tel:794-265-832">794-265-832</a></p>
                <p><i class="fa-solid fa-envelope"></i> <a href="kontakt@bedzie5.edu.pl">kontakt@bedzie5.edu.pl</a></p>
<a href="#"><i class="fa-brands fa-tiktok"></i></a>
						<a href="#"><i class="fa-brands fa-square-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>             
            </div>


            <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Główne</h3>
                    <nav class="nav-list">
                        <ul>
							<li><a href="#">Home</a></li>
							<li><a href="<?php echo site_url('/o-nas/') ?>">O nas</a></li>
                            <li><a href="<?php echo site_url('/blog/') ?>">Blog</a></li>
                            <li><a href="<?php echo site_url('/kontakt/') ?>">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Inne</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="<?php echo site_url('/jak-to-dziala/') ?>">Jak to działa?</a></li>
                            <li><a href="<?php echo site_url('/rezerwacja') ?>">Rezerwacja</a></li>
							<li><a href="<?php echo site_url('/faqs/') ?>">FAQs</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Regulaminy</h3>
                    <nav class="nav-list">
                        <ul>
                            <li><a href="<?php echo site_url('/regulamin/') ?>">Regulamin</a></li>
                            <li><a href="<?php echo site_url('/polityka-prywatnosci/') ?>">Polityka prywatności i cookies</a></li>
                        </ul>
                    </nav>
            </div>
        </div>
        <img src="<?php echo get_theme_file_uri('/images/shape1.png') ?>" class="shape1">
        <img src="<?php echo get_theme_file_uri('/images/shape2.png') ?>" class="shape2">
    </div>

 <p class="copyright"> Bedzie5 <i class="fa-regular fa-copyright"></i> <?php the_time('Y'); ?> <a href="https://agatajacyk.github.io/MyPage/index.html">Wszelkie prawa zastrzeżone.</a>	<i class="fa-regular fa-copyright"></i> Motyw <a href="https://agatajacyk.github.io/MyPage/index.html">A. J.</a></p>

</footer>

<?php wp_footer(); ?>
</body>

</html>