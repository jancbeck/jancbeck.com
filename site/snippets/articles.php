<section id="articles">

  <h2><?php echo $data->title()->html() ?></h2>
  <?php echo $data->text()->kirbytext() ?>

  <ul>

  <?php foreach($data->children()->visible()->flip() as $article): ?>

  <li>
    <a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a>
  </li>

  <?php endforeach ?>

  </ul>

  <footer>
    <a href="<?php echo url('feed') ?>" class="button"> <span class="icon-feed"></span> Article Feed</a>
  </footer>

</section>