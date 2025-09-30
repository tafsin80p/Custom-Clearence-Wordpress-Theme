<?php
// Get Customizer settings
$header_bg_color = get_theme_mod( 'header_bg_color', '#17476a' );
$menu_text_color = get_theme_mod( 'menu_text_color', '#ffffff' );
$header_font_size = get_theme_mod( 'header_font_size', '18px' );
$header_font_family = get_theme_mod( 'header_font_family', '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif' );
$button_text = get_theme_mod( 'custom_logo_text', 'Request a Quote' );
$button_url = get_theme_mod( 'custom_logo_url', home_url( '/quote' ) );
$button_bg_color = get_theme_mod( 'button_bg_color', '#ffffff' );
$button_text_color = get_theme_mod( 'button_text_color', '#17476a' );
$button_font_size = get_theme_mod( 'button_font_size', '16px' );
?>

<header class="header border-b border-white sticky top-0 z-50" style="background-color: <?php echo esc_attr( $header_bg_color ); ?>;">
    <div class="drawer" style="overflow: visible;">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col" style="overflow: visible;">
            <!-- Navbar -->
             
            <div class="w-full navbar" style="background-color: <?php echo esc_attr( $header_bg_color ); ?>;">
                <div class="container mx-auto px-4 flex justify-between items-center max-w-[1221px] h-16">
                    <div class="flex items-center space-x-2">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current text-amber-50">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="flex-none hidden lg:block">
                        <nav
                            style="font-size: <?php echo esc_attr( $header_font_size ); ?>; color: <?php echo esc_attr( $menu_text_color ); ?>; font-family: <?php echo esc_attr( $header_font_family ); ?>;">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'container'      => false,
                                    'menu_class'     => 'flex space-x-6',
                                ) );
                            ?>
                        </nav>
                    </div>
                    <div class="hidden lg:flex items-center space-x-4">
                        <a href="<?php echo esc_url( $button_url ); ?>" class="btn rounded-full"
                            style="background-color: <?php echo esc_attr( $button_bg_color ); ?>; color: <?php echo esc_attr( $button_text_color ); ?>; font-size: <?php echo esc_attr( $button_font_size ); ?>;"><?php echo esc_html( $button_text ); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="p-4 w-80 min-h-full"
                style="background-color: <?php echo esc_attr( $header_bg_color ); ?>; color: <?php echo esc_attr( $menu_text_color ); ?>; font-family: <?php echo esc_attr( $header_font_family ); ?>;">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'menu',
                    ) );
                ?>
                <div class="mt-4">
                    <a href="<?php echo esc_url( $button_url ); ?>" class="btn rounded-full"
                        style="background-color: <?php echo esc_attr( $button_bg_color ); ?>; color: <?php echo esc_attr( $button_text_color ); ?>; font-size: <?php echo esc_attr( $button_font_size ); ?>;"><?php echo esc_html( $button_text ); ?></a>
                </div>
            </div>
        </div>
    </div>
</header>