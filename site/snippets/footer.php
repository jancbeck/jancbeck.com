<footer role="contentinfo">

  <form class="search-form" action="<?php echo $site->url() ?>/search/">
    <input type="text" class="search-input" placeholder="Search site …" <?php echo( str::sanitize( isset($_GET['q']) && !empty($_GET['q']) ? 'value="'. $_GET['q'] .'"' : '' )) ?> name="q" id="search" /><br />
    <button class="search-submit"><i class="icon-search"></i></button>
  </form>


  <ul class="external">
    <li><a href="http://twitter.com/jancbeck/"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
    <li><a href="http://github.com/jancbeck/"><i class="icon-github"></i> <span>Github</span></a></li>
    <li><a href="mailto:mail@jancbeck.com"><i class="icon-mail"></i> <span>Mail</span></a></li>
    <li><a href="http://jancbeck.com/feed/"><i class="icon-feed"></i> <span>Feed</span></a></li>
  </ul>

</footer>

<a class="skip" href="#top">To top</a>

</body>
</html>