<section id="articles">

  <h2><?php echo $data->title()->html() ?></h2>
  <?php echo $data->text()->kirbytext() ?>

  <ul class="list-unstyled" itemscope itemtype="http://schema.org/Blog">

  <?php foreach($data->children()->visible()->flip() as $article): ?>

  <li itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
    <a href="<?php echo $article->url() ?>" itemprop="headline"><?php echo $article->title()->html() ?></a>
    <meta itemprop="datePublished" content="<?php echo html( $page->date('c') ) ?>"/>
  </li>

  <?php endforeach ?>

  </ul>

  <footer>
    <a href="<?php echo url('feed') ?>" class="button"> <span class="icon-feed"></span> Article Feed</a>
  </footer>

</section>