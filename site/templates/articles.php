<?php snippet('header') ?>

<section role="main">

	<!--Articles-->
	<?php if ( $articles = $pages->find('articles')->children()->visible()->flip() ) : ?>

	<article role="article">

		<?php echo kirbytext($page->text()) ?>

		<?php foreach( $articles as $article ): ?>

			<h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>

		<?php endforeach ?>

	</article>

	<?php endif // $articles ?>

</section>

<?php snippet('footer') ?>