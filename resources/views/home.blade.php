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

            <!-- Skills sec of the page -->
            <section id="skills" class="skill-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="heading text-uppercase" data-heading="skills">skill that makes me strong</h2>
                        </div>
                        <!-- Progress of the adobe photoshop -->
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                            <div class="box">
                                <div class="chart" data-percent="90">90%</div>
                                <strong class="skill text-capitalize">Adobe Photoshop</strong>
                            </div>
                        </div>
                        <!-- Progress of the adobe illustrator -->
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                            <div class="box">
                                <div class="chart" data-percent="80">80%</div>
                                <strong class="skill text-capitalize">Adobe Illustrator</strong>
                            </div>
                        </div>
                        <!-- Progress of the lighting -->
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                            <div class="box">
                                <div class="chart" data-percent="94">94%</div>
                                <strong class="skill text-capitalize">Lighting</strong>
                            </div>
                        </div>
                        <!-- Progress of the abode lightroom -->
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                            <div class="box">
                                <div class="chart" data-percent="90">90%</div>
                                <strong class="skill text-capitalize">Adobe Lightroom</strong>
                            </div>
                        </div>
                        <!-- Progress of the product shops -->
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                            <div class="box">
                                <div class="chart" data-percent="85">85%</div>
                                <strong class="skill text-capitalize">Product Shots</strong>
                            </div>
                        </div>
                        <!-- Progress of the weeding shots -->
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                            <div class="box">
                                <div class="chart" data-percent="92">92%</div>
                                <strong class="skill text-capitalize">Weeding Shots</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial of the page -->
            <section class="testimonial-sec bg-full overlay" style="background-image:url(images/img11.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="heading text-uppercase" data-heading="speech">What clients say about me</h2>
                            <div class="testimonial-holder">
                                <!-- Slide of the client feedback -->
                                <div class="client-feedback">
                                    <blockquote class="slide">
                                        <i class="icon fas fa-quote-left"></i>
                                        <q>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum <br class="hidden-xs hidden-sm">dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent <br class="hidden-xs hidden-sm">luptatum zzril delenit augue duis
                                            dolore te feugait nulla facilisi.</q>
                                        <cite class="author text-capitalize">admin</cite>
                                        <span class="desination text-capitalize">Project Manager, Sitename</span>
                                    </blockquote>
                                    <blockquote class="slide">
                                        <i class="icon fas fa-quote-left"></i>
                                        <q>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum <br class="hidden-xs hidden-sm">dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent <br class="hidden-xs hidden-sm">luptatum zzril delenit augue duis
                                            dolore te feugait nulla facilisi.</q>
                                        <cite class="author text-capitalize">John Doe</cite>
                                        <span class="desination text-capitalize">Project Manager, Sitename</span>
                                    </blockquote>
                                    <blockquote class="slide">
                                        <i class="icon fas fa-quote-left"></i>
                                        <q>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum <br class="hidden-xs hidden-sm">dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent <br class="hidden-xs hidden-sm">luptatum zzril delenit augue duis
                                            dolore te feugait nulla facilisi.</q>
                                        <cite class="author text-capitalize">Johnson</cite>
                                        <span class="desination text-capitalize">Project Manager, Sitename</span>
                                    </blockquote>
                                    <blockquote class="slide">
                                        <i class="icon fas fa-quote-left"></i>
                                        <q>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat, vel illum <br class="hidden-xs hidden-sm">dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent <br class="hidden-xs hidden-sm">luptatum zzril delenit augue duis
                                            dolore te feugait nulla facilisi.</q>
                                        <cite class="author text-capitalize">John</cite>
                                        <span class="desination text-capitalize">Project Manager, Sitename</span>
                                    </blockquote>
                                </div>
                                <!-- Client image of the client feedback -->
                                <ul class="list-unstyled slick-slider client-slider">
                                    <li><img src="images/img14.jpg" alt="image description" class="img-responsive"></li>
                                    <li><img src="images/img15.jpg" alt="image description" class="img-responsive"></li>
                                    <li><img src="images/img16.jpg" alt="image description" class="img-responsive"></li>
                                    <li><img src="images/img17.jpg" alt="image description" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact-sec of the page -->
            <section class="contact-sec" id="contact">
                <div class="img-holder hidden-xs hidden-sm">
                    <img src="images/img12.png" alt="img description" class="img-responsive">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-md-offset-3">
                            <div class="contact-holder">
                                <h3 data-heading="hire me" class="heading text-uppercase">Get in touch with me now!</h3>
                                <!-- Contact list of the page -->
                                <ul class="list-unstyled contact-list">
                                    <li>
                                        <span class="icon-holder pull-left"><i class="icofont-envelope"></i></span>
                                        <div class="wrap">
                                            <strong class="title text-uppercase">email</strong>
                                            <a
                                                href="mailto:&#109;&#097;&#114;&#116;&#105;&#110;&#046;&#106;&#111;&#110;&#101;&#115;&#064;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">&#109;&#097;&#114;&#116;&#105;&#110;&#046;&#106;&#111;&#110;&#101;&#115;&#064;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon-holder pull-left"><i class="icofont-skype"></i></span>
                                        <div class="wrap">
                                            <strong class="title text-uppercase">skype</strong>
                                            <a href="#">martin.jones</a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon-holder pull-left"><i class="icofont-phone"></i></span>
                                        <div class="wrap">
                                            <strong class="title text-uppercase">phone</strong>
                                            <a href="tel:02123414210">+021-2341-4210</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 col-md-offset-6">
                            <!-- contact form of the page -->
                            <div class="contact-form">
                                <form id="contactForm" data-toggle="validator">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="text">Your name:</label>
                                            <input class="form-control" id="txtname" name="name" type="text"
                                                placeholder="Enter your name here" required
                                                data-error="NEW ERROR MESSAGE">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address:</label>
                                            <input class="form-control" id="txtemail" name="email" type="email"
                                                placeholder="Enter your email address" required
                                                data-error="NEW ERROR MESSAGE">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message:</label>
                                            <textarea class="form-control" id="txtmessage" name="message"
                                                placeholder="Write your message here" required
                                                data-error="NEW ERROR MESSAGE"></textarea>
                                        </div>
                                        <div id="msgSubmit" class="form-message hidden"></div>
                                        <button type="submit" class="btn-primary text-capitalize" id="form-submit">send
                                            message</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer of the page -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <span class="text">© 2019 Copyright 2019, Exo. All Rights Reserved</span>
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