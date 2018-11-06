<?php if(!defined('KIRBY')) exit ?>

title: Blog Article
pages: false
files: true
fields:
  title:
    label: Titolo del contenuto
    type: title
  date:
    label: Data di pubblicazione
    type: date
    width: 1/2
    default: today
  author:
    label: Autore
    type: user
    width: 1/2
  tags:
    label: Tags
    type: tags
  line-a:
    type: line
  text:
    label: Testo
    type: markdown
  line-d:
    type: line
  cover:
    label: Immagine di Copertina
    type: image
    width: 1/2
    mode: single
    types:
      - image
  info-2:
    label: NOTA BENE
    type: info
    width: 1/2
    text: >
      Assicurati di aver "selezionato" (spuntandola, in modo che si evidenzi) l'immagine, dopo averla caricata nel box qui accanto.
  line-b:
    type: line
  gallery:
    label: Gallery
    type: gallery
    aspectRatio: 16:9
    width: 1/2
  info-3:
    label: NOTA BENE
    type: info
    width: 1/2
    text: >
      Assicurati di aver "selezionato" (spuntandola, in modo che si evidenzi) l'immagine, dopo averla caricata nel box qui accanto.
  line-c:
    type: line
  collaborators:
    label: Collaboratori
    type: structure
    entry: >
        {{name}}<br />
        {{url}}
    fields:
      name:
        label: Nome
        type: text
      url:
        label: URL
        type: url
