<?php if(!defined('KIRBY')) exit ?>

title: Research
pages: true
files: false
fields:
  title:
    label: Titolo
    type:  text
    width: 1/2
  link:
    label: Link per il contatto (Google Form)
    type:  url
    width: 1/2
  intro:
    label: Testo di intro
    type:  markdown
  line-a:
    type: line
  rapporti:
    label: Relazioni che un'impresa può avere con la SOS
    type: structure
    entry: >
        {{titolo}}<br />
        {{testo}}
    fields:
      titolo:
        label: Tipo di relazione
        type: text
      testo:
        label: Descrizione della relazione
        type: markdown
