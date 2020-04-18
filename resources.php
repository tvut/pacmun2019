<?php
//Both of these functions print out the click to download div used for resources

//Use this one if you're using a font-awesome icon
function printFull($name, $icon, $file)
{
    echo '
    <a style="border-bottom: none" href="/media/docs/resources/' . $file . '" download="' . $file . '"  class="col-sm">
        <i class="' . $icon . ' fa-3x"></i>
        <h6>' . $name . '</h6>
        <p>Click to Download</p>
    </a>
    ';
}

//Use this one if you're using a png image
function printImage($name, $img, $file)
{
    echo '
    <a style="border-bottom: none" href="/media/docs/resources/' . $file . '" download="' . $file . '" class="col-sm">
        <img style="width:60px;height:auto;margin:3px;" src="/media/icons/resources/' . $img . '">
        <h6>' . $name . '</h6>
        <p>Click to Download</p>
    </a>
    ';
}

$title = "Resources";
$desc = "PACMUN offers resources to assist both beginner and experienced delegates before and during their time at PACMUN."
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

    <script src="/cdn/js/parallax.js"></script>
    <style>
        .parallax {
            position: relative;
            background-attachment: fixed;
            background-position: center 0;
            background-repeat: no-repeat;
            background-size: cover;
            /*transition: background-position 10ms;*/
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .parallax {
                background-attachment: scroll;
            }
        }

        .bgBar {
            min-height: 70vh;
        }

        .blueOver {
            background-color: rgba(23, 146, 167, 0.75);
        }
    </style>
</head>
<body>
<?php include 'include/nav.php' ?>
<h1 class="c title">Resources</h1>
<svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 L50 90 L100 0 V100 H0" fill="var(--blue)"/>
</svg>
<div class="w bgb">
    <div class="container">
        <p>PACMUN is not just a conferenceーit is a community. As the first high school run MUN conference in the state
            of Washington, PACMUN not only offers the immersive and engaging MUN experience to its delegates that only a
            hotel conference can provide, but it also offers the opportunity for students to organize, lead, and
            initiate this experience. Ever since the inception of the conference, we have not only been renowned for our
            conference quality within the local MUN circuit, but we have also witnessed and helped with the rapid
            expansion of MUN chapters across Washington State and beyond.
        </p>
        <p>
            PACMUN consistently strives to give back to its amazing community, and with our Community Program we hope to
            achieve just that. Through this program, PACMUN provides a variety of guides and informational materials to
            improve the quality of their meetings, or simply learn more about the Pacific Northwest MUN circuit. A
            description of our resources can be found at the bottom of this page.
        </p>
        <p>In addition to this new program, we also offer resources to assist both beginner and experienced delegates
            before and during their time at PACMUN. These resources can be found below and all of them can be downloaded
            to be used at your discretion. </p>
    </div>
</div>
<div class="fullbg parallax" data-image-src="/media/backgrounds/84.jpg"
     style="background-image: url(/media/backgrounds/84.jpg)">
    <div class="bgBar flex blueOver">
        <div>
            <div class="container w" style="padding-bottom: 0 !important;">
                <section id="conference"></section>
                <h3>Conference Resources</h3>
                <p>These resources are designed specifically to guide delegates in navigating the research, debate, and
                    collaboration required for Model UN. Delegates are highly encouraged to look over and download these
                    resources, by clicking on the respective icons, in preparation for the conference or to improve
                    their knowledge about Model UN. </p>
            </div>
            <div id="expand" class="fullbg flex innerBgBar container-padding">
                <div style="width:100%">
                    <div class="row w" style="text-align: center">
<!--                        Prints a box for each of these resources-->
                        <?php printFull("Research 101", "fas fa-search", "PACMUN Research 101.pdf"); ?>
                        <?php printFull("Debate 101", "far fa-comments", "PACMUN Debate 101.pdf"); ?>
                        <?php printFull("Position Papers", "far fa-copy", "PACMUN Position Paper Guide.pdf"); ?>
                        <?php printFull("Flow of Debate", "fas fa-gavel", "PACMUN Flow of Debate.pdf"); ?>
                        <?php printFull("Rules of Procedure", "fas fa-stream", "PACMUN Long-Form Rules of Procedure.pdf"); ?>
                        <?php printFull("Resolution Writing", "far fa-edit", "PACMUN Resolution Writing Guide.pdf"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <section id="community"></section>
    <h2>Community Program</h2>
    <p>
        PACMUN has updated our Community Program with revised and renewed resources as well as new content for
        delegates, delegations, advisors and head delegates alike. The Community Program provides delegations with
        resources from teaching materials to conference checklists and club guides. We invite all delegates and advisors
        to utilize the resources and content provided through the PACMUN Community Program. From preparing each and
        every delegate for conferences to guidelines on how to start a MUN club at your school, the PACMUN Community
        Program has it all.
    </p>
    <p>Should you have any questions or comments, please do not hesitate to contact our <strong>Assistant
            Director-General,
            Sherveen Mehrvarzan, at <a href="mailto:adg@pacificmun.com">adg@pacificmun.com</a></strong>.
    </p>
</div>
<div class="fullbg parallax" data-image-src="/media/backgrounds/118.jpg"
     style="background-image: url(/media/backgrounds/118.jpg)">
    <div class="bgBar flex blueOver">
        <div>
            <div class="container w" style="padding-bottom: 0 !important;">
                <section id="intro"></section>
                <h3>Introduction to Model UN</h3>
                <p>Developed to aid in teaching students about Model UN, the following materials are well-suited for
                    advisor and head delegates helping their delegation become familiar with the high-level workings of
                    Model UN. Moreover, included are resources created for delegates who want to learn more about and
                    potentially be involved with leadership opportunities. <strong>If you would like the slideshow format of
                    these resources, please reach out to us at <a href="mailto:adg@pacificmun.com">adg@pacificmun.com</a></strong>.
            </div>
            <div id="expand" class="fullbg flex innerBgBar container-padding">
                <div style="width:100%">
                    <div class="row w" style="text-align: center">
                        <?php printImage("United Nations", "un.png", "About the United Nations.pdf"); ?>
                        <?php printImage("Model UN", "pacmun.png", "Introduction to Model United Nations.pdf"); ?>
                        <?php printFull("Model UN Secretariat", "fas fa-users", "Introduction to Secretariat.pdf"); ?>
                        <?php printFull("Model UN Staffing", "fas fa-gavel", "Introduction to Staff.pdf"); ?>
                        <?php printImage("About MUN Northwest", "munnw.png", "MUN Northwest Conferences.pdf"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fullbg parallax" data-image-src="/media/backgrounds/45.jpg"
     style="background-image: url(/media/backgrounds/45.jpg)">
    <div class="bgBar flex blueOver">
        <div>
            <div class="container w" style="padding-bottom: 0 !important;">
                <section id="delegation"></section>
                <h3>Delegation Management & Skill-Building </h3>
                <p>The goal of these resources to assist head delegates, club leaders, and advisors in structuring,
                    organizing and managing their delegations to best nurture the development of their delegates’
                    skills. These resources will also be useful for delegates looking to better their understanding of
                    relevant international topics. </p>
            </div>
            <div id="expand" class="fullbg flex innerBgBar container-padding">
                <div style="width:100%">
                    <div class="row w" style="text-align: center">
                        <?php printFull("MUN Club Guide", "fas fa-chalkboard-teacher", "PACMUN Model UN Club Guide.pdf"); ?>
                        <?php printFull("MUN Jeopardy", "fas fa-trophy", "PACMUN Model UN Jeopardy.pptx"); ?>
                        <?php printFull("Debate Games/Activities", "fas fa-dice", "PACMUN Delegation Debate Activities.pdf"); ?>
                        <?php printFull("Debate Topics", "fas fa-comments", "PACMUN Debate Topics.pdf"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fullbg parallax" data-image-src="/media/backgrounds/43.jpg"
     style="background-image: url(/media/backgrounds/43.jpg)">
    <div class="bgBar flex blueOver">
        <div>
            <div class="container w" style="padding-bottom: 0 !important;">
                <section id="prep"></section>
                <h3>Conference Preparation</h3>
                <p>Tailored largely to help delegations prepare for PACMUN, the following guides and resources focus on
                    the information head delegates, club leaders, and advisors should prepare for in ensuring that their
                    delegations are conference-prepared. From travel information to scheduling, these resources serve as
                    a foundation for items delegations should consider and look over before and while preparing for
                    attending conferences. </p>
            </div>
            <div id="expand" class="fullbg flex innerBgBar container-padding">
                <div style="width:100%">
                    <div class="row w" style="text-align: center">
                        <?php printFull("General Information Package", "fas fa-hotel", "PACMUN 2019 General Information Package.pdf"); ?>
                        <?php printFull("Travel Information Package", "fas fa-bus", "PACMUN 2019 Travel Information Package.pdf"); ?>
                        <?php printFull("Advisor Conference Checklist", "far fa-check-square", "PACMUN Delegation Conference Checklist.pdf"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="fullbg parallax" data-image-src="/media/backgrounds/37.jpg" style="background-image: url(/media/backgrounds/37.jpg)">
    <div class="bgBar flex blueOver">
        <div>
            <div class="container w" style="padding-bottom: 0 !important;">
                <h3>Mock Committees</h3>
                <p>Many of these resources were created for Educational Model United Nations (EDUMUN), an annual one day
                    pre-PACMUN delegate and staff training event consisting of various seminars for attendees to learn and
                    prepare for PACMUN. Delegates are highly encouraged to attend this event to improve their performance and
                    experience during PACMUN. Follow this link to learn more about EDUMUN and how you can use it to your
                    advantage when preparing for PACMUN.</p>
            </div>
            <div id="expand" class="fullbg flex innerBgBar container-padding">
                <div style="width:100%">
                    <div class="row w" style="text-align: center">
                        <?php printImage("Mock GA", "ga.png", "file.pdf"); ?>
                        <?php printImage("Mock WHO", "who.png", "file.pdf"); ?>
                        <?php printImage("Mock UNSC", "unsc.png", "file.pdf"); ?>
                        <?php printImage("Mock JCC", "jcc.png", "file.pdf"); ?>
                        <?php printFull("Committee Placards", "far fa-hand-paper", "file.pdf"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<?php include 'include/footer.php' ?>
</body>

</html>
