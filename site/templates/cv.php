<?php snippet('header') ?>

<section role="main">

	<!--Article-->
	<article role="article">
		<?php echo kirbytext($page->text()); ?>
		<p>
			<em>Written by <?php echo html($site->googleauthor()) ?> on 
			<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate">
				<?php echo $page->date('F j, Y') ?>
			</time> 
			in <?php echo html($page->location())?>.</em>
		</p>
	</article>

</section>

<?php snippet('footer') ?>