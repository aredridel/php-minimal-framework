<?php
require('framework.php'); // Load the framework.

$errors = array(); // Start a list of errors.

// This is a rediculous but simple validation. Write your own for your 
// own forms!
if(@$_POST['stuff'] != 'Stuff') 
  $errors['stuff'] = "You must enter 'Stuff' in the stuff box";

if(count($errors) > 0) {
	// If there's errors, show the form again
	render('demo');
} else {
	// Otherwise show the success page.
	render('demoSuccess');
}
