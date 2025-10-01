<footer class="footer">
  <div class="footer-container container mx-auto px-4">
    <!-- Left Section: Logo and Description -->
    <div class="footer-left">
      <div class="footer-logo">
        <img src="https://customsclearance.ma/wp-content/uploads/2025/09/Asset-2@4x-8.png" alt="CustomsClearance" class="logo">
        <p class="footer-description">Transitaire & courtier en douane – Maroc. PortNet/BADR, ATPA, DFD, COC, ONSSA/ANRT.</p>
      </div>
    </div>

    <!-- Middle Section: Locations -->
    <div class="footer-middle">
      <h4 class="footer-heading"><?php _e( 'Sièges', 'customsclearance' ); ?></h4>
      <ul class="footer-list">
        <li><?php echo esc_html( get_theme_mod( 'footer_location_1' ) ); ?></li>
        <li><?php echo esc_html( get_theme_mod( 'footer_location_2' ) ); ?></li>
        <li><?php echo esc_html( get_theme_mod( 'footer_location_3' ) ); ?></li>
        <li><?php echo esc_html( get_theme_mod( 'footer_location_4' ) ); ?></li>
      </ul>
    </div>

    <!-- Right Section: Useful Links & Contact -->
    <div class="footer-right">
      <div>
        <h4 class="footer-heading"><?php _e( 'Liens utiles', 'customsclearance' ); ?></h4>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer_useful_links',
            'container'      => false,
            'menu_class'     => 'footer-list',
        ) );
        ?>
      </div>
      <div>
        <h4 class="footer-heading"><?php _e( 'Contact', 'customsclearance' ); ?></h4>
        <ul class="footer-list">
          <li><?php echo esc_html( get_theme_mod( 'footer_phone' ) ); ?></li>
          <li><a href="mailto:<?php echo esc_attr( get_theme_mod( 'footer_email' ) ); ?>"><?php echo esc_html( get_theme_mod( 'footer_email' ) ); ?></a></li>
          <li><?php echo esc_html( get_theme_mod( 'footer_languages' ) ); ?></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bottom Section: Footer Text -->
  
</footer>
<div class="footer-bottom text-center bg-[#17476a] text-white pb-4">
    <p class="text-center">© 2025 CustomsClearance.ma — Tous droits réservés.</p>
  </div>