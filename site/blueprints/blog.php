<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages: true
  template: 
    - article
    - search-blog
    - feed
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown