<?php theme_include('header'); ?>
    <div class="row">
        <div class="large-12 columns" role="content">
 
      <article>
        <h3><?php echo article_title(); ?></h3>
        <h6>Posted <?php echo relative_time(article_time()); ?></h6>
        <?php echo article_markdown(); ?>
      </article>
      <div id="sharing-buttons">
          <div class="facebook sharing-button">
            <i class="icon">
              <i class="icon-facebook">
            </i>
          </i>
          <div class="slide">
            <p>
              facebook
            </p>
          </div>
          <iframe src="//www.facebook.com/plugins/like.php?href=http://blog.vpsstat.us<?=article_url()?>&send=false&layout=button_count&width=80&show_faces=false&font&colorscheme=light&action=like&height=20&appId=446933642082045" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:20px;" allowTransparency="true">
          </iframe>
          </div>
          
          <div class="twitter sharing-button">
            <i class="icon">
              <i class="icon-twitter">
            </i>
          </i>
          <div class="slide">
            <p>
              twitter
            </p>
          </div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="vpsstat_us" data-url="http://blog.vpsstat.us<?=article_url()?>" data-text="I'm reading: <?=article_title()?>" dara-url="http://blog.vpsstat.us<?=article_url()?>">
            Tweet
          </a>
          <script>
            !function(d,s,id){
              var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
              if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
          </script>
          </div>
          
          <div class="google sharing-button">
            <i class="icon">
              <i class="icon-google-plus">
            </i>
          </i>
          <div class="slide">
            <p>
              google+
            </p>
          </div>
          <!-- Place this tag where you want the +1 button to render. -->
          <div class="g-plusone" data-size="medium">
          </div>
          
          <!-- Place this tag after the last +1 button tag. -->
          <script type="text/javascript">
            (function() {
              var po = document.createElement('script');
              po.type = 'text/javascript';
              po.async = true;
              po.src = 'https://apis.google.com/js/plusone.js';
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(po, s);
            }
            )();
          </script>
          </div>

        </div>
        <?php if(comments_open()): ?>
        <section class="comments wrap">
                <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'vpsstatusblog'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
        </section>
        <?php endif; ?>
        </div>
    </div>
<?php theme_include('footer'); ?>