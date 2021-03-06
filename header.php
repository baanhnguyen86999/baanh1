<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <!-- SELECT2 -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

  <!-- GG FORNT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


  <!-- Slick -->
  <link rel="stylesheet" href="./assets/css/slick.css">
  <link rel="stylesheet" href="./assets/css/slick-theme.css">


  <link rel="stylesheet" href="./assets/css/style.css">
  <title><?php echo $title; ?></title>


</head>

<body>
  <!-- HEADER-PC -->
  <!--???? ????ng nh???p-->
  <div class="header container-fluid d-none d-lg-block ">
    <div class="row">
      <ul class="header__menu list-unstyled d-flex mb-0 w-100 justify-content-end">
        <li class="header__item"><a class="header__item--link" href="./login.php"><i class="fas fa-clipboard-list header__item-icon"></i>Tra c???u ????n h??ng</a></li>
        <li class="header__item"><a class="header__item--link" href="./index.php"><i class="fas fa-map-marker-alt header__item-icon"></i> T??m c???a h??ng</a></li>
        <!-- ???? ????ng Nh???p -->
        <?php if ($currentUser) : ?>
          <li class="header__item"><a class="header__item--link" href="./wishList.php"><i class="fas fa-heart header__item-icon"></i>Y??u th??ch</a></li>
          <li class="header__item"><a class="header__item--link" href="./yourCart.php"><i class="fas fa-shopping-cart header__item-icon"></i>
              Gi??? h??ng (<span class="countProduct"><?php echo getCountCartDetail($id_cart); ?></span>)</a></li>
          <li class="header__item"><a class="header__item--link" href="./profile.php"><i class="fas fa-user header__item-icon"></i><?php echo $currentUser['full_name']; ?></a></li>
          <li class="header__item"><a class="header__item--link" href="./logout.php"><i class="fas fa-user header__item-icon"></i>????ng xu???t</a></li>

          <!-- Ch??a ????ng Nh???p -->
        <?php else : ?>
          <li class="header__item"><a class="header__item--link" href="./login.php"><i class="fas fa-user header__item-icon"></i>????ng nh???p</a></li>
        <?php endif; ?>
      </ul>
    </div>



    <!-- NAVBAR -->
    <div class="row">
      <nav class=" navbar navbar-expand-lg navbar-light container">
        <!-- LOGO -->
        <a class="navbar-brand" href="index.php"><img src="./assets/img/Logo.jpg"></a>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav m-auto">
            <li class=" nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./productList.php" id="navbarDropdown">S???N PH???M <span class="caret"></span></a>
              <!-- Sub menu 1 -->
              <ul class="dropdown-menu">
                <li class="dropdown-item dropdown">
                  <a href="./productList.php?gender=1">R?????u m???nh <i class="fas fa-chevron-right dropdown-icon"></i></a>
                  <!-- Sub menu level 2 -->
                  
                </li>
                <li class="dropdown-item dropdown">
                  <a href="./productList.php?gender=2">R?????u vang <i class="fas fa-chevron-right dropdown-icon"></i></a>
                  <!-- Sub menu level 2 -->
                  
                </li>
                <li class="dropdown-item"><a href="./productList.php">WINE SALE</a></li>
                <li class="dropdown-item ">
                  <!-- <a href="./productList.php">TH???I TRANG & PH??? KI???N</a> -->
                </li>
              </ul>
            </li>

            <li class="line"></li>
            <li class=" nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./productList.php?gender=1" id="navbarDropdown">R?????u cho nam <span class="caret"></span></a>
              
            </li>

            <li class="line"></li>
            <li class=" nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./productList.php?gender=2" id="navbarDropdown">R?????u cho n???<span class="caret"></span></a>
              
            </li>

            <li class="line"></li>
            <li class=" nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="./productList.php" id="navbarDropdown">SALE OFF<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-item "><a href="./productList.php">10%</a></li>
                <li class="dropdown-item"><a href="./productList.php">25%</a></li>
                <li class="dropdown-item"><a href="./productList.php">40%</a></li>
                <li class="dropdown-item "><a href="./productList.php">50%</a></li>
              </ul>
            </li>

            <li class="line"></li>  
            <!-- <li><a class="nav-link" href="#"><img src="./assets/img/logo.jpg"></a></li> -->
          </ul>
          <!-- END MENU -->

          <!-- SEARCH BOX -->
          <form class="col-lg-3 col-12 search-box form-inline my-2 my-lg-0" action="productSearch.php" method="get">
            <input class="search-box__input form-control" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="search-box__btn" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <!-- END MENU -->



      </nav>
    </div>
    <!-- END NAVBAR -->

    <!-- HOT NEWS SLIDE -->
    <div class="row">
      <div class="hot-news-cont">
        <div class="hot-news-slide">
          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="3000">
                <div class="cont-item d-block w-100 text-center"><a href="./productList.php">Flash Sale c??c lo???i r?????u !</a></div>
              </div>
              <div class="carousel-item" data-interval="3000">
                <div class="cont-item d-block w-100  text-center"><a href="./productList.php">R?????u b??? chua ho???c m??i v??? kh?? u???ng c?? th??? ?????i l???i ????? ki???m th???</a></div>
              </div>
              <div class="carousel-item" data-interval="3000">
                <div class="cont-item d-block w-100  text-center"><a href="./productList.php">BUY MORE PAY LESS</a></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="text-black carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="text-black carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END HOT NEWS SLIDE -->

  </div>
  <!-- END HEADER-PC -->

  <!-- HEADER MOBILE -->
  <div class="header-mobile container-fluid d-block d-lg-none ">
    <div class="row">
      <div class="navbar center w-100">
        <div class="navbar-header d-flex w-100">
          <div class="col-xs-4 col-sm-4 navbar-brand"><a href="index.php"><img src="./assets/img/Logo_Ananas_Header.svg"></a>
          </div>
          <div class="col-6 col-sm-6 navbar-menu">
            <a data-toggle="collapse" data-target=".group-search"><img src="./assets/img/mb_search.png"></a>
            <a href="./index.php"><img src="./assets/img/mb_location.png"></a>
            <a href="./yourCart.php"><img src="./assets/img/mb_cart.png"><span class="navbar-menu-count">(<span class="countProduct"><?php echo getCountCartDetail($id_cart); ?></span>)</span></a>
          </div>

          <!-- Button navbar -->
          <div class="col-xs-1 col-sm-2">

            <button id="btn--menu-mb" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent--moblie" aria-controls="navbarContent--moblie" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon text-white"></span>
            </button>
          </div>
          <!-- Menu Mobile -->
          <div class=" mobile_menu collapse navbar-collapse" id="navbarContent--moblie">
            <ul class="nav navbar-nav m-auto">
              <li class="nav-item ">
                <a href="./productList.php" class="nav-link">S???N PH???M</a>
              </li>
              <li class="nav-item ">
                <a href="./productList.php?gender=1" class="nav-link">NAM</a>
              </li>
              <li class="nav-item ">
                <a href="./productList.php?gender=2" class="nav-link">N???</a>
              </li>
              <li class="nav-item ">
                <a href="./productList.php" class="nav-link">SALE OFF</a>
              </li>
              <?php if ($currentUser) : ?>
                <li class="nav-item ">
                  <a href="./wishList.php" class="nav-link">Y??U TH??CH</a>
                </li>
                <li class="nav-item ">
                  <a href="./logout.php" class="nav-link">????NG XU???T</a>
                </li>
              <?php else : ?>
                <li class="nav-item ">
                  <a href="./login.php" class="nav-link">????NG NH???P</a>
                </li>
              <?php endif; ?>
              </li>
            </ul>
            <!-- END MENU -->
          </div>

        </div>
      </div>


      <div class="collapse navbar-collapse group-search">
        <form id="formSearchAll" action="./productSearch.php" method="get">
          <div class="input-group">
            <input type="text" name="search" value="" class="form-control" placeholder="T??m ki???m">
            <span class="input-group-btn">
              <button class="btn btn-search btn-search-all" type="btn"><img src="./assets/img/arrow_right.png"></button>
            </span>
          </div>
        </form>
        <div class="black-rect-bg"></div>
      </div>


      <div class="collapse navbar-collapse">

      </div>
    </div>

    <!-- HOT NEWS SLIDE -->
    <div class="row">
      <div class="hot-news-cont">
        <div class="hot-news-slide">
          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="3000">
                <div class="cont-item d-block w-100 text-center"><a href="https://ananas.vn/faqs/">FREE SHIPPING V???I HO?? ????N T??? 800K !</a></div>
              </div>
              <div class="carousel-item" data-interval="3000">
                <div class="cont-item d-block w-100  text-center"><a href="https://ananas.vn/policy/">H??NG 2 TU???N NH???N ?????I - GI??Y N???A N??M B???O H??NH</a></div>
              </div>
              <div class="carousel-item" data-interval="3000">
                <div class="cont-item d-block w-100  text-center"><a href="https://ananas.vn/faq">BUY MORE PAY LESS - ??P D???NG KHI MUA PH??? KI???N</a></div>
              </div>
            </div>
            <div class="carousel-item" data-interval="3000">
              <div class="cont-item d-block w-100  text-center"><a href="https://ananas.vn/faq">BUY MORE PAY LESS - ??P D???NG
                  KHI MUA PH??? KI???N</a></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="text-black carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="text-black carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="text-black carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="text-black carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- END HEADER MOBILE -->