






<div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo $cleanPRO['expe_background']['url'];?>";>
                        <i class="fa fa-5x fa-award text-primary mb-4" ></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up"><?php echo $cleanPRO ['years_expe'];?></h1>
                        <h2 class="text-white m-0"><?php echo $cleanPRO ['exper_title'];?></h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><?php echo $cleanPRO ['about_mini_title']?></h6>
                    <h1 class="mb-4 section-title"><?php echo $cleanPRO ['about_title']?></h1>
                    <h5 class="text-muted font-weight-normal mb-3"><?php echo $cleanPRO ['about_des'];?></p>
                    <div class="d-flex align-items-center pt-4">
                        <a href="<?php echo esc_url( $cleanPRO  ['about_btn_link'] ); ?>" class="btn btn-primary mr-5"><?php echo $cleanPRO['about_btn'];?></a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="<?php echo esc_url( $cleanPRO ['about_vedio_link'] );?>" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    