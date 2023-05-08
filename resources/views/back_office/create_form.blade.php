<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>IA-Info</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Bonjour!</a></li>
                                    <li><a href="#">Hello!</a></li>
                                    <li><a href="#">Salama!</a></li>
                                    <li><a href="#">Hola!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="index.html" class="original-logo"><h1><strong>IA-INFO</strong></h1></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="/information/list" class="btn subscribe-btn">Retour</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/information/list">All</a></li>
                                   <li><a href="/information/list-actualite">Actualités</a></li>
                                   <li><a href="/information/list-formation">Educations</a></li>
                                   <li><a href="/information/list-tendance">Tendances</a></li>
                                   <li><a href="/information/list-conseil">Conseils</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Search something...">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <!-- Single Blog Area  -->

                <!-- Contact Form Area -->
                <div class="col-12 col-md-12 col-lg-12" style="border-radius: 10px; border-color: #c7c7c2">
                    <div class="contact-form">
                        <h3>Ajout d'un nouvel article</h3>
                        <br/><br/>
                        <!-- Contact Form -->
                        <form action="/information/create" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="group">
                                        <input type="date" name="date" id="name" class="form-group">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Date</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Categorie</label>
                                    <div class="group">
                                        <select name="categorie" id="email" class="form-group">
                                            <?php foreach($categorie as $key){ ?>
                                            <option value="<?php echo $key['id']; ?>"><?php echo $key['categorie']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="titre" id="subject" class="form-group" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Titre</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="resume" id="message" class="form-group" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Résumé</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea cols="80" class="ckeditor" id="editeur" name="contenu" rows="10" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Contenu</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="file" name="image" class="form-group">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Image</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn original-btn">Ajouter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                </div>

            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>

</body>

</html>

