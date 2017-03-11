  <div id="site-footer">
    
    <div id='footer-area'>
      <?php dynamic_sidebar( 'footer1' ); ?>
    </div>

    <div id='footer-area'>
      <?php dynamic_sidebar( 'footer2' ); ?>
    </div>

    <div id='footer-area'>
      <?php dynamic_sidebar( 'footer3' ); ?>
    </div>

    <div id='footer-area'>
      <?php dynamic_sidebar( 'footer4' ); ?>
    </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

    <div id="footer-menu">
    <?php 
      wp_nav_menu( array( 
        "theme_location" => 'footer-menu' 
      )); 
    ?>
        </div>
              </div>
    </div>
    <div id="copyright">&copy; Tatev Melkonyan</div>
  </div>
  
<?php wp_footer() ?>
</body>
</html>