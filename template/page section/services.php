<div class="container-fluid bg-service py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo esc_url($cleanPRO['ser_background']['url']);?>">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><?php echo $cleanPRO ['ser_mini_title'];?></h6>
                    <h1 class="mb-4 section-title text-white"><?php echo $cleanPRO ['ser_title'];?></h1>
                    <p class="text-white"><?php echo $cleanPRO ['ser_des'];?></p>
                    <a href="<?php echo esc_url($cleanPRO['ser_btn_link']);?>" class="btn btn-primary mt-3 py-2 px-4"><?php echo $cleanPRO['ser_btn'];?></a>
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