<?php
if (isset($_POST['SubmitForm'])) {

    $para = "contato@itfolkstechnology.com";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mens = $_POST['mensagem'];

    $mensagem = "<strong>SOLICITAÇÃO DE INFORMAÇÕES VIA SITE IT FOLKS</strong>";
    $mensagem .= "<br><br> <strong>Nome:  </strong>" . $nome;
    $mensagem .= "<br>  <strong>E-mail: </strong>" . $email;
    $mensagem .= "<br>  <strong>Mensagem: </strong>" . $mens;

    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  Site IT FOlks\n";
    $headers .= "IT Folks:  <contato@itfolkstechnology.com>\n";
    $headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
    $headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'] . "\n";
    $headers .= "Return-Path:  <contato@itfolkstechnology.com>\n";
    $headers .= "MIME-Version: 1.0\n";

    mail($para, $assunto, $mensagem, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IT Folks Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="development, software factory, outsourcing, web development, app, applications, web design, itfolks" name="keywords">
    <meta content="IT Folks is a full service company that was born in a time of crisis where the market demands a company with a forward-looking and complete" name="description">
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YVLKE7HGRE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YVLKE7HGRE');
    </script>
</head>

<body>
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <a href="index.php"><img class="icone" src="../img/Logo_IT_Folks.png" alt="IT Folks logo" title="IT Folks" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">HOME</a></li>
                    <li><a href="#about">IT FOLKS</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#portfolio">KNOW MORE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="../index.php"><img class="icone" src="../img/brasil.png" alt="IT Folks logo" title="IT Folks" /></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url('../img/intro-carousel/1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd">the IT Folks team is focused on</h3>
                                <h2>ON <span class="green">RESULTS</span></h2>
                                <h2><img class="icone" src="../img/Logo_IT_Folks.png" alt="IT Folks logo" title="IT Folks" /></h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('../img/intro-carousel/6.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd"> be focused on your business</h3>
                                <h2><span class="green">OUTSOURCING</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('../img/intro-carousel/3.jpeg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd"> want programs or applications?</h3>
                                <h2><span class="green">WE DEVELOP</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('../img/intro-carousel/2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd">are you looking for qualified professionals?</h3>
                                <h2><span class="green">WE RECRUIT</span></h2>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item" style="background-image: url('../img/intro-carousel/4.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd"> do you want to develop a website for your company?</h3>
                                <h2><span class="green">WE CREATE</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">previous</span>
                </a>
                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">next</span>
                </a>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>OUR COMPANY</h3>
                    <p>
                        The visionary is the one who has the rare ability to not only see the present, but also see the
                        future, is able to predict trends and anticipate changes, instead of simply being run over by
                        them.
                    </p>
                </header>
                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="../img/about-plan.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-eye"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Goals</a></h2>
                            <p class="text-center">
                                Our goal is to put our partners at the forefront, developing consistent strategies,
                                acting where and how our customers and partners need it.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img ">
                                <img src="../img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-checkmark"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our mission</a></h2>
                            <p class="text-center">
                                IT Folks is a full service agency that was born in a time of crisis where the market
                                demands a company with a forward-looking and complete approach, with respect for
                                customers and partners from the most diverse areas..
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="../img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-copy"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Performance</a></h2>
                            <p class="text-center">
                                IT Folks has been working in consulting, application and systems development, as well as
                                outsourcing IT professionals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <header class="section-header wow fadeInUp">
                    <h3>Service</h3>
                    <p></p>
                </header>
                <div class="row">
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-android-laptop"></i></div>
                        <h4 class="title"><a href="">WEB DEVELOPMENT</a></h4>
                        <p class="description">Development of websites, blogs, virtual stores and web applications with
                            responsive layout according to the customer's needs.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-images"></i></div>
                        <h4 class="title"><a href="">WEB DESIGN</a></h4>
                        <p class="description">Digital communication through social networks, generating viral content
                            and monitoring.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-pulse-strong"></i></div>
                        <h4 class="title"><a href="">SYSTEM DEVELOPMENT</a></h4>
                        <p class="description">Development of systems in several languages according to the project of
                            our customers and partners.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-android-people"></i></div>
                        <h4 class="title"><a href="">OUTSOURCING</a></h4>
                        <p class="description">We seek and select the right professional for your company. Multiple your
                            team with the help of IT Folks.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="facts" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>OUR NUMBERS</h3>
                    <p></p>
                </header>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">8</span>
                        <p>Customers</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">16</span>
                        <p>Projects</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">140</span>
                        <p>Consulting Hours</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">16</span>
                        <p>Team Members</p>
                    </div>
                </div>
                <div class="facts-img">
                    <img src="../img/facts-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </section>
        <section id="portfolio" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">KNOW MORE</h3>
                    <p>
                        Learn about the advantages and benefits of our services offered. We will be happy to help you.
                    </p>
                </header>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="../img/portfolio/Webdesign.jpg" class="img-fluid" alt="">
                                <a href="../img/portfolio/Webdesign.jpg" data-lightbox="portfolio" data-title="About Webdesign" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="webdesign.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="webdesign.html">WEB DESING</a></h4>
                                <p>MORE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="../img/portfolio/Outsourcing.jpg" class="img-fluid" alt="">
                                <a href="../img/portfolio/Outsourcing.jpg" class="link-preview" data-lightbox="outsourcing" data-title="About outsourcing" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="outsourcing.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="outsourcing.html">OUTSOURCING</a></h4>
                                <p>MORE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="../img/portfolio/Desenvolvedor.jpg" class="img-fluid" alt="">
                                <a href="../img/portfolio/Desenvolvedor.jpg" class="link-preview" data-lightbox="development" data-title="About Development" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="development.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="development.html">DEVELOPMENT</a></h4>
                                <p>MORE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>OUR CLIENTS</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                    <a href="https://udriver.pl/" target="_blank"><img src="../img/clients/client-2.png" alt="IT Folks - udriver"></a>
                    <a href="https://www.ssenge.com.br/" target="_blank"><img src="../img/clients/client-1.png" alt="IT Folks - ssenge"></a>
                    <a href="https://ative.site/" target="_blank"><img src="../img/clients/client-3.png" alt="IT Folks - Ative"></a>
                    <a href="#"><img src="../img/clients/client-4.png" alt="IT Folks - Good Job"></a>
                    <a href="#"><img src="../img/clients/client-5.png" alt="IT Folks - Pure CodeX"></a>
                    <a href="#"><img src="../img/clients/client-6.png" alt="IT Folks - Jobllegros"></a>
                </div>
            </div>
        </section>
        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>OUR TEAM</h3>
                </header>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="../img/Raul_Balestra.jpg" class="testimonial-img" alt="Raul Balestra - CEO IT Folks">
                        <h3>Raul Balestra</h3>
                        <h4>CEO</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            CEO da IT Folks
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Eduarda_Balestra.jpg" class="testimonial-img" alt="Eduarda Balestra - International head of finance">
                        <h3>Eduarda Balestra</h3>
                        <h4>International Head of Finance</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            International Head of Finance
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Douglas_Campos.jpg" class="testimonial-img" alt="Douglas Campos - Marketing Analyst">
                        <h3>Douglas Campos</h3>
                        <h4>Marketing Analyst</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Marketing Analyst of IT Folks
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Eliza_Cesar.jpg" class="testimonial-img" alt="Eliza César - Developer UX/UI">
                        <h3>Eliza César</h3>
                        <h4>Develop UX/UI</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer UX/UI
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Mateus.jpg" class="testimonial-img" alt="Mateus S. - Developer UX/UI">
                        <h3>Mateus S.</h3>
                        <h4>Develop UX/UI</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer UX/UI
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Ronaldo.jpg" class="testimonial-img" alt="Ronaldo S. - Developer Front-end">
                        <h3>Ronaldo S.</h3>
                        <h4>Developer Front-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Leandro.jpg" class="testimonial-img" alt="Leandro R. - CTO IT Folks">
                        <h3>Leandro R.</h3>
                        <h4>CTO IT Folks</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            CTO (Chief Technology Officer)
                            <img src="../img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Fernando.jpg" class="testimonial-img" alt="Fernando Balestra - Marketing Analyst">
                        <h3>Fernando Balestra</h3>
                        <h4>Marketing Analyst</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Marketing Analyst of IT Folks
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Thiago_Lima.jpg" class="testimonial-img" alt="Thiago Lima - Developer Front-end">
                        <h3>Thiago Lima</h3>
                        <h4>Developer Front-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Icaro_Monteiro.jpg" class="testimonial-img" alt="Icaro Monteiro - Developer Front-end">
                        <h3>Icaro Monteiro</h3>
                        <h4>Developer Front-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Jonathan.jpg" class="testimonial-img" alt="Jonathan G. - Project Manager">
                        <h3>Jonathan G.</h3>
                        <h4>Project Manager</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Project Manager
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Emanoel.jpg" class="testimonial-img" alt="Emanoel C. - Developer Back-end">
                        <h3>Emanoel C.</h3>
                        <h4>Developer Back-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer Back-end
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Leandro-t.jpg" class="testimonial-img" alt="Leandro T. - Developer Front-end">
                        <h3>Leandro T.</h3>
                        <h4>Developer Front-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Leonardo_Marzeuski.jpg" class="testimonial-img" alt="Leonardo Marzeuski - Developer Front-end">
                        <h3>Leonardo Marzeuski</h3>
                        <h4>Developer Front-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="../img/Maxino_Penia.jpg" class="testimonial-img" alt="Maximo Penia - Administrative">
                        <h3>Maximo Penia</h3>
                        <h4>Administrative</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Administrative of IT Folks
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>


                </div>
            </div>
        </section>
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h3>CONTACT US</h3>
                    <p>We are always available to serve our customers and partners.</p>
                </div>
                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>Campo Largo - Paraná - Brazil</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Telephone</h3>
                            <p><a href="tel:+5541997195913">+55 41 9654-5660</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">contato@itfolkstechnology.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="form" id="contact-form" method="post">
                    <div id="sendmessage">Thanks for your message.</div>
                    <div id="errormessage"></div>
                    <form id="form1" name="form1" method="post" action="<? $PHP_SELF; ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="nome" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please minimum 4 characters" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="e-mail" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="assunto" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please minimum 8 characters" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="mensagem" rows="5" data-rule="required" data-msg="Mensagem" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" name="SubmitForm">Send Message</button></div>
                    </form>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <a href="#intro"><img class="icone" src="../img/Logo_IT_Folks.png" alt="IT Folks logo" title="IT Folks" /></a><br />
                        <p><br />IT Folks is a company that was born in a time of crisis where the market demands a
                            forward-looking and complete company, with respect for customers and partners from the most
                            diverse areas.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#intro">HOME</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#about">IT FOLKS</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#services">SERVICES</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">KNOW MORE</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#testimonials">TEAM</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>CONTACT US</h4>
                        <p>
                            Campo Largo - Paraná <br>
                            Brazil <br>
                            <strong>Phone:</strong> +55 41 9654-5660<br>
                            <strong>contato@itfolkstechnology.com</strong><br>
                        </p>
                        <div class="social-links">
                            <a href="https://www.instagram.com/itfolkstechnology/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/it-folks-technology/" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>RECEIVE NEWS</h4>
                        <p>If you want to always stay on top of our work and news, subscribe to our newsletter.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="ASSINE">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                2023 &copy; Copyright <strong><a href="https://itfolkstechnology.com/">IT Folks</a></strong>.
            </div>
            <div class="credits">
            </div>
        </div>
        <a href="https://wa.me/5541996545660" style="position:fixed;width:60px;height:60px;bottom:20px;right:70px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank"><i style="margin-top:16px" class="fa fa-whatsapp"></i>
        </a>

    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery/jquery-migrate.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/superfish/hoverIntent.js"></script>
    <script src="../lib/superfish/superfish.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="../contactform/contactform.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>