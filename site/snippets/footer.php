<footer>
	<section>
		<p><small>Powered by <a href="http://getkirby.com/">kirby</a> • Hosted by <a href="//uberspace.de/">uberspace</a></small></p>
	</section>
</footer>

<!-- Piwik -->
<script type="text/javascript">
	var _paq = _paq || [];
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u=(("https:" == document.location.protocol) ? "https" : "http") + "://<?php echo $site->piwik_url() ?>/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', 1]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
		g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	})();
</script>
<noscript><p><img src="//<?php echo $site->piwik_url() ?>/piwik.php?idsite=<?php echo $site->piwik_id() ?>" style="border:0;" alt="Piwik Tracking Pixel" /></p></noscript>
<!-- End Piwik Code -->


</body>
</html>