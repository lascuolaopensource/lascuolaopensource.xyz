<?php if(!defined('KIRBY')) exit ?>

title: Events
pages: true
  template: 
    - event
    - search-events
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown