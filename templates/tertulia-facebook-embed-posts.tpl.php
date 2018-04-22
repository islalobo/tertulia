<div id="fb-root"></div>
<script>var appId = "<?php print $items['appId']; ?>";</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  var url = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId='+appId+'&autoLogAppEvents=1';
  js.src = url;
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-page" data-href="<?php print $items['facebook_link']; ?>"
  data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
  data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="<?php print $items['facebook_link']; ?>" class="fb-xfbml-parse-ignore">
    <a href="<?php print $items['facebook_link']; ?>">
      <?php print $items['title']; ?>
    </a>
  </blockquote>
</div>
