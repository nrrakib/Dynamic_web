<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Bridge</title>
    <?php wp_head();?>
</head>
<body>
    
<?php get_header(); ?>

<!-- ---menu part start---- -->
<section class="container-fluid">
    <div class="container navbar-expand menu-1">
        <?php wp_nav_menu( array(
            'theme_location'       => 'TM',
            'menu_class'           => 'menu navbar-nav',
        ) )?>
    </div>
</section>
<!-- ---menu part end---- -->
<!-- search part start -->
<section class="container search">
<div class="row">
    <div class="col-sm-8 search_left"></div>
    <div class="col-sm-4 search_right text-end">
        <form action="">
            <input type="text" value="<?=get_search_query(); ?>" name="s">
            <button>Search</button>
        </form>
    </div>
</div>
</section>
<!-- search part end -->


<!-- ---hero part start---- -->
<section class="container hero text-center">
    <div class="row hero-top">
        <?php dynamic_sidebar('herotop');?>
    </div>

    <div class="row hero-bottom mt-5">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herobottom'); ?>
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <?php dynamic_sidebar('herobody');?>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herobottom2'); ?>
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <?php dynamic_sidebar('herobody2');?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herobottom3'); ?>
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <?php dynamic_sidebar('herobody3');?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ---hero part end---- -->

<!-- Photo part start -->

<section class="container photo mt-5 text-center">
    <div class="row photo_top">
        <div class="col-sm-5">
            --------------------------------------------------
        </div>
        <div class="col-sm-2">
            <h4>Recent Photos</h4>
            <p>Some latest project pictures</p>
        </div>
        <div class="col-sm-5">
            --------------------------------------------------
        </div>
    </div>
    <div class="row photo_bottom mt-5">
<div class="col-sm-3">
    <div class="card" style="width: 16rem;">
    <?php dynamic_sidebar('p_img1');?>
    <div class="card-body">
        <?php dynamic_sidebar('p_body_1');?>
    </div>

</div>
</div>
<div class="col-sm-3"><div class="card" style="width: 16rem;">
    <?php dynamic_sidebar('p_img2');?>
    <div class="card-body">
        <?php dynamic_sidebar('p_body_2');?>
    </div>
</div>
        </div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
    <?php dynamic_sidebar('p_img3');?>
    <div class="card-body">
        <?php dynamic_sidebar('p_body_3');?>
    </div>
</div>
        </div>
<div class="col-sm-3">
<div class="card" style="width: 16rem;">
    <?php dynamic_sidebar('p_img4');?>
    <div class="card-body">
        <?php dynamic_sidebar('p_body_4');?>
    </div>
</div>

</div>
    </div>
</section>


<!-- Photo part end -->


<!-- news part start -->

<section class="container news mt-5 mb-5">
<div class="row news_top">
     <div class="col-sm-5">
            --------------------------------------------------
        </div>
        <div class="col-sm-2">
            <h4>NEWS & EVENTS</h4>
            <p>CLICK HERE TO VIEW ALL</p>
        </div>
        <div class="col-sm-5">
            --------------------------------------------------
        </div>
</div>
<div class="row news_bottom">
    <!-- nb start -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $x=0;
            while(have_posts()){ the_post();
            $x++;
            ?>
            <div class="carousel-item <?= ($x==1)?'active': '' ?> ">
                <?php the_title(); ?>
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <?php } ?>

            <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</div>

</section>
<!-- news part end -->

<!-- footer part start -->

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">


<?php get_footer();?>

<?php wp_footer();?>
</body>
</html>