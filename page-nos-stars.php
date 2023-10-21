<?php get_header(); ?>
<style><?php include "css/page-nos-stars.css"?></style>
<div class="stars">
    <h1
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
                        if (get_the_title() === "Stars") {
                            echo get_field("titre_de_la_page");
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?></h1>
    <section class="star-content desktop">
        <?php
            $args = array(
                'post_type' => 'stars',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            $i = 0;
            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();
                    $i++;
                    if ($i === 1) {
                        echo '<a href="'.get_the_permalink().'" class="star-items col-1">';
                    } if ($i === 2) {
                        echo '<a href="'.get_the_permalink().'" class="star-items col-2">';
                    } if ($i === 3) {
                        $i = 0;
                        echo '<a href="'.get_the_permalink().'" class="star-items col-3">';
                    }
                        echo
                            '
                                <img class="star-items-bg" src='.get_field("image_de_fond").' alt="'.get_field("alt_image_de_fond").'" 
                                data-aos="fade-up"
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos-anchor-placement="bottom-bottom">
                                
                                <img class="star-items-logo"  src='.get_field("image_du_logo").' alt="'.get_field("alt_image_du_logo").'" 
                                data-aos="fade-up"
                                data-aos-easing="linear"
                                data-aos-duration="500"
                                data-aos-anchor-placement="bottom-bottom">
                            </a>';
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </section>
    <section class="star-content mobile">
        <?php
            $args = array(
                'post_type' => 'stars',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            $i = 0;
            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();
                    $i++;
                    if ($i === 1) {
                        echo '<a href="'.get_the_permalink().'" class="star-items col-1">';
                    } if ($i === 2) {
                        $i = 0;
                        echo '<a href="'.get_the_permalink().'" class="star-items col-2">';
                    }
                    echo
                        '
                            <img class="star-items-bg" src='.get_field("image_de_fond").' alt="'.get_field("alt_image_de_fond").'" 
                            data-aos="fade-up"
                            data-aos-easing="linear"
                            data-aos-duration="500"
                            data-aos-anchor-placement="bottom-bottom">

                            <img class="star-items-logo"  src='.get_field("image_du_logo").' alt="'.get_field("alt_image_du_logo").'" 
                            data-aos="fade-up"
                            data-aos-easing="linear"
                            data-aos-duration="500"
                            data-aos-anchor-placement="bottom-bottom">
                        </a>';
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </section>
</div>
<?php get_footer(); ?>