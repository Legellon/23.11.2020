<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-10 d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="index.php">Presento<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header"><?php echo $terms['menuHome'] ?></a></li>
            <li><a href="#about"><?php echo $terms['menuAbout'] ?></a></li>
            <li><a href="#services"><?php echo $terms['menuServices'] ?></a></li>
            <li><a href="#portfolio"><?php echo $terms['menuPortfolio'] ?></a></li>
            <li><a href="#team"><?php echo $terms['menuTeam'] ?></a></li>
            <li><a href="blog.html"><?php echo $terms['menuBlog'] ?></a></li>
            <li><a href="#contact"><?php echo $terms['menuContact'] ?></a></li>
          </ul>
        </nav><!-- .nav-menu -->

        <a href="#about" class="get-started-btn scrollto"><?php echo $terms['menuButtGetStarted'] ?></a>

        <ul class="navbar-nav ml-auto">
          <?php
          $langTable = mysqli_query($link, "SELECT DISTINCT lang FROM terms");
          while($oneLang=mysqli_fetch_assoc($langTable)){
            echo '<li class="nav-item">
            <a class="nav-link" href="?ln='.$oneLang['lang'].'">'.$oneLang['lang'].'</a>
            </li>';
          }
          ?>
        </ul>
      </div>
    </div>

  </div>
</header><!-- End Header -->
