<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Titolo
    type:  text
    width: 1/1
    required: true
    placeholder: Inserire il titolo del sito
  claim:
    label: Headline
    type:  text
    width: 1/1
    required: true
    placeholder: Inserire la dicitura che spiega cosa è la scuola
  line-a:
    type: line
  website:
    label: Sito web
    type:  url
    width: 1/2
    required: true
    placeholder: Inserire l'indirizzo del sito
  email:
    label: Email
    type:  email 
    width: 1/2
    required: true
    placeholder: Inserire la mail aziendale
  cplink:
    label: Company Profile URL
    type:  url
    required: true
    placeholder: Inserire il link del Company Profile
  line-b:
    type: line
  city:
    label: Città
    type:  text
    width: 1/4
    required: true
    placeholder: Inserire la città della sede aziendale
  cap:
    label: CAP
    type:  number
    width: 1/4
    required: true
    placeholder: Inserire il CAP 
  region:
    label: Regione
    type:  text
    width: 1/2
    required: true
    placeholder: Inserire la regione in cui avete sede
  sedelegale:
    label: indirizzo della sede legale
    type:  text
    width: 1/2
    required: true
    placeholder: Inserire l'indirizzo della sede legale
  sedeoperativa:
    label: indirizzo della sede operativa
    type:  text
    width: 1/2
    required: true
    placeholder: Inserire l'indirizzo della sede operativa
  tel:
    label: Tel
    type:  tel
    width: 1/2
    required: true
    placeholder: Inserire il telefono aziendale
  line-c:
    type: line
  iva:
    label: Partita IVA
    type:  number
    width: 1/2
    required: true
    placeholder: Inserire la partita IVA
  pec:
    label: Indirizzo PEC
    type:  email
    width: 1/2
    required: true
    placeholder: Inserire la PEC
  line-f:
    type: line
  description:
    label: Descrizione (max 140 caratteri)
    type:  textarea
    width: 1/2
    placeholder: Inserire una descrizione breve dell'azienda
  keywords:
    label: Keywords
    type:  tags
    width: 1/2
    required: true
    placeholder: Inserire delle parole chiave per l'azienda
  line-d:
    type: line
  sharedimage:
    label: Immagine per i social 
    type: image
    width: 1/2
    mode: single
    types:
      - image
  info:
    label: NOTA BENE
    type: info
    width: 1/2
    text: >
      Occorre inserire le informazioni richieste in tutti i campi, assicurandosi di aver "selezionato" (spuntandola, in modo che si evidenzi) l'immagine (dopo averla caricata nell'ultimo box, qui sopra).
  line-e:
    type: line
  partners:
    label: Partners
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

