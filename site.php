<?php

$kirby   = kirby();
$domain  = server::get('server_name');

if ( in_array( $domain, array( 'jancbeck.com', 'jancbeck.dev' ))) {
  $kirby->roots->content = __DIR__ . DS . 'content';
  $kirby->urls->index    = url::scheme() . '://' . $domain;
}
if ( in_array( $domain, array( 'jancbeck.de', 'de.jancbeck.dev' ))) {
  $kirby->roots->content = __DIR__ . DS . 'content-de';
  $kirby->urls->index    = url::scheme() . '://' . $domain;
}