<footer class="footer">
        <div class="footer__inner">
            <nav class="menu">
            <?php wp_nav_menu(array(
                    'theme_location' => 'bottom',
                    'container' => null,
                    'menu_class' =>  'menu',
                    
                )); ?>
                <!-- <ul class="footer__list">
                    <li class="footer__item">
                        <a href="index.html" class="footer__link">HOME</a>
                    </li>
                    <li class="footer__item">
                        <a href="srvices.html" class="footer__link">SERVICES</a>
                    </li>
                    <li class="footer__item">
                        <a href="about.html" class="footer__link">ABOUT US</a>
                    </li>  
                    <li class="footer__item">
                        <a href="resource.html" class="footer__link">EYE RESOURCES</a>
                    </li>
                    <li class="footer__item">
                        <a href="contact_us.html" class="footer__link">CONTACT US</a>
                    </li>
                </ul> -->
            </nav>
            <div class="footer__contacts">
                <div class="footer__adress">
                    <div class="footer__adress-imgbox">
                        <img src="<?php bloginfo('template_url');?>/assets/img/location.svg" alt="geo" class="footer__adress-img">
                    </div>
                    <a href="<?php the_field('location-link'); ?>" class="footer__adress-link">
                        <?php the_field('location'); ?>
                    </a>
                </div>

                <div class="footer__tel">
                    <div class="footer__tel-imgbox">
                        <img src="<?php bloginfo('template_url');?>/assets/img/footer-tel.svg" alt="tel" class="footer__tel-img">
                    </div>
                    <a href="tel:<?php the_field('telephone-link'); ?>" class="header__phone"><?php the_field('phone'); ?></a>
                </div>

                <div class="footer__mail">
                    <div class="footer__mail-imgbox">
                        <img src="<?php bloginfo('template_url');?>/assets/img/mail.png" alt="mail" class="footer__mail-img">
                    </div>
                    <div class="footer__mail-box">
                    <a href=<?php the_field('welcome-link')?> class="footer__mail-contact"><?php the_field('welcome-link-text')?></a> 
                        
                        <a href= "mailto:<?php the_field('mail'); ?>" class="footer__mail-email">
                        <?php the_field('email'); ?>
                        </a>
                        <a href="mailto:<?php the_field('oftalmology-link'); ?>"class="footer__mail-oftalm">
                        <?php the_field('oftalmology-text'); ?>
                        </a>
                    </div>                    
                </div>
            </div>
            <div class="footer__right">
                <p class="footer__right-text">
                <?php the_field('footer-text'); ?>
                </p>
                <div class="footer__right-imgbox">
                    <a href=<?php the_field('fb'); ?> class="footer__right-social">
                        <img src="<?php bloginfo('template_url');?>/assets/img/fb.svg" alt="fb" class="footer__right-img">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__bottom-left">
            <?php the_field('rights'); ?>
            </p>
            <p class="footer__bottom-right">
                <a href=<?php the_field('powered'); ?> class="footer__bottom-link"><?php the_field('powered-text'); ?></a>
            </p>
        </div>
    </footer> 
<?php wp_footer(); ?> 

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/app.min.js"></script> -->
</body>

</html>