<footer role="contentinfo">

  <nav role="navigation">
    <ul>
      <li><a href="http://twitter.com/jancbeck/"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
      <li><a href="http://github.com/jancbeck/"><i class="icon-github"></i> <span>Github</span></a></li>
      <li><a href="mailto:mail@jancbeck.com"><i class="icon-mail"></i> <span>E-Mail</span></a></li>
      <li><a href="http://jancbeck.com/feed/"><i class="icon-feed"></i> <span>Feed</span></a></li>
    </ul>
  </nav>

  <form role="search" action="<?php echo $site->url() ?>/search/">
    <label for="search">Search site </label>
    <input type="text" class="field-light half-width" placeholder="Type keyword …" <?php echo( str::sanitize( isset($_GET['q']) && !empty($_GET['q']) ? 'value="'. $_GET['q'] .'"' : '' )) ?> name="q" id="search" />
    <button class="button-blue">Go</button>
  </form>
  
  <a href="#top">To top</a>

</footer>


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://jcb.virgo.uberspace.de/analytics/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//jcb.virgo.uberspace.de/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


</body>
</html>