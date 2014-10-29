<?php

// stop without videos
if(empty($videos)) return;

// set some defaults
if(!isset($width))    $width    = 400;
if(!isset($height))   $height   = 300;
if(!isset($preload))  $preload  = true;
if(!isset($controls)) $controls = true;

// build the html atts for the video element
$preload  = ($preload)  ? ' preload="preload"'   : '';
$controls = ($controls) ? ' controls="controls"' : '';
$poster_attr = ($poster) ? ' poster="'. $poster->url() .'"' : '';

?>
<video width="<?php echo $width ?>" height="<?php echo $height ?>" class="<?php echo $class ?>" <?php echo $preload . $controls . $poster_attr ?>>
  
  <?php foreach($videos as $video): ?>
  
  <?php if(method_exists($url,'url')): ?>
  <source src="<?php echo $video->url() ?>" type="<?php echo $video->mime() ?>" />
  <?php else : ?>
  <source src="<?php echo $url ?>" />
  <?php endif ?>
  <?php endforeach ?>
  
  <a href="<?php echo $url ?>">
  <?php if($poster): ?>
  	<img src="<?php echo $poster->url() ?>" alt="<?php echo $title ?>" />
  <?php else: ?>
  	<?php echo $title ?>
  <?php endif ?>
  </a>

</video>