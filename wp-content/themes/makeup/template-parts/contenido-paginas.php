<?php
    $html = makeup_imagen_destacada( get_the_ID() );
    // $html[0] return HTML
    // $html[0] return image

    echo $html[0];
?>

<div class="bg-seccion">
    <main class="container-xl py-5 <?php echo $html[1] ? 'col-md-8 destacada' : 'col-md-12 no-destacada'; ?>">
        <h2 class="text-center my-5"><?php the_title(); ?></h2>
        
        <div class="row align-items-center g-5">
            <div class="col-md-6 mb-5 img-fluid">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="imagen destacada">
            </div>

            <div class="col-md-6">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
</div>
