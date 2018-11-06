<?php if(!defined('KIRBY')) exit ?>

title: Membership
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
    label: Testo generale sul processo di membership
    type:  textarea
  memberships:
    label: Profili di membership
    type: structure
    entry: >
        {{nome}}<br />
        {{descrizione}}<br />
        {{costo}}<br />
        {{paypal}}
    fields:
      nome:
        label: Nome del profilo
        type: text
      descrizione:
        label: Descrizione
        type: textarea
      costo:
        label: Costo
        type: text
      paypal:
        label: Link paypal per il pagamento
        type: text
      excel_key:
        label: public key excel (l'excel deve essere "pubblicato sul web", dal menu file)
        type: text
        
