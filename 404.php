<?php get_header(); ?>
<style><?php include "css/404.css"?></style>
<div class="page-404">
    <div class="container-404">
        <h1>Erreur 404</h1>
        <p>Toutes nos excuses, cette page est introuvable</p>
    </div>
    <div class="return-404">
        <a href="<?php echo home_url(); ?>">
            <svg width="55" height="15" viewBox="0 0 55 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 6.79289C-0.0976311 7.18342 -0.0976311 7.81658 0.292893 8.20711L6.65685 14.5711C7.04738 14.9616 7.68054 14.9616 8.07107 14.5711C8.46159 14.1805 8.46159 13.5474 8.07107 13.1569L2.41421 7.5L8.07107 1.84315C8.46159 1.45262 8.46159 0.819456 8.07107 0.428932C7.68054 0.0384079 7.04738 0.0384079 6.65685 0.428932L0.292893 6.79289ZM1 8.5H55V6.5H1V8.5Z" fill="#180F11"/>
            </svg>
        </a>
        <p>Revenir à la page d’accueil</p>
    </div>
</div>

<?php get_footer(); ?>