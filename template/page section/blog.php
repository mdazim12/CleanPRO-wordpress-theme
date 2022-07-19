<div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><?php echo $cleanPRO['blog_mini_title'];?></h6>
                    <h1 class="section-title mb-3"><?php echo $cleanPRO['blog_title'];?></h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3"><?php echo $cleanPRO['blog_des'];?></h4>
                </div>
            </div>
            <div class="row">

       
            <?php
                $custom_blog = new WP_Query(array(
                    'post_type'     =>'POST',
                    
                ))
            ?>

            <?php
                if($custom_blog ->have_posts(  )){
                    while($custom_blog ->have_posts(  )) : $custom_blog ->the_post(  ); ?>

                         <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <?php the_post_thumbnail('medium_large', array( 'class' => 'img-fluid rounded w-100' ) ) ;?>
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1"><?php the_date('d M') ;?></h4>
                            <small class="text-white text-uppercase"></small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="<?php the_permalink();?>"><?php the_author(",");?></a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="<?php the_permalink();?>"><?php the_category(",");?></a>
                    </div>
                   <a href="<?php the_permalink(  );?>"><h5 class="font-weight-medium mb-2"><?php the_title();?></h5></a> 
                    <p class="mb-4"><?php the_excerpt( );?></p>
                    <a class="btn btn-sm btn-primary py-2" href="<?php the_permalink( ); ?>">Read More</a>
                </div>

            <?php    endwhile;
                }
            ?>   

            
            </div>
        </div>
    </div>