<?php
require_once "moduls/connect.php";

if(empty($_GET['ln'])) {$pageLang='et';}
else {$pageLang=$_GET['ln'];}

$termsTable = mysqli_query($link, "SELECT * FROM terms WHERE lang='$pageLang'");
$terms=array();

while($oneTerm = mysqli_fetch_assoc($termsTable))
{
  $terms[$oneTerm['code']] = $oneTerm['termText'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Presento Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include "moduls/css.php"; ?>

</head>

<body>

  <?php
  include "moduls/header.php";
  include "moduls/hero.php";
  ?>

  <main id="main">

    <?php
    include "moduls/clients.php";
    include "moduls/about.php";
    include "moduls/counts.php";
    include "moduls/tabs.php";
    include "moduls/services.php";
    include "moduls/portfolio.php";
    include "moduls/testimonials.php";
    include "moduls/pricing.php";
    include "moduls/FAQ.php";
    include "moduls/teamsection.php";
    include "moduls/contactsection.php";
    ?>

  </main><!-- End #main -->

  <?php include "moduls/footer.php"; ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include "moduls/script.php"; ?>

</body>

</html>
