<?php get_header(); ?>
<style><?php include "css/page-nos-realisations.css"?></style>
<div class="realisation">
    <div class="realisation-contenair">
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
                        if (get_the_title() === "Realisations") {
                            echo get_field("titre_de_la_page");
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?></h1>
        <ul class="realisation-switch"
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="500"
            data-aos-anchor-placement="center-bottom"
        >
            <ul class="realisation-switch-item active"><p>Missions</p></ul>
            <ul class="realisation-switch-item"><p>Transactions</p></ul>
        </ul>
        <div class="realisation-m-t">
            <section class="realisation-content missions active">
                <?php
                    $args = array(
                        'post_type' => 'realisation',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                            if (get_field('type_de_realisation') === 'Missions') {
                                echo '<a href="'.get_the_permalink().'" class="realisation-items"
                                        data-aos="fade-up"
                                        data-aos-easing="linear"
                                        data-aos-duration="500"
                                        data-aos-anchor-placement="center-bottom">
                                            <img class="realisation-items-img" src='.get_field("image_1").' alt="'.get_field("alt_image_1").'">
                                            <div class="realisation-items-description">
                                                <h3>'.get_field("nom").'</h3>
                                            </div>
                                    </a>';
                            }
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </section>
            <section class="realisation-content transactions">
                <?php
                    $args = array(
                        'post_type' => 'realisation',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                            if (get_field('type_de_realisation') === 'Transactions') {
                                echo '<a href="'.get_the_permalink().'" class="realisation-items"
                                        data-aos="fade-up"
                                        data-aos-easing="linear"
                                        data-aos-duration="500"
                                        data-aos-anchor-placement="center-bottom">
                                            <img class="realisation-items-img" src='.get_field("image_1").' alt="'.get_field("alt_image_1").'">
                                            <div class="realisation-items-description">
                                                <h3>'.get_field("nom").'</h3>
                                            </div>
                                    </a>';
                            }
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </section>
        </div>
    </div>
</div>
<script>

    // height .realisation-m-t
    const realisationMT = document.querySelector('.realisation-m-t');
    const realisationContent = document.querySelector('.realisation-content');
    realisationMT.style.height = realisationContent.offsetHeight + 'px';
    addEventListener('resize', () => {
        realisationMT.style.height = realisationContent.offsetHeight + 'px';
    });

    // resalisation active
    const realisationSwitch = document.querySelectorAll(".realisation-switch-item");
    const realisationTransactions = document.querySelector(".transactions");
    const realisationMissions = document.querySelector(".missions");
    realisationSwitch.forEach((item) => {
        item.addEventListener("click", () => {
            realisationSwitch.forEach((item) => {
                item.classList.remove("active");
            });
            item.classList.add("active");
            if (item.textContent === "Transactions") {
                realisationTransactions.classList.add("active");
                realisationMissions.classList.remove("active");
            } else {
                realisationTransactions.classList.remove("active");
                realisationMissions.classList.add("active");
            }
        });
    });
</script>
<?php get_footer(); ?>