<?php
require('framework.php');

$errors = array();
if(@$_POST['stuff'] != 'Stuff') $errors['stuff'] = "You must enter 'Stuff' in the stuff box";

if(count($errors) > 0) {
	render('demo');
} else {
	render('demoSuccess');
}
