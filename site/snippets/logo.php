
<script>
    function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 10,
  headerEl = document.getElementById('js-header');
  clearEl = document.getElementById('clear');
  
  if (distanceY > shrinkOn) {
    headerEl.classList.add("smaller");
    clearEl.classList.add("smaller");
  } else {
    headerEl.classList.remove("smaller");
    clearEl.classList.remove("smaller");

  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);
</script>
<header id="js-header">

    <a title="logo" href="<?php echo l::get('lingua') ?>">

<div class="bg">

    <div class="laptop">
    <p class="logo" style="color: white;">
        <span class="parola">
            <span class="letter colore a1">L</span>
            <span class="letter colore a2">a</span>
        </span>
        <span class="parola">
            <span class="letter colore a3">S</span>
            <span class="letter colore a4">c</span>
            <span class="letter colore a5">u</span>
            <span class="letter colore a6">o</span>
            <span class="letter colore a7">l</span>
            <span class="letter colore a8">a</span>
        </span>
        <span class="parola">
            <span class="letter colore a9">O</span>
            <span class="letter colore a10">p</span>
            <span class="letter colore a11">e</span>
            <span class="letter colore a12">n</span> 
        </span>
        <span class="parola">
            <span class="letter colore a13">S</span>
            <span class="letter colore a14">o</span>
            <span class="letter colore a15">u</span>
            <span class="letter colore a16">r</span>
            <span class="letter colore a17">c</span>
            <span class="letter colore a18">e</span>
        </span>
    </p>
    </div>

    <div class="mobile">
    <p class="logo due" style="color: white;">
        <span class="parola due">
            <span class="letter colore a1">S</span>
            <span class="letter colore a2">O</span>
            <span class="letter colore a3">S</span>
        </span>
    </p>
    </div>

</div> 
</a>



<!-- ########################## COLORI PRIMA DEL RANDOM ####################### -->

<!-- Se si abilitano i colori decommentando le istruzioni nel codice js la sritta inizialmente sarà bianca SOLAMENTE dopo i 3 colori verranno assegnati in maniera random. Se non si vuole che la scritta al caricamento della pagina NON sia bianca, bisogna aggiungere ad ogni <span> un colore in maniera alternata tramite codice css inline. Il codice js si occuperà di rimuovere l' attributo style e assegnare i colori in maniera random -->

<!--
<div class="laptop">
    <p class="logo">
        <span class="parola">
            <span class="letter colore" style="color: #12C8BB;">L</span>
            <span class="letter colore" style="color: #FFD400;">a</span>
        </span>
        <span class="parola">
            <span class="letr colore" style="color: #FFD400;">a</span>
        </span>
        <span class="parola">
            <span class="letter colore" style="color: #dd65d8;">O</span>
            <span class="letter colore" style="color: #12C8BB;">p</span>
            <span class="letter colore" style="color: #FFD400;">e</span>
            <span class="letter colore" style="color: #dd65d8;">n</span> 
        </span>
        <span class="parola">
            <span class="letter colore" style="color: #12C8BB;">S</span>
            <span class="letter colore" style="color: #FFD400;">o</span>
            <span class="letter colore" style="color: #dd65d8;">u</span>
            <span class="letter colore" style="color: #12C8BB;">r</span>
            <span class="letter colore" style="color: #FFD400;">c</span>
            <span class="letter colore" style="color: #dd65d8;">e</span>
        </span>
    </p>
</div>  
-->

<script type="text/javascript">


    var classes = ["a","b","c","d","e","f","g","h"];
    var colors = ["c1","c2","c3"];
    
    var $div = $(".letter");
    var $divColor = $(".colore");
    
    var $div1 = $(".a1");
    var $div2 = $(".a2");
    var $div3 = $(".a3");
    var $div4 = $(".a4");
    var $div5 = $(".a5");
    var $div6 = $(".a6");
    var $div7 = $(".a7");
    var $div8 = $(".a8");
    var $div9 = $(".a9");
    var $div10 = $(".a10");
    var $div11 = $(".a11");
    var $div12 = $(".a12");
    var $div13 = $(".a13");
    var $div14 = $(".a14");
    var $div15 = $(".a15");
    var $div16 = $(".a16");
    var $div17 = $(".a17");
    var $div18 = $(".a18");

    //var $divColor = $(".colore");

  
    

    //Font random
        $div1.each(function(index){
            $('.a1').delay(100).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });

        });//each

      
        $div2.each(function(index){
            $('.a2').delay(110).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div3.each(function(index){
            $('.a3').delay(120).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div4.each(function(index){
            $('.a4').delay(130).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div5.each(function(index){
            $('.a5').delay(140).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div6.each(function(index){
            $('.a6').delay(150).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div7.each(function(index){
            $('.a7').delay(160).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div8.each(function(index){
            $('.a8').delay(170).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div9.each(function(index){
            $('.a9').delay(180).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div10.each(function(index){
            $('.a10').delay(190).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div11.each(function(index){
            $('.a11').delay(200).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div12.each(function(index){
            $('.a12').delay(210).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div13.each(function(index){
            $('.a13').delay(220).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div14.each(function(index){
            $('.a14').delay(230).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div15.each(function(index){
            $('.a15').delay(240).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div16.each(function(index){
            $('.a16').delay(250).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div17.each(function(index){
            $('.a17').delay(260).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        $div18.each(function(index){
            $('.a18').delay(270).queue(function(){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );
                $(this).addClass( (colors[ Math.floor( Math.random() * colors.length ) ]) );
            });
        });//each

        
        //######################################################################################################
        //######################################################################################################
        //######################################################################################################
        //######################################################################################################

        //RIPRESA CAMBIAMENTO CLASSI
        setInterval(function() {

        //Font random
        $div.each(function(index){

            $(this).removeClass( classes.join(" ") );
            $(this).addClass( (classes[ Math.floor( Math.random() * classes.length ) ]) );

        });//each

        //Colore random
        /*
        $divColor.each(function(index2){

            $(this).removeAttr("style"); //questa istruzione si mette in caso si devida di avere le lettere colorate prima del random
            $(this).removeClass( colors.join(" ") );
            $(this).addClass( colors[ Math.floor( Math.random() * colors.length ) ] );
           
        });//each */

    }, 271); //setInterval 

    
<!--begin snippet: js hide: false console: true babel: false -->

    

</script>


<?php
function prima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

<?php
function seconda() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

<?php
function terza() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

<?php
function quarta() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

<?php
function quinta() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

<?php
function sesta() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

<?php
function settima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function ottava() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function nona() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function decima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function undicesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function dodicesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function tredicesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function quattordicesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function quindicesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function sedicesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function diciassettesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>
<?php
function diciottesima() 
{
    $set = array("a", "b", "c", "d", "e", "f", "g", "h");
    $random = array_rand($set);
    $valore = $set[$random];

    echo "$valore";
}

?>

