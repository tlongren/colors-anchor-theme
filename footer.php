<footer class="row">
  <div class="large-12 columns">
    <hr />
    <div class="row">
      <div class="large-4 columns">
        <p>&copy; Copyright VPSstat.us.</p>
      </div>
      <div class="large-4 columns">
        <div id="social">
        <?php
        $url  = 'http://'.$_SERVER["SERVER_NAME"];
        $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
        $url .= $_SERVER["REQUEST_URI"];
        ?>
          <ul>
            <li><a target="_blank" href="https://plus.google.com/b/114332440447633497382/114332440447633497382/posts"><i class="icon-google-plus"></i></a></li>
            <li><a target="_blank" href="http://twitter.com/vpsstat_us"><i class="icon-twitter"></i></a></li>
            <li><a target="_blank" href="https://github.com/vpsstatus"><i class="icon-github-alt"></i></a></li>
          </ul>
        </div> 
      </div>
      <div class="large-4 columns">
        <p id="login-link"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></p>
      </div>
    </div>
  </div> 
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo theme_url('/js/foundation.min.js'); ?>"></script>
<script src="<?php echo theme_url('/js/pace.min.js'); ?>"></script>
<script src="<?php echo theme_url('/js/jquery.sharrre.min.js'); ?>"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>
