<?php snippet('header') ?>

<section role="main">

	<!--Page-->
	<article role="article" id="content">
		<?php echo kirbytext($page->text()) ?>
	</article>

</section>

<?php snippet('footer') ?>