<?php 

echo page('articles')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => $page->title(),
  'description' => $page->text(),
  'link'        => 'articles',
  'snippet'     => 'feed'
));

?>
