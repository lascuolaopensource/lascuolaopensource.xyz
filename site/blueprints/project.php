<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
  template: 
    - project
files:
  sortable: true
fields:
  title:
    label: Nome del progetto
    type:  text
    width: 1/2
  info-a:
    label: ATTENZIONE!
    type: info
    width: 1/2
    text: >
      Per caricare contenuti in inglese cliccare su IT (in alto a destra) e passare a EN. Una volta fatto i testi dei contenuti possono essere sostituiti con quelli in lingua inglese. Per i bottoni a scelta multipla basta selezionare la voce italiana quando si è in modalità IT e quella inglese in modalità EN. 
  line-a:
    type: line  
  ricerca:
    label: È ricerca? (spuntare se sì)
    type: checkbox
    columns: 2
    width: 1/2
  fablab:
    label: È produzione? (spuntare se sì)
    type: checkbox
    columns: 2
    width: 1/2
  gallery:
    label: Gallery
    type: gallery
    aspectRatio: 16:9
  cover:
    label: Immagine di Copertina (1600x900px a 72 dpi)
    type: image
    mode: single
    types:
      - image
  line-b:
    type: line
  storia:
    label: Come è nata l'idea del progetto
    type:  textarea
    required: true
  start:
    label: Inizio del progetto
    type:  date
    width: 1/2
  tags:
    label: Ambiti tematici (parole chiave)
    type: tags
    width: 1/2
  descrizione:
    label: Descrizione del progetto (max 400 caratteri)
    type:  textarea
    required: true
  team:
    label: Team del progetto
    type: structure
    entry: >
        {{nome}}<br />
        {{professione}}<br />
        {{organizzazione}}<br />
        {{ruolo}}
    fields:
      nome:
        label: Nome e cognome
        type: text
      professione:
        label: Professione
        type: text
      organizzazione:
        label: Organizzazione di appartenenza
        type: text
      ruolo:
        label: Ruolo nel team
        type: text
      url:
        label: Url sito web
        type: url
  bisogni:
    label: A quali bisogni risponde?
    type:  textarea
    required: true
    placeholder: Descrivi la domanda (esplicita o implicita) a cui risponde questo progetto
  audience:
    label: A chi si rivolge?
    type: tags
    width: 1/2
  info-a:
    label: ESEMPI DI AUDIENCE
    type: info
    width: 1/2
    text: >
      bambini, ragazzi, studenti, ricercatori, professionisti,imprese, pubbliche amministrazioni, pensionati, immigrati, disoccupati, tutti … ma anche cose più specifiche, come ad esempio "condomini" per il progetto di sistema d'accesso)
  line-b:
    type: line
  tempo:
    label: Tempo di consegna
    type:  number
    width: 1/2
    required: true
    placeholder: Quanto tempo serve per averlo dopo aver pagato?
  prezzo:
    label: Costo in €
    type: number
    width: 1/2
  paypal:
    label: ID PAYPAL
    type:  text
    width: 1/2
  line-d:
    type: line
  github:
    label: URL GITHUB DEL PROGETTO
    type:  url
    width: 1/2
  playlist:
    label: URL PLAYLIST YOUTUBE
    type:  url
    width: 1/2


