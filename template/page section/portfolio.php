<div class="container-fluid bg-portfolio py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo $cleanPRO ['proj_background'] ['url'];?>);">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">

            <?php
              $projecr_query= new WP_Query(array(
                'post_type'     =>'recent_project',
                'post_per_page' =>-1,
                'order'         =>'DSC'
              ));
            ?>

            <?php
                if( $projecr_query->have_posts()){
                    while( $projecr_query->have_posts()) :  $projecr_query-> the_post(); ?>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <?php the_post_thumbnail('blog-thumb', array( 'class' => 'img-fluid w-100' ));?>
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4"><?php the_title(); ?></h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="<?php the_permalink();?>">
                                    <i class="fa fa-link"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                endwhile;
                }
            ?>
       
            </div>
        </div>
        </div>
    </div>