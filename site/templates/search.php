<?php snippet('header') ?>

<?php
  $query = get('q');
  $results = page('articles')
                ->search($query, array('words' => true))
                ->visible()->sortBy('date', 'desc')
?>

<section role="main">
	<article role="article">

	<?php if ( $results->count() != 0 ) : ?>

		<p>Posts matching <mark><?php echo $query ?></mark>:</p>

		<?php foreach( $results as $article ): ?>

			<h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>

		<?php endforeach; ?>

	<?php else : ?>

		<p>No posts found matching <strong><?php echo $query ?></strong>. Try again?</p>

	<?php endif ?>

	</article>

</section>

<?php snippet('footer') ?>