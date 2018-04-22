<div class="tertulia-social-share text-center">
  <div id="fb-root"></div>
  <?php $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId=256911498208494&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="fb-share-button" data-href="<?php print render($url); ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print render($url); ?>;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php print render($title); ?>" data-size="large">Tweet</a>
</div>
