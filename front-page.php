<?php get_header(); ?>
<style><?php include "css/front-page.css"?></style>

<!-- Navbar Logo white 2 -->
<div class="navbar-logo-2 white" id="navbar-logo-2-white">
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-white.png" alt="AK Logo White">
    </a>
</div>

<!-- Home page -->
<div class="front-page">

    <!-- Speciality -->
    <section class="specialty"
        data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom">
        <div class="specialty-container">
            <?php
                $args = array('post_type' => 'page-ak');
                $query = new WP_Query($args);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if (get_the_title() === "Home") {
                            echo '<h1 class="specialty-title">'.get_field("titre_de_la_page").'</h1>';
                            echo '<style>
                                .specialty-container {
                                    background-image: linear-gradient(
                                        rgba(0, 0, 0, 0.5), 
                                        rgba(0, 0, 0, 0.5)
                                    ),
                                    url('.get_field("image_de_fond").');
                                }
                            </style>';
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- Activity -->
    <?php
    function display_realisations($numberpost, $offset) {
        $args = array(
            'post_type' => 'realisation',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => $numberpost,
            'offset' => $offset
        );
        $query = new WP_Query($args);
        if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
                echo
                    '<a href="'.get_the_permalink().'" class="activity-items">
                        <img src='.get_field("image_1").' alt="'.get_field("alt_image_1").'">
                        <ul class="activity-items-legende">
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
                    </a>';
            endwhile;
        endif;
        wp_reset_postdata();
    }?>
    <section class="activity">
        <div class="activity-content desktop"
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="bottom-bottom">
            <?php
                $args = array('post_type' => 'page-ak');
                $query = new WP_Query($args);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if (get_the_title() === "Home") {
                            echo get_field('block_1');
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
        <div class="activity-scroll desktop"
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom">
            <div class="activity-scroll-left">
                <?php display_realisations(2, 0) ?>
            </div>
            <div class="activity-scroll-right">
                <?php display_realisations(2, 2) ?>
            </div>
        </div>
        <div class="activity-content mobile">
            <?php
                $args = array('post_type' => 'page-ak');
                $query = new WP_Query($args);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if (get_the_title() === "Home") {
                            echo get_field('block_1');
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
        <div class="activity-scroll mobile">
            <div class="activity-scroll-left">
                <?php display_realisations(2, 0) ?>
                <?php display_realisations(2, 0) ?>
            </div>
            <div class="activity-scroll-right">
                <?php display_realisations(2, 2) ?>
                <?php display_realisations(2, 2) ?>
            </div>
        </div>
    </section>

    <!-- Brands -->
    
    <section class="brand-front">
        <?php get_template_part('section-marque'); ?>
    </section>

    <!-- Contact -->
    <?php get_template_part('section-contact'); ?>
</div>



<script>
    // Change color burger menu if the bg is white
    function callback(entries, observer) {
        console.log(entries);
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                document.getElementsByClassName('navbar-burger')[0].classList.add('black');
            } else {
                document.getElementsByClassName('navbar-burger')[0].classList.remove('black');
            }
        });
    }
    let options = {
        threshold: [1, 0.25],
    }
    let observer = new IntersectionObserver(callback, options);
    observer.observe(document.querySelector('.brand-front'));



    // Change the navbar color when scrolling
    function navbarTrans() {
        if (window.scrollY < 1) {
            document.getElementById('navbar').classList.add('transparent');
            document.getElementById('navbar-logo-white').classList.add('transparent');
            document.getElementById('navbar-logo-black').classList.add('transparent');

        } else {
            document.querySelector('.navbar').classList.remove('transparent');
            document.getElementById('navbar-logo-white').classList.remove('transparent');
            document.getElementById('navbar-logo-black').classList.remove('transparent');
        }
    };
    navbarTrans();
    window.addEventListener('scroll', navbarTrans);

</script>

<?php get_footer(); ?>