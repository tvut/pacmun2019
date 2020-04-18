<?php
$title = "404";
$desc = "Whoops! You hit an error."
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:url" content="<?php echo("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
    <meta http-equiv="refresh" content="5;url=https://www.tiktok.com/@holden6969/video/6695814026682699014" />
    <?php include 'include/head.php' ?>
</head>
<body>
<div class="fullbg" style="background-image: url(/media/backgrounds/43.jpg);">
    <div style="background-color:rgba(23,146,167,0.4);height:100vh;width:100vw" class="fullbg flex">
        <div class="w">
            <div class="container">
                <h1>Page Not Found</h1>
                <p>Go to the <a href="/">homepage</a>.</p>
            </div>
        </div>
    </div>
</div>
</body>

</html>