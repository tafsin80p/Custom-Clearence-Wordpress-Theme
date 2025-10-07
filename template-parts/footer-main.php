<footer class="footer">
    <div class="footer-container container mx-auto px-4">
        <!-- Left Section: Logo and Description -->
        <div class="footer-left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="footer-logo">
                <img src="<?php echo esc_url( get_theme_mod( 'footer_logo', '' ) ); ?>" alt="CustomsClearance"
                    class="logo">
                <p class="footer-description"><?php echo esc_html( get_theme_mod( 'footer_description', '' ) ); ?></p>
            </div>
        </div>


        <!-- Middle Section: Locations -->
        <div class="footer-middle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <h4 class="footer-heading"><?php _e( 'Sièges', 'customsclearance' ); ?></h4>
            <ul class="footer-list">
                <li><?php echo esc_html( get_theme_mod( 'footer_location_1' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'footer_location_2' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'footer_location_3' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'footer_location_4' ) ); ?></li>
            </ul>
        </div>

        <!-- Right Section: Useful Links & Contact -->
        <div class="footer-right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div>
                <h4 class="footer-heading"><?php _e( 'Liens utiles', 'customsclearance' ); ?></h4>
                <?php
        wp_nav_menu( array(
            'theme_location' => 'footer_useful_links',
            'container'      => false,
            'menu_class'     => 'footer-list text-[15px] gap-12', // these classes will be added to the <ul>
            
        ) );
        ?>
            </div>
            <div>
                <h4 class="footer-heading"><?php _e( 'Contact', 'customsclearance' ); ?></h4>
                <ul class="footer-list">
                    <li><?php echo esc_html( get_theme_mod( 'footer_phone' ) ); ?></li>
                    <li><a
                            href="mailto:<?php echo esc_attr( get_theme_mod( 'footer_email' ) ); ?>"><?php echo esc_html( get_theme_mod( 'footer_email' ) ); ?></a>
                    </li>
                    <li><?php echo esc_html( get_theme_mod( 'footer_languages' ) ); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom container mx-auto text-center bg-[#17476a] text-white pb-4 flex justify-center "
        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
        <p class="text-center">
            <?php echo esc_html( get_theme_mod( 'footer_copyright', '© 2025 CustomsClearance.ma — Tous droits réservés.' ) ); ?>
        </p>
    </div>

</footer>