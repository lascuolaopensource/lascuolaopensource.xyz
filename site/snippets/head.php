<html lang="<?php echo $site->locale() ?>">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
  <?php if ($page->parent()->title() == "Didattica"): ?>

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Course",
      "name": "<?php echo $page->title()->text() ?>",
      "image": "<?php echo $page->cover()->url() ?>",
      "description": "<?php echo $page->bisogni()->text()->text() ?>",
      "provider": {
        "@type": "Organization",
        "name": "La Scuola Open Source",
        "sameAs": "http://www.lascuolaopensource.xyz"
      }
    }
    </script>

  <?php elseif ($page->parent()->title() == "Eventi"): ?>

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Event",
      "name": "<?php echo $page->title()->text() ?>",
      "startDate" : "<?php $nextdate = strtotime($page->nextdate());
                          echo date('d-m-Y', $nextdate); ?>",
      "endDate" : "<?php $nextdate = strtotime($page->nextdate());
                          echo date('d-m-Y', $nextdate); ?>",
      "image": "<?php echo $page->cover()->url() ?>",
      "description": "<?php echo $page->description()->text() ?>",
      "url" : "<?php echo $page->url() ?>",
      "location" : {
        "@type" : "Place",
        "sameAs" : "http://www.lascuolaopensource.xyz",
        "name" : "La Scuola Open Source",
        "address" : "Strada Lamberti 16, Bari, 70122"
      }
    }
    </script>

  <?php else: ?>

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

  <?php endif ?>

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

  <?php if ($page->parent()->title() == "Didattica"): ?>
  <title><?php echo $page->title()->text() ?> @ <?php echo $page->luogo()->text() ?> | <?php echo $page->category()->text() ?> <?php echo l::get('dilivello') ?> <?php echo $page->level()->text() ?></title>
  <?php elseif ($page->parent()->title() == "Eventi"): ?>
  <title><?php echo $page->title()->text() ?> @ <?php echo $page->luogo()->text() ?> | <?php echo $page->category()->text() ?></title>
  <?php elseif ($page->parent()->title() == "Blog"): ?>
  <title><?php echo $page->title()->text() ?></title>
  <?php else: ?>
  <title><?php echo $site->title()->text() ?>: <?php echo $site->claim()->text() ?></title>
  <?php endif ?>

  <?php if ($page->parent()->title() == "Didattica"): ?>
      <meta name="description" content="<?php echo excerpt($page->bisogni()->text(), 200) ?>">
  <?php elseif ($page->parent()->title() == "Eventi"): ?>
      <meta name="description" content="<?php echo excerpt($page->description()->text(), 200) ?>">
  <?php elseif ($page->parent()->title() == "Blog"): ?>
      <meta name="description" content="<?php echo excerpt($page->text()->text(), 200) ?>">
  <?php else: ?>
      <meta name="description" content="<?php echo excerpt($site->description()->text(), 200) ?>">
  <?php endif ?>

  <?php if ($page->parent()->title() == "Didattica"): ?>
  <meta name="keywords" content="<?php echo $page->tags()->text() ?>">
  <?php elseif ($page->parent()->title() == "Eventi"): ?>
  <meta name="keywords" content="<?php echo $page->tags()->text() ?>">
  <?php elseif ($page->parent()->title() == "Blog"): ?>
  <meta name="keywords" content="<?php echo $page->tags()->text() ?>">
  <?php else: ?>
  <meta name="keywords" content="<?php echo $site->keywords()->text() ?>">
  <?php endif ?>

  <meta property="og:url"           content="<?php echo $page->url() ?>" />

  <?php if ($page->parent()->title() == "Didattica"): ?>
  <meta property="og:title"         content="<?php echo $page->title()->text() ?> @ <?php echo $page->luogo()->text() ?>" />
  <?php elseif ($page->parent()->title() == "Eventi"): ?>
  <meta property="og:title"         content="<?php echo $page->title()->text() ?> @ <?php echo $page->luogo()->text() ?>" />
  <?php elseif ($page->parent()->title() == "Blog"): ?>
  <meta property="og:title"         content="<?php echo $page->title()->text() ?> — SOS" />
  <?php else: ?>
  <meta property="og:title"         content="<?php echo $site->title()->text() ?>: <?php echo $site->claim()->text() ?>" />
  <?php endif ?>


<?php if (!$page->images()->isEmpty()): ?>

  <?php foreach($page->images() as $image): ?>
      <meta property="og:image"     content="<?php echo $image->url() ?>" />
  <?php endforeach ?>

<?php elseif (!$page->gallery1()->isEmpty()): ?>

  <?php foreach($page->gallery1()->yaml() as $image): ?>
      <meta property="og:image"     content="<?php echo $image->url() ?>" />
  <?php endforeach ?>

<?php else: ?>

      <meta property="og:image"     content="http://www.lascuolaopensource.xyz/content/<?php echo $site->sharedimage() ?>" />

<?php endif ?>
        
  <?php if ($page->parent()->title() == "Didattica"): ?>
    <meta property="og:type"        content="article" />
    <meta property="og:description" content="<?php echo $page->bisogni()->text()->excerpt(160) ?>" />
  <?php elseif ($page->parent()->title() == "Eventi"): ?>
    <meta property="og:type"        content="article" />
    <meta property="og:description" content="<?php echo $page->description()->text()->excerpt(160) ?>" />
  <?php elseif ($page->parent()->title() == "Blog"): ?>
    <meta property="og:type"        content="article" />
    <meta property="og:description" content="<?php echo $page->text()->excerpt(160) ?>" />
  <?php else: ?>
    <meta property="og:type"        content="website" />
    <meta property="og:description" content="<?php echo $site->description()->text()->excerpt(160) ?>" />
  <?php endif ?>


  <?php if ($page->parent()->title() == "Didattica"): ?>

<meta name="twitter:title" content="<?php echo $page->title()->text() ?> @ <?php echo $page->luogo()->text() ?>" />
<meta name="twitter:site" content="http://www.lascuolaopensource.xyz">
<meta name="twitter:description" content="<?php echo excerpt($page->bisogni()->text(), 200) ?>" />
  
  <?php elseif ($page->parent()->title() == "Eventi"): ?>
  
<meta name="twitter:title" content="<?php echo $page->title()->text() ?> @ <?php echo $page->luogo()->text() ?>" />
<meta name="twitter:site" content="http://www.lascuolaopensource.xyz">
<meta name="twitter:description" content="<?php echo excerpt($page->description()->text(), 200) ?>" />
  
  <?php elseif ($page->parent()->title() == "Blog"): ?>
  
<meta name="twitter:title" content="<?php echo $page->title()->text() ?> — SOS" />
<meta name="twitter:site" content="http://www.lascuolaopensource.xyz">
<meta name="twitter:description" content="<?php echo excerpt($page->text()->text(), 200) ?>" />
  
  <?php else: ?>
  
<meta name="twitter:title" content="<?php echo $site->title()->text() ?>: <?php echo $site->claim()->text() ?>" />
<meta name="twitter:site" content="http://www.lascuolaopensource.xyz">
<meta name="twitter:description" content="<?php echo excerpt($site->description()->text(), 200) ?>" />
  
  <?php endif ?>
  <!-- FaviconS -->

<?php if (!$page->images()->isEmpty()): ?>

  <?php foreach($page->images() as $image): ?>
      <meta name="twitter:image" content="<?php echo $image->url() ?>" >
  <?php endforeach ?>

<?php elseif (!$page->gallery1()->isEmpty()): ?>

  <?php foreach($page->gallery1()->yaml() as $image): ?>
      <meta name="twitter:image" content="<?php echo $image->url() ?>" >
  <?php endforeach ?>


<?php else: ?>
      <meta name="twitter:image" content="http://www.lascuolaopensource.xyz/content/<?php echo $site->sharedimage() ?>" >
<?php endif ?>



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

<h1 class="nowhere">La Scuola Open Source: innovazione sociale e tecnologica.</h1>
