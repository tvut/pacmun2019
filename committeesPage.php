<?php
$title = "Committees";
$desc = "Committees at PACMUN 2019!";

//Difficulty is a number, this converts it to words
function printCommittee($difficulty)
{
    if ($difficulty == 0) return 'Beginner';
    if ($difficulty == 1) return 'Intermediate';
    else return 'Advanced';
}

//Function to print out the committee link boxes
function printFull($name, $difficulty, $topic1, $topic2)
{
    echo '
    <a href="' . preg_replace('/[^a-z\d]/i', '', $name) . '/" class="bgouter">
                <!--There are special square icons for committees that are stored at /media/icons/committees/-->
                <div style="background-image: url(/media/icons/committees/' . strtolower($name) . '.jpg);background-size: cover">
                    <div class="w outer">
                        <div class="hoverborder" style="width:260px; padding: 10px;height:260px;">
                            <h1 style="font-size: ';
    //I had to make the font size smaller for constitution because it overflowed
    if ($name != "constitution") echo '46'; else echo '28';
    echo 'px">' . $name . '</h1>
                            <h6>' . printCommittee($difficulty) . '</h6>
                            <div class="topic">
                                <p>' . $topic1 . '</p>
                                <p>' . $topic2 . '</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/media/icons/committees/white/' . strtolower($name) . '.png" class="bgouterpic">
            </a>
    ';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:url" content="<?php echo("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <style type="text/css">
        @media screen and (max-width: 420px) {
            .nopadding h6 {
                display: none;
            }
        }
    </style>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
    <?php include 'include/head.php' ?>
</head>
<body>
<?php include 'include/nav.php' ?>
<h1 class="c b title" style="z-index: 50">Committees</h1>
<svg width="100%" height="8vh" viewBox="0 0 100 100" preserveAspectRatio="none" style="z-index: 50">
    <path d="M0 0 L50 90 L100 0 V100 H0" fill="var(--blue)"/>
</svg>
<div class="w bgb" style="z-index: 50;">
    <div class="container">
        <h4>Dear Delegates,</h4>
        <p>Welcome to PACMUN 2019! This year we will be hosting a wide variety of committees with a wide range of topics
            for delegates of all experience levels. Whether you are looking for assemblies that debate internationally
            relevant topics, economic and social councils that deconstruct the world’s most pressing issues, or
            specialized committees that rapidly develop and change, there is a committee at PACMUN 2019 for you! The
            Secretariat and Staff have dedicated countless hours of drafting, editing and planning to ensure that every
            delegate will have a memorable, debate-filled weekend to look back upon. Should you have any questions
            regarding committees, please feel free to reach out to us or to your committee dais. We’re excited to have
            you for three days of riveting debate. Hope to see you at PACMUN 2019!
        </p>
        <h6 style="text-align: right;">Best Regards,</h6>
        <h4 style="text-align: right;padding: 0; margin: 0;">Nils Berzins</h4>
        <h6 style="text-align: right;">
            Chief of Staff | <a href="mailto:chiefofstaff@pacificmun.com" target="_top">chiefofstaff@pacificmun.com</a></h6>
        <a class="whiteButton"
           href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRDwZRsuZcaFSD4XcFxmHCd25lhp5Jrvt4dqRrL4E-qonlHioiVv4_xZ6NZilmFZqMTs-_d713_XpJ0/pubhtml?gid=1969171420&single=false"
           target="_blank"><h6>Country Matrix &#8594;</h6></a>
    </div>
</div>
<div class="bgw" style="z-index: 50">
    <div class="title">
        <div class="container nopadding">
            <section id="principal"></section>
            <h2>Principal Bodies</h2>
            <h6 class="g">Anusha Srivastava | <a href="mailto:usgprincipal@pacificmun.com" target="_top">usgprincipal@pacificmun.com</a>
            </h6>
            <p>These seven committees are comprised of both the principal bodies that are central to the United Nations
                as well as the regional bodies that are equally critical within the geopolitical sphere. Each offers a
                unique perspective surrounding complex and highly relevant topics. The range in difficulty of these
                committees suit beginner to advanced delegates. Within every committee, delegates will be challenged to
                accurately represent their country position while utilizing diplomacy to write and pass resolutions.
                These committees encourage delegates to practice and strengthen invaluable skills as well as engage in a
                multidimensional debate experience.</p>
        </div>
        <div class="boxes">
            <?php
//            Each of the committees has a type and it iterates through the committees in the array to find which ones match the type and print those out
            foreach ($com_content as $com) {
                if ($com->getType() == "p") printFull($com->getShort(), $com->getDifficulty(), $com->getTopicA(), $com->getTopicB());
            }
            ?>
        </div>
    </div>
    <div class="container nopadding">
        <section id="ecosoc"></section>
        <h2>Economic and Social Councils</h2>
        <h6 class="g">Spring Chenjp | <a href="mailto:usgecosoc@pacificmun.com"
                                         target="_top">usgecosoc@pacificmun.com</a></h6>
        <p>These five distinct committees are focused on a wide variety of issues ranging from combating
            transnational organized crime to addressing financial corruption. Although well-tailored to suit
            intermediate delegates, these committees provide an intellectually stimulating experience for all
            delegates. Inviting a high level of debate and discussion, these committees will call upon delegates’
            skills to collaborate and think creatively in order to create multifaceted solutions to pressing global
            challenges. </p>
    </div>
    <div class="boxes">
        <?php
        foreach ($com_content as $com) {
            if ($com->getType() == "e") printFull($com->getShort(), $com->getDifficulty(), $com->getTopicA(), $com->getTopicB());
        }
        ?>
    </div>
    <div class="title">
        <div class="container nopadding">
            <section id="specialized"></section>
            <h2>Specialized Committees</h2>
            <h6 class="g">Annalisa Mueller-Eberstein | <a href="mailto:usgspecialized@pacificmun.com" target="_top">usgspecialized@pacificmun.com</a>
            </h6>
            <p>These five, highly-specialized committees are a collective of the most engaging and innovative committees
                that the world of Model UN has to offer. From modeling the sacred chambers of the U.S. Senate to the war
                rooms of the Mongol Empire, these committees are full of opportunities for both fun and learning. Each
                committee provides a unique experience with a wonderful cast of characters and excellent staff members
                and fellow delegates. In addition to the difficult topics and questions they present, these committees
                may have different Rules of Procedure (ROP) or Rules of Engagement (ROE) that will culminate in a
                challenging yet exciting experience for those who participate. </p>
        </div>
        <div class="boxes">
            <?php
            foreach ($com_content as $com) {
                if ($com->getType() == "s") printFull($com->getShort(), $com->getDifficulty(), $com->getTopicA(), $com->getTopicB());
            }
            ?>
        </div>
    </div>
</div>
<!--<iframe style="width:100vw;height:100vh;position: fixed;top:0;left:0;z-index: 1;padding: 5vw;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRDwZRsuZcaFSD4XcFxmHCd25lhp5Jrvt4dqRrL4E-qonlHioiVv4_xZ6NZilmFZqMTs-_d713_XpJ0/pubhtml?gid=1969171420&amp;single=false&amp;widget=true&amp;headers=false"></iframe>-->
<!--<div style="height:100vh;width:100vw;z-index: -999">-->
<!--</div>-->
<?php include 'include/footer.php' ?>
</body>
</html>