<html lang="<?php echo $site->locale() ?>">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 


    <script type="application/ld+json">
    { 
      "@type" : "Organization",
      "legalName" : "<?php echo $site->title()->text() ?>",
      "alternateName" : "<?php echo $site->description()->text() ?>",
      "url" : "<?php echo $site->website() ?>",
      "description" : "<?php echo $site->description()->text() ?>",
       "@type" : "ContactPoint", 
        "streetAddress" : "<?php echo $site->sedelegale()->text() ?>, <?php echo $site->sedeoperativa()->text() ?>",
        "addressLocality" : "<?php echo $site->city()->text() ?>",
        "addressRegion" : "<?php echo $site->region()->text() ?>",
        "addressCountry" : "Italy",
        "PostalCode" : "<?php echo $site->cap()->text() ?>",
        "telephone" : "<?php echo $site->cell1()->text() ?>",
        "contactType" : "administration",
        "logo" : "<?php echo $site->website() ?>/content/<?php echo $site->sharedimage()->text() ?>" 
    
    }
    </script>

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">




  <title>Qual è l'impatto sociale, culturale ed economico de La Scuola Open Source?</title>

      <meta name="description" content="Come si misura l'impatto di un progetto culturale? Noi ci stiamo provando così, dai un'occhiata al nostro bilancio sociale aperto e in divenire.">

      <meta name="keywords" content="<?php echo $site->keywords()->text() ?>">

      <meta property="og:url"           content="<?php echo $page->url() ?>" />

      <meta property="og:title"         content="Qual è l'impatto sociale, culturale ed economico de La Scuola Open Source?" />

      <meta property="og:image"     content="http://www.lascuolaopensource.xyz/assets/images/openbalance.jpg" />

      <meta property="og:type"        content="website" />
      <meta property="og:description" content="Come si misura l'impatto di un progetto culturale? Noi ci stiamo provando così, dai un'occhiata al nostro bilancio sociale aperto e in divenire." />

      <meta name="twitter:title" content="Qual è l'impatto sociale, culturale ed economico de La Scuola Open Source?" />
      <meta name="twitter:site" content="http://www.lascuolaopensource.xyz">
      <meta name="twitter:description" content="Come si misura l'impatto di un progetto culturale? Noi ci stiamo provando così, dai un'occhiata al nostro bilancio sociale aperto e in divenire." />

      <meta name="twitter:image" content="http://www.lascuolaopensource.xyz/assets/images/openbalance.jpg" >


  <!-- FaviconS -->


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script async type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
  <script async type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

<!--  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>-->
  <script type="text/javascript" src="/assets/javascript/goalProgress.js"></script>
  <script type="text/javascript" src="/assets/javascript/tableTop.js"></script>

  <?php echo js('assets/javascript/jquery.slimscroll.min.js') ?>
  <?php echo js('assets/javascript/imagesloaded.pkgd.min.js') ?>

  <?php echo css('assets/css/main2.css') ?>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css"> <!-- 3 KB -->

    <script>
    $(document).ready(function(){   
    
                //When btn is clicked
                $(".btn-responsive-menu").click(function() {
                        $("#mainmenu").toggleClass("show");
                
                });
    
    });
    </script>

<script>
$(document).ready(function(){
  
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  
});</script>


<?php

ff_cookies(); 
?>

</head>


<body>

<?php 
ff_addpixels();
?>




