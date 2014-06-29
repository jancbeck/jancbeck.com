<?php snippet('header') ?>

<section role="main">

	<!--Article-->
	<article role="article" class="single" id="content">
		<h1>
			<?php echo html($page->title()) ?>
		</h1>
		<?php echo kirbytext($page->text()); ?>
		<p class="byline">
			<em>Written by <?php echo html($site->googleauthor()) ?> on <time datetime="<?php echo date( DATE_ATOM, strtotime( $page->published()) ) ?>"><?php echo html(date( "F j, Y", strtotime( $page->published()))) ?></time> in <?php echo html($page->location())?>.</em>
		</p>
	</article>

</section>

<?php snippet('footer') ?>