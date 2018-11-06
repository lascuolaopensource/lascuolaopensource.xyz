<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Titolo
    type:  text
  line-a:
    type: line
  testo1:
    label: Testo 1
    type:  markdown
    required: true
    placeholder: Inserire il testo della prima colonna della home
  testo2:
    label: Testo 2
    type:  markdown
    required: true
    placeholder: Inserire il testo della seconda colonna della home
  line-b:
    type: line
  gallery1:
    label: Gallery Laptop
    type: gallery
    aspectRatio: 16:4
    width: 1/2  
  gallery2:
    label: Gallery Mobile
    type: gallery
    aspectRatio: 4:3
    width: 1/2
  info:
    label: NOTA BENE
    type: info
    width: 1/2
    text: >
      Occorre inserire le informazioni richieste in tutti i campi, assicurandosi di aver "selezionato" (spuntandole, in modo che si evidenzino) le immagini (dopo averle caricate nell'ultimo box, qui sopra).
  line-c:
    type: line



