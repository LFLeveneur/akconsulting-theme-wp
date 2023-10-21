<?php get_header(); ?>
<style><?php include "css/single-stars.css"?></style>
<div class="single-stars">

    <div class="single-stars-contenaire">
        <a href="<?php echo get_home_url(); echo '/nos-stars'; ?>" class="single-stars-back"
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="500"
            data-aos-anchor-placement="center-bottom"
        >
            <svg width="55" height="15" viewBox="0 0 55 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 6.79289C-0.0976311 7.18342 -0.0976311 7.81658 0.292893 8.20711L6.65685 14.5711C7.04738 14.9616 7.68054 14.9616 8.07107 14.5711C8.46159 14.1805 8.46159 13.5474 8.07107 13.1569L2.41421 7.5L8.07107 1.84315C8.46159 1.45262 8.46159 0.819457 8.07107 0.428932C7.68054 0.0384078 7.04738 0.0384078 6.65685 0.428932L0.292893 6.79289ZM1 8.5H55V6.5H1V8.5Z" fill="#180F11"/>
            </svg>
            <p>Retour à nos stars</p>
        </a>
        <h1
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="500"
            data-aos-anchor-placement="center-bottom"
        ><?= get_field("titre") ?></h1>
        <section class="single-stars-content"
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="500"
            data-aos-anchor-placement="top-bottom"
        >
            <div class="single-stars-img">
                <img class="single-stars-items-bg" src="<?= get_field("image_de_fond") ?>" alt="<?= get_field("alt_image_de_fond") ?>">
                <img class="single-stars-items-logo"  src="<?= get_field("image_du_logo") ?>" alt="<?= get_field("alt_image_du_logo") ?>">
            </div>
            <div class="single-stars-text">
                <div class="single-stars-description">
                    <?= get_field("description") ?>
                </div>
                <div class="single-stars-data">
                    <span><?= get_field("surface_moyenne") ?></span>
                    <span><?= get_field("nombre_d_emplacements") ?></span>
                    <p>de surface moyenne</p>
                    <p>emplacements</p>
                </div>
            </div>
        </section>
    </div>
    <h3
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom"
    >Les autres stars de notre galaxie</h3>
    <?php get_template_part('section-marque-stars'); ?>
    <div class="single-stars-button">
        <button
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="500"
            data-aos-anchor-placement="center-bottom"
        ><a href="<?= get_home_url()?>/nos-stars">Voir plus</a></button>
    </div>
</div>
<?php get_footer(); ?>