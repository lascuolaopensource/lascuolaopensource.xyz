<?php if(!defined('KIRBY')) exit ?>

title: Fablab
pages: false
files:
  sortable: true
fields:
  title:
    label: Titolo
    type:  text
  gallery:
    label: Gallery
    type: gallery
    aspectRatio: 16:9
  testo:
    label: Testo descrittivo del fablab / hackerspace
    type:  textarea
  servizi:
    label: Testo descrittivo dei servizi offerti
    type:  textarea
  strumenti:
    label: Strumenti
    type: structure
    entry: >
        {{nome}}<br />
        {{descrizione}}<br />
        {{dettagli}}
    fields:
      nome:
        label: Nome del macchinario
        type: text
      descrizione:
        label: Descrizione
        type: textarea
      dettagli:
        label: Dettagli
        type: textarea
  prenota_macchinario:
    label: Link per prenotare un macchinario
    type:  text
