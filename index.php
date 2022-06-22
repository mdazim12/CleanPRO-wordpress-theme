<?php get_header( );?>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><?php wp_title(' ' ); ?></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="<?php echo home_url();?>">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="<?php echo home_url( );?>"><?php wp_title(' ' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                <?php
                    if(have_posts(  )){
                        while(have_posts(  )): the_post(  );  ?>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                       
                        <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid w-100' ));?>
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1"><?php the_date('d M') ;?></h4>
                            
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="<?php the_permalink();?>"><?php the_author( );?></a>
                        <span class="text-primary px-2">|</span>
                        <a  href="<?php the_permalink(  );?>"><?php the_tags(",");?></a>
                    </div>
                    <a href="<?php the_permalink();?>"><h5 class="font-weight-medium mb-2"><?php the_title( );?></h5></a>
                    <p class="mb-4"><?php the_excerpt();?></p>
                    <a class="btn btn-sm btn-primary py-2" href="<?php the_permalink(  );?>">Read More</a>
                </div>


                <?php    endwhile;
                    }
                ?>
              

               
              
              
                <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg justify-content-center mb-0">
                       
                        <li class="page-item active page-link">
                        <?php  next_posts_link( 'Older posts' );?>
                        <?php previous_posts_link( 'Newer posts' );?>
                         </li>
                        <!-- <li class="page-item"><a class="page-link" href="#"></a></li>
                        <li class="page-item"><a class="page-link" href="#"> ?></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li> -->
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
   

<?php get_footer();?>