<?php
function __autoload($class_name)
{
    require_once 'classes/' . $class_name . '.php';
}

//Reads the committee out of the url ex.https://pacificmun.com/committees?committee=senate would return senate
$url = $_GET["committee"];

//Array of all the information for the committtees
$com_content = array(
    "ga" => new singleCommittee(
        "General Assembly",
        "ga",
        "p",
        "The General Assembly (GA) is the only committee in the United Nations in which all member states have equal representation wherein each of the 193 member states of the United Nations receive one vote regardless of their status and influence in the world. As one of the six main organs of the United Nations, the GA tackles a wide array of issues such as development, peace and security, and international law as well as overseeing the budget of the entire United Nations. As such, the General Assembly is an ideal committee for delegates of all levels that wish to debate far reaching and pressing international issues. For those who are beginners, it is perfect as an introduction into how the United Nations works. As for intermediate and advanced delegates, the General Assembly allows for ardent debate due to the vast number of members and differing viewpoints present.",
        0,
        "Global Accessibility to Healthcare",
        "",
        "Addressing Criminal Rights",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Jasmine Yang", "Director", "Jasmine Yang is a junior at Juanita High School and is part of the Cambridge program. She has been involved in MUN since freshman year and has loved it from then on. She enjoys the passionate debate and collaboration as well as meeting new people at every conference. When not attending a MUN conference, Jasmine can be found snowboarding, surfing, sailing, shopping, running track, and playing volleyball. Jasmine is ecstatic to welcome all the delegates to the General Assembly at PACMUN 2019. ", "/media/staff/ga/d.jpg", ""),
            new Person("Jieyan Wang", "Chair", "Jieyan Wang is a senior at Moscow High School, located in Moscow, Idaho. She is honored to be the first person ever from her high school to staff PACMUN or any high school Model United Nations conference. Joining her school’s MUN program as a freshman, she has attended PACMUN three times and has previously staffed her local middle school MUN conference, CUBMUN. Outside of MUN, Jieyan is an avid mathematics researcher and short fiction writer. This year, she is excited to work with the GA delegates to create a truly amazing PACMUN experience!", "/media/staff/ga/c.jpg", ""),
            new Person("Autumn Rhee", "Assistant-Director", "Autumn Rhee is currently a junior at the International Community School. She began her MUN journey at PACMUN 2018 in UNHCR and was inspired by the community of passionate delegates around her. Outside of MUN, she enjoys spending her time playing instruments, playing card/board games, and simply meeting new people! Autumn hopes that this committee will not only improve your public speaking, but also create unforgettable memories.", "/media/staff/ga/ad.jpg", ""),
            new Person("Natalie Sarabosing", "Assistant-Director", "Natalie Sarabosing is currently a sophomore at Newport High School. After attending and loving EDUMUN 2018 and PACMUN 2018, she's absolutely thrilled to be one of your Assistant Directors for her second time staffing. She can often be found battling the fiery Dragon of Productivity, armed with the Trifecta of Procrastination: YouTube, books, and friends only a text away. Aside from this, she also enjoys playing the piano, Brazilian Jiu-Jitsu, photography, and referencing Broadway showtunes. Natalie won't throw away her shot to give this year's delegates a fantastic time at PACMUN 2019!", "/media/staff/ga/ad2.jpg", ""),
        ))),
    "eu" => new singleCommittee(
        "European Union",
        "eu",
        "p",
        "The European Union (EU) is a regional body crucial to the cohesion and stability of Europe. With 28 member countries, the EU’s chief roles are promoting peace, freedom, and economic stability within its borders, and their decisions impact not only Europe, but the world. As both an economic and political union, the EU has enjoyed over 50 years of peace and prosperity and continually strives to fulfill its principal mission of promoting the wellbeing and livelihood of its citizens through tackling social, cultural, economic, and political hurdles head on.   Now, however, new challenges are testing the strength of the union that require delegates to come together to solve Europe’s most pressing problems. Delegates will be debating complex topics highly relevant to the modern geopolitical climate, making this committee suited for beginner and intermediate delegates alike.",
        0,
        "Protection of the Freedom of the Press",
        "",
        "Balancing Tourism and Preservation of Historic Sites",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Linda Yan", "Director", "Linda is a very stressed junior attending Bellevue High School and is incredibly excited to be your Director! She fell in love with MUN when she got dragged to WASMUN by one of her friends during her freshman year. When not procrastinating on her copious amounts of homework, she loves to read, doodle, and listen to Ed Sheeran. Outside of MUN, Linda is also a varsity cross country and track and field athlete, avid DECA competitor, and an enthusiastic environmentalist. Her bucket list includes running a marathon and riding a hot air balloon.", "/media/staff/eu/d.jpg", ""),
            new Person("Cora Cole", "Chair", "Cora is a junior at Bainbridge High School, and she is thrilled to be serving as your Chair for the European Union! Although this is her third year doing Model United Nations, it is her first year staffing, and she is looking forward to a weekend of lively debate. PACMUN 2017 was Cora’s first conference, and ever since then, she’s been in love with MUN. When she’s not MUNing, Cora teaches martial arts to small children and plays violin both individually and in her local youth orchestra. In her free time, Cora loves dancing in her room to loud music and hanging out with her friends.", "/media/staff/eu/c.jpg", ""),
            new Person("Claire Charvet", "Assistant-Director", "Claire is a junior at Juanita High School and is extremely excited to be your Assistant Director! This is her second year doing MUN, her first conference being PACMUN 2018, and her first time staffing. In her occasional free time, Claire enjoys playing the piano, reading anything she can get her hands on, avoiding her homework, and taking far too many pictures of her bunny.", "/media/staff/eu/ad.jpg", ""),
        ))),
    "who" => new singleCommittee(
        "World Health Organization",
        "who",
        "p",
        "The World Health Organization (WHO) consisting of 194 member states across six regions, ensures the safety of the air people breathe, the food they eat, the water they drink, and the medicines and vaccines they need. With headquarters located in Geneva, Switzerland, WHO has the primary purpose of directing and coordinating international health within the United Nations system. The challenging and urgent health concerns that this organization addresses contributes to the world's medical development and safeguards the quality of life for billions around the globe. Health improvements are inherently tied to a stronger economy and increased population, so the WHO has a critical role in the success and safety of every nation.  Open to beginner and advanced delegates alike, this committee will challenge delegates to address some of the most pressing health concerns and issues today.",
        0,
        "Countering the Rise of Antibiotic Resistant Diseases",
        "",
        "Improving Maternal & Neonatal Care",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Charlotte Gunn", "Director", "Charlotte Gunn is a senior at Bellarmine Preparatory School, and an active member of her school’s Model UN Program, as well as being on the core leadership team for the third year in a row. Charlotte serves as the President of her school’s MUN Program, along with being the Chief of Staff for both EDUMUN 2019 and BELLARMUN 2020. PACMUN 2019 will be Charlotte’s 20th MUN conference and last PACMUN after four years! Aside from Model UN, Charlotte enjoys traveling, volunteering, spending her summers at YMCA Camp Orkila, and complaining about the Washington State Ferry System that she uses every day to get to school from the mossy rock of Vashon Island that she inhabits! Charlotte is very excited to meet all of you and can’t wait to see the ideas that are brought up during debate!", "/media/staff/who/d.jpg", ""),
            new Person("Abbey Regan", "Chair", "Abigail Regan is a senior at Newport High School. Besides participating in MUN activities, she is a member of her school’s band and jazz choir. She is also the president of her school’s dance planning committee and enjoys drawing and playing classical guitar in her free time. She enjoys MUN because of its interesting style of debate and its emphasis on collaboration to solve issues. She looks forward to seeing well-researched delegates tackle the topics of this committee. ", "/media/staff/who/c.jpg", ""),
            new Person("Marjan Fathi", "Assistant-Director", "Marjan Fathi is a sophomore at Inglemoor High school, and is excited to have her first staffing experience! She has been entrapped in the MUN world since the start of freshman year. Marjan is very attached to her family and she likes to waste her time with her wild dog and interesting friends. In her free time she enjoys playing badminton, binge watching Netflix shows religiously, and flexing her bilingual skills. She has always had a passion towards the medical field and is thrilled to see how she can apply that to the World Health Organization. She can’t wait to meet you all!", "/media/staff/who/ad.jpg", ""),
            new Person("Marko Morrison", "Assistant-Director", "Marko Morrison is a junior at International Community School and is excited to be attending his tenth MUN conference! Marko is interested in a multitude of hobbies, including playing guitar, making YouTube videos, reading, working out, eating tuna wraps, and arguing with his friend Rory. MUN is a huge passion for him, so he’s excited to see both new and experienced delegates take the floor of WHO.", "/media/staff/who/ad2.jpg", ""),
            ))),
    "unodc" => new singleCommittee(
        "United Nations Office on Drugs and Crime",
        "unodc",
        "e",
        "Since 1997, the United Nations Office on Drugs and Crime (UNODC) has been working diligently to address illicit drug trade, crime, and terrorism alike. Its efforts have been focused around three main pillars: field-based projects, intensive research, and framework that support member states’ in solving pressing issues. In addition, the agency prides itself on its commitment to social justice, particularly with the integration of gender perspective in international politics. In recent years, extremism and drug-usage have been on the rise, and the UNODC is in need of swift action in order to create effective resolutions. The UNODC is the perfect committee for delegates interested in nuanced research and debate and should be equipped to address multifaceted issues when stepping into committee.  ",
        0,
        "Medical Black Markets",
        "",
        "Regulation of Psychotropic Drugs",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Hannah Bahram-Pour", "Director", "Hannah Bahram Pour is a current senior at Woodinville High School and is very excited to be the director of the United Nations Office on Drugs and Crime. She loves being a part of such a MUNderful community and is constantly participating in conferences as a staff member, delegate, and as the president of her schools’ MUN chapter. Outside of MUN, you can find her cramming for a test, writing a last minute script for DECA, or skiing. She is very excited to meet all the delegates and wishes luck to everyone at PACMUN 2019!", "/media/staff/unodc/d.jpg", ""),
            new Person("Spencer Bispham", "Chair", "Spencer Bispham is a senior at Bainbridge High School and a 3-year PACMUN attendee. Even though it’s his first time staffing, he is thrilled to serve as Chair of the UNODC at this year’s conference! When he’s not in MUN, working out, or doing generous amounts of homework, he’s probably doing equity work in his community. He will work hard to make sure everyone has a good time and feels included at PACMUN 2019!", "/media/staff/unodc/c.jpg", ""),
            new Person("Hannah Walker", "Assistant-Director", "Hannah Walker is currently a senior at Bellarmine Prep and is very excited to serve as the Assistant Director for UNODC. PACMUN was Hannah’s very first MUN conference as a freshman, so she is ecstatic to be on staff for her final PACMUN! Outside of MUN, Hannah is a competitive dancer and spends all of her “free” time in class or rehearsal. She can also usually be spotted with some kind of iced coffee. She can’t wait to see everyone in committee and hopes to make PACMUN 2019 a great experience for all!", "/media/staff/unodc/ad.jpg", ""),
        ))),
    "unhrc" => new singleCommittee(
        "United Nations Human Rights Council",
        "unhrc",
        "e",
        "The United Nations Human Rights Committee (UNHRC) is a body dedicated to championing human rights globally and ensuring that they are not infringed upon.  Based in Geneva, Switzerland, the UNHRC is perfectly suited for conversation and cooperation between its 47 rotating member states regarding all kinds of human rights violations anywhere in the world.  Through its mechanism of allowing individuals, groups, and countries to file complaints about abuse and use of experts in various fields to advise what steps should be taken, the committee has also become one of the world’s leading voices in the fight for humankind’s unalienable rights.  In recent years, topics addressed have been as wide-ranging as Myanmar’s treatment of Rohingya Muslims to climate change.  Between its unique and important voice and its status as a premier deliberative council, the UNHRC is great for delegates who are looking for fascinating and engaging debate surrounding human rights around the globe.",
        0,
        "Protection of LGBTQ+ Rights in Developing Nations",
        "",
        "Privacy in the Digital Age",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Elaine Guo", "Director", "Elaine Guo is currently a senior at Interlake High School and is excited to be serving as your Director! Originally joining MUN freshman year for the snacks, she soon realized the array of aspects that make MUN incredible, including the in-depth debate and the amazing people she's met along the way. Outside of MUN, Elaine can be found volunteering with animals, helping out with her local Girls Who Code club, or napping to avoid her college apps. Elaine is excited for what will certainly be a fantastic conference!", "/media/staff/unhrc/d.jpg", ""),
            new Person("Anshita Saini", "Chair", "Anshita Saini is a current junior at Interlake High School and is thrilled to be serving as your chair for the UNHRC at PACMUN 2019 in her third year of Model United Nations. She believes that this committee is of extreme significance to the wellbeing of people around the world and hopes that delegates will reflect on current world issues in relation to the chosen topics. Aside from ramming out position papers for upcoming conferences, Anshita can usually be found tossing flips at a meet for her school’s gymnastics team, shopping with her friends, or sleeping when she should be doing homework. She looks forward to action-packed debate and meeting all the delegates at PACMUN!", "/media/staff/unhrc/c.jpg", ""),
            new Person("Kellen Hoard", "Assistant-Director", "Kellen Hoard is a sophomore at Inglemoor High School and is here because he (fortunately) succumbed to peer pressure.  He has attended three MUN conferences to date and is Co-Director of Delegate Affairs in his school’s club.  Outside of the Model United Nations sphere, he is an active numismatist (you should probably look up that word), volunteer in political campaigns, choral singer, and musical theater tech.  Kellen does these things because he lacks athletic ability, superior intelligence, and a social life.  Despite these shortcomings, he hopes you join and enjoy this PACMUN 2019 committee!", "/media/staff/unhrc/ad.jpg", ""),
            new Person("Maya Dallman", "Assistant-Director", "", "/media/staff/unhrc/ad2.jpg", "Maya Dallman is a current sophomore at Juanita High School and is thrilled to be staffing PACMUN 2019! This is her second staffing experience, the first being CELAC at EDUMUN earlier this year. Maya has participated in MUN since REDMUN in 8th grade and has loved it ever since. When she isn’t stressing over her classes, Maya can be found trying not to drown on one of her three swim teams, reading a good book, or managing the JuanitaMUN instagram page (go follow jhs_mun). Maya is very excited to meet the delegates and hopes to bring an exciting and fun experience to the United Nations Human Rights Council (UNHRC) 2019."),
            ))),
    "cw" => new singleCommittee(
        "Commonwealth",
        "cw",
        "p",
        "The Commonwealth of Nations (CW), established more than 70 years ago with the London Declaration, is comprised of 53-member states who altogether make up about one third of the global population. Consisting almost exclusively of previous British territories, the Commonwealth takes pride in lending equal voices to all states regardless of size, socioeconomic status, and culture. Since the formation of the Commonwealth Secretariat in 1965, the common goals of the organizations were split into the three categories of Governance and Peace, Youth and Sustainable Development, and Oceans and Natural Resources, to address the vast variety issues challenging the member states. This committee is guaranteed to provide an exciting experience for delegates of all levels through intellectually stimulating debate on multifaceted, relevant topics.",
        1,
        "Corruption in the Public Sector",
        "",
        "Ocean Environmental Accountability",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Alex Qiu", "Director", "Alex Qiu is a senior at Interlake High School, and having completed the International Baccalaureate Program along with AP classes throughout his sophomore and junior years, he is ecstatic for any opportunities to participate in his community in his free time. Through extracurriculars such as the Junior State of America and TEDxYouth@Redmond, Alex has always been happy to organize conferences in which ideas are shared.  He is honored to be serving as the Director for the Commonwealth of Nations, and is excited to bring his efforts to the last PACMUN of his high school career!  ", "/media/staff/cw/d.jpg", ""),
            new Person("Peter Lie", "Chair", "Peter Lie is currently a senior at Inglemoor High School, and has been part of the MUN family for three years, starting right here at PACMUN 2017. During his limited free time, due to the large amounts of homework and stress known as the IB program, he can often be found playing soccer, swimming, practicing French Horn and Trumpet (he needs it), and generally attempting to be a good human being. Peter is very excited to staff at PACMUN 2019, and is honored to be serving as your Chair in the Commonwealth of Nations!", "/media/staff/cw/c.jpg", ""),
            new Person("Harshitha Rebala", "Assistant-Director", "Harshitha is currently a sleep-deprived sophomore and first year IB student who attends Interlake High School. Inspired to join MUN as a freshman for its impromptu speeches and passionate debates on international issues, she hasn’t regretted it since. Outside of MUN, she takes part in Interlake’s Robotics team, crams for FBLA, participates in Bellevue Youth Council and sings Indian classical music. In the little free time she has, you can find her on long hikes, catching up on Netflix, and sleeping. Harshitha is excited to be serving as the Assistant Director in the Commonwealth and cannot wait to meet you! ", "/media/staff/cw/ad.jpg", ""),
        ))),
    "icsu" => new singleCommittee(
        "International Council for Science",
        "icsu",
        "p",
        "The International Council of Scientific Unions (ICSU) is a non-governmental organization that unites over 40 international scientific unions, and over 140 national and regional scientific organizations, acting as the United Nations’ principal advisor on scientific issues, forming policy to stimulate and support scientific research and development. Defending the free and responsible practice of science, the ICSU is a vital conclave, arbitrating possible dangers from technological abuse by member states, and laying the foundation for intergovernmental scientific policy. The Council works at the intersection of science and policy, ensuring that goals like the SDGs (Sustainable Development Goals), disaster risk reduction, increasing biodiversity, denuclearization and many more are achievable and ethical. The ICSU invites delegates who are eager to further explore the intersection of science and policy and develop cognizant and effective solutions. ",
        2,
        "Ethicality and Use of Weather Modification",
        "",
        "Government Regulation Over Scientific Research",
        "",
        true,
        array('ICSU Position Paper Outline & Guidelines.pdf','ICSU Flow of Debate.png'),
        true,
        new People(array(
            new Person("Nihar Bodicherla", "Director", "Nihar Bodicherla is a caffeinated, nearly nocturnal senior at the International Community School and is honored to be serving as the Director for ICSU at PACMUN this year. Immediately drawn to Model UN for its competitiveness and diplomatic nature, it took just one unforgettable PACMUN 2018 for him to fall in love. He believes that MUN is a powerful catalyst for change, while being fun and lighthearted, and hopes that all delegates will “stay classy” during debate. Aside from Model UN, Nihar enjoys the sheer grindfest that is FBLA and can be spotted occasionally at various martial art tournaments. Though rarely when he’s free, he enjoys obsessing over computers, various types of coffee, and the latest engineering marvels.", "/media/staff/icsu/d.jpg", ""),
            new Person("Maya Nair", "Chair", "Maya Nair is a current sophomore at Inglemoor High School and this will be her third year being in the Pacific Northwest Model United Nations circuit. Maya is passionate about current events and is excited to chair debate for the International Council for Science (ICSU). Maya enjoys spending time with her extremely odd friends and family, failing at playing soccer, and traveling to countries that most people cannot spell the names of. From her previous experience staffing the UNEP at SeattleMUN 2019 and IOM at KINGMUN 2019, she is pumped for her first time staffing PACMUN. She is looking forward to nuanced debate, as well as watching delegates work to solve some of the world's most pressing issues regarding the scientific field. Maya hopes to give new and returning delegates a memorable experience at PACMUN 2019 and can’t wait to see you in committee session!", "/media/staff/icsu/c.jpg", ""),
            new Person("Isabella Wang", "Assistant-Director", "Isabella is a sophomore at Newport High School and looks forward to her first time staffing at PACMUN. First lured into her school’s MUN club with the promise of free food, she surprised herself by continuing to regularly attend meetings and even apply as a delegate for PACMUN 2018. Immediately, Isabella became captivated by the world of MUN and sees herself committing long-term to it, both in school and out at conferences. When she isn’t studiously reviewing ROP, Isabella finds herself drawing in her sketchbook or painting murals on her parents’ garage wall. On the occasion that she is able to drag herself outside, she plays badminton both in club and at school. Isabella can’t wait to meet all the delegates and have a blast at PACMUN 2019!", "/media/staff/icsu/ad.jpg", ""),
        ))),
    "unoosa" => new singleCommittee(
        "United Nations Office on Outer Space Affairs Plus",
        "unoosa+",
        "e",
        "Established at the height of the Cold War space race in 1958, the United Nations Office of Outer Space Affairs Plus (UNOOSA+) works towards peaceful international cooperation in outer space as the committee tasked with all United Nations space affairs. UNOOSA+ is comprised of over 92 members, making it one of the largest bodies in the United Nations. Noted by the ‘Plus’ in its namesake, UNOOSA+ is also the only UN committee that has been adapted to have commercial entities, such as SpaceX and Virgin Galactic. As the field of space exploration is rapidly becoming more commercialized, the mediating role of UNOOSA+ as a comprehensive body is becoming more significant. UNOOSA+ is well suited for delegates of all skill levels and invites you to join the discussion on some out-of-this-world topics.",
        1,
        "Outer Space Treaty & the Privatization of Space",
        "",
        "Development of Sustainable Space Technologies",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Raymond Wang", "Director", "Raymond Wang is a senior at Interlake High School and is thrilled to staff for the United Nations Office for Outer Space Affairs Plus at PACMUN 2019. He has done Model United Nations since he was a freshman and loves the energy of conferences. He loves all aspects of Model UN, whether it be the engrossing debates or the community of delegates and staff. Outside of MUN, Raymond is a competitive swimmer and likes to dabble in photography and music. He can’t wait to see what this year’s PACMUN has in store!", "/media/staff/unoosa/d.jpg", ""),
            new Person("Luke Jouflas", "Chair", "Luke Jouflas is a junior at Bellarmine Preparatory School. This will be his fourteenth MUN conference and fourth conference staffing, and he feels honored to be serving on UNOOSA+ with his fellow dais. During his spare time, Luke enjoys skiing and climbing and just about anything related to the outdoors. When he’s not in the outdoors, Luke enjoys consuming dangerous amounts of coffee and attempting to convince a MUN committee that China has never done anything wrong. Overall, Luke enjoys MUN because he gets to meet new people and debate interesting topics all while being absolutely exhausted.", "/media/staff/unoosa/c.jpg", ""),
            new Person("Margaret Guo", "Assistant-Director", "Margaret Guo is a senior in the IB program at Inglemoor High School. She is honored to serve as the Assistant Director of UNOOSA+ for PACMUN 2019! Although rather new to MUN, she is excited for the opportunity to utilize both her interests in aerospace and international debate at the same time. Outside of MUN, Margaret is a fountain pen connoisseur who competes in TSA, participates in Washington Aerospace Scholars and runs an Instagram account depicting backyard squirrels with her friend. In addition, one of the reasons why she enjoys MUN is because of the opportunity to analyze how each delegate chooses to make their argument. Margaret is looking forward to meeting the delegates and can not wait for PACMUN 2019! ", "/media/staff/unoosa/ad.jpg", ""),
        ))),
    "unep" => new singleCommittee(
        "United Nations Environment Programme",
        "unep",
        "e",
        "Since its formation in 1972, the United Nations Environment Programme (UNEP) has pledged “to provide leadership and encourage partnership in caring for the environment by inspiring, informing, and enabling nations and peoples to improve their quality of life without compromising that of future generations”. Uniquely, the UNEP is a major subset of the UN General Assembly resulting in greater jurisdiction than other, more specialized committees within the UN. The UNEP holds the important responsibility of preserving the health of the planet and attending delegates will be tasked with creating creative, effective solutions throughout the course of debate.",
        1,
        "Long-Term Sustainability of Nuclear Energy",
        "",
        "Effects of Fast Food on Development of Sustainable Agriculture",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Ishaan Ghose", "Director", "Ishaan Ghose is a senior at Interlake High School and is thrilled to serve as your Director for PACMUN 2019. Ishaan’s MUN career began in sophomore year after he was peer pressured into going to PACMUN 2017, where he enjoyed debating relevant topics that were relevant in an environment that encouraged diplomacy and compromise. Since then, Ishaan has delegated at four conferences and this will be his third experience staffing. In his free time, Ishaan enjoys making rap music on Soundcloud, playing the saxophone, and hanging out with friends. He is eager to meet you during committee and hopes your weekend is filled with engaging debate.", "/media/staff/unep/d.jpg", ""),
            new Person("Freya Gulamali", "Chair", "Freya Gulamali is a junior at Interlake High School and is jubilant to serve as your chair for PACMUN 2019. She first became infatuated by MUN during the chaos of PACMUN’s midnight crisis, and she continues to love MUN because of the inspiring diplomacy of delegates. Outside of MUN, Freya enjoys playing the cello, fretting about IB, and crafting masterpieces of abstract art. Freya can’t wait to meet all of you at the first committee session, and welcomes you to the United Nations Environment Programme!", "/media/staff/unep/c.jpg", ""),
            new Person("Kaitlyn Hung", "Assistant-Director", "Kaitlyn Hung is a senior at Bainbridge High School and is very excited to serve as your Assistant Director for PACMUN 2019. She started doing MUN her freshman year and since then, has attended seven conferences, learning something new and loving MUN even more each time. Outside of MUN, you can find Kaitlyn out rowing in the Sound, doing taekwondo, or tending to her numerous plants; she loves hiking and all things outdoors! She is excited to meet you and hopes you have a fun and memorable weekend of debate!", "/media/staff/unep/ad.jpg", ""),
        ))),
    "senate" => new singleCommittee(
        "United States Senate",
        "senate",
        "s",
        "Due to its polarized political climate, key issues of the United States tend to be left unaddressed.  As the American people’s foremost hope for true change, it is the responsibility of the United States Senate to address both the opioid epidemic and the failing criminal justice system before they too are ignored. The United States Senate is a specialized committee for intellectually curious delegates eager to explore innovative and engaging debate while solving real world issues. As a group of United States senators, it is up to you to shape the future of the country and affect the lives of millions. Senate delegates will be introduced to unique Rules of Procedure that revolves around the passing of bills that will be used to enact positive, effective change. Those who choose to explore Senate should prepare themselves to find innovative solutions to global problems and ultimately, change the course of the country’s future. <strong>One position paper and one bill on any topic within the Opioid Crisis and Criminal Justice Reform is required.</strong>",
        1,
        "Opioid Crisis",
        "",
        "Criminal Justice Reform",
        "",
        true,
        array('Sample Bill 1.pdf','Sample Bill 2.pdf','Senate Bill Template.pdf'),
        true,
        new People(array(
            new Person("Athena Ho", "Director", "Athena Ho nurses a crippling addiction to caffeine and currently attends the International Community School as a senior. Since her first time participating as a delegate three years ago in the PACMUN 2017 Senate, she has nurtured her burning passion for spreadsheets, procrastination, and the ukulele. You can often find her working on bad poetry, cramming frantically for APCS, and planning her next trip to her hometown of Austin, Texas (go Longhorns). Whether it be Cars 2 FanFiction or a Harry Potter filibuster, MUN has provided Athena with irreplaceable memories and friendships. Athena is thrilled to be serving as Director of the U.S. Senate at PACMUN 2019 and hopes to provide all delegates attending PACMUN an unforgettable experience!", "/media/staff/senate/d.jpg", ""),
            new Person("Brett Kelley", "Chair", "Brett is currently a junior at Bellarmine Preparatory School. He fell in love with Model UN at his first conference, PACMUN 2017. The US Senate has been something Brett has always been interested in after he visited Washington D.C. in elementary school. Some additional extracurriculars that Brett is involved with at school are Marine Chemistry, Amateur Hiking Association, and Key Club. In Brett’s limited free time, he can be found playing tennis, Spikeball, hammocking, or simply just hanging out with his friends. Brett is thoroughly excited to be the Chair of the US Senate, and looks forward to meeting you all in committee. ", "/media/staff/senate/c.jpg", ""),
            new Person("Aaliyah Wu", "Assistant-Director", "Aaliyah Wu is a senior at the International Community School. She started her MUN career four years ago and has enjoyed it ever since her first conference, PACMUN 2016. She’s super excited for PACMUN 2019 and being an assistant director for the US Senate. When she’s not doing things for MUN, you can find her combating senioritis but failing, scrolling through Instagram, and taking care of her two cats. She's an avid believer that Taiwan is its own country and is willing to defend her point. Aaliyah is excited to see all the delegates at the PACMUN Senate!", "/media/staff/senate/ad1.jpg", ""),
            new Person("Liam Navarre", "Assistant-Director", "Liam is currently a junior at Bellarmine Preparatory School. He joined the Model UN club at his school on a whim and fell in love with the community ever since. Liam’s first committee ever was Senate at PACMUN 2017 and has been returning to the scene ever since. Some additional extracurriculars Liam can be found doing outside of committee is playing video games, hiking, rowing for Commencement Bay Rowing Club, and just hanging out with friends. Liam is more than excited to be your Assistant Director during PACMUN 2019 and is looking forward to seeing you all during debate. ", "/media/staff/senate/ad2.jpg", ""),
            new Person("Ron Dubinsky", "Assistant-Director", "Ron “The Money Guy” Dubinsky is a bedraggled sophomore in the Cambridge Program at Juanita High School. He has been a MUN enthusiast since his first conference in 2017. When he is not listening to loud rock music and complaining about how the dang kids these days won’t get off his lawn, he can be found studying history, math, economics, chemistry, and sparking debate about everything. Ron is known to occasionally quote his spirit animal, Ron Swanson, and to speak his mind like the native-born Israeli he is. Ron’s hobbies include being literate and playing his guitar uncomfortably loud. Either way, Ron is excited to see passionate and informed delegates debate at PACMUN Senate 2019!", "/media/staff/senate/ad3.jpg", ""),
        ))),
    "unsc" => new singleCommittee(
        "United Nations Security Council",
        "unsc",
        "p",
        "In a world riddled with conflict, whether it be through proxy conflicts or civil wars,  the international community is in a constant state of attempting to resolve these engagements in the most peaceful way possible. The United Nations Security Council (UNSC) is the most powerful organ within the UN and was created for this exact reason. The body has acted as the enforcer of peace and security worldwide since its creation in 1945, famously acting as a peacekeeper in crises such as the North Korean invasion of South Korea, the active militant groups in Namibia in the 1960s that hindered the country’s ability to have a democratic government, or later in the Sierra Leone Civil War. The overarching goals of the UNSC entail ensuring international collective security, but also includes recommending the new Secretary-General to the rest of the UN, and suggesting new member states to the UN itself. Composed of 5 permanent members and 10 non-permanent members, the UN body is a physically small but very important piece to the maintenance of international peace. UNSC is a perfect fit for advanced delegates ready to tackle complex topics that require intensive research and preparation. ",
        2,
        "Addressing Organized Militant Groups in Sub-Saharan Africa",
        "",
        "Israeli-Palestinian Conflict",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Esther Wang", "Director", "Esther Wang is a senior from Tesla STEM High School and is honoured to serve as Chair of the United Nations Security Council (UNSC) at PACMUN 2019. Since joining MUN in 9th grade, she has developed an intense passion for international relations and world affairs and hopes to share her love for MUN with the delegates at PACMUN. Outside of MUN, Esther can be found dying over physics, frantically debugging code, drawing, or watching Real Madrid play. She looks forward to working with her fellow dais members and meeting all of you!  ", "/media/staff/unsc/c.jpg", ""),
            new Person("Thomas Trepanier", "Chair", "Thomas Trepanier is a senior at Interlake High School who is ecstatic to be working as the director for UNSC at PACMUN 2019. When he isn’t at the boxing gym or working as a volunteer, he can most certainly be found either writing a position paper for his next MUN conference or talking to all the amazing people he’s met through MUN. His best memories at MUN have been debating the rhetoric of the Bee Movie, filibustering for 10 minutes by reciting puns, and playing tic-tac-toe to see which resolution paper would pass. When he isn’t participating in MUN, he can be found attempting to single-handedly save the environment, playing his guitar, or attempting to do both at the same time. Thomas looks forward to meeting all of you at PACMUN 2019. ", "/media/staff/unsc/d.jpg", ""),
            new Person("Jess Topper", "Assistant-Director", "Jessica Topper is a sophomore at Inglemoor High School in Kenmore, Washington. When she is not busy with homework or procrastinating her tasks, she can be found hanging out with family and friends or planning her next dream vacation. Jessica loves hosting get-togethers almost as much as he loves laughing at MUN memes with her friends. She has loved working with her fellow dais members and can’t wait to meet all of the esteemed delegates at PACMUN 2019.", "/media/staff/unsc/ad.jpg", ""),
        ))),
    "nato" => new singleCommittee(
        "North Atlantic Treaty Organization",
        "nato",
        "p",
        "The spread of corruption, the rise of authoritarianism, and the resurgence of an aggressive Russian Federation threaten the security of the democratic world as we know it. The North Atlantic Treaty Organization (NATO) stands as one of the final bastions of democracy and military strength in the North Atlantic region. Formed in 1949 by the Washington Treaty, NATO is a multinational organization created in response to an unstable post World War II Europe. The body will always look to diplomacy as its first line of action but is capable of taking on crisis management operations. The body was formed on the theory of collective defense, Article 5 stating that an attack on one member nation is an attack on all member nations.Delegates will be tasked in adhering to NATO’s founding principles while also navigating ever-changing issues in a region with a deeply complex history.  Although best suited for intermediate delegates with the ability to grapple with multi-faceted issues, NATO also welcomes beginner delegates looking for a challenge as well as advanced delegates passionate about the issues at hand to an exciting, fast-paced debate experience.",
        2,
        "Upholding NATO's Democractic Values",
        "",
        "Russian Aggression",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Adam Billen", "Director", "Adam Billen is currently a senior at The Center School and has been involved in MUN since his freshman year. He has been a Head Delegate at The Center School since his sophomore year and loves digging deep into the research and writing of position papers and then seeing his ideas become reality in committee. He is also involved in student government and is president of his school’s environmental education club. When he’s not bouncing between meetings or staying up late working he can be found painting miniatures, road biking, hiking, working with Wilderness Awareness School or going to Quaker retreats. His first committee was NATO at PACMUN 2016 and he hopes that delegates both new and experienced come to committee ready to reach solutions for some of the most pressing issues of our time.", "/media/staff/nato/d.jpg", ""),
            new Person("Alex Chang", "Chair", "Alex Chang is a senior at the International Community School and is proud to be staffing for PACMUN 2019 as the Chair of NATO. Drawn to NATO’s unique place in the world of managing tensions between the lingering animosity of the Cold War, Alex looks forward to seeing new ways of managing the proverbial Russian elephant in the European room from delegates. While not doing official MUN business he can be found in the pool swimming for Eastlake, catching up to the latest shows, or browsing around on various military forums. Alex is excited to see delegates new and old alike come together for the very first three-day iteration of PACMUN, and hopes to see both fresh and familiar faces participate in debate and interact in and out of committee.", "/media/staff/nato/c.jpg", ""),
            new Person("Olivia Wisont", "Assistant-Director", "Olivia is currently a senior at Inglemoor High School. This is her third year participating in MUN and she is excited to be staffing PACMUN 2019. This is one of her favorite conferences and where her MUN journey started back in 2017. Having participated in committee as a member of NATO herself, representing the newly added Montenegro, she is looking forward to lively debate about controversial and complex topics. Outside of MUN she enjoys running varsity cross country and track for her school team. When she’s not studying, Olivia can be found working on campaigns, hiking, or drinking vast amounts of black tea.", "/media/staff/nato/ad.jpg", ""),
        ))),
    "interpol" => new singleCommittee(
        "International Criminal Police Organization",
        "interpol",
        "e",
        "Founded in 1923, the International Criminal Police Organization (INTERPOL) is an international body that promotes collaboration and partnership between international police forces. As of 2017, INTERPOL has a total of 192 member states and a budget of $130 million per year.  For nearly a century, INTERPOL has been tasked with a myriad of issues to tackle, including illicit substances, human trafficking, corruption, and terrorism. Unlike other bodies, INTERPOL has a greater ability to focus on specific crimes with its access to police forces, a resource often unattainable by other committees. INTERPOL offers the traditional Model United Nations experience with an introduction into specialized committees for delegates of all experience levels. ",
        1,
        "Addressing Power Vacuums Left by Gangs in South America",
        "",
        "Transnational Organized Crime Across Eurasia",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Olivia Boysen", "Director", "Olivia Boysen is currently a junior at Interlake High School where she’s perpetually drowning in IB work and procrastinating on her Extended Essay, and she is extremely excited to be directing the International Criminal Police Organization for PACMUN 2019! Olivia joined Model UN her freshman year, and PACMUN will be her seventh time staffing. PACMUN 2017 was Olivia’s first time in a committee, it’s where she fell in love with MUN and received threats for killing Jerry from Tom and Jerry during midnight crisis. Outside of MUN, Olivia plays volleyball, teaches sailing, and competes in DECA. Olivia can’t wait to meet the delegates and to work with them in the interesting and dynamic environment of the International Criminal Police Organization!", "/media/staff/interpol/d.jpg", ""),
            new Person("Muhan Zhang", "Chair", "Muhan is a senior at Interlake High School and is ecstatic to be serving as the Chair of INTERPOL at PACMUN 2019 for her fourth staffing experience. After joining MUN in her sophomore year, she never would have expected to take part in such eye-opening experiences. Outside of MUN, Muhan is invested in organizing events for her internship at the Mayoral Internship at Pathway Foundation, enjoying her IB-free life, playing badminton, and spending MUNey that she doesn’t have! She is thrilled to meet delegates, watch them debate critical, real-world issues, and most importantly, have a great time! ", "/media/staff/interpol/c.jpg", ""),
            new Person("Eesha Kunisetty", "Assistant-Director", "Eesha Kunisetty is a sophomore at Tesla STEM High School, and PACMUN 2019 will be her sixth conference and second staffing experience. After falling in love with the fast-paced debate and global aware MUN brought to her life freshman year, Eesha couldn't wait to help delegates experience the same thing. When she's not writing a background guide, she can be found rushing to study for FBLA, getting hours for Key Club, and attempting to be a somewhat adequate tennis player. Most importantly, Eesha is honored to serve as INTERPOL's Assistant Director and can't wait to see the delegates debate!", "/media/staff/interpol/ad.jpg", ""),
        ))),
    "cabinet" => new singleCommittee(
        "Cabinet",
        "cabinet",
        "s",
        "The Historical Cabinet is a specialized committee for advanced delegates that encourages fast-paced debate and clever solutions to complex topics, as well as balancing power struggles and political efficacy. Historical Cabinet delegates will be introduced to new Rules of Procedure that revolves around public and private directives rather than the passing of resolutions. Delegates in the Historical Cabinet will not represent a country, but rather a prominent figure in the Soviet Government. Although the events in this committee have long since passed, delegates in this committee will have the opportunity to influence the social, political, and economic structure of the Soviet Union in ways that may diverge from the past. As the powerful and prominent delegates in the Soviet Union’s foremost decision-making body, the path that the Soviet Union takes lies in your hands. The future of not only this great nation, but the global working class, rests upon your decision.",
        2,
        "USSR Following the Death of Lenin",
        "",
        "",
        "",
        true,
        array(''),
        true,
        new People(array(
            new Person("Andrew Wang", "Director", "Andrew is currently a senior at Interlake High School and is super stoked to serve as your Director of Cabinet. Since starting Model UN in his freshman year, he has retained a passion for diplomacy, global issues, and feeling important. At his fourth and final PACMUN, he hopes delegates will find the conference as rewarding as he did. Outside of MUN, Andrew can be found lividly practicing piano, heatedly working to raise voter participation, or calmly complaining. He hopes this iteration of PACMUN will inspire delegates to pursue opportunities to involve themselves meaningfully in MUN and beyond.", "/media/staff/cabinet/d.jpg", ""),
            new Person("Peter Streufert", "Chair", "Pete Streufert is a senior at Bainbridge High School and eager to serve as your PACMUN 2019 Cabinet Chair. He joined MUN the tail end of his sophomore year and has been captivated by it ever since. He enjoys the fast-paced style of crisis committees and participated in six crises last year alone. Outside of MUN, you will find him spending questionable amounts of money on food, wearing more than one Patagonia item at a time, or hanging with the boys. He looks forward to his first staffing opportunity and is curious to see how the Cabinet members will lead the Soviet Union through the 20th century. ", "/media/staff/cabinet/c.jpg", ""),
            new Person("Anna Kaplan","Assistant-Director","Anna is a senior at Bainbridge High School, who also participates in Running Start at Seattle Central College. She joined Model UN in the beginning of her sophomore year. From working on issues in outer space to historical cabinets, Anna has been enthralled with the problem solving and research it takes to be a delegate, as well as the absolute power that comes with being president of the USA. Outside of MUN, she can be found taking extremely long naps, making mac n cheese, or watching Dexter. She is very excited for her first staffing position and can not wait to see the possibilities of communism that the delegates think of.","/media/staff/cabinet/ad.jpg","")
        ))),
    "constitution" => new singleCommittee(
        "Constitutional Convention",
        "constitution",
        "s",
        "The Constitutional Convention is the perfect committee for delegates looking for a unique experience at PACMUN 2019. This committee is not a UN organization, nor is it a multinational organization. Instead, the Constitutional Convention consists of government officials from each region of the United States who will collaborate to rewrite and improve the American Constitution for the future era. With its own special Rules of Procedure, this committee enables delegates to engage in meaningful debate with their fellow committee members while simultaneously writing independently to create a finished product unlike any other. To excel in this committee, delegates must inform themselves on many possibly controversial topics and stay open-minded.  It is essential to be able to welcome new ideas and perspectives while using your input to work with your fellow delegates in order to achieve a common goal. The Constitutional Convention provides a thrilling and fast paced experience that will excite both newcomers and experts alike who are looking for a unique, one-of-a-kind, committee experience!",
        2,
        "Redesigning the American Constitution for the Modern Era",
        "",
        "",
        "",
        true,
        array(''),
        true,
        new People(array(
            new Person("Sowmya Pratipati", "Director", "Sowmya Pratipati is a senior at Nikola Tesla-STEM High School and has spent many hours contemplating the meaning of life. This is Sowmya’s fourth year doing Model UN, and she is excited to finish this year well. In her free time, you can usually find Sowmya either watching TV, reading a book, and occasionally playing the piano. If she doesn’t have free time, it’s probably because she’s studying for an upcoming test. Most of the time, Sowmya is pretty calm and doesn’t have much of an opinion, but if you start talking about SUV’s or the possibility of the Cascadia megaquake, then all bets are off. Sowmya is hopeful that all delegates will enjoy the Constitutional Convention just as much as she has enjoyed staffing it. ", "/media/staff/constitution/d.jpg", ""),
            new Person("Great Laowatdhanasapya", "Chair", "Great is a senior at Interlake High School and is overjoyed to be serving as PACMUN 2019 Constitutional Convention’s Chair. He made a difficult choice in his freshman year, to join Model United Nations rather than Debate, and he has stuck with his decision for the past three years, attending over 15 conferences - all of which are on the East Coast. Aside from being knee-deep in puns about his name, Great is also surviving the stress and workload of the IB Programme. He aspires to take what he’s learned in Model UN throughout his life and use it to further his career in business. He is exhilarated to witness meaningful debates on the recrafting of the American Constitution. ", "/media/staff/constitution/c.jpg", ""),
            new Person("Arushi Shah", "Assistant-Director", "Arushi is a sophomore in the Cambridge Program at Juanita High School and is thrilled to be serving as the Assistant Director of the Constitutional Convention at PACMUN 2019. Since Arushi’s first MUN experience at PACMUN 2018, she has attended two other conferences, and this will be her first time staffing. When Arushi isn’t stressing about the copious amounts of schoolwork she has, you can often find her curled up in her room reading a good book, practicing her badminton skills, or pretending to be in a movie while listening to Bollywood music. Arushi is eager to meet and interact with each delegate during the Constitutional Convention and will strive to help and create an experience that is enjoyable for all.", "/media/staff/constitution/ad.jpg", ""),
        ))),
    "jcc" => new singleCommittee(
        "Joint Crisis Committee",
        "jcc",
        "s",
        "Welcome to the Joint Crisis Committee (JCC) at PACMUN 2019! The JCC is a fast-paced committee that calls on delegates to come up with out-of-the-box solutions for facing the crisis at hand. The uniqueness of crisis committees comes from moving away from the generally strict flow of debate and preparing for the unexpected. Debate will flow quickly across each subtopic and delegates will have to respond quickly to events that occur throughout debate and respond to the actions of the other bloc before it is too late. Well-tailored to delegates who are skilled speakers who can keep up with the speed of the committee, the JCC will test delegates’ abilities to act spontaneously, lead effectively, and manage complex relationships to ensure their success. Instead of writing a resolution, operative clauses are submitted individually as directives that will affect the crisis. Along with its own set of Rules of Procedure and Rules of Engagement, these liberties allow delegates to craft unique solutions in a world of their own making while battling the other bloc for popular support and advances in technology. Due to the exciting nature of the committee, the JCC is guaranteed to be the highlight of your Model UN experience and will result in some of your best memories. ",
        2,
        "Expansion of the Mongol Empire",
        "",
        "",
        "",
        false,
        array(''),
        true,
        new People(array(
            new Person("Isha Murali", "Joint Director", "Isha Murali is a rising senior at Tesla STEM High School, most known for its high concentration of stressed out students. Isha does a variety of martial arts in her spare time, although as the days go by, she has less and less of it. Isha also plays the piano and is one of the most excitable people you will ever meet. Over the past three years, she has attended more MUN conferences than she can count on her fingers and is very excited to staff JCC, because after all, Isha has attended and staffed more JCCs than any other type of committee. Overall, Isha is thrilled to be your Joint director for JCC this year. She hopes that all the delegates enjoy the topic and come to absolutely adore JCC as she does. ", "/media/staff/jcc/jd.jpg", ""),
            new Person("Van Monday", "Joint Chair", "Van Monday is a rising senior at Tesla STEM High School. This is his second year participating in MUN and his second time staffing. Outside of MUN, Van plays soccer for both Greater Seattle Surf and Juanita High School, and he enjoys getting overly obsessed with specific things and forcing his friends to listen to him talk extensively about said things. In addition, he spends far too much time stressing over college applications. Crisis committees have always been Van’s passion, and he is very excited to give delegates an amazing Joint Crisis Committee experience at PACMUN 2019.", "/media/staff/jcc/jc.jpg", ""),
            new Person("Sai Sunku", "Joint Assistant-Director", "Sai Sunku is a sophomore at Interlake High School and is in her first year of the dreaded IB program. Nonetheless, she is absolutely excited to be your Joint Assistant Director for PACMUN 2019. After hearing so many tales about the magic of crisis committees, she feels lucky to have her first staffing experience be JCC. Ever since starting MUN in freshman year, she has become fascinated with the global mindset and awareness that MUN offers. Aside from MUN, Sai participates in HOSA, Robotics, and is part of the Bellevue Youth Council, and also enjoys volunteering at the Pacific Science Center.  When not in school or extracurriculars, she can be found fervently playing on the piano or listening to music (despite her friends continual criticism of her music taste). Coffee is her absolute life force, as well as coffee jelly and coffee ice cream, basically everything coffee-flavored. Whenever she has nothing to do (which is basically never) she loves to read dystopian novels and contemplate her decision to join the IB program. All that aside, she cannot wait for PACMUN to welcome you all to an amazing JCC experience! ", "/media/staff/jcc/jad.jpg", ""),
            new Person("Sanya Gupta", "Bloc 1 Director", "Sanya Gupta is a rising junior (though she has been called a freshman an innumerable amount of times) at Interlake High School in her second year of the IB program. She is absolutely elated to be your Director for Bloc 1 of the Joint Crisis Committee at PACMUN 2019! After being peer pressured into Model United Nations in her freshman year and, to her surprise, enjoying the club, she instantly dove into the metaphorical deep end of the MUN pool and has since attended a multitude of conferences as a Secretariat member, staff member, and delegate… she is everywhere. She also serves on the Secretariat of her school’s MUN club. Aside from constantly stressing herself and those around her with Model UN, schoolwork, and writing bios that are far too long, she can be found trying to lead her Science Olympiad team, participating in GOVAA, HOSA, and others, and managing It’s Real, a non-profit organization she helped launch. Nevertheless, Sanya hopes delegates enjoy themselves at PACMUN 2019 and cannot wait to meet all of you!", "/media/staff/jcc/1d.jpg", ""),
            new Person("Harshita Bondhi", "Bloc 1 Chair", "Harshita Bondhi is a senior at Redmond High School. She is delighted to serve as the Bloc 1 chair for PACMUN 2019’s JCC and hopes that every delegate loves what the dais puts together. After four years of experiencing incredible MUN committees and dais members, she is excited to help put together a committee herself and continue the same level of quality. At this point she has staffed 7 MUN conferences and attended 9 as a delegate, which in hindsight looks like way too many spelled out like that but she’s still here anyway because MUN is way more enjoyable than anything has any right to be. This is her fifth year of MUN and third year obsessing over how awesome specialized committees are compared to everything else. Outside of Model UN, Harshita loves speech and debate, her job working at a preschool, and spending hours researching random things in preparation for the inevitable nuclear apocalypse.", "/media/staff/jcc/1c.jpg", ""),
            new Person("Emily Zhao", "Bloc 1 Assistant-Director", "Emily Zhao is a rising junior at Tesla STEM High School and she is ecstatic to be your Assistant Director for Bloc 1 of JCC this year for PACMUN 2019! After stumbling her way through KINGMUN in middle school, she’s grown to love MUN and the community that it fosters. She can be found most of the time at school (stressed over the amount of APs and school work she has) or at her house, trying to sleep away the stress.  As for when she isn’t staffing MUN or being a delegate, Emily participates in many of her school’s clubs, including FBLA, HOSA, and Key Club and also is a member of the Seattle Youth Symphony Orchestras. Outside of school , Emily enjoys playing on a select softball team and occasionally crying over how cute corgis are. She is very excited for PACMUN 2019 and is looking forward to seeing all of you there!", "/media/staff/jcc/ad1.jpg", ""),
            new Person("Rithikaa Prakash", "Bloc 2 Director", "Rithikaa Prakash is a junior at the International Community School in Kirkland Washington. She started MUN in ninth grade after the treasurer of ICS MUN at the time (Jack Li) said “you better not drop MUN.” PACMUN 2017 was her first conference. After this conference she fell into a metaphorical rabbit hole and felt very much like tiny Alice trying to open a big door. She can gladly say that she somehow managed to prop it open enough that she could get through it. PACMUN holds a very special place in her heart and she is ecstatic to be creating that experience for other delegates. She very much values each and every conference she has attended and calls one of the walls in her room “The Placard Wall” where she pins her placards and name tags for all the conferences she has been to.  Outside of MUN, she works at Kumon, is an active member in Global Give Back Circle, lead photographer for ICS Yearbook, and a proud mentor of five amazing eighth graders. She also serves as the PR officer for ICS MUN. She hopes to fill the shoes of previous JCC staff members and create the best experience for delegates. She hopes to give you a warm welcome to the comMUNity and wishes you the best of luck with future endeavors. ", "/media/staff/jcc/2d.jpg", ""),
            new Person("Jathin Arjun", "Bloc 2 Chair", "Jathin Arjun is an exhausted junior at Interlake High School in the second year of the IB program. After being introduced to MUN in India in 7th grade, he latched on to the quick thinking and creative ideas that MUN was full of. Since coming to the US, he has attended more than 15 conferences as a delegate and staff member. Outside of school, Jathin is an active member of his school’s FBLA and LaunchX clubs, a Secretariat member on Interlake’s MUN club, and a frequent volunteer at local community events. On top of that, he attends piano and vocal music classes and performs at concerts pretty frequently as well. But, in the little free time that he has, he loves to eat as much as humanly possible, exercise in whatever way is practical (usually running or biking), read anything fantasy-related, and playing cards and watching movies with his family. Jathin is super excited to meet everyone and wishes them the best of luck for PACMUN 2019!", "/media/staff/jcc/2c.jpg", ""),
            new Person("Eric Xia", "Bloc 2 Assistant-Director", "Eric Xia is a rising junior at Lakeside High School. After his first conference at PACMUN 2017 his freshman year, he decided that he liked Model UN a little bit and ever since PACMUN 2018’s JCC he realized that he actually liked it a lot. Eric has staffed at and attended several Model UN conferences and hopes to get to go to a lot more before high school is over. Every conference he has attended has been extremely memorable and Eric is quite disappointed that only PACMUN has given out stickers, as his Model UN sticker collection consists of only one sticker right now. Within Lakeside, Eric is hoping to greatly expand the MUN club for next year and get a lot more Lakesiders involved. Eric is a Life scout working on his Eagle project, an active member of the SoundBio iGEM synthetic biology team, and a level five Esperanto speaker on Duolingo, among other things. Outside of school, he also enjoys playing soccer for Lakeside, breaking his computer with renders, and Competitive Google Searching (also known as coding). Eric is extremely excited to finally be able to staff a Joint Crisis Committee and hopes that the experience will be memorable for all delegates.", "/media/staff/jcc/2ad.jpg", ""),
        ))),
    "hcc" => new singleCommittee(
        "Historical Crisis Committee",
        "hcc",
        "s",
        "The Historical Crisis Committee (HCC) is a specialized committee where delegates are challenged to think creatively and look beyond the actual course of history to craft their own solutions. Delegates are invited to travel back in time and rewrite history during China’s War of Three Kingdoms Period. The fast-paced developments in the race to restore peace to the nation requires nuanced debate, well suited for intermediate and advanced delegates ready to take on the committee’s complexities, rivalries, and everything in between. With its own Rules of Procedure, delegates who are prepared to address one of history’s most troubling crises are invited to join the Historical Crisis Committee at PACMUN 2019! ",
        2,
        "War of the Three Kingdoms",
        "",
        "",
        "",
        true,
        array(''),
        true,
        new People(array(
            new Person("Simran Tandon", "Director", "Simran Tandon is a loud and proud senior at Eastlake High School. She has staffed and been a delegate over a dozen times and can be found at basically every conference the Washington MUN Circuit has to offer. She’s everywhere. Although there isn’t much to her life beyond MUN, Simran enjoys drinking bubble tea, spending time with her friends, playing the cello in her orchestra, and swimming. She likes swimming so much she's embarked on mission to save the tortles by crossing the Berring Strait. She’s a huge history nerd and is super excited to be directing the HCC this year. She looks forward to meeting all of the delegates and having an awesome time at PACMUN 2019!", "/media/staff/hcc/d.jpg", ""),
            new Person("Katherine Gu", "Chair", "Katherine Gu is a senior in the Cambridge Program at Juanita High School. For PACMUN 2019, she will be the chair of the Historical Crisis Committee. Katherine attempts to go outside and golf in her spare time, but is often distracted by the thought of studying for the looming Cambridge Exams. PACMUN 2019 will be Katherine's third and final PACMUN, and she looks forward to seeing the wonderfully chaotic ideas the delegates will come up with as the Yellow Turban Rebellion launches an era of war and turmoil in China.", "/media/staff/hcc/c.jpg", ""),
            new Person("Fiona Wang", "Assistant-Director", "Fiona Wang is a junior at the Cambridge Program at Juanita High School, and thrilled to embark on her third staffing experience. Since her first conference, PACMUN 2017, she has attended two other conferences as a delegate and fallen in love with the excitement that comes from MUN debate. When not at a MUN conference, you can find Fiona curled up with a good book, watching anime, practicing her violin, competing in swim meets, or cramming in last-minute studying for school and competitions with some classical music and milk tea. She can’t wait to meet all the delegates at PACMUN 2019!", "/media/staff/hcc/ad.jpg", ""),
        ))),
);

//Converts the numerical difficulty into words
function printDifficulty($loaded)
{
    if ($loaded->getDifficulty() == 0) echo("Beginner");
    else if ($loaded->getDifficulty() == 1) echo("Intermediate");
    else echo("Advanced");
}

//Shows the right page depending on what the url is
//If there is no committee prints the normal page
if ($url == null) {
    include 'committeesPage.php';
} else {
    //If there is a committee and it is in the array loads the page for that committee
    if (array_key_exists($url, $com_content)) {
        $l = $com_content[$url];
        include 'committeePage.php';
    }
    //Otherwise 404
    else {
        header("Location: /error");
        die();
    }
}