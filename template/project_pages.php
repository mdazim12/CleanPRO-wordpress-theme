<?php
 get_header(  );

 /*
   Template Name:Protroilo Azim
  */
?>

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




<?php
 require_once('page section/portfolio.php');
 get_footer(  );

?>