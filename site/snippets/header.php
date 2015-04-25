<?php

$image = $page->hasImages() ? $page->images()->first()->url() : '/favicon-192x192.png';

// get the description of the page
if ( ! $description = (string) $page->description()->kirbytext() ) {
	// if there is no description, get the first paragraph of the article
	if ( $text = (string) $page->text()->kirbytext() ) {
	    $description = substr( $text, 0, strpos( $text, '</p>' ) + 4 );
	    $description = strip_tags( $description );
	} else {
		// if there is neither a page description nor first article, get the site description
	    $description = $site->description();
	}
} ?>
<!doctype html>
<html itemscope itemtype="http://schema.org/" lang="<?php echo $site->language() ?>">
<head>
<meta charset="utf-8" />
<title><?php echo html( $page->isHomePage() ? $site->title() . ' | '. $description : $page->title() . ' | ' . $site->title() ) ?></title>

<meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />

<!-- Please support http://humanstxt.org/ -->
<link type="text/plain" rel="author" href="<?php echo url('humans.txt') ?>" />

<!-- Feed -->
<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

<link rel="canonical" href="//jancbeck.com" />

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
<?php echo css('/assets/styles/style.css');
// page specific css
if ( $stylesheet = $page->files()->find( $page->id(). '.css' ) ) :
	echo css( $stylesheet->url() );
endif ?>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
</head>

<body id="top" class="<?php echo $page->isHomePage() ? 'home' : 'site' ?>">

	<header role="banner">
		<section>
			<h1><a title="go to homepage" href="<?php echo u('/') ?>"><?php echo html($site->title()) ?></a></h1>

		<?php if ( $page->isHomePage() ) : ?>
			<p><?php echo $site->description()->html() ?></p>
			<p><small>
				<a href="mailto:<?php echo html($site->email()) ?>"><span class="icon-email"></span> E-Mail</a>
				<a href="https://github.com/<?php echo html($site->github()) ?>"><span class="icon-github"></span> Github</a>
				<a href="skype://<?php echo html($site->skype()) ?>"><span class="icon-skype"></span> Skype</a>
				<a href="https://dribbble.com/<?php echo html($site->dribbble()) ?>"><span class="icon-dribbble"></span> dribbble</a>
			</small></p>
		<?php endif ?>

		</section>
	</header>