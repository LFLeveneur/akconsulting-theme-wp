<style><?php include "css/section-contact.css"?></style>
<section class="contact"
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="500"
        data-aos-anchor-placement="center-bottom">
    <div class="contact-content">
        <div class="contact-content-left">
            <h2><?php
                $args = array('post_type' => 'page-ak');
                $query = new WP_Query($args);
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        if (get_the_title() === "Contact") {
                            echo get_field("titre_de_la_page");
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?></h2>
            <div class="contact-cordonnee-mobile">
                <div class="contact-cordonnee-items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/icon-phone.png" alt="icon phone">
                    <?php
                        $args = array('post_type' => 'page-ak');
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                            while($query->have_posts()):
                                $query->the_post();
                                if (get_the_title() === "Contact") {
                                    echo '<a href="tel:'.get_field("telephone").'"><p>'.get_field("telephone").'</p></a>';
                                }
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="contact-cordonnee-items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/icon-pin.png" alt="icon pin">
                    <a href="http://maps.google.com/?q=11 Bis Rue de Milan 75009" target="_blank"><p>
                        <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "Contact") {
                                        echo get_field("address");
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </p></a>
                </div>
            </div>
            <div class="contact-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.921076436439!2d2.325910451538354!3d48.878781079187824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e4a37387bbf%3A0x37f253cafdf79e99!2s11%20bis%20Rue%20de%20Milan%2C%2075009%20Paris!5e0!3m2!1sen!2sfr!4v1669318749815!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-content-right">
            <div class="contact-cordonnee-desktop">
                <div class="contact-cordonnee-items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/icon-phone.png" alt="icon phone">
                    <?php
                        $args = array('post_type' => 'page-ak');
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                            while($query->have_posts()):
                                $query->the_post();
                                if (get_the_title() === "Contact") {
                                    echo '<a href="tel:'.get_field("telephone").'"><p>'.get_field("telephone").'</p></a>';
                                }
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="contact-cordonnee-items">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/icon-pin.png" alt="icon pin">
                    <a href="http://maps.google.com/?q=83 rue de Richelieu 75009" target="_blank"><p>
                        <?php
                            $args = array('post_type' => 'page-ak');
                            $query = new WP_Query($args);
                            if($query->have_posts()):
                                while($query->have_posts()):
                                    $query->the_post();
                                    if (get_the_title() === "Contact") {
                                        echo get_field("address");
                                    }
                                endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </p></a>
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-form-error">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M8 2a6 6 0 1 1 0 12A6 6 0 0 1 8 2Zm0 1a5 5 0 1 0 0 10A5 5 0 0 0 8 3Zm0 7a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5Zm0-5.5a.5.5 0 0 1 .492.41L8.5 5v3.5a.5.5 0 0 1-.992.09L7.5 8.5V5a.5.5 0 0 1 .5-.5Z"/></svg>
                    <p>Une erreur est survenue</p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="25" title="Contact"]'); ?>
                <label for="submit" class="contact-form-btn-label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m8 12.5l3 3l5-6"/><circle cx="12" cy="12" r="10"/></g></svg>
                    <p>Votre message a bien été envoyé</p>
                </label>
            </div>
        </div>
    </div>
</section>
<script>

    // Set velue input of the form
    const formInputs = document.getElementsByClassName('wpcf7-form-control-wrap');
    formInputs[0].getElementsByTagName('input')[0].placeholder = 'Name*';
    formInputs[1].getElementsByTagName('input')[0].placeholder = 'Email*';
    formInputs[2].getElementsByClassName('wpcf7-textarea')[0].placeholder = 'Message*';
    
    const formBtn = document.getElementsByClassName('wpcf7-form-control wpcf7-submit')[0];
    const fomBtnLabel = document.getElementsByClassName('contact-form-btn-label')[0];
    const formReponseSubmit = document.getElementsByClassName('wpcf7-response-output')[0];

    for (let i = 0; i < formInputs.length; i++) {;
        // For input of the form
        if (i<2) {
            formInputs[i].getElementsByTagName('input')[0].addEventListener('focus', function () {
                this.placeholder = '';

                // If the form is send reset the placeholder for send a nex form
                if (formReponseSubmit.innerHTML == 'Merci pour votre message. Il a été envoyé.') {
                    formBtn.style.display = 'flex';
                    formBtn.style.justifyContent = 'center';
                    fomBtnLabel.style.display = 'none';
                }
            } );
            formInputs[i].getElementsByTagName('input')[0].addEventListener('blur', function () {
                formInputs[0].getElementsByTagName('input')[0].placeholder = 'Name*';
                formInputs[1].getElementsByTagName('input')[0].placeholder = 'Email*';
            } );
        } else {
            // For the textarea of the form
            formInputs[2].getElementsByTagName('textarea')[0].addEventListener('focus', function () {
                this.placeholder = '';
                // If the form is send reset the placeholder for send a nex form
                if (formReponseSubmit.innerHTML == 'Merci pour votre message. Il a été envoyé.') {
                    formBtn.style.display = 'flex';
                    formBtn.style.justifyContent = 'center';
                    fomBtnLabel.style.display = 'none';
                }
            } );
            formInputs[2].getElementsByTagName('textarea')[0].addEventListener('blur', function () {
                formInputs[2].getElementsByClassName('wpcf7-textarea')[0].placeholder = 'Message*';
            } );
        }
    }

    // Action when navigate to the url /#wpcf7-f21-o1
    if (window.location.href.indexOf('#wpcf7-f21-o1') != -1) {
        const formErr = document.getElementsByClassName('contact-form-error')[0];
        
        if (formReponseSubmit.innerHTML == 'Merci pour votre message. Il a été envoyé.') {
            formBtn.setAttribute('name', 'submit');
            formBtn.style.display = 'none';
            fomBtnLabel.style.display = 'flex';
        } else {
            formErr.style.display = 'flex';
        }
    }
</script>
