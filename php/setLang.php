<?php
  session_start();

  if(isset($_GET['lang'])) {
    if(($_GET['lang'] == "en") || ($_GET['lang'] == "jp") || ($_GET['lang'] == "cnt") || ($_GET['lang'] == "cns")) {
      $_SESSION['lang'] = $_GET['lang'];
    } else {
      $_SESSION['lang'] = "en";
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);  // Redirect to previous page
  } else {
    $_SESSION['lang'] = "en";
    header('location: /');                          // Otherwise, redirect to top page (only applicable when user attempts to enter forcefully)
  }
  exit();
?>
