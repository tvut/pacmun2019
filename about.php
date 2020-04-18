<?php
$title = "About";
$desc = "About PACMUN's history and the current PACMUN Secretariat."
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
<h1 class="c b title back">About</h1>
<svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 L50 90 L100 0 V100 H0" fill="var(--blue)"/>
</svg>
<div class="bgb w">
    <div class="container">
        <p>
            PACMUN’s mission is to spread awareness of the United Nations, to motivate students to become more
            actively involved in local and global affairs, and to inspire students to change the world. PACMUN was
            founded to empower student leaders in the community. PACMUN started as a collaborative effort between
            delegates from Tacoma, Kent, Bellevue, Issaquah, and Seattle. The secretariat and staff consist
            completely of high-school students, who have both the drive and the experience to make PACMUN an amazing
            conference.
        </p>
        <p>
            PACMUN began as a student run conference in 2014. The idea was conceived by seven extraordinary students
            to make a universally accessible MUN conference to all students in the Pacific Northwest. PACMUN is the
            first student-run conference in Washington State, and in its inaugural year, it became the largest
            conference in the state. The conference has grown since then, with the leadership of new secretariats
            and the guidance from years past.
        </p>
        <p style="color: #EAEAEA;">Pacific Model United Nations is a registered non-profit organization in the state
            of WA and is a federal tax exempt 501c(3) organization designated as a public charity by the Internal
            Revenue Service</p>
    </div>
</div>
<div class="bgw">
    <svg style="width:100%; height:8vh" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 0 L50 100 L100 0" fill="var(--blue)"/>
    </svg>
    <div class="container-fluid sec">
        <section id="sec"></section>
        <h3 class="c">Current Secretariat</h3>
        <?php
//        Import classes necessary
        function __autoload($class_name)
        {
            require_once 'classes/' . $class_name . '.php';
        }
//        First you have to create the container that will be able to print the people in a table
        $sec = new People(array());

//        Add every person to the people container
        $sec->add("Katherine Holo", "Secretary-General", "sg", "/media/sec/sg.jpg", "Katherine Holo is a busy senior at Interlake High School in Bellevue, Washington. After four years of Model United Nations, she has had the great joy and pleasure of attending a plethora of conferences as a delegate, staff and secretariat member, and meeting so many wonderful individuals who all share a common passion for debate, diplomacy and not-so-humble brags about themselves on conference websites. Throughout these four years, PACMUN has been a central part of her Model United Nations journey. Little did she know that after being crazy-terrified to speak in front of the General Assembly at her first PACMUN in 2016, she would have the honor of serving as the Secretary-General just three years later. On the lucky occasion that you do not see her working on MUN, you might find her conducting synthetic biology research, participating in DECA, or being jealous of people who actually get a normal amount of sleep every night. Katherine is incredibly humbled to be serving as your Secretary-General and is ecstatic to see you all at PACMUN 2019!");
        $sec->add("Bobby Aiyer", "Director-General", "dg", "/media/sec/dg.jpg", "Bobby Aiyer is a senior at Eastlake High School. He attended his first conference in the eighth grade, when he incessantly lobbied his committee to desalinate the Dead Sea – for drinking water, of course (spoiler: it didn’t quite work.). Since then, he’s fallen in love with the sheer exhilaration that accompanies the diplomacy, negotiation and tactical manoeuvres that inevitably surface in every committee at every conference. Outside of Model United Nations, Bobby also debates, cycles, skis, tries to follow worldwide happenings and listens to a lot of Bon Iver. You’ll also find him eagerly putting the hyphen in “Director-General” wherever he goes. He’s tremendously honoured to serve as PACMUN 2019’s Director-General alongside this wonderful Secretariat and cannot wait to see you all in November!");
        $sec->add("Nils Berzins", "Chief of Staff", "chiefofstaff", "/media/sec/cos.jpg", "Nils Berzins is a senior at the one and only International Community School in Kirkland. Simply put, he’s a patriot of the indisputably greatest nation in the world, Latvia, and extremely enthusiastic to be PACMUN 2019’s Chief of Staff. Nils is humbled to be able to work on such an amazing conference with an even more amazing group of people. With his final year in high school being his third year of Model United Nations, he regrets not jumping on to the diplomacy train earlier, considering that his freshman year desperately needed more activities. Being born and raised in the beautiful Pacific Northwest, he has come to appreciate the finer things in life, such as: the constant “torrential downpour”, an odd combination of flannel and denim, liberal politics, and wildfires. And if there is something to take away from Nils’ entire MUN career, it would be to apply to every conference or MUN opportunity possible; one would be surprised at how far one can take some simple high school extracurricular that many only use for expanding their college resume… and that the straw poll is the most effective method of getting a committee’s consensus on a topic.");
        $sec->add("Sherveen Mehrvarzan", "Assistant Director-General", "adg", "/media/sec/adg.jpg", "Sherveen Mehrvarzan is currently a senior at the International Community School in Kirkland, Washington and is now participating in his fourth year of Model United Nations. Time and time again, Sherveen is inspired by the insight, diplomacy and overall professionality of the Pacific Northwest MUN region. Through his passion for the Model UN world, he has been a part of numerous conferences as a delegate, a staffer and even a secretariat member. Outside of his MUN-filled life, Sherveen is found at his school being the President of Tech Crew, the Vice President of FBLA and the Public Relations officer of his MUN club. To have fun, Sherveen plays basketball recreationally, likes to toy with calculus problems and explores the world of computers. Sherveen is honored to be the Assistant Director-General of PACMUN 2109, and is ready to put in the work to make it the best one yet!");
        $sec->add("Anusha Srivastava", "USG of Principal Bodies", "usgprincipal", "/media/sec/prin.jpg", "Anusha Srivastava is a senior at Nikola Tesla STEM High School; this will be her fourth and (sadly) last year of Model United Nations. Countless conferences later, MUN has grown from a terrifying public speaking venture to one of her greatest passions and, even today, she never fails to be amazed by the global awareness and meaningful debate it fosters. When Anusha isn’t busy discussing the nuances of space mining or navigating peace treaties, you can find her being a violinist in the Bellevue Youth Symphony, delving into scientific research or playing tennis. She hopes that all delegates will come away from PACMUN with a new understanding of international policy, along with strengthened debate skills and a collection of unforgettable memories. Anusha owes much of her incredible high school experiences to PACMUN as her very first conference where she fell in love with MUN and is honored to serve as the USG of Principal Bodies.");
        $sec->add("Spring Chenjp", "USG of Economic and Social Councils", "usgecosoc", "/media/sec/ecosoc.jpg", "Spring Chenjp is a junior at Nikola Tesla STEM High School and is thrilled to serve as your Under-Secretary-General of Economic and Social Councils! Her first conference was KINGMUN 2017 and since then she has since fallen in love with Model UN due to the rapid-fire debate, deep bonds formed with other delegates and meaningful discussion about world issues. You may have seen her directing CSTD at PACMUN 2018 or serving as the USG of UN Committees at KINGMUN 2019. In her spare time, she practices and teaches taekwondo, sings in her school choir and hopes to pass her next calculus test. Spring had a great time selecting committees, training staff, and ensuring that delegates will have the best time possible at PACMUN 2019!");
        $sec->add("Annalisa Mueller-Eberstein", "USG of Specialized Committees", "usgspecialized", "/media/sec/spec.jpg", "Annalisa Mueller-Eberstein can commonly be found attending the International Community School in Kirkland, as a part of the ever-dwindling Class of 2020 (now at 31 kids). After four years of winning awards as a delegate, serving as an assistant director, chair, and director of a variety of committees - ranging from DISEC to Senate to HCC - and working on multiple secretariats in various positions, she is excited to work with the rest of the PACMUN team as the USG of Specialized Committees. One of her favorite things about Model United Nations is the debate of important issues, like whether a hot dog is a sandwich. Annalisa can't wait to meet you all at PACMUN 2019 and hopes every delegate has the opportunity to learn while having fun. When not planning MUN conferences, she can be found watching a show on Netflix, completing a project for FBLA, working as Vice President of ASB, or, most importantly, making bad puns and using horrible pick-up lines.");
        $sec->add("Skyler Chan", "USG of International Affairs", "internationalaffairs", "/media/sec/affairs.jpg", "Skyler is a junior hailing from your friendly neighbour up north, Vancouver, Canada. Currently enrolled in Sir Winston Churchill Secondary School's French Immersion International Baccalaureate program, Skyler is elated to serve as the Under-Secretary-General of International Affairs of PACMUN 2019. His passions of debate, public speaking and global affairs are culminated and embodied within Model United Nations. However, the people who compose this magnanimous community is what makes MUN an extracurricular activity unlike no other. As USG of International Affairs, Skyler hopes to bring the MUN community from all parts of the world closer together. Outside of MUN, Skyler partakes in a plethora of activities such as debate, fencing, flying gliders, and photography. He is looking forward to welcoming all delegates in November!");
        $sec->add("Alicen Han", "Lead USG of Delegate Affairs", "delegateaffairs", "/media/sec/da1.jpg", "Alicen Han is a stressed boba-obsessed senior attending Newport High School. Since joining Model United Nations in her sophomore year, she has participated as a delegate, staffer and a secretariat member for a plethora of conferences. When she’s not busy changing the Cognito form or assigning delegates positions, she enjoys playing tennis and the clarinet. Alicen also participates in a variety of extracurricular clubs, including Key Club, DECA and #BUILTBYGIRLS. Alicen is honored and absolutely ecstatic to be serving as the Lead USG of Delegate Affairs at PACMUN 2019 and cannot wait for yet another successful PACMUN!");
        $sec->add("Henry Stelle", "USG of Delegate Affairs", "delegateaffairs", "/media/sec/da2.jpg", "Henry Stelle is a junior at Bellarmine Preparatory School and is excited to be supporting Model United Nations as the USG of Delegate Affairs for PACMUN 2019. Having been first introduced to MUN in the spring of his eighth-grade year, Henry is drawn to MUN because it encourages students to stand up and become leaders who both understand the importance of compromise and have a global mindset. Aside from attending conferences across the United States and Canada, Henry has had the honor of staffing EDUMUN 2018 and BELLARMUN 2018-2019. Outside of the MUN-verse, Henry can almost always be found close to a computer covered with code, surrounded by piles of textbooks, papers, and more technology. Henry’s life is dominated by MUN and his studies, but when freed from his 20lb backpack, Henry enjoys supporting the Bellarmine Drama Program’s tech division or rock climbing - but at the end of the day, there is inevitably a multi-tab MUN spreadsheet open on his computer. As a MUN-obsessed and tired secretariat member, Henry joyfully welcomes you to register for PACMUN 2019 and take your next steps towards leadership. See you in November!");
        $sec->add("Tristan Stevens", "USG of Technology", "webmaster", "/media/sec/tech.jpg", "Tristan Stevens will be a senior at Tesla STEM High School by the time PACMUN 2019 rolls around. This is his fifth year of doing Model United Nations after getting involved at SkyMUN in the eighth grade. He fell in love with MUN and went on to participate in over six conferences during his freshman year and another four sophomore year. During junior year, he got involved on the PACMUN 2018 secretariat (as your USG of Tech) and wants to go out with a bang this year. Outside of Model UN, he can be found taking photographs, coding or doing robotics. He can’t wait to make PACMUN 2019 the best one yet!");
        $sec->add("Kevin Huerlimann", "USG of Finance", "finance", "/media/sec/finance.jpg", "Kevin Huerlimann is a senior in the Cambridge Program at Juanita High School. He joined Model United Nations as a freshman, going to PACMUN 2016, and has been hooked on Model United Nations ever since. He has been deeply invested in Model United Nations and loves having fierce and passionate debates about current world problems and cooperating with other knowledgeable delegates to create realistic resolutions. In his free time outside of Model United Nations he has a passion for photography, swims competitively, competes in DECA, and enjoys doing research on current world news and politics. He is enthusiastic to be the USG of Finance for PACMUN 2019, and hopes to make the conference an amazing experience!");
        $sec->add("Akshay Murthy", "USG of Media", "media", "/media/sec/media.jpg", "Akshay Murthy is a senior at Nikola Tesla STEM High School; this will be his first time ever participating in an Model United Nations conference. He is extremely excited to learn about the different components of MUN, apply his skills in graphic design and media to PACMUN 2019, and work closely with the team to execute the conference. Akshay is also passionate about global issues, politics and entrepreneurship. He is currently the founder and CEO of his own marketing and design agency that has worked with numerous athletes in the NBA and NFL and has built up a following of almost 10,000 followers. When he is not working on creating designs for his clients, you can find him participating in FBLA or trying to get more than three hours of sleep. Akshay is humbled to serve as the USG of Media for PACMUN 2019 and hopes to make the conference an amazing experience for all delegates!");

//        Print it out to html
        $sec->printAll();
        ?>
    </div>
    <div class="container c sec" style="padding-top: 0 !important;">
        <section id="past"></section>
        <h3>2018 Secretariat</h3>
        <img style="width:100%" src="/media/sec/2018sec.jpg"/>
        <h3>2017 Secretariat</h3>
        <img style="width:100%" src="/media/sec/2017sec.jpg"/>
        <h3>2016 Secretariat</h3>
        <img style="width:100%" src="/media/sec/2016sec.jpg"/>
        <h3>2015 Secretariat</h3>
        <img style="width:100%" src="/media/sec/2015sec.jpg"/>
        <h3>2014 Secretariat</h3>
        <img style="width:100%;position: sticky" src="/media/sec/2014sec.jpg"/>
    </div>
    <div class="container-fluid sec" style="padding-top: 0 !important;">
        <section id="media"></section>
        <h3 class="c">Media Team</h3>
        <div class="container nopadding">
        <p>The MUN Northwest Media Internship is a year-round internship where interns create and design a variety of
            promotional/marketing materials and media for all of MUN Northwest’s conferences in the form of photography,
            videos, social media posts, and more. The MUN Northwest Media Internship is a unique opportunity for high
            schoolers to grow their skills through on-site and off-site long-term media projects. </p>
        <p>The 2020-21 MUN Northwest Media Internship application will open in May 2020 and any questions can be
            directed to Katherine Holo, at <a href="mailto:sg@pacificmun.com">sg@pacificmun.com</a>.</p>
        </div>
        <?php
        $media = new People(array());
        $media->add("Mo Shameer", "Videography & Photography Intern", "", "/media/mediateam/mo.jpg", "Mo Shameer is a senior at Interlake High School. Now in his second year as a part of PACMUN’s media team and first year as a MUN Northwest Intern, he’s determined to capture every special moment and memory during conferences. Mo has been practicing filmmaking and media work for last 4 years and what started as a hobby is now the makings of a career. He joined the media staff of PACMUN 2018 and to create a spectacular recap of the event. When he’s not covering an event or working on short films, he’s—well that’s he does. Maybe watching a movie or something. He’s more than excited to be working with MUN Northwest again and can’t wait to make something new this year!");
        $media->add("Isabelle Nurzhanov", "Graphic Design & Photography Intern", "", "/media/mediateam/isabelle.jpg", "Isabelle Nurzhanov is a junior at The Center School who can usually be found scouting for the
best cup of chai in Seattle. (It’s currently the one made at Sugar Bakery in Queen Anne). She
began her MUN career only a year ago at PACMUN 2018, but has since fallen in love with the
thrill of debate and diplomacy. At The Center School, she co-leads the Art Club and Racial
Justice Alliance, and serves as the Junior Class Secretary. When she isn’t designing graphics and taking photos for MUN Northwest, Isabelle enjoys baking, drinking copious amounts of Earl
Grey tea, watching pretentious indie movies, and trying to learn Russian so she can finally
understand her extended family for once.
");
        $media->add("Matthew Villalba-Mutis", "Graphic Design & Photography Intern", "", "/media/mediateam/matthew.jpg", "Matthew Villalba-Mutis is a sophomore in the Cambridge Program at Juanita High School in Kirkland. After participating in the political cosplay of CELAC at PACMUN 2018, where the most memorable thing was Colombia moving to the moon and the entire South American continent disappearing from existence, he was hooked on the MUN experience and wanted more. When not making instagram stories or retaking staff members’ pictures for MUN, he likes to hike, do photography (@mateo_villam on IG), and play lots of tennis. He’s excited to be a MUN Northwest Media Intern and looks forward to creating excellent content across all the conferences!");
        $media->add("Bentley Eldrige", "Videography & Photography Intern", "", "/media/mediateam/bentley.jpg", "Bentley Eldridge is a junior at Bainbridge High School. He fell victim to the MUN epidemic in freshman year and hasn’t questioned that decision since. Model UN “literally blew up” his life, since the various conferences he has attended vastly expanded his understanding of international politics, to the point of mental and spiritual enlightenment. The Great Flood of Knowledge, as he called the experience, then lead to an almost predestined opportunity to apply for the PACMUN Media Team. Right then and there, Bentley’s passions for MUN and cinematography merged into one frame. This would be his shot at redemption, having missed this opportunity many times in alternate universes. In his free time, Bentley enjoys boredom and the potential it holds. More often, however, you can find him rowing on the Bainbridge varsity rowing team, shooting music videos, and trying to break the norms of filmmaking. The excitement of this biography doesn’t stop here. To stay up to date with the chaos and cinematography in his life, follow @bentley.eldridge on Instagram.");
        $media->printAll();
        ?>
    </div>
</div>
<!--<div class="bgb w">-->
<!--	<div class="container">-->
<!--	<h3>Join Media Team</h3>-->
<!--		<p>For PACMUN 2019’s three-day conference, the PACMUN Media Team will be working alongside the MUN Northwest Media Interns to document the conference through photography and videography. </p>-->
<!--		<p>The application closes on October 30th, 2019 11:59 PM PST. </p>-->
<!--		<p>Since PACMUN 2019 is looking for talented members, after the submission of your application, you may be extended an interview should it be necessary. If you have any questions about this process please send an email to <a href="mailto:media@pacificmun.com">media@pacificmun.com</a>.</p>-->
<!--		<a class="whiteButton" href="https://docs.google.com/forms/d/e/1FAIpQLSdXR25bIo48Gx6VMTQeF9Fm0t66OvKem2AkgG5oV3EQFSdhcQ/viewform"><h6>Media Team Application &#8594;</h6></a>-->
<!--		</div>-->
<!--		</div>-->
<div class="bgw b">
    <div class="container bod">
        <section id="board"></section>
        <h3>Board of Directors</h3>
        <div class="row">
            <div class="col-sm" style="padding-bottom: 20px">
                <h4 data-aos="fade-up">Monisha Weerasundara</h4>
                <h5 data-aos="fade-up">President</h5>
            </div>
            <div class="col-sm" style="padding-bottom: 20px">
                <h4 data-aos="fade-up">Subramanian Ramachandran</h4>
                <h5 data-aos="fade-up">Chairman</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h6 data-aos="fade-up">Trevor Mueller</h6>
                <h6 data-aos="fade-up">EJ Velasco</h6>
                <h6 data-aos="fade-up">Shawdi Mehrvarzan</h6>
            </div>
            <div class="col-sm">
                <h6 data-aos="fade-up">Paige Chickering</h6>
                <h6 data-aos="fade-up">Kelsey Braford</h6>
                <h6 data-aos="fade-up">Angie McNally</h6>
            </div>
        </div>
    </div>
    <div class="container bod" style="padding-top: 0 !important;">
        <section id="munnw"></section>
        <h3 class="c">MUNNorthwest</h3>
        <p>PACMUN is part of Model United Nations Northwest, a student-run organization that provides the resources for
            conferences and schools in the Pacific Northwest</p>
        <p>Each year, a unique Secretariat is selected to prepare for each individual conference; these dynamic teams of
            high school students work diligently year-round to craft a website, develop systems for registration, write
            committee background guides, search for grants and sponsors, promote conferences on social media, negotiate
            agreements with hotels in the downtown Seattle area, and much more. Each Secretariat is overseen by the MUN
            Northwest Board of Directors, made up of former Secretariat members, founding members, and experienced
            members of the MUN community in the Pacific Northwest.</p>
        <p>You can learn more about Model United Nations Northwest on <a href="http://www.munnorthwest.org/">their
                website</a>.</p>
    </div>
</div>
<?php include 'include/footer.php' ?>
</body>

</html>