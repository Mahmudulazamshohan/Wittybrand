<!doctype html>
<html class=no-js lang=zxx>

<head>
    <meta charset=utf-8>
    <meta name=author content="John Doe">
    <meta name=description content>
    <meta name=keywords content=HTML,CSS,XML,JavaScript>
    <meta http-equiv=x-ua-compatible content=ie=edge>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home || WittyBrand</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel=apple-touch-icon href=images/apple-touch-icon.png>
    <link rel="shortcut icon" type=image/ico href=images/favicon.ico>
    <!-- Plugin-CSS -->
    <!-- Main-Stylesheets -->
    <!-- <link rel="stylesheet" href="css/wave.css"> -->
    <link rel=stylesheet href="{{asset('wittycss/css/style.css') }} ">
    <script src="{{asset('wittycss/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>

        <![endif]-->
</head>

<body data-spy=scroll data-target=#primary-menu>
    <div class=preloader>
        <div class=sk-folding-cube>
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class=mainmenu-area data-spy=affix data-offset-top=100>
        <div class=container>
            <!--Logo-->
            <div class=navbar-header>
                <button type=button class=navbar-toggle data-toggle=collapse data-target=#primary-menu> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button>
                <a href={{route('main.index')}} class="navbar-brand logo"> <img src=" {{asset('wittycss/images/logo.png') }}" class=logo alt=WittyBrand> </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id=primary-menu>
                <ul class="nav navbar-nav navbar-right">
                    <li class=active><a href=#home-page>Home</a></li>
                    <li><a href=#service-page>Service</a></li>
                    <li><a href=#earn-money>Earning</a></li>
                    <!-- <li><a href="#price-page">Pricing</a></li> -->
                    <!--<li><a href="#team-page">Team</a></li>-->
                    <li><a href=#faq-page>FAQ</a></li>
                    <li><a href=#contact-page>Contact</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href=https://play.google.com>Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id=home-page>
        <!-- <div class="absoulate anlge-bg"></div> -->
        <div class=wave1></div>
        <div class=container>
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>It’s all about Promoting your Business</h2>
                    <p>Start promoting your business,youtube channel,facebook page,android apps with us. hGet authenticate like,comments,subscribtion & apps review with affordable price.</p> <a href=# class="button white">Watch video</a> </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class=item> <img src=" {{asset('wittycss/images/screen-1.jpg') }} " alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/screen-2.jpg') }} " alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/screen-3.jpg') }} " alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/screen-4.jpg') }} " alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/screen-5.jpg') }} " alt> </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->
    <!--Feature-area-->
    <section class="gray-bg section-padding" id=service-page>
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class="page-title text-center">
                        <h2>Services</h2>
                        <p>We are here to utilize your needs & work with you as a corporate friend. Our priority is your satisfactions.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/service-icon-1.png') }}" alt> </div>
                        <h4>Web Designing</h4>
                        <p>Being the pioneers in Bangladesh for introducing web based, mobile optimized campaign applications, we design and develop responsive websites that compliment your business goals.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/service-icon-2.png') }}" alt> </div>
                        <h4>Social Media Branding</h4>
                        <p>Our social media experts will humanise your company into a talkative brand, creating meaningful conversations with your customers using the most edgy social media strategies </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/service-icon-3.png') }}" alt> </div>
                        <h4>Product Marketing</h4>
                        <p>Your products promotion is our responsibility.We have an expert team who will humanize to promote your product.We can are here for your android apps download,review your & consultancy for your product to reach the mass people.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->
    <section class="angle-bg sky-bg section-padding">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-md-12">
                    <div id=caption_slide class="carousel slide caption-slider" data-ride=carousel>
                        <div class=carousel-inner role=listbox>
                            <div class="item active row">
                                <div class=v-center>
                                    <div class="col-xs-12 col-md-6">
                                        <div class=caption-title data-animation="animated fadeInUp">
                                            <h2>Apps Development</h2> </div>
                                        <div class=caption-desc data-animation="animated fadeInUp">
                                            <p>Our experience team can help you to build your apps with great UI/UX. Which most of people are not concern.We do market research & follow design pattern before development.</p>
                                        </div>
                                        <!--  <div class="caption-button" data-animation="animated fadeInUp">
                                                <a href="#" class="button">Read more</a>
                                            </div> --></div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight"> <img src=" {{asset('wittycss/images/screen-1.jpg') }}" alt> </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight"> <img src=" {{asset('wittycss/images/screen-2.jpg') }}" alt> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class=v-center>
                                    <div class="col-xs-12 col-md-6">
                                        <div class=caption-title data-animation="animated fadeInUp">
                                            <h2>Investments</h2> </div>
                                        <div class=caption-desc data-animation="animated fadeInUp">
                                            <p>Best use of your Capital.You have money to invest but you are not sure where you can invest.We are working internationally lot's of renowned company is waiting for you depends on your amount. </p>
                                        </div>
                                        <!-- <div class="caption-button" data-animation="animated fadeInUp">
                                                <a href="#" class="button">Read more</a>
                                            </div> --></div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight"> <img src=" {{asset('wittycss/images/screen-3.jpg') }}" alt> </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight"> <img src=" {{asset('wittycss/images/screen-4.jpg') }}" alt> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class=v-center>
                                    <div class="col-xs-12 col-md-6">
                                        <div class=caption-title data-animation="animated fadeInUp">
                                            <h2>Corporate Partner</h2> </div>
                                        <div class=caption-desc data-animation="animated fadeInUp">
                                            <p>Become our corporate partner & get an extra benefits from us others will not give you.Get 1 month free promotion for your products locally/globally.And also financial,accounting,audit related help from the experience market analysist & lawer.More more call us.</p>
                                        </div>
                                        <!-- <div class="caption-button" data-animation="animated fadeInUp">
                                                <a href="#" class="button">Read more</a>
                                            </div> --></div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight"> <img src=" {{asset('wittycss/images/screen-3.jpg') }}" alt> </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo two" data-animation="animated fadeInRight"> <img src=" {{asset('wittycss/images/screen-4.jpg') }}" alt> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <div class=col-md-12>
                            <ol class="carousel-indicators caption-indector">
                                <li data-target=#caption_slide data-slide-to=0 class=active> <strong>Android Development </strong>Mobilizing your business in phone. </li>
                                <li data-target=#caption_slide data-slide-to=1> <strong>Investments</strong>Get the best use of your money & get revenue. </li>
                                <li data-target=#caption_slide data-slide-to=2> <strong>corporate Partnet</strong>Discount going on our corporate membership. </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gray-bg section-padding" id=earn-money>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class=page-title>
                        <h2>How You Can Earn</h2>
                        <p>We have lots of micro work like captcha,data-entry,content writing,watching videos,playing games,affiliative etc!</p>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/portfolio-icon-1.png')}} " alt> </div>
                        <h3>Content Writing</h3>
                        <p>You can earn money by posting in blogs without copyright contents.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/service-icon-3.png')}} " alt> </div>
                        <h3>Product Marketing</h3>
                        <p>You can promote business product & get reward.For this you will need only basic communications skill.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/portfolio-icon-3.png') }} " alt> </div>
                        <h3>Customer Supports</h3>
                        <p>You can earn money through customer supports.Talking over phone managing clients etc.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/portfolio-icon-4.png') }} " alt> </div>
                        <h3>Affiliative Marketing</h3>
                        <p>This is the best thing anyone can do & earns a lots of money.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/portfolio-icon-5.png') }} " alt> </div>
                        <h3>Playing games</h3>
                        <p>Earn money by playing games,watching videos etc.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class=box>
                        <div class=box-icon> <img src=" {{asset('wittycss/images/portfolio-icon-6.png') }} " alt> </div>
                        <h3>Data Entry</h3>
                        <p>You had good skills in microsoft office.And basic knowledge of entry data then this a paradise for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="gray-bg section-padding" id=faq-page>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class=page-title>
                        <h2>Frequently Asked Questions</h2>
                        <p>This are the frequent questions micro-worker wants to know!</p>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class=panel-group id=accordion>
                        <div class=panel>
                            <h4 class=panel-title> <a data-toggle=collapse data-parent=#accordion href=#collapse1 aria-expanded=true>What WittyBrand do?</a> </h4>
                            <div id=collapse1 class="panel-collapse collapse in">
                                <p>We provide all kind of bussiness solutions,digital marketing,branding,product promotions,facebook,youtube marketing too.And we have a huge developing network where peoples with Computer,android phone & connection of internet can earn money for more details contact with us or download our apps from Google Playstore.</p>
                            </div>
                        </div>
                        <div class=panel>
                            <h4 class=panel-title> <a data-toggle=collapse data-parent=#accordion href=#collapse2>How do i earn money?</a> </h4>
                            <div id=collapse2 class="panel-collapse collapse">
                                <p>You will need to create an account in our apps. After that you will get all the instructions of earning money there & 24/7 supports of earning money.So sign up & start earning money today.</p>
                            </div>
                        </div>
                        <div class=panel>
                            <h4 class=panel-title> <a data-toggle=collapse data-parent=#accordion href=#collapse3>How much money i can earn ?</a> </h4>
                            <div id=collapse3 class="panel-collapse collapse">
                                <p>Well that's depends on you. You can earn 10,000 BDT if you work properly & follow our instructions.Some of our freelancer earning 15,000-20,000 BDT.Teamwork is the best quality here.As your team grow gradually & your work flow rapidly increase & earnings too.So, it's depends on you how much time you spend in working.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding overlay client-area overlay" id=client-page>
        <div class=container>
            <div class="row text-center">
                <div class=col-xs-12>
                    <div class=clients>
                        <div class=item> <img src=" {{asset('wittycss/images/fourgeek.png') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/rosmoy.png') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/graphicriver.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/docean.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/audiojungle.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/actividen.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/photodone.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/videgub.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/themeforest.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/coadcanyon.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/graphicriver.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/docean.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/audiojungle.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/actividen.gif') }} "  alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/photodone.gif ') }} " alt> </div>
                        <div class=item> <img src=" {{asset('wittycss/images/videgub.gif') }} "  alt> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding gray-bg" id=blog-page>
        <div class=container>
            <div class=row>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class=page-title>
                        <h2>Download Our Apps</h2>
                        <p>Start earning today by collaborating with team members.
                            <br> Subscribe our channel to know what's coming.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 text-center">
                    <a href=http://www.playstore.com> <img src=" {{asset('wittycss/images/playstore.png') }} " class=wittycon alt> </a>
                </div>
                <div class="col-xs-12 col-sm-6 text-center">
                    <a href=http://www.youtube.com> <img src=" {{asset('wittycss/images/youtube.png') }} " class=wittycon alt></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area relative sky-bg" id=contact-page>
        <!-- <div class="absolute footer-bg"></div> -->
        <div class=footer-top>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class=page-title>
                            <h2>Contact with us</h2>
                            <p>Feel to Message Us </p>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class="col-xs-12 col-md-4"> <address class=side-icon-boxes> <div class=side-icon-box> <div class=side-icon>
                     <img src=" {{asset('wittycss/images/location-arrow.png') }} " alt> </div> <p><strong>Address: </strong>Sector#5,Road#1<br>Uttara,Dhaka</p> </div> <div class=side-icon-box> <div class=side-icon> <img src=" {{asset('wittycss/images/phone-arrow.png') }}"" alt> </div> <p><strong>Telephone: </strong> <a href=callto:8801746782021>+8801746782021</a> </p> </div> <div class=side-icon-box> <div class=side-icon> <img src=" {{asset('wittycss/images/mail-arrow.png') }}" alt> </div> <p><strong>E-mail: </strong> <a href=mailto:hello@wittybrand.com>hello@wittybrand.com</a> <br> <!-- <a href="mailto:youremail@example.com">example@mail.com</a> --> </p> </div> </address> </div>
                    <div class="col-xs-12 col-md-8">
                        <form action=process.php id=contact-form method=post class=contact-form>
                            <div class=form-double>
                                <input type=text id=form-name name=form-name placeholder="Your name" class=form-control required=required>
                                <input type=email id=form-email name=form-email class=form-control placeholder="E-mail address" required=required> </div>
                            <input type=text id=form-subject name=form-subject class=form-control placeholder="Message topic">
                            <textarea name=message id=form-message name=form-message rows=5 class=form-control placeholder="Your message" required=required></textarea>
                            <button type=sibmit class=button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=footer-middle>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href=#><i class=ti-facebook></i></a></li>
                            <li><a href=#><i class=ti-twitter></i></a></li>
                            <li><a href=#><i class=ti-google></i></a></li>
                            <li><a href=#><i class=ti-linkedin></i></a></li>
                            <li><a href=#><i class=ti-youtube></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>WittyBrand is a Freelancing & Advertising company.Enagage with us earn money & get financially stable by affiliative & mircowork.Promote your company or product from us with our mass network.We are currently working in six country.</p>
                    </div>
                    <button onclick=topFunction() id=myBtn title="Go to top"><i class="fa fa-arrow-up" aria-hidden=true></i> </button>
                </div>
            </div>
        </div>
        <div class=footer-bottom>
            <div class=container>
                <div class=row>
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018 All Right Reserved&nbsp;WittyBrand</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Vendor-JS-->
    <script src="{{asset('wittycss/js/vendor/jquery-1.12.4.min.js') }} "></script>
    <script src="{{asset('wittycss/js/vendor/bootstrap.min.js') }} "></script>
    <!--Plugin-JS-->
    <script src="{{asset('wittycss/js/owl.carousel.min.js') }} "></script>
    <script src="{{asset('wittycss/js/contact-form.js') }} "></script>
    <script src="{{asset('wittycss/js/jquery.parallax-1.1.3.js') }} "></script>
    <script src="{{asset('wittycss/js/scrollUp.min.js') }} "></script>
    <script src="{{asset('wittycss/js/magnific-popup.min.js') }} "></script>
    <script src="{{asset('wittycss/js/wow.min.js') }} "></script>
    <!--Main-active-JS-->
    <script src=" {{asset('wittycss/js/main.js') }} "></script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>