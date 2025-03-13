<?php 

function art_and_craft_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'art-and-craft-theme-settings', // Menu slug
        'art_and_craft_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'art_and_craft_add_admin_menu' );

function art_and_craft_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'art-and-craft' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'art_and_craft_settings_group' );
            do_settings_sections( 'art-and-craft-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function art_and_craft_register_settings() {
    register_setting( 'art_and_craft_settings_group', 'art_and_craft_enable_animations' );

    add_settings_section(
        'art_and_craft_settings_section',
        __( 'Animation Settings', 'art-and-craft' ),
        null,
        'art-and-craft-theme-settings'
    );

    add_settings_field(
        'art_and_craft_enable_animations',
        __( 'Enable Animations', 'art-and-craft' ),
        'art_and_craft_enable_animations_callback',
        'art-and-craft-theme-settings',
        'art_and_craft_settings_section'
    );
}
add_action( 'admin_init', 'art_and_craft_register_settings' );

function art_and_craft_enable_animations_callback() {
    $checked = get_option( 'art_and_craft_enable_animations', true );
    ?>
    <input type="checkbox" name="art_and_craft_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

