<style><?php include "css/section-marque.css"?></style>

<!-- Brands -->
<?php 
    function display_brand_logo($numberpost, $offset) {
        $args = array(
            'post_type' => 'brand_stars',
            'order' => 'ASC',
            'posts_per_page' => $numberpost,
            'offset' => $offset
        );
        $query = new WP_Query($args);
        if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
                echo '<div class="brand-row-item"><img src='.get_field('image').'></div>';
            endwhile;
        endif;
        wp_reset_postdata();
    }

    /* Find the number of brands */
    $args = array(
        'post_type' => 'brand_stars',
        'order' => 'ASC',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    $total_post = $query->found_posts;
    wp_reset_postdata();

    /* Set the number of brands per page */
    $nb_brand_row1 = 0;
    $nb_brand_row2 = 0;
    $nb_brand_row3 = 0;
    if($total_post % 3 != 0) {
        $nb_brand_row = round($total_post / 3);
        if($total_post / 3 > $nb_brand_row) {
            $nb_brand_row1 = $nb_brand_row + 1;
            $nb_brand_row2 = $nb_brand_row;
            $nb_brand_row3 = $nb_brand_row;
        } if($total_post / 3 < $nb_brand_row) {
            $nb_brand_row1 = $nb_brand_row;
            $nb_brand_row2 = $nb_brand_row;
            $nb_brand_row3 = $nb_brand_row - 1;
        }
    } else {
        $nb_brand_row = $total_post / 3;
        $nb_brand_row1 = $nb_brand_row;
        $nb_brand_row2 = $nb_brand_row;
        $nb_brand_row3 = $nb_brand_row;
    }
?>
    <section class="brand"
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom"
    >
        <div class="brand-content" style="--nb-brand-row1: <?php echo $nb_brand_row1; ?>; --nb-brand-row2: <?php echo $nb_brand_row2; ?>; --nb-brand-row3: <?php echo $nb_brand_row3; ?>;">
            <div class="brand-row">
                <?php display_brand_logo($nb_brand_row1, 0); ?>
                <?php display_brand_logo($nb_brand_row1, 0); ?>
            </div>
            <div class="brand-row">
                <?php display_brand_logo($nb_brand_row2, $nb_brand_row1); ?>
                <?php display_brand_logo($nb_brand_row2, $nb_brand_row1); ?>
            </div>
            <div class="brand-row">
                <?php display_brand_logo($nb_brand_row3, $nb_brand_row1 + $nb_brand_row2); ?>
                <?php display_brand_logo($nb_brand_row3, $nb_brand_row1 + $nb_brand_row2); ?>
            </div>
        </div>
    </section>

    <script>
        if((window.innerWidth / 100) / 2 > <?= $nb_brand_row3 ?>) {
            /* clone items brand */
            var brand_row = document.querySelectorAll('.brand-row');
            brand_row.forEach(function(brand_row) {
                var brand_row_item = brand_row.querySelectorAll('.brand-row-item');
                brand_row_item.forEach(function(brand_row_item) {
                    brand_row.appendChild(brand_row_item.cloneNode(true));
                });
            });
        }
    </script>