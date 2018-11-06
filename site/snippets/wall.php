<div class="elemento donazioni">
  <?php require('assets/ppipn/connection.php'); ?>
    <div class="titolosezione iniziale">
        <h2 class="didattica">↓ <?php echo l::get('hannodonato') ?></h2>
    </div>	
<?php	
$query1 = "SELECT nome,cognome,importo,transactionid,email,data,flaganon FROM donazioni WHERE ambito IN ('a','x','y','z')";
$query2 = "SELECT COALESCE(SUM(importo),0) AS tot FROM donazioni WHERE ambito IN ('a','x','y','z')";
$queryx = "SELECT COALESCE(SUM(importo),0) AS totx FROM donazioni WHERE ambito = 'x' ";
$queryy = "SELECT COALESCE(SUM(importo),0) AS toty FROM donazioni WHERE ambito = 'y' ";
$queryz = "SELECT COALESCE(SUM(importo),0) AS totz FROM donazioni WHERE ambito = 'z' ";
$querylibera = "SELECT COALESCE(SUM(importo),0) AS totlib FROM donazioni WHERE ambito = 'a' ";
if($stmt = $conn->prepare($query1)){
   $stmt->execute();
   /* Store the result (to get properties) */
   $stmt->store_result();
   /* Get the number of rows */
   $num_of_rows = $stmt->num_rows;
   /* Bind the result to variables */
   $stmt->bind_result($nome, $cognome, $importo, $transid, $email, $data, $anonimo);

   while ($stmt->fetch()) {
	   
	   if($anonimo == 0){

       $data = strtotime($data);

        $set = array("a", "b", "c", "d", "e", "f", "g", "h");
        $random = array_rand($set);
        $valore = $set[$random];

        echo '<h2 class="titolo"><span class="'.$valore.'">';
        echo '<span class="nome">'.$nome.' '.$cognome.'</span> <span class="importo">'.$importo.'€</span> <span class="data">'.date('d-M-Y', $data).'</span>';
        echo '</span></h2>';
	   } else if ($anonimo == 1){
        $data = strtotime($data);

        $set = array("a", "b", "c", "d", "e", "f", "g", "h");
        $random = array_rand($set);
        $valore = $set[$random];

        echo '<h2 class="titolo"><span class="'.$valore.'">';
        echo '<span class="nome">Anonymous</span> <span class="importo">'.$importo.'€</span> <span class="data">'.date('d-M-Y', $data).'</span>';
        echo '</span></h2>';
}
   }
   /* free results */
   $stmt->free_result();
   /* close statement */
   $stmt->close();
}
/* close connection */


$stmt1 = $conn->prepare($query2);
$result = $stmt1->execute();
$stmt1->store_result();
$stmt1->bind_result($totale);
$stmt1->fetch();
$stmt1->close();

$stmt2 = $conn->prepare($queryx);
$result = $stmt2->execute();
$stmt2->store_result();
$stmt2->bind_result($totalex);
$stmt2->fetch();
$stmt2->close();

$stmt3 = $conn->prepare($queryy);
$result = $stmt3->execute();
$stmt3->store_result();
$stmt3->bind_result($totaley);
$stmt3->fetch();
$stmt3->close();

$stmt4 = $conn->prepare($queryz);
$result = $stmt4->execute();
$stmt4->store_result();
$stmt4->bind_result($totalez);
$stmt4->fetch();
$stmt4->close();

$stmt5 = $conn->prepare($querylibera);
$result = $stmt5->execute();
$stmt5->store_result();
$stmt5->bind_result($totlibera);
$stmt5->fetch();
$stmt5->close();

$conn->close();

?>
</div>




<div class="about donazioni">

<div id="totale" class="unterzo">
<?php echo l::get('raccolto').'<span class="dato">'.$totale.'€ </span>'; ?>
</div>

<div id="totale" class="unterzo">
<?php echo l::get('allocato') ?><span class="dato"><?php echo $page->investimento()->text() ?> €</span>
</div>

<div id="totale" class="unterzo">
<?php echo l::get('erogate') ?><span class="dato"><?php echo $page->borse()->text() ?></span>
</div>

<div id="parziale" class="unterzo">
<?php echo l::get('raccoltox').'<span class="dato">'.$totalex.'€ </span>'; ?>
</div>

<div id="parziale" class="unterzo">
<?php echo l::get('raccoltoy').'<span class="dato">'.$totaley.'€ </span>'; ?>
</div>

<div id="parziale" class="unterzo">
<?php echo l::get('raccoltoz').'<span class="dato">'.$totalez.'€ </span>'; ?>
</div>

<div id="parziale" class="unterzo">
<?php echo l::get('raccoltofree').'<span class="dato">'.$totlibera.'€ </span>'; ?>
</div>


</div>