<?php
$depth = 2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:url" content="<?php echo("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="The <?php $l->printName(); ?> is one of the committees hosted at PACMUN 2019.">
    <meta property="og:title" content="<?php $l->printShort(); ?>"/>
    <meta property="og:description"
    content="The <?php $l->printName(); ?> is one of the committees hosted at PACMUN 2019."/>
    <title><?php echo(strtoupper($l->getShort())); ?></title>
    <style>
        @media (min-width: 991px) {
            .bigfloat {
                padding: 15px;
                max-width: 600px;
            }
        }

        .bigfloat {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        @media (min-width: 576px) {
            .bgBar i {
                font-size: 300% !important;
                padding-bottom: 20px;
            }
        }

        .parallax {
            position: relative;
            background-attachment: fixed;
            background-position: center 0;
            background-repeat: no-repeat;
            background-size: cover;
            /*transition: background-position 10ms;*/
        }
        .fullbg{
            background-size:cover;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .parallax {
                background-attachment: scroll;
            }
        }

        .committeeLogo {
            position: absolute;
            opacity: .3;
        }

        .titleContainer{
            min-height: 35vh;
        }

        @media only screen and (max-height: 1099px) {
            .committeeLogo {
                top: -18vh;
                left: -18vh;
                width: 74vh;
                height: 74vh;
            }
        }

        @media only screen and (min-height: 1100px) {
            .committeeLogo {
                top: -200px;
                left: -200px;
                width: 800px;
                height: 800px;
            }
        }

        @media only screen and (max-width: 990px) {
            .fullbg{
                background-size:auto 100vh !important;
            }
            .committeeLogo {
                top: -18vh;
                left: -18vh;
                width: 65vh;
                height: 65vh;
            }
        }

        @media only screen and (max-width: 576px) {
            .committeeLogo {
                display: none;
            }
            .titleContainer{
                min-height:0px;
            }
            .innerBgBar{
                padding-top: 5vh;
                padding-bottom: 5vh;
            }x
        }
        .topic-inner {
            max-width: 55vw;
            padding: 20px;
        }
        @media only screen and (min-width: 500px) {
            .topic-inner {
                max-width: 55vw;
                padding: 20px;
            }
        }
        @media only screen and (min-width: 700px) {
            .topic-inner {
                max-width: 35vw;
                padding: 40px;
            }
        }
        .bgBar i{
            margin: 10px;
        }
        .bgBar{
            overflow-x: hidden;
        }
    </style>
    <?php include 'include/head.php' ?>
    <script src="/cdn/js/parallax.js"></script>
</head>

<!--Looks in the backgrounds folder (/media/backgrounds/committees/) for the committee background photo labeled *committee-abbreviation*.jpg-->
<body class="fullbg fixed"
      style="background-image: url(/media/backgrounds/committees/<?php echo(strtolower($l->getShort())); ?>.jpg);">
<div style="width:100vw;height: 150vh;background: linear-gradient(180deg, rgba(255,255,255,0.5) 0%, rgba(23,146,167,0.8) 100%);z-index: -3;position: fixed;top:0;left:0"></div>

<?php include 'include/nav.php' ?>

<!--Prints the title at the top of the page and displays the committee logo-->
<div class="c b flex titleContainer" style="background-color: rgba(255,255,255,.9);overflow: hidden">
    <h1 style="display: inline-block;font-size: 12vw"><?php $l->printShort(); ?></h1>
    <img class="committeeLogo" src="/media/icons/committees/blue/<?php echo(strtolower($l->getShort())); ?>.png">
</div>

<div class="fullbg bgBar" style="background-attachment: fixed">
    <div>
        <svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L50 90 L100 0 " fill="rgba(255,255,255,.9)"/>
        </svg>
        <div id="expand" class="fullbg flex innerBgBar" style="min-height: 45vh;">
            <div style="width:100%">
            <div class="row w" style="text-align: center">

<!--                Special code to print 3 emails for JCC because they need an email for each bloc-->
                <?php if($l->getShort()=="jcc"){
                    echo'
                        <div class="col-sm" >
                        <i class="far fa-envelope-open fa-3x"></i>
                        <h6>Email</h6>
                        <p style="margin-bottom: 0px"><a href="mailto:bloc1@pacificmun.com">bloc1@pacificmun.com</a></p>
                        <p style="margin-bottom: 0px"><a href="mailto:bloc2@pacificmun.com">bloc2@pacificmun.com</a></p>
                        <p style="margin-bottom: 0px"><a href="mailto:joint@pacificmun.com">joint@pacificmun.com</a></p>
                        </div>
                    ';
//                    Otherwise prints the email using the committee abbreviation
                } else echo'
                <a style="border-bottom: none" href="mailto:'.str_replace('+', '', $l->getShort()).'@pacificmun.com" class="col-sm">
                    <i class="far fa-envelope-open fa-3x"></i>
                    <h6>Email</h6>
                    <p>'.str_replace('+', '', $l->getShort()).'@pacificmun.com</p>
                </a>';?>

<!--                Print the committee difficulty-->
                <div class="col-sm">
                    <i class="fas fa-khanda fa-3x"></i>
                    <h6>Difficulty</h6>
                    <p><?php printDifficulty($l) ?></p>
                </div>

<!--                If the committee has a specialized ROP document you change a boolean in the array and it will look for a pdf with the committee abbreviation in the ROP folder (/media/docs/rop)-->
                <?php if ($l->getROP() == true) {
                    echo '
                    <a download="' . strtoupper($l->getShort()) . ' Rules of Procedure.pdf" style="border-bottom: none" href="/media/docs/rop/' . $l->getShort() . '.pdf" class="col-sm">
                    <i class="fas fa-chalkboard fa-3x"></i>
                    <h6>Rules of Procedure</h6>
                    <p>Click to Download</p>
                </a>
                    ';
                } ?>

<!--                If you set that the background guide is ready, it will look for a pdf in /media/docs/bg/ that has the committee abbreviation-->
<!--                Note: I remove the + from this string because we had a committee called UNOOSA+ and I named the files UNOOSA-->
                <?php if ($l->bgReady()) echo '<a style="border-bottom: none" href="/media/docs/bg/' .str_replace('+', '', $l->getShort()). '.pdf" download="' . strtoupper($l->getShort()) . ' Background Guide.pdf"'; else echo '<div'; ?>
                class="col-sm">
                <i class="far fa-file fa-3x"></i>
                <h6>Background Guide</h6>
                <p><?php if ($l->bgReady()) echo 'Click to Download'; else echo 'Available October 1'; ?></p>
                <?php if ($l->bgReady()) echo '</a>'; else echo '</div>'; ?>

<!--                If the committee has other documents you need to post, put the links in the array and they will all show up here under the heading 'documents'-->
                <?php if ($l->getExtra()[0] !='') {
                    echo '
                    <div class="col-sm" >
                    <i class="far fa-file-alt fa-3x"></i>
                    <h6>Documents</h6>';
                    foreach($l->getExtra() as $file){
                        echo'<p style="margin-bottom: 0px"><a href="/media/docs/rop/'.$file.'" download="'.$file.'">'.preg_replace('/\\.[^.\\s]{3,4}$/', '', $file).'</a></p>';
                    }
                    echo'</div>
                    ';
                } ?>
                <div class="col-sm">
                    <i class="fas fa-khanda fa-3x"></i>
                    <h6>Position Papers</h6>
                    <p>Due on November 10</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="fullbg flex bgw" style="padding-bottom: 4vh;padding-top: 4vh;z-index:2">
    <div class="b container">
        <h5 style="margin-bottom:0px">About</h5>
<!--        Prints full committee name-->
        <h3 style="margin-bottom: 24px"><?php $l->printName(); ?></h3>
<!--        Prints committee description-->
        <p><?php $l->printDesc(); ?></p>
<!--        Prints the "email position papers" message using the short abbreviation of the committee-->
        <?php if($l->getShort()=="jcc") echo'<p>Position papers are due on November 10 at 11:59PM PST to your bloc email.';
            else echo"<p>Position papers are due on November 10 at 11:59PM PST to your committee email: <a href=\"mailto:". preg_replace('/[^a-z\d]/i', '', $l->getShort()) ."\">". preg_replace('/[^a-z\d]/i', '', $l->getShort()) ."@pacificmun.com.</a></p>";?>
    </div>
</div>
<!--Looks in the backgrounds folder (/media/backgrounds/committees/) for the topic A photo labeled *committee-abbreviation*a.jpg -->
<div class="parallax" data-image-src="/media/backgrounds/committees/<?php echo(strtolower($l->getShort())); ?>a.jpg"
     style="height: 100vh;background-image: url(/media/backgrounds/committees/<?php echo(strtolower($l->getShort())); ?>a.jpg)">
    <div class="flex"
         style="width:100vw;height:100vh;background: linear-gradient(90deg, rgba(255,255,255,0.3) 0%, rgba(23,146,167,0.3) 100%);">
        <div style="width:90vw">
            <div class="topic-inner b bgw" style="float: left">
                <div>
<!--                    Checks if theres more than one topic to see if it needs to say Topic A or not-->
                    <h6>Topic <?php if ($l->getTopicB() != "") {
                            echo("A");
                        } ?></h6>
<!--                    Prints the topic name and description-->
                    <h4><?php $l->printTopicA(); ?></h4>
                    <?php if ($l->getTopicADesc() != "") {
                        echo '<p>' . $l->getTopicADesc() . '</p>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Checks to see if topic B is blank or if there is a second topic-->
<?php if ($l->getTopicB() != "") {
    echo '
<!--Looks in the backgrounds folder (/media/backgrounds/committees/) for the topic A photo labeled *committee-abbreviation*b.jpg-->
<div class="parallax" data-image-src="/media/backgrounds/committees/' . (strtolower($l->getShort())) . 'b.jpg"
     style="height: 100vh;background-image: url(/media/backgrounds/committees/' . (strtolower($l->getShort())) . 'b.jpg)">
    <div class="flex"
         style="width:100vw;height: 100vh;background: linear-gradient(270deg, rgba(255,255,255,0.3) 0%, rgba(23,146,167,0.3) 100%);">
        <div style="width:90vw">
            <div class="topic-inner b bgw" style="float: right">
                <div>
                    <h6>Topic B</h6>
                    <!--Prints the topic B name and description-->
                    <h4>' . $l->getTopicB() . '</h4>';
    if ($l->getTopicBDesc() != "") {
        echo '<p>' . $l->getTopicBDesc() . '</p>';
    }
    echo '
                </div>
            </div>
        </div>
    </div>
</div>
';
} ?>
<div class="bgw">
    <div class="container-fluid sec">
        <section id="sec"></section>
        <h3 class="c">Dais Members</h3>
        <?php
//        Prints the dias members out of the array
        $l->getStaffers()->printAll();
        ?>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>