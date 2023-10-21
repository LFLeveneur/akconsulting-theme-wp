   <footer>
      <img class="footer-normal-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-white.png" alt="AK Logo White">
      <img class="footer-line-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/ak-logo-white-line.png" alt="AK Logo White Line">
      <a href="https://www.linkedin.com/company/ak-consulting-real-estate/" target="_blank"><img class="footer-linkedin-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/png/icon-linkedin.png" alt="Icon linkedin"></a>
   </footer>
   <script>AOS.init();</script>
   <script>
      // Function to toggle the menu when the screen is smaller than 768px
      const navbar = document.getElementById('navbar');
      const navbarMenu = document.getElementById('menu-header-menu');
      const navbarLogoBlack = document.getElementById('navbar-logo-black');
      const navbarLogo2= document.getElementById('navbar-logo-2');
      const navbarLogo2White= document.getElementById('navbar-logo-2-white');
      const navbarBurger = document.getElementById('navbar-burger');
      const navbarBurgerItems = document.getElementsByClassName('navbar-burger-item');

      function show (element) {
         (element.classList.contains('show')) ? element.classList.remove('show') : element.classList.add('show');
      }

      function toogleMenu() {
         show(navbar);
         // Toggle the menu show and close
         show(navbarMenu);

         // Change the color when de bg is darck or light
         show(navbarLogoBlack);
         show(navbarLogo2);
         show(navbarLogo2White);
         show(navbarBurger);
         for (let i = 0; i < navbarBurgerItems.length; i++) {
            show(navbarBurgerItems[i]);
         }
      }

      // Show the menu when the hamburger is clicked -> launch the function toogleMenu()
      document.getElementById('navbar-burger-check').addEventListener('click', () => toogleMenu());

   </script>
</body>
</html>