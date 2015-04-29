<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php bloginfo( 'name' ) ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

                <?php

                    $defaults = array(
                        'theme_location'  => 'menu',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class'      => 'nav navbar-nav navbar-right',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
                    );

                    wp_nav_menu( $defaults );

                ?>    
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>