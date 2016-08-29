<!DOCTYPE html>
<html lang="en">

    
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Makook annonces</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/plugins/swiper/css/swiper.min.css" rel="stylesheet">

    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="../assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">
    <link href="../assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../assets/css/theme.css" rel="stylesheet">
    <link href="../assets/style.css" rel="stylesheet">
    <!-- Head Libs -->
    <script src="../assets/plugins/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
  
    <script type="text/javascript">
  
   
    </script>
</head>
<body id="home" class="wide">
<!-- PRELOADER 
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed">
        <div class="header-wrapper">
            <div class="container">

                <!-- Logo -->
                <div class="logo">
                    <a href="../index.php"><img src="../assets/img/logo-rentit.png" alt="Rent It"/></a>
                </div>
                <!-- /Logo -->

                <!-- Mobile menu toggle button -->
                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                <!-- /Mobile menu toggle button -->

                <!-- Navigation -->
                <nav class="navigation closed clearfix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- navigation menu -->
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li class="active"><a href="../index.php">Annonces en Tunisie</a> </li>
                                <li><a href="../Views/annonce-listing.php">Liste annonces en tunisie</a></li>
                                
                
                                <li><a href="contact.php">Contact</a></li>
                                <li>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- /navigation menu -->
                        </div>
                    </div>
                    <!-- Add Scroll Bar -->
                    <div class="swiper-scrollbar"></div>
                </nav>
                <!-- /Navigation -->

            </div>
        </div>

    </header>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">
         
        
  <?php 
   
        if (isset($_GET["id_annonce"])) {
            
            //include '../Controller/AnnonceController.php'; 
            //include '../Controller/RegionController.php';
            // var_dump($uneannonce);
        // getRegion($uneannonce[0]['id_region']);
            //var_dump($uneregion);
        }  
  ?>
        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center">
            <div class="container">
                <div class="page-header">
                     
                </div>
                <ul class="breadcrumb">
                    <li><a href="#"><?php  echo $unecategorie[0]['titre'] ?></a></li>
                    <li><a href="annonce-listing.php?id_cat"><?php  echo $souscategorie[0]['titre'] ?></a></li>
                    <li class="active"><?php echo $uneannonce[0][1]?></li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section sub-page">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 project-media">
                         <h4 class="caption-title  caption-titre-annonce"><a href="#"><?php echo $uneannonce[0][1]?></a></h4>
                           <h5 class="caption-prix-annonce"> <?php echo $uneannonce[0]['Val_Critere_1']?></h5>
                              <div class="rating">
                                 
                                   <span class="star active"></span><!--
                                   --><span class="star active"></span><!--
                                   --><span class="star active"></span><!--
                                  --><span class="star active"></span>
                                   <span class="star"></span>
                              </div>
                        <div class="img-carousel">
                            <div><img src="../assets/img/preview/portfolio/portfolio-x6.jpg" alt=""/></div>
                            <div><img src="../assets/img/preview/portfolio/portfolio-x7.jpg" alt=""/></div>
                            <div><img src="../assets/img/preview/portfolio/portfolio-x8.jpg" alt=""/></div>
                        </div>
                    </div>
                   
                 
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        

                        <aside class="aside-info-user ">
                            <div class="top clearfix ">
                                 
                                <div class="user-info float-left">
                                    <span class="icon  "><i class="fa fa-user"></i> </span>
                                    <strong class="name" itemprop="name"><?php echo $uneannonce[0]['responsable'];?></strong>  
                                    <div class="region-views"><span itemprop="availableAtOrFrom"><i class="fa fa-map-marker"></i> <?php echo $uneregion[0]['region'];?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <a   id="view-phone"  href="" class="btn btn-theme btn-contact-user"     >
                                     <span>Afficher le numéro</span>  
                               </a>
                                  <a   id="view-contact" class="btn btn-theme btn-contact-user"    >
                                      <span>Contacter l'annonceur</span>
                                </a>
                             </div>
                        </aside>
                          <aside class="aside-actions-annonce " style=" ">
                           <div class="top">
                               
                               <strong  ><span>Gérer votre annonce</span></strong>
                           </div>
                            <div class="buttons">
                                <a   class="btn " onclick="editAnnonce(<?php echo $uneannonce[0]['id_annonce'];?>)">
                                    <span class="icon"><i class="fa fa-pencil"></i> </span>
                                     <span>Modifier votre annonce</span>  
                               </a>
                                  <a   class="btn " onclick="supprimerAnnonce(<?php echo $uneannonce[0]['id_annonce'];?>)">
                                      <span class="icon"><i class="fa fa-trash-o"></i> </span>
                                     <span>Supprimer annonce</span>
                                </a>
                                
                                 
                                <div id="myModal" class="modal"></div>
                             </div>
                        </aside>
                        
                       
                    </div>
                
                </div>
                <div class="row">
                       <div class="col-lg-8 col-md-7 col-sm-12 project-media">
                    <div class="detail-annonce">
                          
                          
                         
                        <div class="info-annonce">     
                        <p class="date-insertion">Mise en ligne le : <?php echo $uneannonce[0]['date_insertion'];?></p> 
                        <table style="width: 100%;"> 
                            <tr> 
                                <td style ="vertical-align: bottom !important;width: 50%;"> <a href="#" ><?php  echo $gouvernorat[0]['governorat']."-". $uneregion[0]['region']  ; ?></a></td> 
                                <td style="float:right;width: 50%;"><a class=" btn btn-map" ><i class="fa fa-map-marker"></i></a></td>
                            
                            </tr>
                        </table>
                        
                        
                        </div>   
                           
                        <div class="annonce-description">
                            <br/> <p> <?php echo $uneannonce[0]['description']?>;  </p>
                        </div>
                             
                            
                        </div>
                   
                  
                        <div class="annonce-actions">
                            <div class="bloc-expert"><a   href="#" class="btn btn-theme btn-avis-expert"  >    <span>Ce que les experts vous conseillent</span> </a></div>  
                            
                            
                            <a id="saveAdMobile" href="#" class="btn"  > <i class="fa fa-heart"></i>  <span>Sauvegarder</span> </a>
                            <a id="reportAdMobile"   class="btn " href="#"><i class="fa fa-exclamation-triangle"></i>  <span>Signaler</span> </a>
                            <span class="btn share-action" href="#"><i class="fa fa-share-alt"></i>  <span>Partager</span> </span>
                            <div class="sharer-social">
				<a href="#" class="btn btn-theme   facebook"><i class="fa fa-facebook"></i></a>
				 <a href="#" class="btn btn-theme   google"><i class="fa fa-google"></i> </a>
                                 <a href="#" class="btn btn-theme   google"><i class="fa fa-envelope"></i> </a>
						 
			</div>
                            
                        </div>
                    </div>
                    
                     
                    
                </div>

                <hr class="page-divider"/>

                <div class="pager">
                    <a class="btn btn-theme btn-theme-transparent pull-right btn-icon-left" href="#"><i class="fa fa-angle-double-right"></i>Older</a>
                    <a class="btn btn-theme btn-theme-transparent pull-left btn-icon-right" href="#">Newer <i class="fa fa-angle-double-left"></i></a>
                </div>

                <hr class="page-divider half"/>

                <h2 class="block-title">Annonces Proches</h2>

                <div class="row thumbnails portfolio">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <img src="../assets/img/preview/portfolio/portfolio-x1.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <h3 class="caption-title"><a href="#">Project Title</a></h3>
                                            <p class="caption-category"><a href="#">Category</a>, <a href="#">Category 2</a></p>
                                            <p class="caption-buttons">
                                                <a href="../assets/img/preview/portfolio/portfolio-x1-big.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" class="btn caption-link"><i class="fa fa-link"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <img src="../assets/img/preview/portfolio/portfolio-x2.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <h3 class="caption-title"><a href="#">Project Title</a></h3>
                                            <p class="caption-category"><a href="#">Category</a>, <a href="#">Category 2</a></p>
                                            <p class="caption-buttons">
                                                <a href="../assets/img/preview/portfolio/portfolio-x2-big.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" class="btn caption-link"><i class="fa fa-link"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <img src="../assets/img/preview/portfolio/portfolio-x3.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <h3 class="caption-title"><a href="#">Project Title</a></h3>
                                            <p class="caption-category"><a href="#">Category</a>, <a href="#">Category 2</a></p>
                                            <p class="caption-buttons">
                                                <a href="../assets/img/preview/portfolio/portfolio-x3-big.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" class="btn caption-link"><i class="fa fa-link"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <img src="../assets/img/preview/portfolio/portfolio-x4.jpg" alt="">
                                <div class="caption hovered">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <h3 class="caption-title"><a href="#">Project Title</a></h3>
                                            <p class="caption-category"><a href="#">Category</a>, <a href="#">Category 2</a></p>
                                            <p class="caption-buttons">
                                                <a href="../assets/img/preview/portfolio/portfolio-x4-big.jpg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
                                                <a href="portfolio-single.html" class="btn caption-link"><i class="fa fa-link"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->
 <section class="page-section page-section sub-page testimonials">
            <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <div class="testimonials-carousel">
                    <div class="owl-carousel" id="testimonials">
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="../assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="../assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object testimonial-avatar" src="../assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="testimonial-text">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>
                                    <div class="testimonial-name">John Anthony Gibson <span class="testimonial-position">Co- founder at Rent It</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h4 class="widget-title">News Letter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-categories">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Private Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-tag-cloud">
                            <h4 class="widget-title">Item Tags</h4>
                            <ul>
                                <li><a href="#">Ford</a></li>
                                <li><a href="#">Porsche</a></li>
                                <li><a href="#">BMW</a></li>
                                <li><a href="#">Audi</a></li>
                                <li><a href="#">Honda</a></li>
                                <li><a href="#">Toyota</a></li>
                                <li><a href="#">Lexus</a></li>
                                <li><a href="#">Mitsubishi</a></li>
                                <li><a href="#">Nissan</a></li>
                                <li><a href="#">Opel</a></li>
                                <li><a href="#">Rolls-Royce</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <p class="btn-row text-center">
                            <a href="#" class="btn btn-theme btn-icon-left facebook"><i class="fa fa-facebook"></i>FACEBOOK</a>
                            <a href="#" class="btn btn-theme btn-icon-left twitter"><i class="fa fa-twitter"></i>TWITTER</a>
                            <a href="#" class="btn btn-theme btn-icon-left pinterest"><i class="fa fa-pinterest"></i>PINTEREST</a>
                            <a href="#" class="btn btn-theme btn-icon-left google"><i class="fa fa-google"></i>GOOGLE</a>
                        </p>
                        <div class="copyright">&copy; 2015 Rent It — An One Page Rental Car Theme made with passion by jThemes Studio</div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<!-- JS Global -->
<script src="../assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="../assets/plugins/superfish/js/superfish.min.js"></script>
<script src="../assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="../assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="../assets/plugins/jquery.sticky.min.js"></script>
<script src="../assets/plugins/jquery.easing.min.js"></script>
<script src="../assets/plugins/jquery.smoothscroll.min.js"></script>
<!--<script src="assets/plugins/smooth-scrollbar.min.js"></script>-->
<script src="../assets/plugins/swiper/js/swiper.jquery.min.js"></script>
<script src="../assets/plugins/datetimepicker/js/moment-with-locales.min.js"></script>
<script src="../assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- JS Page Level -->
<script src="../assets/js/theme-ajax-mail.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="../assets/js/theme.js"></script>

 <!--[if (gte IE 9)|!(IE)]><!-->
 <script src="../assets/plugins/jquery.cookie.js"></script>
<script src="../assets/js/theme-config.js"></script>

 <!--<![endif]-->
</body>
</html>