<?php snippet('header') ?>

<?php

$search = new search(array(
  'searchfield' => 'q',
  'words' => true,
  'in' => 'articles'
));

$articles = $search->results();

?>

<section role="main">
	<article>

		<h1>Search</h1>
		<hr>

	<?php if ( $articles ) : ?>

		<p>Posts matching <strong><?php echo html($search->query()) ?></strong>:</p>

		<?php foreach($articles as $article): ?>

			<h3 class="headline"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>

		<?php endforeach; ?>

	<?php elseif($search->query()): ?>

		<p>No posts found matching <strong><?php echo html($search->query()) ?></strong>. Try again?</p>

	<?php endif ?>

	</article>

</section>

<?php snippet('footer') ?>