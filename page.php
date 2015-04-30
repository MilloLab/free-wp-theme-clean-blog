<?php get_header(); ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

    <header class="intro-header" style="background-image: url('<?php echo $url; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_subtitle(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php endwhile; endif; ?>

    <hr>
<?php get_footer(); ?>