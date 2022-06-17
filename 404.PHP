<?php
 get_header();
?>

<body <?php body_class(); ?>>
 <div class="container">
    <div class="row">
        <div class="error">
            <div class="col-md-4">
                <img class="img_err"src="<?php echo get_template_directory_uri();
                ?>/assets/img/404.png);" alt="404 Images" >
            </div>
            <div class="col-md-8">
                <div class="erruu">
                 <div class="err_tittle"><h2>a w w...don't </br> cry.</h2></div>
                    <div class="err_des">
                        <p>
                            It's just's a 404 error! </br>
                            What's are you looking for may have been Misplaced in Long Term Memory
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    
</body>


<?php get_footer( );?>