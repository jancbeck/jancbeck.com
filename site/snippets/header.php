<!doctype html>
<html itemscope itemtype="http://schema.org/" class="no-js">
<head>
<meta charset="utf-8" />
<title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>

<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement) /* removes no-js class */</script>

<meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-language" content="en" />
<meta http-equiv="imagetoolbar" content="no" />

<!-- Please support http://humanstxt.org/ -->
<link type="text/plain" rel="author" href="<?php echo url('humans.txt') ?>" />

<!-- Feed -->
<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

<link rel="canonical" href="http://jancbeck.com" />

<?php

$image = $page->hasImages() ? $page->images()->first()->url() : url('assets/images/icons/facebook/facebook-icon-1500x1500.jpg');

if ( $page->description() ) {
    $description = $page->description();
} elseif ( $page->text() ) {
    $text = kirbytext($page->text());
    $description = substr( $text, 0, strpos( $text, '</p>' ) + 4 );
    $description = strip_tags( $description );
} else {
    $description = $site->description();
}

?>
<meta name="title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="author" content="<?php echo html($site->author()) ?>" />
<meta name="publisher" content="<?php echo html($site->author()) ?>" />
<meta name="copyright" content="<?php echo html($site->author()) ?>" />
<meta name="description" content="<?php echo $description ?>" />
<meta name="robots" content="index,follow" />
<meta name="DC.Title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Description" content="<?php echo $description ?>" />
<meta name="DC.Language" content="en" />

<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo html($page->url()) ?>" />
<meta property="og:image" content="<?php echo $image ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:author" content="<?php echo html($site->author()) ?>" />
<meta property="og:publisher" content="<?php echo html($site->author()) ?>" />

<meta itemprop="name" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
<meta itemprop="description" content="<?php echo $description ?>">

<!-- Styles -->
<link rel="stylesheet" href="/assets/styles/style.css"/>

<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo url('assets/images/icons/favicon.ico') ?>" />
<link rel="apple-touch-icon" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-114x114.png') ?>" />

</head>

<body id="top">

	<a href="#content">Skip to Content</a>

	<header role="navigation">
		<a title="go to homepage" href="<?php echo u('/') ?>"><?php echo html($site->title()) ?></a>
		<?php if ('Articles' == $parent = $page->parent()->title()) : ?>
			/ <a title="go to articles" href="<?php echo u('/') ?>"><?php echo $parent->title() ?></a>
		<?php endif ?>

		<h1><?php echo html($page->title()) ?></h1>
	</header>