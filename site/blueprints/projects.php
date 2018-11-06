<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages: true
  template: 
    - project
    - search-projects
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown