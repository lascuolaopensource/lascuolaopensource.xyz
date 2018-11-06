<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PERSONAL-eca14533877a480f9985139477e273b9');
/* c::set('url', 'http://lascuolaopensource.xyz');
c::set('subfolder', '/');
c::set('cache', false);
c::set('cache.driver', 'file');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
c::set('language.detect', true);
c::set('timezone','Europe/Rome');

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'ENG',
    'locale'  => 'en_US.UTF-8',
    'url'     => '/en',
  ),
  array(
    'code'    => 'it',
    'name'    => 'ITA',
    'locale'  => 'it_IT.UTF-8',
    'url'     => '/',
    'default' => true,

  ),
));
c::set('analytics.dashboard.view.id', 'ga:XXXXXXXXX');
c::set('analytics.dashboard.client.id', 'XXXXXXXXX.apps.googleusercontent.com');


/* c::set('url', 'http://www.dioca.net');
c::set('subfolder', false); */

c::set('date.handler', 'strftime'); 
c::set('debug',true);

c::set('cache.ignore', array('sitemap'));

// These are the defaults:
c::set('sitemap.exclude', array('error'));
c::set('sitemap.important', array('contact'));

/*
---------------------------------------
Setup Kirby Routes
---------------------------------------
*/
c::set('routes', array(
    /* https://github.com/getkirby/kirby/issues/93 */
    array(
        'pattern' => 'sitemap.xml',
        'action'  => function() {
            return site()->visit('sitemap');
        }
    ),
    array(
        'pattern' => 'sitemap',
        'action'  => function() {
            return go('sitemap.xml');
        }
    ),
));

c::set('gtm_id','KC2MGQM');
c::set('ga_id','UA-68295956-1');
c::set('fb_id','605105973024299');
