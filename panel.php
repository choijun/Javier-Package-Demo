<?php
$settings = array(
    'menu_title'        => esc_html__('Demo Importer', LA_TEXTDOMAIN),
    'menu_parent'       => 'tools.php',
    'menu_type'         => 'submenu',
    'menu_slug'         => 'la_importer',
    'disable_header'    => true,
    'ajax_save'         => false,
    'show_reset_all'    => true
);

$options = array();

/**
 * Demo Importer
 */

$options[] = array(
    'name' => 'demo_import_settings',
    'title' => esc_html__('Demo Importer', LA_TEXTDOMAIN),
    'icon' => 'fa fa-download',
    'fields' => array(
        array(
            'type' => 'heading',
            'content' => esc_html__('Demo Importer', LA_TEXTDOMAIN),
        ),
        array(
            'id' => 'demo_importer',
            'type' => 'la_demo_importer',
            'demo' => apply_filters('javier/filter/demo_data', array())
        ),
    )
);

add_action('admin_menu', 'la_admin_init_menu_import' );

function la_admin_init_menu_import(){
    add_submenu_page(
        'tools.php',
        esc_html__('Demo Importer', LA_TEXTDOMAIN),
        esc_html__('Demo Importer', LA_TEXTDOMAIN),
        'manage_options',
        'la_importer',
        'la_admin_import_panel'
    );
}

function la_admin_import_panel(){
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Demo Importer', LA_TEXTDOMAIN) ?></h1>
        <div class="la_demo_importer_panel">
            <?php
                echo cs_add_element(
                    array(
                         'id' => 'demo_importer',
                         'type' => 'la_demo_importer',
                         'demo' => apply_filters('javier/filter/demo_data', array())
                    )
                );
            ?>
        </div>
        <style type="text/css">
            .la_demo_importer_panel .cs-field-la_demo_importer {
                padding: 0;
                border: none;
                background: none;
            }
        </style>
    </div>
<?php
}