<?php

class kirbytextExtended extends kirbytext {

  function __construct($text=false, $markdown=true, $smartypants=true) {

    parent::__construct($text, $markdown, $smartypants);

    // define custom tags
    $this->addTags('figure');

    // define custom attributes
    $this->addAttributes('caption', 'thumb', 'preload', 'controls', 'mp4', 'webm', 'ogv');

  }

  // define a function for each new tag you specify
  function figure($params) {

    // try to fetch the caption from the alt text if not specified
    if(empty($params['caption'])) $params['caption'] = @$params['alt'];

    // try to fetch the alt text from the caption if not specified
    if(empty($params['alt'])) $params['alt'] = @$params['caption'];

    $page = $this->relatedPage();
    $video = $page->videos()->find($params['figure']);

    if ( $video ) {

      $args = array( 'videos' => array( $video ));

      if (! empty( $params['thumb'] )) {
        $args['thumb'] = $page->images()->find($params['thumb']);
      }
      if ( isset( $params['ogv'])&& $webm = $page->videos()->find($params['webm']) ) {
        $args['videos'][] = $webm;
      }
      if ( isset( $params['mp4'] ) &&$mp4 = $page->videos()->find($params['mp4'])) {
        $args['videos'][] = $mp4;
      }
      if ( isset( $params['ogv'] ) && $ogv = $page->videos()->find($params['ogv'])) {
        $args['videos'][] = $ogv;
      }

      ob_start();

      snippet('video', array_merge( $params, $args ));

      $figure = ob_get_clean();

    } else {
      // we need to change this to make the image function work.
      $params['image'] = $params['figure'];
      
      // get metadata (url + file) for the image url
      $imageMeta = $this->url($params['image'], $lang = false, $metadata = true);

      // use half the size of retina images
      if ( false !== strpos( $params['figure'], '@2x' ) ) {
        $params['width'] = @getimagesize( $imageMeta['url'] )[0] / 2;
      }

      $figure = $this->image( $params );
    }
    $class = empty($params['caption']) ? '' : ' class="has-caption"';

    // start the html output
    $html  = '<figure'. $class .'>';

    $html .= $figure;

    // only add a caption if one is available
    if(!empty($params['caption'])) {
      $html .= '<figcaption>' . $params['caption'] . '</figcaption>';
    }

    $html .= '</figure>';

    return $html;

  }

}