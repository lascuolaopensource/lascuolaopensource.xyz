<?php if(!defined('KIRBY')) exit ?>

title: Fondo
pages: false
files: true
fields:
  title:
    label: Titolo
    type:  text
  intro:
    label: Introduzione
    type:  MarkDown
  borse:
    label: Numero di borse di studio erogate
    type:  text
    width: 1/2
  investimento:
    label: Investimento complessivo in borse di studio
    type:  text
    width: 1/2
  testo1:
    label: Testo di intro 1 colonna
    type:  MarkDown
  testo2:
    label: Testo di intro 2 colonna
    type:  MarkDown
  gallery:
    label: Gallery Laptop
    type: gallery
    aspectRatio: 16:4
    width: 1/2  
