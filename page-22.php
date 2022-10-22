<?php get_header(); ?>

<section class="contacts">
    <div class="contacts__container">
        <h1 class="contacts__title">
            <?php the_field('contacts-title'); ?>
        </h1>
        <div class="contacts__inner">
            <div class="contacts__inner-left">
                <h2 class="contacts__left-title">
                    REQUEST INFORMATION
                </h2>
                <form class="contacts__form">
                    <?php echo do_shortcode('[contact-form-7 id="35" title="Contatc us"]') ?>
                </form>
                
            </div>
            <div class="contacts__info">
                <h2 class="contacts__info-title">
                    CONTACT INFORMATION
                </h2>
                <p class="contacts__info-adress">
                    <?php the_field('adress'); ?>
                </p>
                <p class="contacts__info-phone">
                    Phone: <a href="tel:5036655158" class="contacts__info-link"><?php the_field('phone'); ?></a>
                </p>
                <p class="contacts__info-fax">
                    Fax: <?php the_field('fax'); ?>
                </p>
                <a href="mailto:<?php the_field('mail'); ?>" class="contacts__info-mail"><?php the_field('email'); ?></a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>