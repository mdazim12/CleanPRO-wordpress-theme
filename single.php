<?php
    get_header();
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><?php wp_title('');?></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="<?php the_permalink();?>"><?php wp_title('');?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

 
    
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                       <?php 
                        if(have_posts(  )){
                            while(have_posts(  )): the_post(  ); ?>

                             <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href=""></a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href=""><?php the_category(","); ?></a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href=""><?php the_time('d M Y');?></a>
                        </div>
                        <h1 class="section-title mb-3"><?php the_title( );?></h1>
                    </div>

                    <div class="mb-5">
                        <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid rounded w-100 mb-4' ) )?>
                        <?php the_content( );?>
                    </div>

                        <?php    endwhile;
                        }
                       ?>

                   

                    <?php comments_template();?>

                   
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                   
                    <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                        
                        <div class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <?php echo get_avatar(get_the_author_meta("id" ));?>
                        </div>
                        
                        <h3 class="text-white mb-3"><?php echo get_the_author_meta('display_name');?></h3>
                        <p class="text-white m-0">
                            <?php echo get_the_author_meta('description');?>
                        </p>
                    </div>


                    <div class="mb-5">
                        <?php
                            if(is_active_sidebar('sidebar_widgets')){
                                dynamic_sidebar( 'sidebar_widgets' );
                                }
                        ?>
                    </div>


                    <div class="mb-5">
                        <img src="img/blog-2.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                             <?php the_tags(" "," "," ",);?>
                         </div>
                    </div>
                    <div class="mb-5">
                        
                        <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid rounded' ));?>
                    </div>
                    <div>
                        <h3 class="mb-4 section-title">Plain Text</h3>
                        <?php the_excerpt(  );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


<?php get_footer();?>