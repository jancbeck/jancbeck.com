<?php snippet('header') ?>

<section role="main">

	<!--Article-->
	<article role="article" itemscope itemtype="http://schema.org/BlogPosting">
		<h2 itemprop="name"><?php echo html($page->title()); ?></h2>
		<h6>
			Written by <b itemprop="author" itemscope itemtype="http://schema.org/Person"><span  itemprop="name"><?php echo html($site->googleauthor()) ?></span></b> on 
			<b><time itemprop="datePublished" content="<?php echo $page->date('c') ?>" datetime="<?php echo $page->date('c') ?>" pubdate="pubdate">
				<?php echo $page->date('F j, Y') ?>
			</time> </b>
			in <b><?php echo html($page->location())?></b>.
		</h6>
		<?php echo kirbytext($page->text()); ?>
	</article>

</section>

<?php snippet('footer') ?>