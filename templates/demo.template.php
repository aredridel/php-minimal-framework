<form action='handle_demo.php' method='post'>
<p><label>Field 1 <input name='field1' placeholder='Stuff here' value='<?php echo htmlentities(@$_POST['field1']); ?>'></label></p>
<p><label>Stuff Box <input name='stuff' placeholder='Stuff here' value='<?php echo htmlentities(@$_POST['stuff']) ?>'></label> Enter "Stuff" in the box.</p>
<?php if($errors['stuff']): ?>
	<p class='error'><?php echo $errors['stuff']; ?></p>
<?php endif; ?>
<input type='submit'>
</form>
