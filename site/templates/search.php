<?php snippet('header') ?>

<?php

$results = $pages->find('articles')->search(get('q'));

?>

<section role="main">
	<article role="article">

	<?php if ( $results ) : ?>

		<p>Posts matching <strong><?php echo html(get('q')) ?></strong>:</p>

		<?php foreach( $results as $article ): ?>

			<h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>

		<?php endforeach; ?>

	<?php else : ?>

		<p>No posts found matching <strong><?php echo html(get('q')) ?></strong>. Try again?</p>

	<?php endif ?>

	</article>

</section>

<?php snippet('footer') ?>