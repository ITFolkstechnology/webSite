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
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>IT Folks Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="desenvolvimento, fabrica de software, outsourcing, web development, app, aplicativos, web desing, itfolks" name="keywords">
    <meta content="A IT Folks é uma empresa full service que nasce em um momento de crise onde o mercado exige uma empresa com olhar a frente e completo" name="description">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <a href="index.php"><img class="icone" src="img/Logo_IT_Folks.png" alt="Logo da IT Folks" title="IT Folks" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">HOME</a></li>
                    <li><a href="#about">A IT FOLKS</a></li>
                    <li><a href="#services">SERVIÇOS</a></li>
                    <li><a href="#portfolio">SAIBA MAIS</a></li>
                    <li><a href="trabalheConosco.html">TRABALHE CONOSCO</a></li>
                    <li><a href="#contact">FALE CONOSCO</a></li>
                    <li><a href="eng/index.php"><img class="icone" src="img/eua.png" alt="Logo da IT Folks" title="IT Folks" /></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url('img/intro-carousel/1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd">a equipe IT Folks é focada em</h3>
                                <h2>GERAR <span class="green">RESULTADOS</span></h2>
                                <h2><img class="icone" src="img/Logo_IT_Folks.png" alt="Logo da IT Folks" title="IT Folks" /></h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('img/intro-carousel/6.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd"> esteja focado em seu negócio</h3>
                                <h2><span class="green">TERCEIRIZAÇÃO EM TI</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpeg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd"> deseja programas ou aplicativos?</h3>
                                <h2><span class="green">DESENVOLVEMOS</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('img/intro-carousel/2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd">procura profissionais qualificados?</h3>
                                <h2><span class="green">RECRUTAMOS</span></h2>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item" style="background-image: url('img/intro-carousel/4.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3 class="text-white pdd"> deseja desenvolver um site para sua empresa?</h3>
                                <h2><span class="green">CRIAMOS</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">anterior</span>
                </a>
                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">próximo</span>
                </a>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>NOSSA EMPRESA</h3>
                    <p>
                        O visionário é aquele que possui a rara habilidade de não enxergar apenas o presente, mas
                        enxergar também o futuro, é capaz de prever tendências e de antecipar mudanças, em vez de ser
                        simplesmente atropelado por elas.
                    </p>
                </header>
                <div class="row about-cols">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-eye"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Objetivos</a></h2>
                            <p class="text-center">
                                Nosso objetivo é colocar nossos parceiros a frente, desenvolvendo estratégias
                                consistentes, atuando onde e como nossos clientes e parceiros necessitem.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img ">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-checkmark"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nossa Missão</a></h2>
                            <p class="text-center">
                                A IT Folks é uma agência full service que nasce em um momento de crise onde o mercado
                                exige uma empresa com olhar a frente e completo, com respeito pelos clientes e parceiros
                                das mais diversas áreas.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-copy"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Atuação</a></h2>
                            <p class="text-center">
                                A IT Folks vem atuando em consultoria, desenvolvimento de aplicativos e sistemas, além
                                de trabalhar com Outsourcing de profissionais de TI.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <header class="section-header wow fadeInUp">
                    <h3>Serviços</h3>
                    <p></p>
                </header>
                <div class="row">
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-android-laptop"></i></div>
                        <h4 class="title"><a href="">DESENVOLVIMENTO WEB</a></h4>
                        <p class="description">Desenvolvimento de sites, blogs, lojas virtuais e aplicativos web com
                            layout responsivo de acordo com a necessidade do cliente.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-images"></i></div>
                        <h4 class="title"><a href="">WEB DESIGN</a></h4>
                        <p class="description">Comunicação digital através das redes sociais, com geração de conteúdo
                            viral e monitoramento.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-pulse-strong"></i></div>
                        <h4 class="title"><a href="">DESENVOLVIMENTO DE SISTEMA</a></h4>
                        <p class="description">Desenvolvimento de sistemas em diversas linguagem de acordo com o projeto
                            de nossos clientes e parceiros.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-android-people"></i></div>
                        <h4 class="title"><a href="">OUTSOURCING</a></h4>
                        <p class="description">Buscamos e selecionamos o profissional certo para a sua empresa. Multiple
                            seu time com a ajuda da IT Folks.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="facts" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>NOSSOS NÚMEROS</h3>
                    <p></p>
                </header>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">8</span>
                        <p>Clientes</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">16</span>
                        <p>Projetos</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">140</span>
                        <p>Horas de Consultoria</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">16</span>
                        <p>Membros da Equipe</p>
                    </div>
                </div>
                <div class="facts-img">
                    <img src="img/facts-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </section>

        <section id="portfolio" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">SAIBA MAIS</h3>
                    <p>
                        Conheça as vantagens e benefícios dos nossos serviços oferecidos. Teremos o prazer em lhe ajudar.
                    </p>
                </header>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Webdesign.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/Webdesign.jpg" data-lightbox="portfolio" data-title="Sobre Webdesign"
                                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="webdesign.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="webdesign.html">WEB DESING</a></h4>
                                <p>SAIBA MAIS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Outsourcing.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/Outsourcing.jpg" class="link-preview" data-lightbox="outsourcing"
                                    data-title="Sobre outsourcing" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="outsourcing.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="outsourcing.html">OUTSOURCING</a></h4>
                                <p>SAIBA MAIS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/Desenvolvedor.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/Desenvolvedor.jpg" class="link-preview" data-lightbox="desenvolvendo"
                                    data-title="Sobre Desenvolvimento" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="desenvolvimento.html" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>
                            <div class="portfolio-info">
                                <h4><a href="desenvolvimento.html">DESENVOLVIMENTO</a></h4>
                                <p>SAIBA MAIS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>CLIENTES</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                    <a href="https://udriver.pl/" target="_blank"><img src="img/clients/client-2.png" alt="IT Folks - udriver"></a>
                    <a href="https://www.ssenge.com.br/" target="_blank"><img src="img/clients/client-1.png" alt="IT Folks - ssenge"></a>
                    <a href="https://ative.site/" target="_blank"><img src="img/clients/client-3.png" alt="IT Folks - Ative"></a>
                    <a href="#"><img src="img/clients/client-4.png" alt="IT Folks - Good job"></a>
                    <a href="#"><img src="img/clients/client-5.png" alt="IT Folks - Pure CodeX"></a>
                    <a href="#"><img src="img/clients/client-6.png" alt="IT Folks - Jobllegros"></a>
                </div>
            </div>
        </section>

        <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">
                <header class="section-header">
                    <h3>NOSSA EQUIPE</h3>
                </header>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/Raul_Balestra.jpg" class="testimonial-img" alt="Raul Balestra - CEO IT Folks">
                        <h3>Raul Balestra</h3>
                        <h4>CEO</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            CEO da IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Eduarda_Balestra.jpg" class="testimonial-img"
                            alt="Eduarda Balestra - International head of finance">
                        <h3>Eduarda Balestra</h3>
                        <h4>International Head of Finance</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            International Head of Finance
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Douglas_Campos.jpg" class="testimonial-img"
                            alt="Douglas Campos - Marketing Analyst">
                        <h3>Douglas Campos</h3>
                        <h4>Marketing Analyst</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Marketing Analyst of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Eliza_Cesar.jpg" class="testimonial-img" alt="Eliza Cézar - Desenvolvedora UX/UI">
                        <h3>Eliza César</h3>
                        <h4>Desenvolvedora UX/UI</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Desenvolvedora UX/UI
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Mateus.jpg" class="testimonial-img" alt="Mateus S. - Desenvolvedor UX/UI">
                        <h3>Mateus S.</h3>
                        <h4>Desenvolvedor UX/UI</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Desenvolvedor UX/UI
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Ronaldo.jpg" class="testimonial-img"
                            alt="Ronaldo S. - Desenvolvedor Front-end">
                        <h3>Ronaldo S.</h3>
                        <h4>Desenvolvedor Front-end</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Desenvolvedor Front-end
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Leandro.jpg" class="testimonial-img"
                            alt="Leandro R. - CTO IT Folks">
                        <h3>Leandro R.</h3>
                        <h4>CTO da IT Folks</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            CTO IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Fernando.jpg" class="testimonial-img"
                            alt="Fernando Balestra - Marketing Analyst">
                        <h3>Fernando Balestra</h3>
                        <h4>Marketing Analyst</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Marketing Analyst of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="img/Thiago_Lima.jpg" class="testimonial-img"
                            alt="Thiago Lima - Desenvolvedor Front-end">
                        <h3>Thiago Lima</h3>
                        <h4>Desenvolvedor Front-end</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Icaro_Monteiro.jpg" class="testimonial-img"
                            alt="Icaro Monteiro - Desenvolvedor Front-end">
                        <h3>Icaro Monteiro</h3>
                        <h4>Desenvolvedor Front-end</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="img/Jonathan.jpg" class="testimonial-img"
                            alt="Jonathan G. - Project Manager">
                        <h3>Jonathan G.</h3>
                        <h4>Project Manager</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Project Manager of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Emanoel.jpg" class="testimonial-img" alt="Emanoel C. - Desenvolvedor Back-end">
                        <h3>Emanoel C.</h3>
                        <h4>Desenvolvedor Back-end</h4>
                        <p>
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                            Desenvolvedor Back-end
                            <img src="../img/quote-sign-left.png" class="quote-sign-left">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="img/Leandro-t.jpg" class="testimonial-img"
                            alt="Leandro T. - Desenvolvedor Front-end">
                        <h3>Leandro T.</h3>
                        <h4>Desenvolvedor Front-end</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Leonardo_Marzeuski.jpg" class="testimonial-img"
                            alt="Leonardo Marzeuski - Desenvolvedor Front-end">
                        <h3>Leonardo Marzeuski</h3>
                        <h4>Desenvolvedor Front-end</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Developer Front-end of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/Maxino_Penia.jpg" class="testimonial-img"
                            alt="Maximo Penia - Administrativo">
                        <h3>Maximo Penia</h3>
                        <h4>Administrativo</h4>
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left">
                            Administrativo of IT Folks
                            <img src="img/quote-sign-right.png" class="quote-sign-right">
                        </p>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h3>FALE CONOSCO</h3>
                    <p>Estamos sempre disponíveis para atender nossos clientes e parceiros.</p>
                </div>
                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Endereço</h3>
                            <address>Campo Largo - Paraná - Brasil</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Telefone</h3>
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
                <div class="form">
                    <div id="sendmessage">Obrigado por sua mensagem.</div>
                    <div id="errormessage"></div>
                    <form id="form1" name="form1" method="post" action="<? $PHP_SELF; ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="nome" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Por favor mínimo de 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" data-rule="email" data-msg="Por favor inserir a um email válido" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="assunto" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor mínimo de 8 caracteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="mensagem" rows="5" data-rule="required" data-msg="Mensagem" placeholder="Mensagem"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" name="SubmitForm">Enviar Mensagem</button></div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <a href="#intro"><img class="icone" src="img/Logo_IT_Folks.png" alt="Logo da IT Folks" title="IT Folks" /></a><br />
                        <p><br />A IT Folks é uma empresa que nasce em um momento de crise onde o mercado exige uma
                            empresa com olhar a frente e completo, com respeito pelos clientes e parceiros das mais
                            diversas áreas.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Links úteis</h4>
                        <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#intro">HOME</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#about">A IT FOLKS</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#services">SERVIÇOS</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">SAIBA MAIS</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="trabalheConosco.html">TRABALHE CONOSCO</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#testimonials">EQUIPE</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>FALE CONOSCO</h4>
                        <p>
                            Campo Largo - Paraná <br>
                            Brasil <br>
                            <strong>Telefone:</strong> +55 41 9654-5660<br>
                            <strong>contato@itfolkstechnology.com</strong><br>
                        </p>
                        <div class="social-links">
                            <a href="https://www.instagram.com/itfolkstechnology/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/it-folks-technology/" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>RECEBE NOTÍCIAS</h4>
                        <p>Quer ficar sempre por dentro de nossos trabalhos, e notícias, assine nossa newsletter.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="ASSINE">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>IT Folks</strong>.
            </div>
            <div class="credits">
            </div>
        </div>
        <a href="https://wa.me/5541996545660" style="position:fixed;width:60px;height:60px;bottom:20px;right:70px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
            <i style="margin-top:16px" class="fa fa-whatsapp"></i>
        </a>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/main.js"></script>
</body>

</html>