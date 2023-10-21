<?php get_header(); ?>
<style><?php include "css/single-realisation.css"?></style>
<div class="single-realisation">
    <a href="<?php echo get_home_url(); echo '/nos-realisations'; ?>" class="single-realisation-back"
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom">
        <svg width="55" height="15" viewBox="0 0 55 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.292893 6.79289C-0.0976311 7.18342 -0.0976311 7.81658 0.292893 8.20711L6.65685 14.5711C7.04738 14.9616 7.68054 14.9616 8.07107 14.5711C8.46159 14.1805 8.46159 13.5474 8.07107 13.1569L2.41421 7.5L8.07107 1.84315C8.46159 1.45262 8.46159 0.819457 8.07107 0.428932C7.68054 0.0384078 7.04738 0.0384078 6.65685 0.428932L0.292893 6.79289ZM1 8.5H55V6.5H1V8.5Z" fill="#180F11"/>
        </svg>
        <p>Retour aux réalisations</p>
    </a>
    <h1
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom"
    ><?= get_field("nom") ?></h1>
    <section class="single-realisation-content"
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="top-bottom"
    >
        <div class="single-realisation-description">
            <?= get_field("description") ?>
        </div>
        <div class="single-realisation-slide desktop">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_1") ?>" alt="<?= get_field("alt_image_1") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_2") ?>" alt="<?= get_field("alt_image_2") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_3") ?>" alt="<?= get_field("alt_image_3") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_4") ?>" alt="<?= get_field("alt_image_4") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="" alt="" style="opacity: 0;">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="single-realisation-slide mobile">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_1") ?>" alt="<?= get_field("alt_image_1") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_2") ?>" alt="<?= get_field("alt_image_2") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_3") ?>" alt="<?= get_field("alt_image_3") ?>">
                    </div>
                    <div class="single-realisation-slide-items swiper-slide">
                        <img class="single-realisation-slide-img" src="<?= get_field("image_4") ?>" alt="<?= get_field("alt_image_4") ?>">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    
    <?php
        $realisation_type = get_field('type_de_realisation');
        $args = array(
            'post_type' => 'realisation',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if($query->have_posts()){
            $i=0;
            $nb_post = 0;
            if ($realisation_type === 'Missions') {
                echo '<section class="single-realisation-other"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-anchor-placement="bottom-bottom">
                        <h3>D’autres Missions</h3>
                        <div class="single-realisation-other-contenent">';
                while($query->have_posts()){
                    $query->the_post();
                    $i++;
                    if (get_field('type_de_realisation') === 'Missions') {
                        echo    '<a href="'.get_the_permalink().'" class="single-realisation-other-item item-'.$i.'">
                                <img class="single-realisation-other-img" src="'.get_field("image_1").'" alt="'.get_field("alt_image_1").'">
                                <p class="single-realisation-other-title">'.get_field("nom").'</p>
                            </a>';
                        $nb_post++;
                        if ($nb_post === 4) {
                            break;
                        }
                    }
                };
                echo   '</div>
                        <button><a href="'.get_home_url().'/nos-realisations">Voir plus</a></button>
                    </section>';
            }


            if ($realisation_type === 'Transactions') {
                echo '<section class="single-realisation-other"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-anchor-placement="bottom-bottom">
                        <h3>D’autres Transactions</h3>
                        <div class="single-realisation-other-contenent">';
                while($query->have_posts()){
                    $query->the_post();
                    $i++;
                    if (get_field('type_de_realisation') === 'Transactions') {
                        echo    '<a href="'.get_the_permalink().'" class="single-realisation-other-item item-'.$i.'">
                                <img class="single-realisation-other-img" src="'.get_field("image_1").'" alt="'.get_field("alt_image_1").'">
                            </a>';
                        $nb_post++;
                        if ($nb_post === 4) {
                            break;
                        }
                    }
                    
                };
                echo   '</div>
                        <button><a href="'.get_home_url().'/nos-realisations">Voir plus</a></button>
                    </section>';
            }
        }
        wp_reset_postdata();
        ?>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        spaceBetween: 16,
        breakpoints: {
            0: {
                slidesPerView: 3,
                centeredSlides: true,
                loop: true,
            },
            768: {
                slidesPerView: 3,
                centeredSlides: true,
                loop: true,
            },
            769: {
                slidesPerView: 2,
                centeredSlides: false,
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
<?php get_footer(); ?>