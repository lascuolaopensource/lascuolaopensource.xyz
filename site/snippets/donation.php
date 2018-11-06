<div class="titolosezione donazioni">
<h2 class="didattica">
✨ <?php echo $page->title()->text() ?> ✨</h2>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <div id="claim">
<?php echo $page->intro()->markdown() ?>
	</div>
<div class="bottoniera">
<script>
var counter = 0;
function anonymous(){          
	        if(counter == 0){
            $('#form_donazione_lib').append('<input type="hidden" id="custom" name="custom" value="anonimo"/>');
			$('#form_donazione_x').append('<input type="hidden" id="custom" name="custom" value="anonimo"/>');
            $('#form_donazione_y').append('<input type="hidden" id="custom" name="custom" value="anonimo"/>');
            $('#form_donazione_z').append('<input type="hidden" id="custom" name="custom" value="anonimo"/>');
			counter = 1;
			}else if(counter == 1){
	        $('#form_donazione_lib').children('#custom').remove();
			$('#form_donazione_x').children('#custom').remove();
			$('#form_donazione_y').children('#custom').remove();
	        $('#form_donazione_z').children('#custom').remove();
            counter=0;
	        }
        };
</script>

<div class="anonimo">
	<input type="checkbox" name="anon" value="anonimo" id="anon" onclick="anonymous();">☞  <?php echo l::get('anonimo') ?>
</div>

<!-- Form donazione libera -->
<form class="unquarto" action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top' id='form_donazione_lib' name='form_donazione_lib'>

<!-- PayPal will send an IPN notification to this URL: -->
<input type="hidden" name="notify_url"
value="www.lascuolaopensource.xyz/assets/ppipn/listenerIPN.php" /> 

<!-- The return page to which the user is
navigated after the donations is complete: -->
<input type="hidden" name="return"
value="http://www.lascuolaopensource.xyz" /> 

<!-- Signifies that the transaction data will be
passed to the return page by POST: -->
<input type="hidden" name="rm" value="2" /> 
<input type='hidden' name='cmd' value='_s-xclick' />

<input type='hidden' name='hosted_button_id' value='BLQA7D5ZWFYVL'/>
<input type='image' alt='Submit' src='http://www.lascuolaopensource.xyz/assets/images/dona.jpg' border='0' id='btn_donation' />
<img alt='' border='0' src='https://www.paypalobjects.com/it_IT/i/scr/pixel.gif' width='1' height='1'>
</form>


<!-- Form donazione x -->
<form class="unquarto" action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top' id='form_donazione_x' name='form_donazione_x'>

<input type="hidden" id="item_number" name="item_number" value="x"/>

<!-- PayPal will send an IPN notification to this URL: -->
<input type="hidden" name="notify_url"
value="www.lascuolaopensource.xyz/assets/ppipn/listenerIPN.php" /> 

<!-- The return page to which the user is
navigated after the donations is complete: -->
<input type="hidden" name="return"
value="http://www.lascuolaopensource.xyz" /> 

<!-- Signifies that the transaction data will be
passed to the return page by POST: -->
<input type="hidden" name="rm" value="2" /> 
<input type='hidden' name='cmd' value='_s-xclick' />


<input type='hidden' name='hosted_button_id' value='T8RDF3R2XEW5G'/>
<input type='image' alt='Submit' src='http://www.lascuolaopensource.xyz/assets/images/x.jpg' border='0' id='btn_donation' />
<img alt='' border='0' src='https://www.paypalobjects.com/it_IT/i/scr/pixel.gif' width='1' height='1'>
</form>

<!-- Form donazione y -->
<form class="unquarto" action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top' id='form_donazione_y' name='form_donazione_y'>

<input type="hidden" id="item_number" name="item_number" value="y"/>


<!-- PayPal will send an IPN notification to this URL: -->
<input type="hidden" name="notify_url"
value="www.lascuolaopensource.xyz/assets/ppipn/listenerIPN.php" /> 

<!-- The return page to which the user is
navigated after the donations is complete: -->
<input type="hidden" name="return"
value="http://www.lascuolaopensource.xyz" /> 

<!-- Signifies that the transaction data will be
passed to the return page by POST: -->
<input type="hidden" name="rm" value="2" /> 
<input type='hidden' name='cmd' value='_s-xclick' />


<input type='hidden' name='hosted_button_id' value='HTGK8WQM5L99S'/>
<input type='image' alt='Submit' src='http://www.lascuolaopensource.xyz/assets/images/y.jpg' border='0' id='btn_donation' />
<img alt='' border='0' src='https://www.paypalobjects.com/it_IT/i/scr/pixel.gif' width='1' height='1'>
</form>



<!-- Form donazione z -->
<form class="unquarto" action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top' id='form_donazione_z' name='form_donazione_z'>

<input type="hidden" id="item_number" name="item_number" value="z"/>

<!-- PayPal will send an IPN notification to this URL: -->
<input type="hidden" name="notify_url"
value="www.lascuolaopensource.xyz/assets/ppipn/listenerIPN.php" /> 

<!-- The return page to which the user is
navigated after the donations is complete: -->
<input type="hidden" name="return"
value="http://www.lascuolaopensource.xyz" /> 

<!-- Signifies that the transaction data will be
passed to the return page by POST: -->
<input type="hidden" name="rm" value="2" /> 
<input type='hidden' name='cmd' value='_s-xclick' />


<input type='hidden' name='hosted_button_id' value='W34HVHKQ8TVL8'/>
<input type='image' alt='Submit' src='http://www.lascuolaopensource.xyz/assets/images/z.jpg' border='0' id='btn_donation' />
<img alt='' border='0' src='https://www.paypalobjects.com/it_IT/i/scr/pixel.gif' width='1' height='1'>
</form>

</div>


<div class="about">

<div class="colonna donazioni">
<?php echo $page->testo1()->markdown() ?>
</div>

<div class="colonna donazioni">
<?php echo $page->testo2()->markdown() ?>
</div>

</div>

