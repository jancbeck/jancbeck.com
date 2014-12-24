<section class="content blog">

  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>

  <?php foreach($data->children()->visible()->flip() as $article): ?>

  <article>
    <h2><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h2>
  </article>

  <?php endforeach ?>

</section>