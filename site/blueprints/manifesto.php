<?php if(!defined('KIRBY')) exit ?>

title: Manifesto
pages: false
fields:
  title:
    label: Titolo
    type:  text
  intro:
    label: Testo di intro
    type:  markdown
  line-a:
    type: line
  gallery:
    label: Gallery
    type: gallery
    aspectRatio: 16:9
  line-b:
    type: line
  valori:
    label: I valori della scuola
    type: structure
    entry: >
        {{titolo}}<br />
        {{testo}}
    fields:
      titolo:
        label: Nome del valore
        type: text
      testo:
        label: Descrizione del valore
        type: markdown
  mission:
      label: La mission della scuola
      type: structure
      entry: >
          {{titolo}}<br />
          {{testo}}
      fields:
        titolo:
          label: Titolo del punto della mission
          type: text
        testo:
          label: Descrizione del punto
          type: markdown  
  line-c:
    type: line
  soci:
    label: Soci SOS
    type: structure
    entry: >
        {{nome}}<br />
        {{bio}}<br />
        {{ruolo}}<br />
        {{email}}
    fields:
      nome:
        label: Nome e cognome
        type: text
      bio:
        label: Bio (max 400 caratteri)
        type: textarea
      ruolo:
        label: Ruolo
        type: text
      email:
        label: Email
        type: text
  line-d:
    type: line
  collaboratori:
    label: Collaboratori SOS
    type: structure
    entry: >
        {{nome}}<br />
        {{professione}}
    fields:
      nome:
        label: Nome e cognome
        type: text
      professione:
        label: Professione
        type: text
