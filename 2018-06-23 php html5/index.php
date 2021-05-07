<?
    // =================== DATOS DE LA PLANTILLA ==================== //
    //                                                                //
    // Núcleo: Bootstrap v4.1.0, jquery-3.3.1.slim.min.js             // 
    // Fuentes: OpenSansLight, OpenSansLightItalic, OpenSansRegular,  //
    // OpenSansItalic, OpenSansSemibold, OpenSansSemiboldItalic,      //
    // OpenSansBold, OpenSansBoldItalic, OpenSansExtrabold,           //
    // OpenSansExtraboldItalic, OpenSansCondensedLight,               //
    // OpenSansCondensedLightItalic, OpenSansCondensedBold            //
    // Iconos: fontawesome-free-5.1.1-web                             //
    // Versión: 2018-06-23
    //                                                                //
    // ============================================================== //

?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <? include('inc/head_elements.php'); ?>
        <title>Starter Template for gridCSS</title>
        
        <? 
            /* ARCHIVOS DE EJEMPLO (descomentar css y php) */
            // echo "<link rel='stylesheet' href='_ejemplos/album.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/blog.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/carousel.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/checkout.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/cover.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/dashboard.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/grid.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/jumbotron.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/navbar-bottom.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/navbar-fixed.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/navbar-static.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/navbars.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/pricing.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/product.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/sign-in.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/starter-template.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/sticky-footer-navbar.css'>";
            // echo "<link rel='stylesheet' href='_ejemplos/sticky-footer.css'>";

        ?>

    </head>
    <body>
        
        <?  /* ARCHIVOS DE EJEMPLO (descomentar css y php) */
            // include('_ejemplos/album.php');
            // include('_ejemplos/blog.php');
            // include('_ejemplos/carousel.php');
            // include('_ejemplos/checkout.php');
            // include('_ejemplos/cover.php');
            // include('_ejemplos/dashboard.php');
            // include('_ejemplos/grid.php');
            // include('_ejemplos/jumbotron.php');
            // include('_ejemplos/navbar-bottom.php');
            // include('_ejemplos/navbar-fixed.php');
            // include('_ejemplos/navbar-static.php');
            // include('_ejemplos/navbars.php');
            // include('_ejemplos/pricing.php');
            // include('_ejemplos/product.php');
            // include('_ejemplos/sign-in.php');
            // include('_ejemplos/starter-template.php');
            // include('_ejemplos/sticky-footer-navbar.php');
            // include('_ejemplos/sticky-footer.php');

        ?> 
        <? /* theme basico */?>
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Never expand</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarsExample01" style="">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here.</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
     
        <main role="main">
            
            <!-- CARRUSEL -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="first-slide" src="http://via.placeholder.com/1263x512" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="http://via.placeholder.com/1263x512" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="third-slide" src="http://via.placeholder.com/1263x512" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row my-4 text-center">
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="http://via.placeholder.com/140x140" alt="Generic placeholder image" width="140" height="140">
                        <h2 class="bold">Heading bold</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">font AWESOME 5.1.1 <i class="fas fa-plane-departure"></i></a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="http://via.placeholder.com/140x140" alt="Generic placeholder image" width="140" height="140">
                        <h2 class"regular">Heading regular</h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details <i class="fas fa-ambulance"></i> </a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="http://via.placeholder.com/140x140" alt="Generic placeholder image" width="140" height="140">
                        <h2 class="light">Heading light</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->

                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="http://via.placeholder.com/500x500" data-holder-rendered="true">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="http://via.placeholder.com/500x500" data-holder-rendered="true" style="width: 500px; height: 500px;">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="http://via.placeholder.com/500x500" data-holder-rendered="true" style="width: 500px; height: 500px;">
                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->
      
            <!-- FOOTER -->
            <footer class="container">
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>© 2017-2018 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            </footer>
    
    </main>
  
    <? include('inc/footer_elements.php'); ?>

    </body>
</html>