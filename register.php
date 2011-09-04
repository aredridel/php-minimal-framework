<?php // This is action code

  if($_SESSION['username']) {
    header("Location: loggedin.php");
    exit();
  } else {
    $errors = array();
    include("registrationForm.template.php");
  }