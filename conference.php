<?php
$title = "Conference";
$desc = "PACMUN 2019 will be held at The Sheraton Seattle."
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
            .bgBar {
                background-image: url(/media/backgrounds/conferencebg.jpg);
            }

            .bgBar * {
                font-size: 105%;
            }

            .bgBar i {
                font-size: 300% !important;
                padding-bottom: 20px;
            }
        }

        .bgBar {
            background-color: var(--blue);
        }

        .main h6, .main h7 {
            margin: 0;
            margin-left: 10px;
            text-align: left;
            width: auto
        }

        .main h6 {
            margin-top: 1vh
        }

        .main {
            display: flex;
            flex-wrap: wrap;
        }

        .main .sub {
            flex: 1;
            max-width: 50%;
            min-height: 100px;
            border-radius: 20px;
            margin: 0.8vw;
            padding: 10px;
        }

        .main .tall {
            min-height: 180px;
        }

        .main .full-sub {
            flex: 100%;
            max-width: 100%;
        }

        .sub .sub {
            margin: 0 0 1vw
        }

        .border-box {
            margin: 0 10px 10px;
            border: 2px solid #fff;
            border-radius: 20px;
            padding: 2vmax;
        }

        .border-box:hover {
            box-shadow: 0px 0px 14px 2px #fff;
        }

        .border-box > * {
            text-align: center
        }
    </style>
</head>
<body>
<?php include 'include/nav.php' ?>
<h1 class="c b title back">Conference</h1>
<div class="fullbg bgBar" style="background-attachment: fixed">
    <div style="background-color: rgba(23,146,167,.35);">
        <svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L50 90 L100 0 " fill="white"/>
        </svg>
        <div class="fullbg flex" style="min-height:45vh;padding-top: 4vh;
            padding-bottom: 4vh;">
            <div style="width:100%">
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
                </div>
            </div>
        </div>
    </div>
</div>
<div style="position: sticky;top:0px;z-index: -3; position: -webkit-sticky;">
    <div id="map" style="height:100vh;width:100%;"></div>
</div>
<div style="margin-top:-100vh;width:100vw;padding: 25px">
    <section id="venue"></section>
    <div style="background-color: rgba(255,255,255,.9); padding: 25px;" class="bigfloat">
        <img style="width:100%;padding-bottom: 25px" src="/media/icons/sheraton-logo.png" alt="Sheraton logo"/>
        <h5>PACMUN 2019 will be held at The Sheraton Seattle in the heart of downtown Seattle.</h5>
        <p>
            The Sheraton
            Seattle is a four star award winning hotel, acclaimed for its great service, luxurious rooms and
            amenities, and excellent location. Delegates will room in groups of four in spacious rooms with two
            queen beds. Each room has a partial view of the city and is designed for maximum comfort, sporting a
            television for relaxation, and much more. Delegates will find the Sheraton fully equipped to support
            diplomacy and debate in its state of the art meeting facilitates. It is also the perfect place to
            relax and socialize out of committee with its welcoming communal spaces and accommodations. The
            Sheraton is ideally located in the center of Seattle in walking distance of many of Seattle’s best
            activities, attractions, and restaurants. If you have any questions about the venue, rooming, or
            room accommodations please contact us at <a href="mailto:sg@pacificmun.com">sg@pacificmun.com</a>.
        </p>
    </div>
</div>
<div class="bgb w">
    <div class="container">
        <section id="college"></section>
        <h2>College & Opportunities Showcase</h2>
        <p>The PACMUN College & Opportunities Showcase is an event for delegates to interact and network with higher
            education institutions, community organizations, and other future opportunities. Our Showcase partners
            include The University of Oregon, Carpe Diem Education, University of Washington European Center of
            Excellence and more. The showcase will be held during PACMUN on November 23rd, from 12:00 - 2:30 PM in the
            Metropolitan Ballroom. Don’t miss this unique opportunity at PACMUN 2019!</p>
    </div>
    <div class="c title w" style="padding-top: 0 !important;">
        <div class="sponsor" style="background-image: url(/media/sponsors/white/columbia.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Columbia University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/University_of_Oregon_logo.svg.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>University of Oregon</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/UW-Euro-Union-Logo-Center.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>University of Washington European Union Center of Excellence</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/CDE_PACMUN_Logo.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Carpe Diem Education</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/BMC_black_stacked.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Bryn Mawr College</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/Evergreen-primary--white.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>The Evergreen State College</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/vertical_logo-300x211.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>California Polytechnic State University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/WSU-Logo_Vert-CMYK.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Washington State University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/bostonu.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Boston University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/csu.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Colorado State University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/boston.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Boston College</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/oberlin.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Oberlin College and Conservatory</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/nyu.png)">
            <a href="https://www.nyu.edu/" class="sponsor-inner">
                <div>
                    <h6>New York University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </a>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/northeastern_university_logo.png)">
            <a href="https://www.northeastern.edu/" class="sponsor-inner">
                <div>
                    <h6>Northeastern University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </a>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/umich.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>University of Michigan</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
        <div class="sponsor" style="background-image: url(/media/sponsors/white/gonzaga.png)">
            <div class="sponsor-inner">
                <div>
                    <h6>Gonzaga University</h6>
                    <h7>College &#38; Opportunities Showcase Partner</h7>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgw">
    <div class="container">
        <section id="schedule"></section>
        <h2>Schedule</h2>
        <div class="main w">
            <script>$(document).ready(function () {
                    $(".section.box").find("h3").each(function () {
                        $(this).wrap("<a href='#" + $(this).text() + "'></a>");
                    });
                    $(".slice").wrapAll("<div class='sub' style='padding:0'></div>");
                    $(".slice2").wrapAll("<div class='sub' style='padding:0'></div>");
                })</script>
            <?php
//            the first value sets the css tyles
//            the second value is the bg color
//            3rd value is the label
//            fourth value is the time
//
//            g - sets color to gray
//            sub - needed to make it a menu item
//            tall - makes it a tall block
//            full-sub - it's full width
//            for half-width the left item has 'sub full-sub' and 'slice' and the right one only needs sub
            
            $schedule = [
                ["g", "#FFF", "<h6 style=\"font-size:36px!important\">Friday, November 22<h6\>", ""],
                ["sub full-sub", "#1790A7", "Conference Check-In", "2pm — 3:15pm"],
                ["sub full-sub", "#36A0B4", "Opening Ceremony", "3:30pm — 5pm"],
                ["sub full-sub tall", "#03768C", "Committee Session 1", "5pm — 7pm"],
                ["sub full-sub", "#1790A7", "Dinner/Hotel Room Check-In", "7pm — 8:30pm"],
                ["sub full-sub tall", "#36A0B4", "Committee Session 2", "8:30pm — 11:30pm"],
                ["sub full-sub g", "FFF;border-bottom:3px dotted;border-radius:0px", "Curfew", "12am"],
                ["g", "#FFF", "<h6 style=\"font-size:36px!important\">Saturday, November 23<h6\>", ""],
                ["sub full-sub", "#1790A7", "Head Delegate Meeting", "7:30am — 8am"],
                ["sub full-sub tall", "#36A0B4", "Committee Session 3", "8am — 12pm"],
                ["sub full-sub tall slice", "#03768C;margin-bottom:0", "Lunch", "12pm — 2:30pm"],
                ["sub tall", "#03768C", "College & Opportunities Showcase", "12pm — 2:30pm"],
                ["sub full-sub tall", "#1790A7", "Committee Session 4", "2:30pm — 4:30pm"],
                ["sub full-sub", "#36A0B4", "Break", "4:30pm — 5pm"],
                ["sub full-sub", "#03768C", "Committee Session 5", "5pm — 7:30pm"],
                ["sub full-sub", "#1790A7", "Dinner", "7:30pm — 9pm"],
                ["sub full-sub tall", "#36A0B4", "Social", "9pm — 11pm"],
                ["sub full-sub g", "FFF;border-bottom:3px dotted;border-radius:0px", "Curfew", "11:15pm"],
                ["sub full-sub tall", "#03768C", "Midnight Crisis", "12am — 2am"],
                ["sub full-sub g", "FFF;border-bottom:3px dotted;border-radius:0px", "Final Curfew", "2:15am"],
                ["g", "#FFF", "<h6 style=\"font-size:36px!important\">Sunday, November 24<h6\>", ""],
                ["sub full-sub tall", "#1790A7", "Committee Session 6", "9am — 11am"],
                ["sub full-sub", "#36A0B4", "Lunch", "11am — 12:30pm"],
                ["sub full-sub tall", "#03768C", "Committee Session 7", "12:30pm — 2:30pm"],
                ["sub full-sub", "#1790A7", "Delegation Photos", "2:30pm — 3pm"],
                ["sub full-sub", "#36A0B4", "Closing Ceremonies", "3pm — 4:30pm"],
            ];

            //Prints out the schedule
            for ($row = 0; $row < count($schedule, 0); $row++) {
                echo "<div class='" . $schedule[$row][0] . "' style='background:" . $schedule[$row][1] . "'><h6>" . $schedule[$row][2] . "</h6><h7>" . $schedule[$row][3] . "</h7></div>";
            }
            ?>
        </div>
    </div>
</div>
<div class="bgw">
    <div class="container">
        <section id="policies"></section>
        <h2>Conference Policies</h2>
        <div class="row" style="padding-top:4vh">
            <div class="col-2">
                <img style="width: 100%;" src="/media/icons/moneyicon.png" align="right">
            </div>
            <div class="col-10">
                <h4 class="b">Refund Policy</h4>
                <p>No refunds will be given unless the conference does not occur or cancellation arises from medical
                    issues, force majeure, or other circumstances arising beyond reasonable control. Refunds will be
                    honored upon full cancellation of the event; full cancellation does not include postponement of the
                    event. Cases will be reviewed on an individual basis.</p>
            </div>
        </div>
        <div class="row" style="padding-top:4vh">
            <div class="col-2">
                <img style="width: 100%" src="/media/icons/phoneicon.png" align="right">
            </div>
            <div class="col-10">
                <h4 class="b">Technology Policy</h4>
                <p>During all committee sessions, cellular phones are required to be turned off or placed in silent
                    mode. Use of cellular phones is not permitted committee session. Laptops are permitted in committee,
                    as long as they are closed during formal debate. In order to share Resolution Papers among delegates
                    and committee staff members, use of USB drives is encouraged.</p>
                <p>Any use of the internet for social networking, viewing explicit material, or other activity unrelated
                    to the course of debate is a violation of the Delegate Contract. Use of cellphones and use of
                    laptops connected to the internet will be permitted outside of committee sessions.</p>
            </div>
        </div>
        <div class="row" style="padding-top:4vh">
            <div class="col-2">
                <img style="width: 100%" src="/media/icons/roomingicon.png" align="right">
            </div>
            <div class="col-10">
                <h4 class="b">Rooming Policy</h4>
                <p>All delegate rooms will be single-sex, quad occupancy rooms. For triple rooms that result from an odd
                    number of delegates, no extra fee will be levied.</p>

                <p>Advisor and chaperone rooms are $290 per room for the two nights at the conference, regardless of
                    occupancy.</p>

                <p>Delegates or advisor/chaperones seeking stay an extra night will be invoiced $235 per room,
                    regardless of occupancy. </p>

                <p>It is PACMUN policy that delegates and advisors, as well as chaperones, spend the night at the venue.
                    This is because of our midnight crisis and we want to give delegates the full Model United Nations
                    experience. This policy is very common amongst other conferences. Any questions can be directed to
                    <a href="mailto:sg@pacificmun.com" target="_top">sg@pacificmun.com</a>.</p>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>