
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                    <?php if( get_theme_mod( 'custom_facebook_link') != "" ): ?>
                        <li>
                            <a href="<?php echo get_theme_mod( 'custom_facebook_link'); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if( get_theme_mod( 'custom_twitter_link') != "" ): ?>     
                        <li>
                            <a href="<?php echo get_theme_mod( 'custom_twitter_link'); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_theme_mod( 'custom_linkedin_link') != "" ): ?>    
                        <li>
                            <a href="<?php echo get_theme_mod( 'custom_linkedin_link'); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_theme_mod( 'custom_github_link') != "" ): ?>
                        <li>
                            <a href="<?php echo get_theme_mod( 'custom_github_link'); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>         
                        <li>
                            <a href="/feed" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; <?php bloginfo('name') ?> <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>