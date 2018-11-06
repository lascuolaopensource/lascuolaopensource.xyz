<?php
require_once "assets/google-api-php-client/src/Google/autoload.php";
require_once "assets/google-api-php-client/src/Google/Client.php";
require_once "assets/google-api-php-client/src/Google/Service/Calendar.php";
date_default_timezone_set('Europe/Rome');
?>



<?php
// Service Account info
$client_id = '61e5afb6aba192e98df7ace55f880c8a68dde81b';
$service_account_name = 'google-api@lascuolaopensour-1479635233499.iam.gserviceaccount.com';
$key_file_location = 'assets/lascuolaopensource-61e5afb6aba1.json';

// Calendar id
$calName = 'ugalviieecumk4unfr99t8athk@group.calendar.google.com';


$client = new Google_Client();
$client->setApplicationName("Calendar test");

$service = new Google_Service_Calendar($client);

$key = json_decode(file_get_contents($key_file_location));

$cred = new Google_Auth_AssertionCredentials(
 $service_account_name,
 array('https://www.googleapis.com/auth/calendar.readonly'),
 $key->private_key
);

$client->setAssertionCredentials($cred);

$cals = $service->calendarList->listCalendarList();

// Converte eventi ricorrenti in un singolo evento (cioè se dura tutto il giorno te lo fa vedere una volta sola scrivendoti all day)
// Cerca eventi da oggi a oggi+1mese
$params = array(
 'singleEvents' => TRUE,
 'timeMin' => (new DateTime())->format(DateTime::RFC3339),
 'timeMax' => (new DateTime())->add(new DateInterval('P2M'))->format(DateTime::RFC3339),
'orderBy' => 'startTime',
);
$events = $service->events->listEvents($calName, $params);

if(($events->getItems())){
?>
<button class="accordion"><?php echo l::get('agenda') ?></button>
        <div class="panel">

<div class="calendario">
<?php
foreach ($events->getItems() as $event) {   //Apro il foreach per ciclare sugli eventi
 $data = new DateTime($event->getStart()->dateTime);  //Iniziallizzo variabile data per la successiva gestione dei nomi dei mesi
 
  ?>

<a href="<?php echo $event->getLocation(); ?>">
<?php if ($data->format('m')== 1): ?>
 <div class="appuntamento">
   <?php elseif ($data->format('m')== 2): ?>
    <div class="appuntamento due">

   <?php elseif ($data->format('m')== 3): ?>
    <div class="appuntamento uno">

   <?php elseif ($data->format('m')== 4): ?>
    <div class="appuntamento due">

   <?php elseif ($data->format('m')== 5): ?>
    <div class="appuntamento uno">

   <?php elseif ($data->format('m')== 6): ?>
    <div class="appuntamento due">

   <?php elseif ($data->format('m')== 7): ?>
    <div class="appuntamento uno">

   <?php elseif ($data->format('m')== 8): ?>
    <div class="appuntamento due">

   <?php elseif ($data->format('m')== 9): ?>
    <div class="appuntamento uno">

   <?php elseif ($data->format('m')== 10): ?>
    <div class="appuntamento due">

   <?php elseif ($data->format('m')== 11): ?>
    <div class="appuntamento uno">

   <?php elseif ($data->format('m')== 12): ?>
    <div class="appuntamento due">

   <?php endif ?>

    <div class="blocchetto uno">
     <h3 class="data"><?php echo $data->format('d'); ?></h3>

<!-- Inizio gestione nomi dei mesi -->
   <?php if ($data->format('m')== 1): ?>  
    <h3 class="mese"><?php echo l::get('gennaio') ?></h3>
 
   <?php elseif ($data->format('m')== 2): ?>
    <h3 class="mese"><?php echo l::get('febbraio') ?></h3>
 
   <?php elseif ($data->format('m')== 3): ?>
    <h3 class="mese"><?php echo l::get('marzo') ?></h3>
 
   <?php elseif ($data->format('m')== 4): ?>
    <h3 class="mese"><?php echo l::get('aprile') ?></h3>
 
   <?php elseif ($data->format('m')== 5): ?>
    <h3 class="mese"><?php echo l::get('maggio') ?></h3>
 
   <?php elseif ($data->format('m')== 6): ?>
    <h3 class="mese"><?php echo l::get('giugno') ?></h3>
 
   <?php elseif ($data->format('m')== 7): ?>
    <h3 class="mese"><?php echo l::get('luglio') ?></h3>
 
   <?php elseif ($data->format('m')== 8): ?>
    <h3 class="mese"><?php echo l::get('agosto') ?></h3>
 
   <?php elseif ($data->format('m')== 9): ?>
    <h3 class="mese"><?php echo l::get('settembre') ?></h3>
 
   <?php elseif ($data->format('m')== 10): ?>
    <h3 class="mese"><?php echo l::get('ottobre') ?></h3>
 
   <?php elseif ($data->format('m')== 11): ?>
    <h3 class="mese"><?php echo l::get('novembre') ?></h3>
 
   <?php elseif ($data->format('m')== 12): ?>
    <h3 class="mese"><?php echo l::get('dicembre') ?></h3>
 
   <?php endif ?>

       <h3 class="orario"><?php echo $data->format('H:i'); ?></h3>
      </div>
      <div class="blocchetto due">
       <h3 class="cosa"><?php echo $event->getSummary(); ?></h3>
      </div>
</div>
</a>

<?php 
}

//Funzione per la gestione di eventi ricorrenti e formattazione data. Attualmente non utilizzata.
//Lasciare commentato.
/*function fmt_gdate( $gdate ) {
  if ($val = $gdate->getDateTime()) {
    return (new DateTime($val))->format( 'd/m/Y H:i' );
  } else if ($val = $gdate->getDate()) {
    return (new DateTime($val))->format( 'd/m/Y' ) . ' (all day)';
  }
} */
?>

</div>
</div>
<script>
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
    var acc = document.getElementsByClassName("accordion");
    var i;

   for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }</script>
	
<?php
}
?>

