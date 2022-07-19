

<?php global $cleanPRO;?>


<footer>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">

            <div class ="col-lg-3 col-md-6 mb-5">
                <?php
                    if(is_active_sidebar('widget_one')){
                    dynamic_sidebar( 'widget_one' );
                    }
                ?>
            </div>

            <div class ="col-lg-3 col-md-6 mb-5">
                <?php
                    if(is_active_sidebar('widget_two')){
                    dynamic_sidebar( 'widget_two' );
                    }
                ?>
            </div>

            <div class ="col-lg-3 col-md-6 mb-5">
                <?php
                    if(is_active_sidebar('widget_three')){
                    dynamic_sidebar( 'widget_three' );
                    }
                ?>
            </div>

            <div class ="col-lg-3 col-md-6 mb-5">
                <?php
                    if(is_active_sidebar('widget_four')){
                    dynamic_sidebar( 'widget_four' );
                    }
                ?>
            </div>

       

        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    <?php echo $cleanPRO['foo_mini_title'];?>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                        <a class="azim" href="#">Help</a>
                      
                      
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    </footer>
    <?php wp_footer();?>
</body>

</html>


