<?php
// video tag
kirbytext::$tags['video'] = array(
  'attr' => array(
    'width',
    'height',
    'poster',
    'text',
    'title',
    'class',
    'vidclass',
    'caption',
    'preload',
    'controls',
    'webm',
    'ogv',
    'mp4'
  ),
  'html' => function($tag) {

    $url     = $tag->attr('video');
    $alt     = $tag->attr('alt');
    $title   = $tag->attr('title');
    $link    = $tag->attr('link');
    $caption = $tag->attr('caption');
    $file    = $tag->file($url);

    // use the file url if available and otherwise the given url
    $url = $file ? $file->url() : url($url);

    // alt is just an alternative for text
    if($text = $tag->attr('text')) $alt = $text;

    // try to get the title from the image object and use it as alt text
    if($file) {

      if(empty($alt) and $file->alt() != '') {
        $alt = $file->alt();
      }

      if(empty($title) and $file->title() != '') {
        $title = $file->title();
      }

    }

    if(empty($alt)) $alt = pathinfo($url, PATHINFO_FILENAME);

    $args = array( 
      'videos' => array( $url ),
      'width'  => $tag->attr('width'),
      'height' => $tag->attr('height'),
      'class'  => $tag->attr('vidclass'),
      'poster' => $tag->attr('poster'),
      'preload' => $tag->attr('preload'),
      'controls' => $tag->attr('controls'),
      'title'  => html($title),
      'url'    => html($url),
      'alt'    => html($alt));

    if ( $poster = $tag->page()->images()->find($tag->attr('poster'))) {
      $args['poster'] = $poster;
    }
    if ( $webm = $tag->page()->videos()->find($tag->attr('webm'))) {
      $args['videos'][] = $webm;
    }
    if ( $mp4 = $tag->page()->videos()->find($tag->attr('mp4'))) {
      $args['videos'][] = $mp4;
    }
    if ( $ogv = $tag->page()->videos()->find($tag->attr('ogv'))) {
      $args['videos'][] = $ogv;
    }

    $video = snippet('video', $args, true);

    $figure = new Brick('figure');
    $figure->addClass($tag->attr('class'));
    $figure->append($video);

    if(!empty($caption)) {
      $figure->append('<figcaption>' . html($caption) . '</figcaption>');
    }

    return $figure;

  }
);