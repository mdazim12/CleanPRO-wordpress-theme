<?php
 get_header();
?>
<?php global $cleanPRO;?>

<body <?php body_class(); ?>>
 <div class="container">
    <div class="row">
        <div class="error">
            <div class="col-md-4">
                <img class="img_err"src="<?php echo $cleanPRO['404_img']['thumbnail'] ?>);" alt="404 Images" >
            </div>
            <div class="col-md-8">
                <div class="erruu">
                 <div class="err_tittle"><h2><?php echo $cleanPRO['404_title'];?></h2></div>
                    <div class="err_des">
                        <p>
                            <?php echo $cleanPRO['404_des'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    
</body>


<?php get_footer( );?>