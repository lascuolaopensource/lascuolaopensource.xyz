<?php if(!defined('KIRBY')) exit ?>

title: Partecipa
pages: true
files: true
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
    type:  MarkDown
  cover:
    label: Immagine di Copertina
    type: image
    mode: single
    types:
      - image
  line-a:
    type: line
  membership1:
    label: Descrizione Membership SOS 
    type:  MarkDown
  membership2:
    label: Descrizione Membership Fablab
    type:  MarkDown
  membership3:
    label: Descrizione Membership COMBO (SOS e FABLAB)
    type:  MarkDown
