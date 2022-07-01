<?php
                  /*START FOOTER WIDGETS*/

function my_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'sidebar_widgets',
            'name'          => __( 'Sidebar Widgets' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h3 class="mb-4 section-title">',
            'after_title'   => '</h3>',
        )
    );

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
   
}
add_action( 'widgets_init', 'my_register_sidebars' );

                    /*END FOOTER WIDGETS*/






