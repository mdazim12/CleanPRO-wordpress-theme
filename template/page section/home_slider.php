<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
          
           <div class="carousel-inner">
 


   <div class="owl-carousel testimonial-carousel position-relative">
                    
                    <?php
                        $slider = new WP_Query(array(
                            'post_type'     =>'pro_clean_slider',
                            'post_per_page' =>-1,
                            'order'         =>'DSC'
                        ));
                    ?>


                    <?php 
                        if($slider->have_posts(  )){
                            while($slider->have_posts(  )) : $slider->the_post(  ); 
                            $short_tittle = get_post_meta( get_the_ID(),'slider_short_text', true );
                             $main_heading = get_post_meta( get_the_ID(),'slider_main_text', true );
                             $slider_btn   = get_post_meta( get_the_ID(),'slider_button', true );
                            $slider_btn_link = esc_url( get_post_meta( get_the_ID(), 'slider_button_link', true ) );
                            
                            $image =  wp_get_attachment_image_src( get_post_meta( get_the_ID(), 'wiki_test_image', true ), 'medium' ); 
                            
                            ?>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3 slider_hight" style='background-image: url("<?php echo $image;?>");'>

                            <div class="carousel-caption d-flex align-items-center justify-content-center">
                                <div class="p-5" style="width: 100%; max-width: 900px;">
                                     <h5 class="text-primary text-uppercase mb-md-3"><?php echo $short_tittle; ?></h5>
                                     <h1 class="display-3 text-white mb-md-4"><?php echo $main_heading; ?></h1>
                                      <a href="<?php echo $slider_btn_link;?>" class="btn btn-primary"><?php echo $slider_btn;?></a>
                                </div>
                            </div>

                        </div>
                            <p><?php the_content( );?></p>
                        </div>
                    <?php  endwhile;
                        }
                    ?>

                    </div>
                </div>