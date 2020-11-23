<?php
require_once "connect.php";

if(empty($_GET['ln'])) {$pageLang='et';}
else {$pageLang=$_GET['ln'];}

$termsTable = mysqli_query($link, "SELECT * FROM terms WHERE lang='$pageLang'");
$terms=array();
while($oneTerm = mysqli_fetch_assoc($termsTable))
{
  $terms[$oneTerm['code']] = $oneTerm['termText'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>

  <div class="container">

    <div class="row">
      <nav class="col-12 navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><?php echo $terms['menuHome'] ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $terms['menuWorks'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $terms['menuService'] ?></a>
            </li>

          </ul>
          <ul class="navbar-nav ml-auto">
            <?php
            $langTable = mysqli_query($link, "SELECT DISTINCT lang FROM cards");
            while($oneLang=mysqli_fetch_assoc($langTable)){
              echo '<li class="nav-item">
              <a class="nav-link" href="?ln='.$oneLang['lang'].'">'.$oneLang['lang'].'</a>
              </li>';
            }
            ?>
          </ul>
        </div>
      </nav>
    </div>

    <div class="row">

      <?php



      $result = mysqli_query($link, "SELECT * FROM cards WHERE lang='$pageLang' ORDER BY list_order");
      while($stroka=mysqli_fetch_assoc($result)){
        echo '<div class="col-3">
        <div class="card">
        <img src="photos/'.$stroka['photo'].'" class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title">'.$stroka['title'].'</h5>
        <p class="card-text">'.$stroka['main_info'].'</p>
        <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
        </div>
        </div>
        </div>';
      }
      ?>

    </div>

  </div>

  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.min.js"></script>
</body>
</html>
