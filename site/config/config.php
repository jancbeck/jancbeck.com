<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby.

If you have no license yet, please buy one:
http://getkirby.com/buy and support an indie developer.

You are not allowed to run a website without a valid license key.
Please read the End User License Agreement for more information:
http://getkirby.com/license

*/

c::set('license', getenv('KIRBY_LICENSE'));


/*

---------------------------------------
Homepage Setup
---------------------------------------

By default the folder/uri for your homepage is "home".
Sometimes it makes sense to change that to make your blog
your homepage for example. Just change it here in that case.

*/

c::set('home', 'articles');


/*

---------------------------------------
Kirbytext Setup
---------------------------------------

set the default video width and height for
embedded flash videos from youtube or vimeo

*/

c::set('kirbytext.video.width', 900);
c::set('kirbytext.video.height', 506);


/*

---------------------------------------
Markdown Setup
---------------------------------------

to disable automatic line breaks in markdown
set this to false.

You can also switch between regular markdown
or markdown extra: http://michelf.com/projects/php-markdown/extra/

*/

c::set('markdown.breaks', true);
c::set('markdown.extra', true);
c::set('smartypants', true);


/*

---------------------------------------
Tinyurl Setup
---------------------------------------

KirbyCMS has built in tiny urls for every
page. Tinyurls look like this:

http://yourdomain.com/x/asd2qd1c

the /x/ in the url is needed to detect tinyurls,
you can change the x to anything else but an existing page uri.

If you don't want to use tiny urls for your site
disable them here

*/

c::set('tinyurl.folder', '');
c::set('tinyurl.enabled', false);

/*

---------------------------------------
Cache
---------------------------------------

Enable or disable the cache.
It is enabled by default, but you
need to make sure that the site/cache
directory is writable.

You can also decide to disable/enable
either caching of the data structure
or the final html. If you are caching
the final html, make sure to clean
the cache, once you've modified your
templates. It's better to keep this
off until your site is ready for production.

Caching is switched off by default

With c::set('cache.autoupdate') you can set if
Kirby will automatically check for updates in your
content folder. Depending on the size of your site
this can slow down the performance, because the
filesystem is accessed a lot. Switch this off to
disabled autoupdating of cache files, but then you
need to make sure to delete cache files yourself after
each update.

With c::set('cache.ignore', array()); you can speficy
an array of URIs which should be skipped for caching.
If you got a search page for example you might not want
to cache each search result so you can add the URI of your
search site to the ignore array:

c::set('cache.ignore', array('search', 'some/other/uri/to/ignore'));

*/

c::set('cache', false);
c::set('cache.autoupdate', true);
c::set('cache.data', true);
c::set('cache.html', true);
c::set('cache.ignore', array('search', 'sitemap'));


/*

---------------------------------------
Timezone Setup
---------------------------------------

You can change the default timezone used for all
date functions here. It is set to UTC by default.

Please read more about it at: http://php.net/manual/en/function.date-default-timezone-set.php

*/

c::set('timezone', 'UTC');


/*

---------------------------------------
Troubleshooting
---------------------------------------

Kirby has a built-in troubleshooting screen
with loads of information about your setup.

It's there to help you out when things don't work
as expected. Set it to true to activate it and
go to your homepage afterwards to display it on refresh.

*/

c::set('troubleshoot', false);


/*

---------------------------------------
Debug
---------------------------------------

Set this to true to enable php errors.
Make sure to keep this disabled for your
production site, so you won't get nasty
php errors there.

*/

c::set('debug', true);



/*

---------------------------------------
Custom host setup
---------------------------------------

I've added a nice way to add different
config files for different environments

Let's say you run a development version of your
site at http://dev.yoursite.com and a production
version of your site at http://yoursite.com, you
can easily setup two different config files
by adding two more files in this directory and name them
like this:

config.dev.yoursite.com.php
config.yoursite.com.php

What happens is, that this global config.php
will be loaded first and afterwards only the
config file for the matching hostname will be
attached. So you can easily overwrite your global
custom config by specific rules for that host.

*/


/*

---------------------------------------
Multi-Language support setup
---------------------------------------

If you want to run a site with multiple languages,
enable support for it here. As soon as you set

c::set('lang.support', true);

Kirby will automatically create language-dependent
URLs like:

http://yourdomain.com/en/blog

or

http://yourdomain.com/de/blog

Make sure to set the default language code and
also the available language codes.

If you keep…

c::set('lang.detect', true);

Kirby will try to detect the default language
from the user agent string instead of using the
default language.

*/

c::set('lang.support', false);
c::set('lang.default', 'en');
c::set('lang.available', array('en', 'de'));
c::set('lang.detect', true);

