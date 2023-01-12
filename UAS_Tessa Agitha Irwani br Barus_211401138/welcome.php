<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MCDonald's - Food and Drinks!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow py-1 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.mcdonalds.com/content/dam/sites/usa/nfl/icons/arches-logo_108x108.jpg" alt="" class="logo-medium">
                McDonald's
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#landing">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pegawai.php">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
                <div class="social-links">
                            <a href="https://web.facebook.com/McDonaldsID/?brand_redir=50245567013"i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/mcdonalds/"><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.youtube.com/channel/UCRI5ZedBs0_BYY4PlxD6m7w"><i class="ri-youtube-fill"></i></a>
                            <a href="https://twitter.com/mcdonalds"><i class="ri-twitter-fill"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Landing Page -->
    <div id="landing" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
        <div class="carousel-inner">

            <div class="carousel-item text-center bg-cover vh-100 active slide-1">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h4 data-aos="fade-up" data-aos-delay="300">New Offers Available!</h4>
                            <h1 class="display-1 my-5 fw-bold" data-aos="fade-up" data-aos-delay="600">We're Passionate About Our Food</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item text-center bg-cover vh-100 slide-2">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h4>Enjoy our Food and Drinks!<h4>
                            <h1 class="display-1 my-3 fw-bold">Commitment to Quality</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item text-center bg-cover vh-100 slide-3">
              <div class="container h-100 d-flex align-items-center justify-content-center">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <h4>Thats's Delicious and Balanced</h4>
                          <h1 class="display-1 my-3 fw-bold">Happy Meal Nutrition!</h1>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#landing" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#landing" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="section-about-vision py-main">
        <div class="container">
            <div class="row row-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <img src="https://nos.jkt-1.neo.id/mcdonalds/assets/img/bg/img_visi.jpg" class="img-fluid img-general vp-fadeinleft mb-sm-down-3 visible animated fadeInLeft" alt="Image Vision">
                </div>
                <div class="col-md-6 content-center vp-fadeinup visible animated fadeInUp" data-aos="fade-up" data-aos-delay="600">
                    <h2 class="title mb-3">Visi</h2>
                    <p class="subtitle">Visi McDonald’s adalah menjadi restoran cepat saji dengan pelayanan
                        terbaik di dunia. Untuk mencapai visi ini, McDonald’s selalu menjamin mutu produk-produknya,
                        memberikan pelayanan yang memuaskan, menawarkan kebersihan dan keamanan produk pangan serta
                        nilai-nilai tambah lainnya. Senyum konsumen adalah hal penting untuk McDonald's.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-main section-about-mission bg-gray-20">
    <div class="container">
        <div class="row row-4">
            <div class="col-md-6 order-md-last" data-aos="fade-up" data-aos-delay="600">
                <img src="https://nos.jkt-1.neo.id/mcdonalds/assets/img/bg/img-misi.jpg" class="img-fluid img-general vp-fadeinleft mb-sm-down-3 visible animated fadeInLeft">
            </div>
            <div class="col-md-6 order-md-first content-center vp-fadeinup visible animated fadeInUp" data-aos="fade-up" data-aos-delay="600">
                <h2 class="title">Misi</h2>
                <ul class="pl-3 subtitle">
                    <li>
                        <p class="mb-2">Menjadi perusahaan terbaik bagi semua karyawan kami di setiap komunitas di
                            seluruh dunia.</p>
                    </li>
                    <li>
                        <p class="mb-2">Menghadirkan pelayanan dengan sistem operasional yang unggul bagi setiap
                            konsumen kami di setiap restoran cabang McDonald’s.</p>
                    </li>
                    <li>
                        <p class="mb-2">Terus mengalami perkembangan ke arah yang menguntungkan sebagai sebuah brand,
                            serta terus mengembangkan sistem operasional McDonald’s ke arah yang lebih baik lagi lewat
                            inovasi dan teknologi.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="hero-banner image aem-GridColumn aem-GridColumn--default--3">
        <div data-cmp-lazythreshold="0" data-cmp-src="/us/en-us/about-us/_jcr_content/root/container/container/hero_banner.coreimg{.width}.jpeg/1642669313140/about-us-hero-1260x560-desktop.jpeg" data-asset="/content/dam/sites/usa/nfl/hero/About_Us_Hero_1260x560_Desktop.jpg" id="hero-banner-2768f8c551" 
        data-cmp-data-layer="{&quot;hero-banner-2768f8c551&quot;:{&quot;@type&quot;:&quot;mcdonalds/components/proxy/content/hero-banner&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;76b43485-915d-465c-84fe-844f1fea1568&quot;,&quot;repo:modifyDate&quot;:&quot;2022-01-20T09:01:53Z&quot;,&quot;@type&quot;:&quot;image/jpeg&quot;,&quot;repo:path&quot;:&quot;/content/dam/sites/usa/nfl/hero/About_Us_Hero_1260x560_Desktop.jpg&quot;,&quot;xdm:smartTags&quot;:{&quot;sky&quot;:0.550787091255188,&quot;glass&quot;:0.5274232625961304,&quot;medical&quot;:0.5217214822769165,&quot;business&quot;:0.5446400046348572,&quot;city&quot;:0.6061930656433105,&quot;old&quot;:0.5060252547264099,&quot;sign&quot;:0.6076465845108032,&quot;metal&quot;:0.5156711339950562,&quot;industry&quot;:0.5156245827674866,&quot;house&quot;:0.5141656994819641,
            &quot;building&quot;:0.648368239402771,&quot;airport&quot;:0.5377269983291626,&quot;industrial&quot;:0.5459230542182922,&quot;blue&quot;:0.6104300022125244,&quot;modern&quot;:0.5423399806022644,&quot;urban&quot;:0.514103353023529,&quot;white&quot;:0.5013217926025391,&quot;construction&quot;:0.5733285546302795,&quot;black and white&quot;:0.503362774848938,&quot;travel&quot;:0.5688409209251404,&quot;architecture&quot;:0.6590269804000854}}}}" class="cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                        <picture>
                            <!-- Mobile -->
                            <source srcset="https://s7d1.scene7.com/is/image/mcdonalds/About_Us_Hero_1260x560_Desktop:hero-mobile?resmode=sharp2" media="(max-width: 1023px)">
                            <!-- large screen -->
                            <source srcset="https://s7d1.scene7.com/is/image/mcdonalds/About_Us_Hero_1260x560_Desktop:hero-desktop?resmode=sharp2">
                            <!-- Default to load - desktop (reason IE 11 sdoesn't support picture tag)--> 
                            <img src="https://s7d1.scene7.com/is/image/mcdonalds/About_Us_Hero_1260x560_Desktop:hero-desktop?resmode=sharp2" class="cmp-image__image" itemprop="contentUrl" data-cmp-hook-image="image" alt="">
                        </picture>
        </div>
    </div>

    <!-- Menu -->
    <section id="menu" class="bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1 class="menu-title" data-aos="fade-up">We Offers You</h1>
                    <p data-aos="fade-up" data-aos-delay="300">Food and Beverages!</p>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-breakfast-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-breakfast" type="button" role="tab" aria-controls="pills-breakfast"
                        aria-selected="true">Foods</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-lunch-tab" data-bs-toggle="pill" data-bs-target="#pills-lunch"
                        type="button" role="tab" aria-controls="pills-lunch" aria-selected="true">Beverages</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel"
                    aria-labelledby="pills-breakfast-tab" tabindex="0" data-aos="fade-up" data-aos-delay="600">
                    <div class="row gy-4">

                        <div class="col-lg-3 col-sm-6" >
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="./assets/images/DC_202109_14866_SmokyBLTDoubleQuarterPounderwithCheese_832x472_product-header-desktop.jpeg" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Smoky BLT Double Quarter Pounder</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Food!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="./assets/images/DC_201907_0005_BigMac_832x472_product-header-desktop.jpeg" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Big Mac</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Food!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="./assets/images/DC_202103_6975_HamburgerHappyMeal_AppleSlices_WhiteMilkJug_Left_832x472_product-header-desktop.jpeg" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Hamburger Happy Meal</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Food!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="./assets/images/DC_202109_1557_CinnamonRoll_832x472_product-header-desktop.jpeg" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Cinnamon Roll</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Order Food!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab"
                    tabindex="0">
                    <div class="row gy-4">
                          <div class="col-lg-3 col-sm-6">
                              <div class="menu-item shadow-on-hover rounded-4">
                                  <img src="./assets/images/DC_202112_0652_MediumDietCoke_Glass_2_832x472_product-header-desktop.jpeg" alt="">
                                  <div class="menu-item-content p-4">
                                      <h5 class="mt-1 mb-4"><a href="#">Diet Coke</a></h5>
                                      <a href="#" class="btn-menu btn-menu-brand">Get Drinks!</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-sm-6">
                              <div class="menu-item shadow-on-hover rounded-4">
                                  <img src="./assets/images/DC_202002_0721_MediumSprite_Glass_832x472_product-header-desktop.jpeg" alt="">
                                  <div class="menu-item-content p-4">
                                      <h5 class="mt-1 mb-4"><a href="#">Sprite</a></h5>
                                      <a href="#" class="btn-menu btn-menu-brand">Get Drinks!</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-sm-6">
                            <div class="menu-item shadow-on-hover rounded-4">
                                <img src="./assets/images/DC_201906_1318_MediumAmericano_Glass_A1_HL_832x472_product-header-desktop.jpeg" alt="">
                                <div class="menu-item-content p-4">
                                    <h5 class="mt-1 mb-4"><a href="#">Americano</a></h5>
                                    <a href="#" class="btn-menu btn-menu-brand">Get Drinks!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="menu-item shadow-on-hover rounded-4">
                              <img src="./assets/images/DC_201906_2804_MediumCaramelMacchiato_Glass_A1_HL_832x472_product-header-desktop.jpeg" alt="">
                              <div class="menu-item-content p-4">
                                  <h5 class="mt-1 mb-4"><a href="#">Caramel Macchiato</a></h5>
                                  <a href="#" class="btn-menu btn-menu-brand">Get Drinks!</a>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- Contacts -->
    <section id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1 class="contacts-title" data-aos="fade-up">Let's connected with us </h1>
                    <p data-aos="fade-up" data-aos-delay="300">We will send you the latest offers and information about Taylor Swift.</p>
                </div>
            </div>
            <form action="#" class="row justify-content-center" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="form-group text-center col-md-12">
                            <a href="#" class="btn btn-brand">Send Message</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-cover">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h4 class="text-center" data-aos="fade-up">Find McDonald's on</h4>
                        <div class="social-links">
                            <a href="#link" data-aos="fade-up" data-aos-delay="300"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="#link" data-aos="fade-up" data-aos-delay="600"><i class="ri-instagram-fill"></i></a>
                            <a href="#link" data-aos="fade-up" data-aos-delay="800"><i class="ri-youtube-fill"></i></a>
                            <a href="#link" data-aos="fade-up" data-aos-delay="1000"><i class="ri-twitter-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyrights all rights reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Designed By Tessa Agitha</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>