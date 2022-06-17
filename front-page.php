

<?php get_header(); ?>




    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
           
                <?php
               
                 $slider = new WP_Query(array(
                    'post_type'     =>'pro_clean_slider',
                    'post_per_page' =>-1,
                    'order'         =>'DSC',
                 ))
                ?>

                <?php if($slider->have_posts(  )){
                    while($slider->have_posts(  )): $slider->the_post(); 
                    $short_tittle = get_post_meta( get_the_ID(),'slider_short_text', true );
                    $main_heading = get_post_meta( get_the_ID(),'slider_main_text', true );
                    $slider_btn   = get_post_meta( get_the_ID(),'slider_button', true );
                    $slider_btn_link   = get_post_meta( get_the_ID(),'slider_button_link', true );
                    $image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'wiki_test_image_id', 1 ), 'medium' );
                    ?>
                  
                <div class="carousel-item active" data-target="#header-carousel" data-slide-to="0">
                    
                        <?php the_post_thumbnail( );?>
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3"><?php echo $short_tittle; ?></h5>
                            <h1 class="display-3 text-white mb-md-4"><?php echo $main_heading; ?></h1>
                            <a href="<?php echo $slider_btn_link;?>" class="btn btn-primary"> <?php echo $slider_btn;?> </a>
                        </div>
                    </div>
                </div>

            <?php endwhile;

                }
                ?>
               
               

                <!-- <div class="carousel-item">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Cleaning Services</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Experienced & Expert Cleaners</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div> -->



            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <?php print_r($slider_btn_link)?>

    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Our Office</h5>
                        <p class="m-0">123 Street, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Email Us</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Call Us</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                        <h2 class="text-white m-0">Years Experience</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Provide The Best Cleaning Services</h1>
                    <h5 class="text-muted font-weight-normal mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos</h5>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">Learn More</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid bg-service py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo get_template_directory_uri();
    ?>/assets/img/carousel-2.jpg);">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Our Services</h6>
                    <h1 class="mb-4 section-title text-white">Awesome Cleaning Services For You</h1>
                    <p class="text-white">Invidunt lorem justo clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">More Services</a>
                </div>


                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                <?php
         
                    $services_query =new WP_Query(array(
                        'post_type'    =>'pro_services',
                        'post_per_page'=>-1,
                        'order'        =>'DSC'
                    ));
                ?>        
                        
                        
                        
                        <?php 
                        
                            if($services_query->have_posts()){
                                while($services_query->have_posts()) : $services_query->the_post();  ?>

                                    <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                            <i class="fa fa-2x fa-hotel"></i>
                                        </div>
                                        <h5 class="font-weight-bold mb-4 px-4"><?php the_title();?></h5>
                                        <?php the_post_thumbnail( ); ?> 
                                    </div>
                       <?php     endwhile;
                            }
                        ?>
            
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Why Choose Us</h6>
                    <h1 class="mb-4 section-title">25 Years Experience In Cleaning Industry</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Our Cleaners</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Projects Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Portfolio Start -->
    <div class="container-fluid bg-portfolio py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo get_template_directory_uri();
    ?>/assets/img/carousel-2.jpg);">
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
                            <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid w-100' ));?>
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
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                    <h1 class="section-title mb-3">Meet Our Highly Experienced Cleaners</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">

                    <?php

                     $clean_query = new WP_Query(array(
                        'post_type'     =>'all_cleaner',
                        'post_per_page' =>-1,
                        'order'         =>'DSC'
                     ))
                    ?>

                    
                    <?php
                        if($clean_query->have_posts()){
                            while($clean_query->have_posts()) : $clean_query-> the_post(); 
                            $team_desi  = get_post_meta( get_the_ID(),'yourprefix_demo_text', true );
                            $fb_link  = get_post_meta( get_the_ID(),'cleaner_fb', true );
                            $twi_link  = get_post_meta( get_the_ID(),'cleaner_twitter', true );
                            $linkdin_link  = get_post_meta( get_the_ID(),'cleaner_linkdin', true );
                            ?>

                    

                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid w-100' )) ;?> 
                                </div>
                                <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-secondary btn-social mb-2" href="<?php echo $twi_link;?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-social mb-2" href="<?php echo $fb_link; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-social" href="<?php echo $linkdin_link;?>"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">
                                <h5 class="font-weight-bold"><?php the_title();?></h5>
                                <p class="text-white m-0"><?php echo  $team_desi;?></p>
                            </div>
                        </div>

                    <?php   endwhile;
                        }
                    ?>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5 " style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo get_template_directory_uri();
    ?>/assets/img/carousel-3.jpg);>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonial</h6>
                    <h1 class="section-title text-white mb-5">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                    
                    <?php
                        $testi_query = new WP_Query(array(
                            'post_type'     =>'pro_testi',
                            'post_per_page' =>-1,
                            'order'         =>'DSC'
                        ));
                    ?>


                    <?php 
                        if($testi_query->have_posts(  )){
                            while($testi_query->have_posts(  )) : $testi_query->the_post(  ); 
                            $profeesion =get_post_meta( get_the_ID(),'client_profeeson', true );
                            
                            ?>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <?php the_post_thumbnail() ;?>
                                <div class="ml-3">
                                    <h5 class="text-primary"><?php the_title( );?></h5>
                                    <i><?php echo $profeesion; ?></i>
                                </div>
                            </div>
                            <p><?php the_content( );?></p>
                        </div>
                    <?php  endwhile;
                        }
                    ?>

                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
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
                $custom_blog = new WP_Query(array(
                    'post_type'     =>'POST',
                    
                ))
            ?>

            <?php
                if($custom_blog ->have_posts(  )){
                    while($custom_blog ->have_posts(  )) : $custom_blog ->the_post(  ); ?>

                         <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid rounded w-100' ) ) ;?>
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
    <!-- Blog End -->
<?php get_footer();?>

    