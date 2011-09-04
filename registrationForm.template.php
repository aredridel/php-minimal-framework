<!-- This is a template -->
<form action='do_register.php' method='post'>
<input name='username' placeholder='username' value='{@$_POST['username']}'>
<?php if($errors['username']) { echo $errors['username']; } ?>
<input name='password' placeholder='******' type='password'>
<input name='password2' placeholder='******' type='password'>
<?php if($errors['password']) { echo $errors['password']; } ?>
<input type='submit' value='Register'>
</form>