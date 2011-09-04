<?php // This is action code

require('user.class.php'); // Load business logic layer

$errors = array();

if(!isset($_POST['username']) or !trim($_POST['username'])) {
   $errors['username'] = "You must enter a username";
}

if(!isset($_POST['password'] or !trim($_POST['password'])) {
   $errors['password'] = "you must enter a password";
}

if(@$_POST['password'] != @$_POST['password2'])) {
   $errors['password'] = "Your passwords don't match";
}

if(count($errors) > 0) {
   include('registrationForm.template.php');
} else {
   // This is the link to business logic
   $user = new User($_POST['username'], $_POST['password']); 
   $user->save();
}