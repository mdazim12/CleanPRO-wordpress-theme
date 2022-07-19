<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><?php echo $cleanPRO ['team_mini_title'];?></h6>
                    <h1 class="section-title mb-3"><?php echo $cleanPRO ['team_title'];?></h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3"><?php echo $cleanPRO ['team_des'];?></h4>
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
                                    <?php the_post_thumbnail( 'team-thumb', array( 'class' => 'img-fluid w-100' )) ;?> 
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