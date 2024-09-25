<?php
include_once("../class/conexao.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>Mars Events</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/cliente.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/swiper-bundle.min.css"/>
        <link rel="shortcut icon" href="../images/logosemletra.png" type="image/x-icon">


        
<!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="logo"><img src="images/logosemletra.png" alt="" class="img-fluid"></a>

                <div class="d-flex align-items-center d-lg-none">
                    <li class="social-icon-item"><a href="" class="social-icon-link bi-person-fill"></a></li>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Como funciona</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Eventos</a>
                        </li>

                    </ul>

                    <div class="d-lg-flex align-items-center d-none ms-auto">
                        <li class="social-icon-item"><a href="perfil_cliente.php" class="social-icon-link bi-person-fill"></a></li>
                    </div>
                
                    
                </div>

            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex mt-2">
                                    <h4 class="hero-title mb-0 mx-0 px-0">MARS EVENTS</h4>
                                </div>

                                <h3 class="mb-4 px-0">Eventos de 
                                    outro planeta.</h2>
                                <p class="mb-4 px-0"><a class="custom-btn3 btn custom-link" href="../evento/cadevento.php">Criar evento</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 mt-5 mb-lg-0">
                            <img src="images/astronauta.png" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12  d-flex flex-column">
                            <div class="about-thumb">
                            
                                    
                                            <div class="col-8">
                                            <h4>Como funciona nossa plataforma de eventos</h4>
                                                <hr color="purple" width="30%" size="5px"/>

                                                <h6>Como comprar ingressos de forma mais rápida e segura</h6>
                                                <br>
                                            </div>
                                            <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="card card-margin">
                                                    <div class="card-header no-border">
                                                        <h5 class="card-title"></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="widget-49">
                                                            <div class="widget-49-title-wrapper">
                                                                <div class="widget-49-date-primary">
                                                                    <img src = "images/ticket-perforated.svg" alt="tcket"/>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <ol class="widget-49-meeting-points">
                                                                <li class="widget-49-meeting-item"><span>Selecione seu evento e clique 
                                                                     para comprar o ingresso para seu evento</span></li>
                                                
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-sm-6 pb-2">
                                                <div class="card card-margin">
                                                    <div class="card-header no-border">
                                                        <h5 class="card-title"></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="widget-49">
                                                            <div class="widget-49-title-wrapper">
                                                                <div class="widget-49-date-primary">
                                                                    <img src = "images/info-circle.svg" alt="tcket"/>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <ol class="widget-49-meeting-points">
                                                                <li class="widget-49-meeting-item"><span>Preencha suas informações e selecione o botão de comprar</span></li>
                                                            
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="card card-margin">
                                                    <div class="card-header no-border">
                                                        <h5 class="card-title"></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="widget-49">
                                                            <div class="widget-49-title-wrapper">
                                                                <div class="widget-49-date-primary">
                                                                    <img src = "images/cart-check.svg" alt="tcket"/>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <ol class="widget-49-meeting-points">
                                                                <li class="widget-49-meeting-item"><span>Após comprar, verifique seu carrinho de compra e finalize o pagamento</span></li>
                                                            
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="card card-margin">
                                                    <div class="card-header no-border">
                                                        <h5 class="card-title"></h5>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="widget-49">
                                                            <div class="widget-49-title-wrapper">
                                                                <div class="widget-49-date-primary">
                                                                    <img src = "images/chat-square-heart.svg" alt="tcket"/>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <ol class="widget-49-meeting-points">
                                                                <li class="widget-49-meeting-item"><span>Agora você pode visualizar seu ingresso no seu perfil e aproveitar o evento!</span></li>
                                                            
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                                        </div>
                        
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Busque seu evento  </h4>
                                    <hr color="darkpurple" width="5%" size="4px"/>
                                    <!--aq vai link !-->
                                    <h6>Visualizar mais eventos</h6>
                                    <!--aq vai link !-->
                                </div>

                                <div class="wrapper">
                                    <div class="search_box">
                                        <div class="search_btn"><img src = "images/search-heart.svg" alt="tcket"/></div>
                                        <input type="text" class="input_search" placeholder="Buscar por evento">
                                    </div>
                        </div>
                    </div>
    
                    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">    
                        <?php
                        $sql= "SELECT * FROM eventos ORDER BY id DESC";
                        $resultado = $conn->query($sql);
                                    while($user_data = mysqli_fetch_assoc($resultado)){
                                        ?>
                                        <div class='carousel-item '>
                                        <div class='card'>
                                            <div class='img-wrapper'><img src='../evento/imagens_evento/<?php echo $user_data['foto']?>' class='d-block w-100' alt='...'> </div>
                                            <div class='card-body'>
                                                <h5 class='card-title'><?php echo $user_data['nome']?></h5>
                                                <p class='card-text'>Evento aberto.</p>
                                                <a href="<?php echo '../evento/saibamais/index.php?idEvent='.$user_data['id']?>" class='custom-btn3'>Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>
                                        <?php
                                    }
                        ?> 
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </section>


            <section class="contact section-padding" id="section_5">
                    <div class="container">
                        <div class="row">

                            <div class="clearfix"></div>

                            <div class="col-lg-6 col-md-2 col-12 pe-lg-0">
                                <div class="contact-info contact-info-border-start d-flex flex-column">
                                    <h5 class="site-footer-title d-block mx-0">Mars Events</h5>


                                    <ul class="social-icon">
                                        <li class="social-icon-item"><a class="social-icon-link1 bi-twitter"></a></li>

                                        <li class="social-icon-item"><a href="https://instagram.com/marseventsenai" target="_blank" class="social-icon-link1 bi-instagram"></a></li>

                                        <li class="social-icon-item"><a href="mailto:marseventssenai@gmail.com" class="social-icon-link1 bi bi-envelope"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/index.js"></script>

    </body>
</html>