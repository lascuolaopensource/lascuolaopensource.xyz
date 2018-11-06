<link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- MODIFICA IL PERCORSO DI newsstyle.css -->
<link rel="stylesheet" type="text/css" href="css/newsstyle.css">


<script type="text/javascript">

 
setTimeout(function() {
$('#myModal').modal({
  overflow: "auto",
  show:true,
    backdrop:true,
    keyboard:true
});
}, 5000);	

$(document).ready(function() {
  $(':input[type="submit"]').prop('disabled', true);
  $("#submitbtn").click(function(){
    var email = $("#email").val();
    $.ajax({
      type: "POST",
	  <!-- MODIFICA IL PERCORSO DI newsletter.php -->
      url: "newsletter.php",
      data: { 'email':email },
      dataType: "html",
      success: function(msg)
      {
        $("#risultato").html(msg);
      },
      error: function()
      {
        alert("Invio fallito, si prega di riprovare...");
      }
    });
  });



$('#email').on('keypress keydown keyup mousemove tap', function(){

var email_reg_exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/;
var email = document.getElementById("email").value;
if (!email_reg_exp.test(email) || (email == "") || (email == "undefined")) {
        $(':input[type="submit"]').prop('disabled', true);

}else {
	  $(':input[type="submit"]').prop('disabled', false);

}

});

});
	
</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:#ff00ee;">x</button>
          <h4 class="modal-title">NEWSLETTER</h4>
        </div>
        <div class="modal-body">
          <p>Resta aggiornato sulle pensioni!</p>
              <form class="inline-form" method="post" role="form" id="newsform">
                    <div class="input-group">
					    <span class="input-group-btn">
						<input class="form-control" id="email" name="email" placeholder="latua@email.it">
						<button id = "submitbtn" name="submit" type="submit" class="btn btn-default" data-dismiss="modal">Iscriviti</button>
                      </span>
                    </div>

              </form> 
			  </div>
        
      </div>
      
    </div>
  </div>
