<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
files:
  sortable: true
fields:
  info-a:
    label: ATTENZIONE!
    type: info
    text: >
      Per caricare contenuti in inglese cliccare su IT (in alto a destra) e passare a EN. Una volta fatto i testi dei contenuti possono essere sostituiti con quelli in lingua inglese. Per i bottoni a scelta multipla basta selezionare la voce italiana quando si è in modalità IT e quella inglese in modalità EN. 
  title:
    label: Titolo
    type:  text
    width: 1/2
  link:
    label: Link per la prenotazione (Google Form)
    type:  url
    width: 1/2
  luogo:
    label: Dove si svolge questa attività?
    type:  text
  gallery:
    label: Gallery
    type: gallery
    aspectRatio: 16:9
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
      Assicurati di aver "selezionato" (spuntandola, in modo che si evidenzi) l'immagine, dopo averla caricata nel box qui accanto. [JPG 1600x900 px]
  level:
    label: Livello di difficoltà
    type: radio
    required: true
    options:
      avanzato: Avanzato
      intermedio: Intermedio
      facile: Facile
      advanced: Advanced 
      intermediate: Intermediate
      easy: Easy
    columns: 3
  category:
    label: Tipologia di attività
    type: radio
    required: true
    options:
      Lezione: Lezioni / Performance
      Laboratorio: Laboratori / Seminari
      xyz: Format XYZ
      eventi: Eventi culturali
      singularity: Format verticali
      macchine: Corsi Macchine
      intrattenimento: Intrattenimento
      Lecture: Lecture / Performance
      Workshop: Workshop
      xyz: Format XYZ
      events: Cultural Events
      singularity: Vertical Format
      machines: Machines
      entertainment: Entertainment
    columns: 4
  tags:
    label: Ambiti tematici (parole chiave)
    type: tags
    width: 1/2
  prezzo:
    label: Costo in € per partecipante
    type: number
    width: 1/2
  line-b:
    type: line
  description:
    label: In cosa consiste l'evento?
    type:  textarea
    required: true
    placeholder: Descrivi questa attività
  audience:
    label: A chi si rivolge?
    type: checkboxes
    options:
      bambini: bambini
      ragazzi: ragazzi
      studenti: studenti
      ricercatori: ricercatori
      professionisti: professionisti
      imprese: imprese
      PA: pubbliche amministrazioni
      pensionati: pensionati
      immigrati: immigrati
      disoccupati: disoccupati
      tutti: tutti
      childs: childs
      teens: teens
      students: students
      researchers: researchers
      professionals: professionals
      companies: companies
      PA: PA
      retirees: retirees
      immigrants: immigrants
      unemployed: unemployed
      everybody: everybody
    columns: 5
  line-c:
    type: line  
  durata:
    label: Durata oraria di ogni incontro?
    type:  number
    width: 1/3
    required: true
    placeholder: Indica la durata di ogni incontro in termini di ore
  lunghezza:
    label: Da quante ore (totali) è composto l'attività?
    type:  number
    width: 1/3
    required: true
    placeholder: Indica la durata complessiva in termini di ore
  nextdate:
    label: Inizio dell'attività
    type:  date
    width: 1/3
    required: true
  line-d:
    type: line
  docenti:
    label: Ospiti
    type: structure
    entry: >
        {{nome}}<br />
        {{professione}}<br />
        {{organizzazione}}
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
      foto:
        label: Foto
        type: selector
        mode: single
        types:
          - image
      bio:
        label: Bio (max 400 caratteri)
        type: textarea
  line-e:
    type: line
  num_min:
    label: Partecipanti minimi
    type:  number
    width: 1/2
    required: true
    placeholder: Inserire un numero
  num_max:
    label: Partecipanti massimi
    type:  number
    width: 1/2
    required: true
    placeholder: Inserire un numero
  line-f:
    type: line
  output:
    label: Che tipo di output viene generato?
    type: checkboxes
    options:
      tecnologia: Tecnologia
      servizi: Processi
      prodotti: Prodotti
      competenze: Competenze
      technologies: Technologies
      services: Processes
      products: Products
      skills: Skills
    columns: 4
  line-g:
    type: line


