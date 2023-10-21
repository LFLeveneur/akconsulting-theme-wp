<?php get_header(); ?>
    <style><?php include "css/page-qui-sommes-nous.css"?></style>
    <div class="about">
        <div class="about-contenair">
            <h1
                center-bottom
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-anchor-placement="center-bottom"
            ><?php
                $args = array('post_type' => 'page-ak');
                $query = new WP_Query($args);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if (get_the_title() === "About (Left)") {
                            echo get_field("titre_de_la_page");
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
                ?></h1>
            <ul class="about-switch"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-anchor-placement="center-bottom"
            >
                <ul class="about-switch-item active"><p>Spécialiste développement</p></ul>
                <ul class="about-switch-item"><p>Conseil & commercialisation</p></ul>
            </ul>
            <div class="about-right-left">
                <section class="switch-content left active">
                    <!-- About -->
                    <section class="about-contenair">
                        <div class="about-content"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Left)") {
                                        echo '
                            <img src="'.get_field("image_de_fond_block_1").'" alt="'.get_field("alt_image_block_1").'">
                            <div class="about-text-motivation">
                                '.get_field("block_1").'
                            </div>';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="about-content"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Left)") {
                                        echo '
                                <img src="'.get_field("image_de_fond_block_2").'" alt="'.get_field("alt_image_block_2").'">
                                <div class="about-text-force">
                                    '.get_field("block_2").'
                                </div>';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="about-text-experience"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="bottom-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Left)") {
                                        echo get_field("block_3");
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="about-banner"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Left)") {
                                        echo '<img src="'.get_field("image_de_fond_block_3").'" alt="'.get_field("alt_image_block_3").'">';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                    </section>

                    <!-- History -->
                    <section class="history-contenair">
                        <div class="history-title"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Left)") {
                                        echo '<h1>'.get_field("titre_frise_chronologique").'</h1>';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="history-content">
                            <div class="history-date-bar"></div>
                            <?php
                            $args = array(
                                'post_type' => 'histoire-left',
                                'order' => 'ASC',
                                'posts_per_page' => -1,
                            );
                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                $i = 0;
                                while($query->have_posts()){
                                    $query->the_post();

                                    $i++;
                                    if ($i % 2 == 0) {
                                        echo '<div class="history-date hright"
                        data-aos="fade-up"
                        data-aos-easing="linear"
                        data-aos-duration="500"
                        data-aos-anchor-placement="bottom-bottom">';
                                    } else {
                                        echo '<div class="history-date hleft"
                        data-aos="fade-up"
                        data-aos-easing="linear"
                        data-aos-duration="500"
                        data-aos-anchor-placement="bottom-bottom">';
                                    }

                                    if (get_field('image') && get_field('image_en_fond')) {
                                        echo '<img class="history-date-image-bg" src='.get_field('image').' alt="'.get_field("alt_image").'">';
                                    }

                                    echo '<div class="history-date-text">
                                    <h3>'.get_field('date').'</h3>
                                    <p>'.get_field('texte').'</p>
                                </div>
                            <div class="history-cercle"></div>';

                                    if (get_field('image')  && get_field('image_en_fond') === false) {
                                        echo '<div class="history-date-image">
                                <img src='.get_field('image').' alt="'.get_field("alt_image").'">
                            </div>';

                                    } else {
                                        echo '<div class="history-date-image none"></div>';
                                    }

                                    echo  '</div>';
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </section>

                </section>
                <section class="switch-content right">
                    <!-- About -->
                    <section class="about-contenair">
                        <div class="about-content"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Right)") {
                                        echo '
                            <img src="'.get_field("image_de_fond_block_1").'" alt="'.get_field("alt_image_block_1").'">
                            <div class="about-text-motivation">
                                '.get_field("block_1").'
                            </div>';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="about-content"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Right)") {
                                        echo '
                                <img src="'.get_field("image_de_fond_block_2").'" alt="'.get_field("alt_image_block_2").'">
                                <div class="about-text-force">
                                    '.get_field("block_2").'
                                </div>';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="about-text-experience"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="bottom-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Right)") {
                                        echo get_field("block_3");
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="about-banner"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Right)") {
                                        echo '<img src="'.get_field("image_de_fond_block_3").'" alt="'.get_field("alt_image_block_3").'">';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                        </div>
                    </section>

                    <!-- History -->
                    <section class="history-contenair">
                        <div class="history-title"
                             data-aos="fade-up"
                             data-aos-easing="linear"
                             data-aos-duration="500"
                             data-aos-anchor-placement="center-bottom"
                        >
                            <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "About (Right)") {
                                        echo '<h1>'.get_field("titre_frise_chronologique").'</h1>';
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="history-content">
                            <div class="history-date-bar"></div>
                            <?php
                            $args = array(
                                'post_type' => 'histoire-right',
                                'order' => 'ASC',
                                'posts_per_page' => -1,
                            );
                            $query = new WP_Query($args);
                            if($query->have_posts()) {
                                $i = 0;
                                while($query->have_posts()){
                                    $query->the_post();

                                    $i++;
                                    if ($i % 2 == 0) {
                                        echo '<div class="history-date hright"
                        data-aos="fade-up"
                        data-aos-easing="linear"
                        data-aos-duration="500"
                        data-aos-anchor-placement="bottom-bottom">';
                                    } else {
                                        echo '<div class="history-date hleft"
                        data-aos="fade-up"
                        data-aos-easing="linear"
                        data-aos-duration="500"
                        data-aos-anchor-placement="bottom-bottom">';
                                    }

                                    if (get_field('image') && get_field('image_en_fond')) {
                                        echo '<img class="history-date-image-bg" src='.get_field('image').' alt="'.get_field("alt_image").'">';
                                    }

                                    echo '<div class="history-date-text">
                                    <h3>'.get_field('date').'</h3>
                                    <p>'.get_field('texte').'</p>
                                </div>
                            <div class="history-cercle"></div>';

                                    if (get_field('image')  && get_field('image_en_fond') === false) {
                                        echo '<div class="history-date-image">
                                <img src='.get_field('image').' alt="'.get_field("alt_image").'">
                            </div>';

                                    } else {
                                        echo '<div class="history-date-image none"></div>';
                                    }

                                    echo  '</div>';
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </section>

                </section>
            </div>

            <!-- Activity -->

            <section class="history-activity desktop"
                     data-aos="fade-up"
                     data-aos-easing="linear"
                     data-aos-duration="500"
                     data-aos-anchor-placement="bottom-bottom"
            >
                <div class="history-activity-content">
                    <?php
                    $args = array(
                        'post_type' => 'realisation',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 3,
                    );
                    $realisations = new WP_Query($args);
                    if($realisations->have_posts()){
                        while($realisations->have_posts()){
                            $realisations->the_post();
                            echo
                                '<div class="history-activity-items" onclick="location.href=\''.get_permalink().'\';">
                            <img src='.get_field("image_1").' alt="'.get_field("alt_image_1").'">
                            <ul class="history-activity-items-legende">
                                <li>
                                    <p>'.get_field('bailleur').'</p>
                                </li>
                                <li>
                                    <p>'.get_field('localisation').'</p>
                                </li>
                                <li>
                                    <p>'.get_field('type_de_projet').'</p>
                                </li>
                                <li>
                                    <p>'.get_field('surface').'</p>
                                </li>
                                <li>
                                    <p>'.get_field('date').'</p>
                                </li>
                            </ul>
                        </div>';
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <button>
                    <a href="/akconsulting/nos-realisations">Voir plus</a>
                </button>
            </section>

            <section class="history-activity mobile"
                     data-aos="fade-up"
                     data-aos-easing="linear"
                     data-aos-duration="500"
                     data-aos-anchor-placement="bottom-bottom"
            >
                <div class="swiper">
                    <div class="history-activity-content swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'realisation',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => 3,
                        );
                        $realisations = new WP_Query($args);
                        if($realisations->have_posts()){
                            while($realisations->have_posts()){
                                $realisations->the_post();
                                echo
                                    '<div class="history-activity-items swiper-slide" onclick="location.href=\''.get_permalink().'\';">
                                    <img src='.get_field("image_1").' alt="'.get_field("alt_image_1").'">
                                    <ul class="history-activity-items-legende">
                                        <li>
                                            <p>'.get_field('nom').'</p>
                                        </li>
                                    </ul>
                                </div>';
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <button>
                    <a href="/akconsulting/nos-realisations">Voir plus</a>
                </button>
            </section>
        </div>
    </div>
    <script>
        // __________________________________________
        // _________________ Swiper _________________
        // __________________________________________
        const aboutSwitch = document.querySelectorAll(".about-switch-item"); // get the switch btn
        const aboutRL = document.querySelector('.about-right-left');
        const switchContentRight = document.querySelector(".switch-content.right");
        const switchContentLeft = document.querySelector(".switch-content.left");
        let etatSwitch = 0; // 0 = left, 1 = right
        aboutSwitch.forEach((item) => {
            item.addEventListener("click", () => {
                // Change color switch btn
                aboutSwitch.forEach((item) => {
                    item.classList.remove("active");
                });
                item.classList.add("active");

                // Change content
                if (item.textContent === "Conseil & commercialisation") {
                    switchContentRight.classList.add("active");
                    switchContentLeft.classList.remove("active");
                    aboutRL.style.height = switchContentRight.offsetHeight + 'px';
                    etatSwitch = 1;
                    dateBar()
                } else {
                    switchContentRight.classList.remove("active");
                    switchContentLeft.classList.add("active");
                    aboutRL.style.height = switchContentLeft.offsetHeight + 'px';
                    etatSwitch = 0;
                    dateBar()
                }
            });
        });
        // First load
        addEventListener("load", () => {
            aboutRL.style.height = switchContentLeft.offsetHeight + 'px';
        });
        addEventListener('resize', () => {
            if (etatSwitch === 0) {
                aboutRL.style.height = switchContentLeft.offsetHeight + 'px';
            } else {
                aboutRL.style.height = switchContentRight.offsetHeight + 'px';
            }
        });
    </script>
    <script>
        function dateBar() {
            const LastHistoryDate = document.querySelectorAll('.history-date:last-child');
            const HistoryContent = document.querySelectorAll('.history-content');
            const histotyDateBar = document.querySelectorAll('.history-date-bar');

            for (let i = 0; i < LastHistoryDate.length; i++) {
                let heightHistoryContent = HistoryContent[i].offsetHeight;
                let heightLastHistoryDate = LastHistoryDate[i].offsetHeight;

                histotyDateBar[i].style.height = heightHistoryContent - heightLastHistoryDate + 'px';
            }
        }
        dateBar();
        addEventListener('resize', function() {
            dateBar()
        });
        addEventListener('load', function() {
            dateBar()
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

        const swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 16,
            slidesPerGroup: 1,
            direction: 'horizontal',
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
<?php get_template_part('section-contact'); ?>
    <script>

        function callback(entries, observer) {
            console.log(entries);
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    console.log('intersecting');
                    document.getElementsByClassName('navbar-burger')[0].classList.add('white');
                } else {
                    console.log('not intersecting');
                    document.getElementsByClassName('navbar-burger')[0].classList.remove('white');
                }
            });
        }
        let options = {
            threshold: 0.45,
        }
        let observer = new IntersectionObserver(callback, options);
        observer.observe(document.querySelector('.contact'));

        const activityItems = document.querySelectorAll('.history-activity-items');
        const activityLegende = document.querySelectorAll('.history-activity-items-legende');

        /*get height legende to set item height and take the height big*/
        function heightLegende() {
            activityLegende.forEach(legende => {
                legende.style.height = 'fit-content';
            });
            let heightLegende = 0;
            activityLegende.forEach(legende => {
                if (legende.offsetHeight > heightLegende) {
                    heightLegende = legende.offsetHeight;
                }
            });
            activityLegende.forEach(legende => {
                legende.style.height = heightLegende + 'px';
            });
            activityItems.forEach(item => {
                item.style.height = heightLegende + 'px';
            });
        }
        heightLegende();
        addEventListener('resize', function() {
            /*if size = mobile cont work*/
            if (window.innerWidth > 768) {
                heightLegende();
            }
        });


    </script>
<?php get_footer(); ?>