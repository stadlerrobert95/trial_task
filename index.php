<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">

    <title>Főoldal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header-slider.css">
    <link rel="stylesheet" type="text/css" href="css/partners-slider.css">

    <script src="scripts/swiper-bundle-min.js"></script>

</head>
<body>

<img class="top-image-1" src="resources/oc-emblem-part-1.png"  width="30%" height="auto" alt=" ">
<img class="top-image-2" src="resources/oc-emblem-part-2.png"  width="auto" height="20%" alt=" ">
<img class="top-image-3" src="resources/oc-emblem-part-3.png"  width="auto" height="40%" alt=" ">
<?php include 'header-slider.php'?>


<section class="about-section" id="about-section">

    <div class="about-image-container">
        <img src="resources/oc-colorful-emblem.png" width="354px" height="370px" alt=" ">
    </div>
    <div >
        <p >#Certified member of Hungarian Marketing Association?!</p>
        <p class="section-header">Ezek vagyunk mi.</p>
        <p class="about-section-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
            Phasellus augue velit, maximus sed volutpat quis,
            sodales eget mi. In at magna fermentum enim rhoncus semper.
            Nullam accumsan arcu nec libero molestie dapibus.
            Curabitur finibus leo non gravida gravida.
        </p>
        <a href="about.php" type="button" class="menu">Rólunk</a>
        <a href="#references-section" class="menu radius">Referenciáink</a>
    </div>


</section>


<section class="services-section blue-background" id="services-section">

    <div class="services-content">
        <div class="section-header services">Minden,<br> ami marketing</div>
        <div class="services-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
        </div>
        <div class="services-selected-header services" id="services-selected-header">
            Design
        </div>

        <div class="services-paragraph design-paragraph" id="services-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.

        </div>
        <a class="menu radius services-button" href="about.php">&rarr;</a>
    </div>
    <div class="circle">
        <div class="services-images">
            <img id="coding" class="services-image active" src="resources/oc-icon-coding.svg" alt="coding">
            <img id="design" class="services-image" src="resources/oc-icon-design.svg" alt="design">
            <img id="social" class="services-image" src="resources/oc-icon-social.svg" alt="social">
        </div>
    </div>
    <script src="scripts/services.js"></script>


</section>
<section class="references-section" id="references-section">

    <div>
        <div class="references-grid" id="references-grid">
            <nav>
                <ul class="references-menu">
                    <li class="references-menu-elements"><a href="#!">Összes</a></li>
                    <li class="references-menu-elements"><a href="#!">Design</a></li>
                    <li class="references-menu-elements"><a href="#!">Rebrand</a></li>

                </ul>
            </nav>
            <div class="references-content active-references-content">
                <div class="references-content-tags">#design</div>
                <div class="references-content-header section-header">Jim Beam</div>
                <div class="references-content-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent ut tortor ante. Ut pretium nec mauris ac porta.
                    Vivamus non lectus eu ipsum volutpat porttitor.</div>
                <a class="menu radius services-button" href="about.php">&rarr;</a>

            </div>
            <div class="references-content">
                <div class="references-content-tags">#rebrand</div>
                <div class="references-content-header section-header">Ferrari</div>
                <div class="references-content-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent ut tortor ante. Ut pretium nec mauris ac porta.
                    Vivamus non lectus eu ipsum volutpat porttitor.</div>
                <a class="menu radius services-button" href="about.php">&rarr;</a>

            </div>
            <div class="references-content">
                <div class="references-content-tags">#design #rebrand</div>
                <div class="references-content-header section-header">Dzsim Bím</div>
                <div class="references-content-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent ut tortor ante. Ut pretium nec mauris ac porta.
                    Vivamus non lectus eu ipsum volutpat porttitor.</div>
                <a class="menu radius services-button" href="about.php">&rarr;</a>

            </div>
        </div>
    </div>
    <script src="scripts/references-filter.js"></script>
    <div class="references-slider-container">
        <?php
        include 'references-slider.php'
        ?>
    </div>

</section>

<section class="partners-section blue-background">
    <div class="section-header"> Ők minket válaszottak</div>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Praesent ut tortor ante. Ut pretium nec mauris ac porta.
    Vivamus non lectus eu ipsum volutpat porttitor.</p>

    <?php
    include 'partners-slider.php'
    ?>

    <a class="radius menu" href="" >Ajánlat kérése, vagy mi</a>
</section>

<section class="awards-section">
    <div class="awards-grid-box">
        <img class="flex-image" src="resources/flextime-bg.jpg" alt="flexing" width="100%" height="auto">
    </div>
    <div>
        <p>#flextime<br></p>
        <div class="section-header">Lorem Ipsum Flexelés</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent ut tortor ante. Ut pretium nec mauris ac porta.
            Vivamus non lectus eu ipsum volutpat porttitor.
        </p>
    </div>
    <div class="awards-grid-box">
        <img class=awards-image" src="resources/oc-az-ev-honlapja.png" alt="Év Honlapja" width="auto" height="50%">
        <div>
            <p class="awards-paragraph">Az év honlapja</p>
            <p>2021, 2022 - damsz.hu Egyszerű. Rugalmas. Naprakész</p>
        </div>
    </div>
    <div class="awards-grid-box">
        <img class=awards-image" src="resources/oc-marketing-diamond.png" alt="Marketing gyémánt" width="auto" height="50%">
        <div>
            <p class="awards-paragraph">Markeding Diamond</p>
            <p>2022 - MELÓ-DIÁK presents: Valmar x Astronaut</p>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>

</body>

</html>
