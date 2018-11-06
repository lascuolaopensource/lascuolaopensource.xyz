<?php if(!defined('KIRBY')) exit ?>

title: Teaching
pages: false
files:
  sortable: true
fields:
  title:
    label: Titolo
    type:  text
    width: 1/2
  info-a:
    label: ATTENZIONE!
    type: info
    width: 1/2
    text: >
      Per caricare contenuti in inglese cliccare su IT (in alto a destra) e passare a EN. Una volta fatto i testi dei contenuti possono essere sostituiti con quelli in lingua inglese. Per i bottoni a scelta multipla basta selezionare la voce italiana quando si è in modalità IT e quella inglese in modalità EN. 
  xyz:
    label: Classificazione (prevalente)
    type: radio
    options:
      x: x - comunicazione
      y: y - strumenti
      z: z - processi
    columns: 3
  paypal:
    label: ID PAYPAL
    type:  text
  formid:
    label: URL FORM PRE-ISCRIZIONE AL CORSO
    type:  url
    width: 1/2
  excel:
    label: PUB-KEY EXCEL ISCRIZIONI
    type:  text
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
    mode: single
    types:
      - image
  level:
    label: Livello di difficoltà
    type: radio
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
    options:
      ELP: Extreme Learning Path
      Residenza: Residenza
      Lezione: Lezioni / Performance
      Laboratorio: Laboratori / Seminari
      xyz: Format XYZ
      eventi: Eventi culturali
      singularity: Format verticali
      macchine: Corsi Macchine
      Lecture: Lecture / Performance
      Workshop: Workshop
      xyz: Format XYZ
      events: Cultural Events
      singularity: Vertical Format
      machines: Machines
    columns: 3
  tags:
    label: Ambiti tematici (parole chiave)
    type: tags
    width: 1/3
  prezzo:
    label: Costo in € per studente
    type: number
    width: 1/3
  ragione:
    label: A cosa serve il costo? (pernotti, pranzi, iscrizione, etc…)
    type: text
    width: 1/3
  line-b:
    type: line
  bisogni:
    label: A quali bisogni risponde?
    type:  textarea
    required: true
    placeholder: Descrivi la domanda (esplicita o implicita) a cui risponde questa attività
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
  svolgimento:
    label: Articolazione del corso (max 400 caratteri)
    type:  textarea
    required: true
    placeholder: Quanti giorni (anche non consecutivi) sono necessari per lo svolgimento dell'attività?
  durata:
    label: Durata oraria di ogni incontro?
    type:  number
    width: 1/2
    required: true
    placeholder: Indica la durata di ogni incontro in termini di ore
  deadline:
    label: Deadline per le iscrizioni
    type:  date
    width: 1/2
    required: true
  nextdate:
    label: Inizio dell'attività
    type:  date
    width: 1/2
    required: true
  lunghezza:
    label: Da quante ore (totali) è composto l'attività?
    type:  number
    width: 1/2
    required: true
    placeholder: Indica la durata complessiva in termini di ore
  appuntamenti:
    label: date del corso
    type: structure
    entry: >
        {{data}}<br />
        {{inizio}}<br />
        {{fine}}
    fields:
      appuntamento:
        label: Data del corso
        type:  date
        format: DD/MM/YYYY
        required: true
      inizio:
        label: Orario di inizio
        type: text
      fine:
        label: Orario di fine
        type: text
  line-d:
    type: line
  docenti:
    label: Docenti / Tutor
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
    label: Numero minimo di partecipanti
    type:  number
    width: 1/2
    required: true
    placeholder: Inserire un numero
  num_max:
    label: Numero massimo di partecipanti
    type:  number
    width: 1/2
    required: true
    placeholder: Inserire un numero
  programma:
    label: Come si svolge questa attività?
    type:  textarea
    required: true
    placeholder: Inserire una descrizione generale del programma, indicando fasi, modalità di lavoro, etc…
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
  output2:
    label: Descrivi qualitativamente gli output
    type:  textarea
    required: true
    placeholder: Cosa viene realizzato durante questa attività?
  line-H:
    type: line
  info-z:
    label: AMMINISTRAZIONE
    type: info
    text: >
      Di seguito i dati necessari per visualizzare la dashboard del corso
  spesaprev:
    label: Spesa complessiva preventivata
    type:  text
    width: 1/2
  spesacons:
    label: Spesa complessiva sostenuta (a consuntivo)
    type:  text
    width: 1/2
  preventivoricavi:
    label: ricavi preventivati
    type:  text
    width: 1/2
  consuntivoricavi:
    label: ricavi effettivi
    type:  text
    width: 1/2
  utile:
    label: utile
    type:  text
    width: 1/2
  score:
    label: score feedback (NPS) - indice di qualità
    type:  text
    width: 1/2
  line-x:
    type: line
  paganti:
    label: paganti
    type:  text
    width: 1/2
  borse:
    label: borse di studio usate per il corso
    type:  text
    width: 1/2
  line-y:
    type: line
  pugliesi:
    label: quanti pugliesi? (un numero)
    type:  text
    width: 1/2
  nonpugliesi:
    label: quanti extra-puglia? (un numero)
    type:  text
    width: 1/2
