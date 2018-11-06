<?php namespace Listener;

// Set this to true to use the sandbox endpoint during testing:
$enable_sandbox = false;

// Use this to specify all of the email addresses that you have attached to paypal:
$my_email_addresses = array("info@lascuolaopensource.xyz");

// Set this to true to send a confirmation email:
$send_confirmation_email = false;
$confirmation_email_address = "My Name <info@lascuolaopesource.xyz>";
$from_email_address = "My Name <info@lascuolaopesource.xyz>";

// Set this to true to save a log file:
$save_log_file = true;
$log_file_dir = __DIR__ . "/logs";

// Here is some information on how to configure sendmail:
// http://php.net/manual/en/function.mail.php#118210

require('paypalIPN.php');
require_once('connection.php');
use PaypalIPN;
$ipn = new PaypalIPN();
if ($enable_sandbox) {
    $ipn->useSandbox();
}
$verified = $ipn->verifyIPN();

$data_text = "";
foreach ($_POST as $key => $value) {
    $data_text .= $key . " = " . $value . "\r\n";
}


// Check the receiver email to see if it matches your list of paypal email addresses
$receiver_email_found = false;
foreach ($my_email_addresses as $a) {
    if (strtolower($_POST["receiver_email"]) == strtolower($a)) {
        $receiver_email_found = true;
        break;
    }
}

date_default_timezone_set("Europe/Rome");
list($year, $month, $day, $hour, $minute, $second, $timezone) = explode(":", date("Y:m:d:H:i:s:T"));
$date = $year . "-" . $month . "-" . $day;
$timestamp = $date . " " . $hour . ":" . $minute . ":" . $second . " " . $timezone;
$dated_log_file_dir = $log_file_dir . "/" . $year . "/" . $month;

function user_exist_control($email){
	$exist=false;
	$stmt2 = $conn->prepare("SELECT email FROM motivazione WHERE email = ? ");
	$stmt2->bind_param("s", $email);
	$result = $stmt2->execute();
	$stmt2->close();
	$conn->close();
	$result=mysqli_query($conn, $query_exist);
	if(is_resource($result) && mysqli_num_rows($result) == 1 ){
		$exsist=true;
	}
}

//Variabile di controllo del valore del flag anonimo
$flaganon = "anonimo";

$paypal_ipn_status = "VERIFICATION FAILED";
if ($verified) {
    $paypal_ipn_status = "RECEIVER EMAIL MISMATCH";
    if ($receiver_email_found) {
        $paypal_ipn_status = "Completed Successfully";

        // Process IPN
        // A list of variables are available here:
        // https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/

        // This is an example for sending an automated email to the customer when they purchases an item for a specific amount:
         if ($_POST["payment_status"] == "Completed") {
			
			
            $nome = $_POST["first_name"];
			$cognome = $_POST["last_name"];
			$email = $_POST["payer_email"];
			$amount = $_POST["mc_gross"];
			$date1 = $_POST["payment_date"];
			$dateTime = strtotime($date1);
			$date = date('Y-m-d H:i:s', $dateTime);
			$transid = $_POST["txn_id"];
			$indirizzo = '';
			$zipcode = '';
			$city = '';
			$anon1 = $_POST["custom"];
			$ambito = $_POST["item_number"];
			if ($anon1 == $flaganon){
				$anonimo = 1;
				} else {
					$anonimo = 0;
				}
			if(isset($_POST["address_street"],$_POST["address_zip"])){
				$indirizzo=$_POST["address_street"];
				$zipcode=$_POST["address_zip"];
				$city = $_POST["address_city"];
				}

                   if($ambito == 'a' || $ambito == 'x' || $ambito == 'y' || $ambito == 'z'){

	               $stmt1 = $conn->prepare("INSERT INTO donazioni (nome,cognome,importo,transactionid,email,data,flaganon,ambito) VALUES (?,?,?,?,?,?,?,?)");
                       $stmt1->bind_param("ssssssis", $nome, $cognome, $amount, $transid, $email, $date, $anonimo, $ambito);
                       $stmt1->execute();
                   } else {
                       $stmt1 = $conn->prepare("INSERT INTO pagamenti (nome,cognome,importo,transactionid,email,data) VALUES (?,?,?,?,?,?)");
                       $stmt1->bind_param("ssssss", $nome, $cognome, $amount, $transid, $email, $date);
                       $stmt1->execute();
                       }
                       


				$stmt = $conn->prepare("INSERT INTO anagrafica (nome,cognome,indirizzo,email,citta,codicepostale) VALUES (?,?,?,?,?,?)");
                $stmt->bind_param("ssssss", $nome, $cognome, $indirizzo, $email, $city, $zipcode);
                $stmt->execute();
                $stmt->close();
			    $conn->close();
					
        }


    }
} 

if ($save_log_file) {
    // Create log file directory
    if (!is_dir($dated_log_file_dir)) {
        if (!file_exists($dated_log_file_dir)) {
            mkdir($dated_log_file_dir, 0777, true);
            if (!is_dir($dated_log_file_dir)) {
                $save_log_file = false;
            }
        } else {

            $save_log_file = false;
        }
    }
    // Restrict web access to files in the log file directory
    $htaccess_body = "RewriteEngine On" . "\r\n" . "RewriteRule .* - [L,R=404]";
    if ($save_log_file && (!is_file($log_file_dir . "/.htaccess") || file_get_contents($log_file_dir . "/.htaccess") !== $htaccess_body)) {
        if (!is_dir($log_file_dir . "/.htaccess")) {
            file_put_contents($log_file_dir . "/.htaccess", $htaccess_body);
            if (!is_file($log_file_dir . "/.htaccess") || file_get_contents($log_file_dir . "/.htaccess") !== $htaccess_body) {
                $save_log_file = false;
            }
        } else {
            $save_log_file = false;
        }
    }
    if ($save_log_file) {
        // Save data to text file
        file_put_contents($dated_log_file_dir . "/" . "paypal_ipn_" . $date . ".txt", "paypal_ipn_status = " . $paypal_ipn_status . "\r\n" . "paypal_ipn_date = " . $timestamp . "\r\n" . $data_text . "\r\n", FILE_APPEND);
    }
}

if ($send_confirmation_email) {
    // Send confirmation email
    mail($confirmation_email_address, $test_text . "PayPal IPN : " . $paypal_ipn_status, "paypal_ipn_status = " . $paypal_ipn_status . "\r\n" . "paypal_ipn_date = " . $timestamp . "\r\n" . $data_text, "From: " . $from_email_address);
}

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly
header("HTTP/1.1 200 OK");
