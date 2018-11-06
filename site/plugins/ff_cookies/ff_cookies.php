<?php 

//load([
//    'ff_cookies\\controller' => __DIR__ . DS . 'controller.php',
//    'ff_cookies\\view'  => __DIR__ . DS . 'view.php'
//  ]);
//  
//require 'routes.php';


function ff_cookies()
{ 
$gtm_id = c::get('gtm_id','');
$ga_id = c::get('ga_id','');
$fb_id = c::get('fb_id','');
?>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>

var GTM_ID = '<?= $gtm_id ?>';
var GA_ID = '<?= $ga_id ?>';
var FB_ID = '<?= $fb_id ?>';

window.addEventListener("load", function(){
window.cookieconsent.initialise({
    "palette": {
        "popup": {
            "background": "#efefef",
            "text": "#000"
        },
        "button": {
            "background": "rgb(158, 141, 246)"
        }

    },
    "theme": "edgeless",
    "type": "opt-in",
    "content": {
        "message": "Utilizziamo i cookie per personalizzare i contenuti e gli annunci, fornire le funzioni dei social media e analizzare il nostro traffico.",
        "dismiss": "Non accetto i cookie",
        "allow": "Accetto i cookie",
        "link": "leggi di più",
        "href": '/policy',
        "deny": 'Decline',
        "close": '&#x274c;'
    },
    onInitialise: function (status) {
        console.log('init');
        var type = this.options.type;
        var didConsent = this.hasConsented();
        var status = this.getStatus() == 'allow' ? true : false;
        if (type == 'opt-in' && didConsent && status) {
            enableCookies();
        }
        if (type == 'opt-out' && !didConsent) {
            disableCookies();
        }
    },
    onStatusChange: function(status, chosenBefore) {
        var type = this.options.type;
        var status = this.getStatus() == 'allow' ? true : false;
        var didConsent = this.hasConsented();
        if (type == 'opt-in' && didConsent && status) {
            enableCookies();
        }else{
            disableCookies();
        }
        if (type == 'opt-out' && !didConsent) {
            disableCookies();
        }
    },
    onRevokeChoice: function() {
        var type = this.options.type;
        if (type == 'opt-in') {
            disableCookies();
        }
        if (type == 'opt-out') {
            enableCookies();
        }
    },
})
});

function enableCookies (){
    window['ga-disable-' + GA_ID ] = false;
    if ( GA_ID != ""){
        gaInit();
    }
    
    if ( GTM_ID != ""){
        GTMInit(window,document,'script','dataLayer','GTM-'+ GTM_ID);
    }
    
    if ( FB_ID != ""){
        facebookActivate();
    }
}
function disableCookies (){
    gaOptout()
    fbOptout()
    
    // Per tranquillità cancella tutti i cookies
    delete_cookies();
}

function gaOptout(){
    var gaProperty = '<?= $ga_id ?>';

        // Disable tracking if the opt-out cookie exists.
        var disableStr = 'ga-disable-' + gaProperty;
        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
        
        if (document.cookie.indexOf(disableStr + '=true') > -1) {
            window[disableStr] = true;
        }
}

function fbOptout() {
    var disableStr = 'fb-disable-';
    document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
}

function facebookActivate(){
    var disableStr = 'fb-disable';
        if (document.cookie.indexOf(disableStr + '=true') > -1) {
            // don't fire facebook beacon
        } else {
            facebookPixelInit(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js');
            // Insert Your Facebook Pixel ID below. 
            fbq('init', FB_ID );
            fbq('track', 'PageView');
        }
}




function gaInit(){  
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', GA_ID );
}

var facebookPixelInit = function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)
};


var GTMInit = function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
};

var delete_cookie = function(name) {
    var expires = new Date(0).toUTCString();
    var domain = location.hostname.replace(/^www\./i, "");
    try {
        document.cookie = name + "=; expires=" + expires + "; path=/; domain=." + domain;
        onRemoved(name);
    } catch (error) {
        onError(error);
    }
}
 
var delete_cookies = function(){
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++){
        delete_cookie(cookies[i].split("=")[0].trim());
    }
}

function onRemoved(cookie) {
}

function onError(error) {
  console.log(`Error removing cookie: ${error}`);
}

</script>


<?php };

function ff_addpixels(){
    $fb = c::get('fb_id','');
    $ga = c::get('ga_id','');
    $gtm = c::get('gtm_id','');
    addFacebookPixel($fb);
    addGoogleAnalytics($ga);
    addGoogleTagManagerPixel($gtm);
};

function addFacebookPixel($fb_id){
    ?>
    <noscript>
        <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=<?= $fb_id ?>&amp;ev=PageView&amp;noscript=1"/>
    </noscript>
    <?php
};

function addGoogleAnalytics($ga_id){
?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $ga_id ?>"></script>
<?php
}

function addGoogleTagManagerPixel($gtm_id){
    ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm_id ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php
}