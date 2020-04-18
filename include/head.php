<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Cache-control" content="public">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="https://pacificmun.com/media/favicons/OGlogo.png"/>
<meta name="keywords"
      content="PACMUN, Pacific MUN, Pacific Model United Nations , Pacmun, Seattle, Westin, Sheraton, Seattle Hotel, Hotel Conference, munn, modelunitednations, seattle, modelun, un, washington, pnw, united states, conference, committees, pacmun, kingmun, stemmun, MUN Washington, MUN in Washington, MUN in Seattle, Seattle MUN, Model United Nations, Washington Model United Nations, high school, students, delegates, gavel, pacificmun vancouver, vancouver">
<meta name="theme-color" content="#317EFB"/>

<!--Icons-->
<link rel="icon" href="/media/favicons/favicon-32x32.png">
<link rel="apple-touch-icon" href="/media/favicons/apple-icon.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/media/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/media/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/media/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/media/favicons/favicon-16x16.png">
<link rel="manifest" href="/media/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/media/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!--Preload-->
<link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" as="style" as="style">
<link rel="preload" href="https://code.jquery.com/jquery-2.2.4.min.js" as="script">
<link rel="preload" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" as="style">
<link rel="preload" href="/media/favicons/logosquare.png" as="image">
<link rel="preload" href="/media/favicons/logoinverted.png" as="image">

<!--Will only preload these files if you're on the home page-->
<?php if(basename(__FILE__) == "index.php") {
    echo '<link rel="preload" href="/media/icons/sig.png" as="image">';
    echo '<link rel="preload" href="/media/backgrounds/homebg.jpg" as="image">';
} ?>

<link rel="preload" href="/media/icons/gavel2.svg" as="image">
<!--Plugins-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<!--Will include stylesheets if you are on the homepage and preload them for later, otherwise includes them-->
<?php if(!(basename(__FILE__) == "index.php")) echo'
<!--Run Before Load-->
<script src="/cdn/js/nav.js"></script>
<!--CSS-->
<link rel="stylesheet" href="/cdn/css/v4.css">
<link rel="stylesheet" href="/cdn/css/nav.css">
<link rel="stylesheet" href="/cdn/css/fonts.css">';
else {
    echo'<style type="text/css">';
    include 'cdn/css/v4.css';
    include 'cdn/css/nav.css';
    echo'</style>';
    echo '<script type="text/javascript">';
    include 'cdn/js/nav.js';
    echo '</script>';
    echo '<link rel="stylesheet" href="/cdn/css/fonts.css">';
    echo'
        <link rel="prefetch" href="/cdn/js/nav.js" as="script">
        <link rel="prefetch" href="/cdn/css/main.css" as="style">
        <link rel="prefetch" href="/cdn/css/nav.css" as="style">
        <link rel="prefetch" href="/cdn/css/fonts.css" as="style">';
}?>

<!--Lazyloads the map at the bottom of the page-->
<script defer src="/cdn/js/lazymap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB56xH961D9cuVD0yR0cy2eRZKDaHll-o0" async defer></script>