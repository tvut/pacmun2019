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
    <style>
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
</head>
<body style="background-color: var(--blue)">
<?php include 'include/nav.php' ?>
<div class="fullnav">
    <div>
        <h1 id="bigTitle" style="width:100%;text-align: left;z-index: 2; bottom: 0px; color: white; padding: .3em;">
            PACMUN 2019</h1>
    </div>
</div>
<video playsinline muted id="bgvid" class="blurbg" style="opacity:0; transition:.5s all"></video>
<div style="z-index: -2;top: 50%;left: 50%;min-width: 100vw;min-height: 100vh;position: fixed;transform: translateX(-50%) translateY(-50%);background-size: cover;background-position: center center; background-image:url(media/backgrounds/poster.jpg)"
     class="blurbg" id="imgbg"></div>
<div id="imgbg2"
     style="position:fixed;height:calc(50vh + 80px);z-index:-2;width:100vw;top:0;left:0;background-position:center;background-image: url(media/backgrounds/homebg.jpg);display: none;background-size:cover;transition: 1s all;"
     class="blurbg"></div>
<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        document.getElementById("imgbg").style.display = 'none';
        document.getElementById("imgbg2").style.display = 'block';
    }
</script>
<script>
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
            document.getElementById("imgbg").style.display = "none";
        }, 2000);
    });
    $('video').on('ended', function () {
        this.load();
        this.play();
    });
</script>
<div style="background-color: white;" class="letterContainer">
    <div class="container">
        <div style="background-color: white" class="letter">
            <h4 style="text-align: left">Dearest Delegates, Advisors, Chaperones, and Parents, </h4>

            <p>It is an honor to welcome you all to PACMUN 2019. </p>
            <p>
                Only six years after our first conference, PACMUN 2019 is proud to be hosting our very first three-day
                conference, the first of its kind in the Seattle area. This November, over 700 delegates, will have the
                opportunity to participate in 17 uniquely-crafted committees, overseen by 59 talented staff members, led
                by a team of 13 Secretariat members, for an exhilarating weekend in downtown Seattle. </p>
            <p>
                As PACMUN 2019’s Secretary-General, I am committed to ensuring that PACMUN 2019 is a wonderful and
                unforgettable experience for all. The impact of Model United Nations extends much farther than just the
                opportunity to attend committee sessions. Delegates learn how to effectively communicate and
                collaborate, become leaders, and most importantly, join the global dialogue on topics that have
                historically and currently shape the world we live in today. Model United Nations is one-of-a-kind in
                that aspect; it is truly inspiring to see how it brings students together, from many diverse
                backgrounds, through a shared passion to create positive change and find solutions to today’s problems.
            </p>
            <p>
                As Model United Nations is incredibly unique and rewarding, PACMUN strives to make the delegate
                experience as accessible as possible. As listed on our registration page, our delegate fee covers a
                two-night stay at the Sheraton Grand Seattle, all delegate materials, and the highest-caliber committee
                experience.
            </p>
            <p>I invite you all to join us this year for an exciting three days of debate, discourse, and learning.
                Whether it will be your first or last PACMUN, I encourage you all to take advantage of the opportunity
                to foster new connections, grow as delegates and become better global citizens.</p>
            <p>
                I hope you all enjoy your time at PACMUN 2019 and if you have any questions, comments or concerns,
                PACMUN-related or not, please do not hesitate to reach out to me at <a
                        href="mailto:sg@pacificmun.com" target="_top">sg@pacificmun.com</a>!
            </p>

            <h3 style="text-align: right;">Yours always,</h3>
            <div style="width:100%;text-align: right">
                <img style="max-width: 300px; padding: 0; margin: 0;" src="media/icons/sig.png"
                     alt="signature">
            </div>
            <h4 class="b" style="text-align: right;padding: 0; margin: 0;">Katherine Holo</h4>
            <h5 style="text-align: right;">
                Secretary-General
                <br>PACMUN 2019
                <br><a class="b" href="mailto:sg@pacificmun.com" target="_top">sg@pacificmun.com</a></h5>
        </div>
    </div>
</div>
<div class="banner">
    <div class="container nopadding" style="color:white">
        <div class="row w" style="text-align: center">
            <div class="col-sm">
                <i class="fas fa-hotel fa-3x"></i>
                <h6>Venue</h6>
                <p>Sheraton Grand Seattle</p>
            </div>
            <div class="col-sm">
                <i class="fas fa-map-marker-alt fa-3x"></i>
                <h6>Address</h6>
                <p>1400 6th Ave, Seattle, WA 98101</p>
            </div>
            <div class="col-sm">
                <i class="fas fa-calendar-alt fa-3x"></i>
                <h6>Date</h6>
                <p>November 22-24, 2019</p>
            </div>
            <div class="col-sm">
                <i class="fas fa-share-alt fa-3x"></i>
                <h6>Connect</h6>
                <div>
                    <p style="margin-bottom: 0px"><i class="fab fa-facebook-f"></i> @PACIFICMUN</p>
                </div>
                <div>
                    <p style="margin-bottom: 0px"><i class="fab fa-instagram"></i> @pacmun2019</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map"></div>
<div class="container-fluid sponsorbar logoHide">
    <div class="hoverOpacity">
        <h6>PACMUN is made possible by our generous sponsors & partners:</h6>
        <div class="row">
            <div class="col">
                <img src="media/sponsors/blue/Secondary2_pokeworks_horizontal_White Transparent.png"
                     style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/jackson.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/cognito.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/zapier.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/CDE_PACMUN_Logo.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/EVG-Cirle-Logo-Transparent.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/columbia.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/University_of_Oregon_logo.svg.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/UW-Euro-Union-Logo-Center.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/BMC_black.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/BellarmineLogo_SOLID-295.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/Evergreen-primary--green.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/WSU-Central_Social-Badge.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/vertical_logo-300x211.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/csu.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/boston.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/umich.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/gonzaga.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/oberlin.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/northeastern_university_logo.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/nyu.png" style="max-height:75px"/>
            </div>
            <div class="col">
                <img src="media/sponsors/blue/bostonu.png" style="max-height:75px"/>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>