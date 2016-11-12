 <!-- FOOTER SECTION -->
 <footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center margin-bottom">
        <h2>Keep in touch</h2>
        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/Purple-Divider.png" alt="divider">
      </div><!-- /col -->
    </div><!-- /row -->
    <div class="row">
      <div class="col-sm-4">
        <address>
          Tranquil Spa<br>
          Address line 1<br>
          Address line 2<br>
          Address line 3<br>
        </address>  
      </div><!-- /col-sm-4 -->
      <div class="col-sm-4">
        <?php 
        wp_nav_menu( array(
          'menu'              => 'footer',
         'container'         => 'ul',
         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
         'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
      </div><!-- /col-sm-4 -->
      <div class="col-sm-4">
        <p>Follow Us:</p>
        <i class="fa fa-facebook fa-lg"></i>
        <i class="fa fa-twitter fa-lg"></i>
        <i class="fa fa-google-plus fa-lg"></i>
        <i class="fa fa-pinterest fa-lg"></i>
        <i class="fa fa-youtube fa-lg"></i>
      </div><!-- /col-sm-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
  <div class="container-fluid" id="copy">
    <div class="col-sm-12">
      <p>&copy; <?php echo date('Y'); ?> Tranquil Spa</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>