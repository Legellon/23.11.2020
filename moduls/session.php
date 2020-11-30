<?php
session_start();

if(isset($_POST['chtoto'])) {
  if(!empty($_POST['chtoto'])) {
    $_SESSION['nechto']=$_POST['chtoto'];
  }
}

if(isset($_SESSION['nechto'])) {
  if(!empty($_SESSION['nechto'])) {
    print_r($_SESSION['nechto']);
  }
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="chtoto" />
      <input type="submit" value="send" />
    </form>
  </body>
</html>
