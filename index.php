<?php
$title = "PACMUN";
$desc = "PACMUN is a three day hotel Model United Nations conference in Seattle, Washington!"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:url" content="<?php echo("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
    <?php include 'include/head.php' ?>
    <style type="text/css">
        video#bgvid {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100vw;
            min-height: 100vh;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translateX(-50%) translateY(-50%);
            transition: 1s all;
        }
    </style>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<body>
<?php include 'include/nav.php' ?>
<div id="bigbg" style="width:100vw;height:100vh;position:fixed;background-image:url(/media/backgrounds/poster.jpg);background-position:center;background-size:cover;top:0;left:0;z-index:-2"></div>
<video loop playsinline muted id="bgvid" class="blurbg" style="opacity:0; transition:.5s all"></video>
<div style="display: flex;
    align-items: center;
    justify-content: center;height:100vh;width:100vw;position:absolute;top:0;left:0">
    <div>
        <h1 style="font-size: 10vw !important;color:white;margin: 0;padding: 0">Thank you.</h1>
		<div style="max-width:70vw">
		<a href="http://bit.ly/PAC19PHOTOS" class="w" style="margin:0;padding: 0;text-align: left;color: white;float: left;display: inline-block; width:100%;color:white !important;border-bottom:none !important"><h1
                style="font-size:3vw !important;margin:0;padding: 0;text-align:left;color:white !important;text-decoration:none !important" class="w">Photos &#8594;</h1></a>
				<a href="http://bit.ly/PACMUN2019FEEDBACK" class="w" style="margin:0;padding: 0;text-align: left;color: white;float: left;display: inline-block; width:100%;color:white !important;border-bottom:none !important"><h1
                style="font-size:3vw !important;margin:0;padding: 0;text-align:left;color:white !important;text-decoration:none !important" class="w">Feedback &#8594;</h1></a>
				<a href="https://bit.ly/2OVgtpU" class="w" style="margin:0;padding: 0;text-align: left;color: white;float: left;display: inline-block; width:100%;color:white !important;border-bottom:none !important"><h1
                style="font-size:3vw !important;margin:0;padding: 0;text-align:left;color:white !important;text-decoration:none !important" class="w">Secretary-General Application &#8594;</h1></a>
				</div>
				</div>
		</div>
<script>
    // Will run video if not on mobile
    window.onload = function () {
        if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
            document.getElementById("bgvid").src = "/media/backgrounds/intro.mp4";
            document.getElementById("bgvid").load();
            setTimeout(function () {
                document.getElementById("bgvid").play();
                document.getElementById("bgvid").style.opacity = "1";
            }, 1000);
        }
    };
    $('video').bind('play', function (e) {
        setTimeout(function () {
            document.getElementById("bigbg").style.display = "none";
			document.getElementsByClassName("navbar")[0].style.opacity = ".6";
        }, 2000);
    });
</script>
</body>
</html>