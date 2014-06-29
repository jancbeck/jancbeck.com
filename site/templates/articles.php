<?php snippet('header') ?>

<section role="main">

	<!--About-->
	<?php if ( $about = $pages->find('about')) : ?>

	<article role="article">
		<?php echo kirbytext($about->text()) ?>
	</article>

	<hr>

	<?php endif // $about ?>


	<!--Articles-->
	<?php if ( $articles = $pages->find('articles')->children()->visible()->flip()  ) : ?>

	<article>
		<h1>Articles</h1>

		<?php echo kirbytext($page->text()) ?>

		<?php foreach($articles as $article): ?>

			<h3 class="headline"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>

		<?php endforeach ?>

	</article>

	<?php endif // $articles ?>

</section>

<?php snippet('footer') ?>