<?php snippet('header') ?>

<section role="main">

	<!--Article-->
	<article role="article">
		<h2><?php echo kirbytext($page->title()); ?></h2>
		<h6>
			Written by <b><?php echo html($site->googleauthor()) ?></b> on 
			<b><time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate">
				<?php echo $page->date('F j, Y') ?>
			</time> </b>
			in <b><?php echo html($page->location())?></b>.
		</h6>
		<?php echo kirbytext($page->text()); ?>
	</article>

</section>

<?php snippet('footer') ?>