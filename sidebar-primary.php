<?php



 add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'widget_one',
            'name'          => __( 'Footer Widgets one' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_title'  => '<h4 class="font-weight-semi-bold text-primary mb-4">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'widget_two',
            'name'          => __( 'Footer Widgets two' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_title'  => '<h4 class="font-weight-semi-bold text-primary mb-4">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'widget_three',
            'name'          => __( 'Footer Widget three  ' ),
            'description'   => __( 'A short description of the Footer Widget .' ),
            'before_title'  => '<h4 class="font-weight-semi-bold text-primary mb-4">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'widget_four',
            'name'          => __( 'Footer Widget four  ' ),
            'description'   => __( 'A short description of the Footer Widget .' ),
            'before_title'  => '<h4 class="font-weight-semi-bold text-primary mb-4">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

//






