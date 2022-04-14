<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Joshua Alele-Beals</title>
    <!-- Include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:800" rel="stylesheet">
    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/icofont.css">
    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/color.css">
    <!-- Include the site stylesheet -->
    <style class="color_css"></style>
</head>

<body>
    <!-- Main container of the page -->
    <div id="wrapper">
        <!-- Header of the page -->
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- logo of the page -->
                        <div class="logo text-uppercase"><a href="#">Josh Beals</a></div>
                    </div>
                </div>
            </div>
            <!-- Nav of the page -->
            <nav id="nav" class="hidden-xs">
                <ul class="list-unstyled text-uppercase">
                    <li><a href="#Welcome">Welcome</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#works">works</a></li>
                    <li><a href="#skills">skills</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </nav>
        </header>
        <!-- Main of the page -->
        <main id="main">

            <!-- Banner sec of the page -->
            <section id="Welcome" class="banner-sec">
                <div class="container">
                    <div class="row">
                        <!-- content of the banner -->
                        <div class="col-12 pb-5 caption">
                            <h1 class="text-uppercase" data-heading="Josh Beals">FullStack <span class="orange">
                                    Engineer</span>
                            </h1>
                            <p class="text-uppercase">Joshua <span class="orange"
                                    style="padding-left: 5px;">Alele-Beals</span></p>
                            <button class="btn btn-primary btn-sm cv"><a href="pdf/josh.pdf"
                                    download="Joshua Alele-Beals CV">Download CV</a></button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            @include('partials.about')

            <!-- Tech Skills Section -->
            @include('partials.tech')

            <!-- Works Section -->
            @include('partials.works')

            <!-- Testimonials Section -->
            @include('partials.testimonials')

            <!-- Contact Section -->
            @include('partials.contact')

        </main>
        <!-- Footer of the page -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <span class="text">© Copyright 2022, Josh Beals. All Rights Reserved</span>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <!-- social icons of the page -->
                        <ul class="list-unstyled social-icons">
                            <li><a href="#" class="fab fa-facebook-f"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-google-plus-g"></a></li>
                            <li><a href="#" class="fab fa-linkedin-in"></a></li>
                            <li><a href="#" class="fab fa-pinterest-p"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Include jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Include jQuery -->
    <script src="js/plugins.js"></script>
    <!-- Include jQuery -->
    <script src="js/jquery.main.js"></script>
    <div id="style-changer" data-src="inc/style-changer.html"></div>
</body>

</html>