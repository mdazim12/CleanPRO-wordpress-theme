

<div class="container-fluid bg-testimonial py-5 " style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo esc_url($cleanPRO['testi_background']['url']);?>">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><?php echo $cleanPRO['testi_mini_title'];?></h6>
                    <h1 class="section-title text-white mb-5"><?php echo $cleanPRO['testi_title'];?></h1>
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
                        <img class="position-absolute w-100 h-100" src="<?php echo $cleanPRO['testi_images'] ['url']; ?>" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>