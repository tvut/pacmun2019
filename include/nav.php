<!--The php if statement only runs on committee pages because they don't have fixed headers-->
<nav class="navbar navheight <?php if (!(isset($url)&&($url!=null))) { echo('fixed-top'); } else{ echo'" style="background:none !important';}?>">
    <div class="navShow" style="width:100%;height:75%">
        <a style="float: left; height:100%" href="/">
            <img id="logoimg" style="height:100%;float:left;object-fit: scale-down;width:auto" src="/media/favicons/logosquare.png"
                 alt="PACMUN">
        </a>
        <img style="height:59.25px;float:right;" id="gavel"
             src="/media/icons/gavel2.svg" alt="gavel">
    </div>
    <a class="navHide" style="float: left; height:70%" href="/">
        <img id="mobilelogo" style="height:100%;object-fit: scale-down;width:auto" src="/media/favicons/logosquare.png" alt="PACMUN">
    </a>
    <div style="float:right">
        <ul style="float: right;" class="nav navbar-nav primary-nav navbar-right navHide">
            <li><a href="/about/">About Us</a></li>
            <li><a href="/conference/">Conference</a></li>
            <li><a href="/committees/">Committees</a></li>
            <li><a href="/registration/">Registration</a></li>
            <li><a href="/sponsors/">Sponsors</a></li>
            <li><a href="/resources/">Resources</a></li>
        </ul>
    </div>
</nav>
<div style="display: none;" id="mobilenav" class="mobilenav">
    <div class="innernav">
        <a href="/"><h1>Home</h1></a>
        <a href="/about/"><h1>About Us</h1></a>
        <a href="/conference/"><h1>Conference</h1></a>
        <a href="/committees/"><h1>Committees</h1></a>
        <a href="/registration/"><h1>Registration</h1></a>
        <a href="/sponsors/"><h1>Sponsors</h1></a>
        <a href="/resources/"><h1>Resources</h1></a>
    </div>
    <span id="hide" class="close"></span>
</div>
<div class="spacer" <?php if ((isset($url)&&($url!=null))) { echo('style="background-color: rgba(255,255,255,.9);position:absolute;top:0px;left:0px"'); }?> ></div>
