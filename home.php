<?php get_header(); ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php header_image(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php bloginfo( 'name' ); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php bloginfo( 'description' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php the_excerpt() ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?php the_author(); ?> on <?php the_date(); ?></p>
                </div>
                <hr>

            <?php endwhile; endif; ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <?php next_posts_link(); ?>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
<?php get_footer(); ?>