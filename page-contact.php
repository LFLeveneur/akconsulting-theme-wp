<?php get_header(); ?>
<style><?php include "css/page-contact.css"?></style>
<!-- Navbar Logo 2 -->
<div class="navbar-logo-2 white" id="navbar-logo-2-white">
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-white.png" alt="AK Logo White">
    </a>
</div>
<?php get_template_part('section-contact'); ?>
<?php get_footer(); ?>