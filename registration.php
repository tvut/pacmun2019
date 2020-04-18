<?php
$title = "Registration";
$desc = "Register for PACMUN 2019!"
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
</head>
<body>
<?php include 'include/nav.php' ?>
<h1 class="c title back">Registration</h1>
<svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 L50 90 L100 0 V100 H0" fill="var(--blue)"/>
</svg>
<div class="w bgb">
    <div class="container">
        <p>Thank you for your interest in PACMUN 2019! Any questions
            regarding
            registration should be directed to our Delegate Affairs team at <a
                    href="mailto:delegateaffairs@pacificmun.com">delegateaffairs@pacificmun.com</a>.
        </p>
        <a class="whiteButton" href="/media/docs/reg.pdf" download="PACMUN_Registration_Guidelines.pdf"><h6>Registration
                Guidelines &#8594;</h6></a>
        <a class="whiteButton"
           href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRDwZRsuZcaFSD4XcFxmHCd25lhp5Jrvt4dqRrL4E-qonlHioiVv4_xZ6NZilmFZqMTs-_d713_XpJ0/pubhtml?gid=1969171420&single=false"
           target="_blank"><h6>Committees Matrix &#8594;</h6></a>
        <section id="prices"></section>
        <h3 style="padding-top: 2vh">Pricing</h3>
        <div class="row prices">
<!--            The php here changes the style depending on whether you are past a certain date or not-->
            <div class="col-md <?php if (time() < strtotime(("2019/9/17 00:00:00"))) echo("bgw b"); else echo("w"); ?>">
                <h4>$190</h4>
                <h6>Early Registration</h6>
                <p>August 22nd - September 16th</p>
            </div>
            <div class="col-md <?php if (time() > strtotime(("2019/9/17 00:00:00")) && time() < strtotime(("2019/10/26 00:00:00"))) echo("bgw b"); else echo("w"); ?>">
                <h4>$200</h4>
                <h6>Regular Registration</h6>
                <p>September 17th - October 26th</p>
            </div>
            <div class="col-md <?php if (time() > strtotime(("2019/10/26 00:00:00"))) echo("bgw b"); else echo("w"); ?>">
                <h4>$210</h4>
                <h6>Late Registration</h6>
                <p>October 27th - Conference</p>
            </div>
        </div>
        <section id="delegation"></section>
        <h3>Delegations</h3>
        <p>In order to attend as a delegation, the advisor or the head delegate must complete the Delegation
            Registration Form. On this form, advisors must select whether their delegates will pay individually, or as a
            group. All delegations selecting Group Payment will be charged one price corresponding to the registration
            period during which they last register - please refer to the Registration Guidelines for more information.
            Within 48 hours of completing the form, the advisor and head delegate should receive an email with their
            delegation’s spreadsheet, which will include delegates’ general information, their assignments, and their
            rooming information, which will be based on advisor discretion.
        </p>
        <p>Advisor and chaperone rooms are $290 per room for the two nights at the conference, regardless of
            occupancy. </p>
    </div>
</div>
<div class="fullbg fixed" style="background-image: url(/media/backgrounds/conferencebg.jpg);">
    <div class="bgw parentBg">
        <svg style="width:100%; height:8vh;margin-top: -2px" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L100 0 L0 100 Z" fill="var(--blue)"/>
        </svg>
        <div class="row regRow flex">
            <span class="bigButton" style="pointer-events: none"><h6>Delegation Registration Closed</h6></span>
<!--            --><?php //if (time() < strtotime(("2019/8/22 01:00:00"))) {
//                echo("<span class=\"bigButton\" style=\"pointer-events: none\"><h6>Delegation Registration Opening Soon</h6></span>");
//                echo("<span class=\"bigButton\" style=\"pointer-events: none\"><h6>Chaperone Registration Opening Soon</h6></span>");
//            } else {
//                echo("<a class=\"bigButton\" href=\"https://www.cognitoforms.com/PacificModelUnitedNations/pacmun2019delegationregistration\"><h6>Register a Delegation &#8594;</h6></a>");
//                echo("<a class=\"bigButton\" href=\"https://www.cognitoforms.com/PacificModelUnitedNations/pacmun2019chaperoneregistration\"><h6>Register a Chaperone &#8594;</h6></a>");
//            } ?>
        </div>
        <svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L0 100 L100 100 Z" fill="var(--blue)"/>
        </svg>
    </div>
</div>
<div class="w bgb">
    <div class="container">
        <section id="delegates"></section>
        <h3>Delegates</h3>
        <h5>ADVISORY:</h5>
        <p>
            <strong>Unfortunately, PACMUN 2019 has reached capacity. Delegates interested in attending PACMUN 2019 should
            register for the Waitlist by clicking the link below. This will be completed in lieu of the Delegate
            Registration Form. Completion of the Waitlist Registration does not guarantee a place at PACMUN 2019. Due to
            capacity constraints, unless a delegation has extra space in their current rooms, waitlist delegates will
            not be staying overnight at PACMUN 2019. When a position becomes available, delegates will be notified via
            email. Payment of the $120 Day Delegate fee will not be due until delegates are notified of a position
            becoming available.</strong></p>
        <p>Delegates can register as part of a delegation or as independents. Delegates wishing to attend with a
            delegation should wait to register until their advisor completes the Delegation Registration Form. All
            delegates will register individually with the Delegate Registration Form. Independent delegates may request
            to be roomed with up to three others of your choice as part of your registration. For more information
            regarding rooming and Independent delegates, please refer to the Registration Guidelines.</p>
        <p>After completing the registration form, delegates should receive a confirmation email within 24 hours, and a
            position assignment email within 72 hours. In the case that a delegate would like to switch their position
            and/or committee, they must email our Delegate Affairs team at <a
                    href="mailto:delegateaffairs@pacificmun.com">delegateaffairs@pacificmun.com</a> with their
            request.</p>
        <a class="whiteButton" href="/media/docs/code.pdf" download="PACMUN_Delegate_Contract_2019.pdf"><h6>Delegate
                Code of Conduct &#8594;</h6></a>
        <a class="whiteButton" href="/media/docs/independent.pdf"
           download="Pacific_Model_United_Nations_Independent_Delegate_Addendum_2019.pdf"><h6>Independent Delegate
                Addendum
                &#8594;</h6></a>
    </div>
</div>
<div class="fullbg fixed" style="background-image: url(/media/backgrounds/delegate.jpg);">
    <div class="bgw parentBg">
        <svg style="width:100%; height:8vh;margin-top: -2px" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M100 0 L0 0 L100 100 Z" fill="var(--blue)"/>
        </svg>
        <div class="row regRow flex">
            <span class="bigButton" style="pointer-events: none"><h6>Delegate Registration Closed</h6></span>
<!--            --><?php //if (time() < strtotime(("2019/8/22 01:00:00"))) {
//                echo("<span class=\"bigButton\" style=\"pointer-events: none\"><h6>Delegate Registration Opening Soon</h6></span>");
//            } else {
//                echo("<a class=\"bigButton\" href=\"https://www.cognitoforms.com/PacificModelUnitedNations/PACMUN2019WaitlistRegistration\"><h6>Join the Waitlist &#8594;</h6></a>");
//            } ?>
        </div>
        <svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M100 0 L100 100 L0 100 Z" fill="var(--blue)"/>
        </svg>
    </div>
</div>
<div class="w bgb">
    <div class="container">
        <section id="page"></section>
        <h3>Page Program</h3>
        <p>Not in high school yet, but interested in being a part of PACMUN? Join the PACMUN 2019 Page Program! This
            program is an introductory opportunity for students in grades 4-8 to learn how Model United Nations works,
            even if they aren't quite old enough to attend PACMUN as a delegate. </p>
        <p>The application for the PACMUN 2019 Page Program closes on November 20th, 2019 at 11:59 PM PST. Any questions
            about the PACMUN 2019 Page Program can be directed to Bobby Aiyer at <a
                    href="mailto:dg@pacificmun.com">dg@pacificmun.com</a>.</p>
        <a class="whiteButton" href="/media/docs/pagewaiver.pdf" download="PACMUN 2019 Page Waiver.pdf"><h6>Page Waiver
                &#8594;</h6></a>
        <a class="whiteButton" href="/media/docs/pageprogram.pdf"
           download="PACMUN 2019 Page Program.pdf"><h6>Page Program
                &#8594;</h6></a>
    </div>
</div>
<div class="fullbg fixed" style="background-image: url(/media/backgrounds/page.jpg);">
    <div class="bgw parentBg">
        <svg style="width:100%; height:8vh;margin-top: -2px" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M100 0 L0 0 L100 100 Z" fill="var(--blue)"/>
        </svg>
        <div class="row regRow flex">
            <span class="bigButton" style="pointer-events: none"><h6>Page Registration Closed</h6></span>
<!--            <a class="bigButton" href="https://www.cognitoforms.com/PacificModelUnitedNations/PACMUN2019PageProgram">-->
<!--                <h6>Register a Page &#8594;</h6></a>-->
        </div>
        <svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M100 0 L100 100 L0 100 Z" fill="var(--blue)"/>
        </svg>
    </div>
</div>
<div class="w bgb">
    <div class="container">
        <section id="aid"></section>
        <h3>Financial Aid</h3>
        <p>Finances should not be a barrier to attending PACMUN. We are dedicated to providing both partial and full
            financial aid to delegates who demonstrate need. If you would like to request financial aid, please complete
            the Financial Aid Form before registering with the Delegate Registration Form because you will be asked to
            upload the Financial Aid Form as a part of the Delegate Registration Form.</p>
        <a class="whiteButton" href="/media/docs/aid.pdf" download="PACMUN_Financial_Aid_Form.pdf"><h6>Financial Aid
                Form &#8594;</h6></a>
        <h7 style="display: block;">Our full technology, rooming, and refund policies can be found <a
                    href="/conference/#policies">here</a>.
        </h7>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>