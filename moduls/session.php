<?php
session_start();
if(isset($_POST['itemPlus'])) {
  $_SESSION['nechto'][$_POST['itemPlus']]['count']++;
}
if(isset($_POST['itemMinus'])) {
  if($_SESSION['nechto'][$_POST['itemMinus']]['count'] > 0) {
    $_SESSION['nechto'][$_POST['itemMinus']]['count']--;
  }
  if($_SESSION['nechto'][$_POST['itemMinus']]['count'] == 0) {
    unset($_SESSION['nechto'][$_POST['itemMinus']]);
  }
}

if(isset($_POST['itemDelete'])) {
  unset($_SESSION['nechto'][$_POST['itemDelete']]);
}

if(isset($_POST['sessionKaput'])){
  if($_POST['sessionKaput']=='ok') {
    unset($_SESSION['nechto']);
  }
}
if(!isset($_SESSION['nechto'])) {
  $_SESSION['nechto']=array();
}
if(isset($_POST['chtoto'])) {
  if(!empty($_POST['chtoto'])) {
    //$_SESSION['nechto']=$_POST['chtoto'];
    $nameIsInSession = false;
    $nextKey = 0;
    foreach ($_SESSION['nechto'] as $key => $info) {
      if(isset($info['name'])) {
        if($info['name'] == $_POST['chtoto']) {
          $_SESSION['nechto'][$key]['count']++;
          $nameIsInSession = true;
        }
      }
      $nextKey = $key + 1;
    }
    if($nameIsInSession == false) {
      $tempArr = array();
      $tempArr['name'] = $_POST['chtoto'];
      $tempArr['count'] = 1;
      $_SESSION['nechto'][$nextKey] = $tempArr;
    }
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
  <form action="" method="post" />
  <input type="hidden" name="sessionKaput" value="ok" />
  <input type="submit" value="clear Session" style="background-color: red; ">
</form>
<table border="1px">
  <tr>
    <td>#</td><td>Name</td><td>Count</td><td>Action</td>
  </tr>
  <?php
  if(isset($_SESSION['nechto'])) {
    if (count($_SESSION['nechto']) > 0) {
      $i = 1;
      foreach ($_SESSION['nechto'] as $kei => $value) {
        $name = $value['name'];
        $count = $value['count'];
        $sqlRes = mysql_fetch_assoc(mysqli_query("SELECT price FROM products WHERE code='$name'"));
        echo "<tr><td>$i</td><td>$name</td><td>$count</td><td>
        <form method='post' action='' style='display:inline-block;'>
        <input type='hidden' value='$kei' name='itemMinus' />
        <input type='submit' value='-' />
        </form>
        <form method='post' action='' style='display:inline-block;'>
        <input type='hidden' value='$kei' name='itemPlus' />
        <input type='submit' value='+' />
        </form>
        <form method='post' action='' style='display:inline-block;'>
        <input type='image' src='images/1.webp' style='height:20px; padding:15px 0 0 0;'/>
        <input type='hidden' value='$kei' name='itemDelete' /></form>
        </td></tr>";
        $i++;
      }
    }
  }
  ?>
</table>
</body>
</html>
