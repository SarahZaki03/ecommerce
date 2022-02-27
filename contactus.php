<?php require_once 'includes/templates/header.php'; ?>

<!-- Contact Us - START -->
<h1 class="allHeaders border-bottom pb-4 text-center mb-4">Contact Us</h1>
<div class='container fromTheHeader'> 
	<div class="row justify-content-around mt-5">
	<div class="col-12">
		<form method="">
		<table class='table table-borderless'  width='100%'>
		
		<tr class="pt-3">
			<td><label class='cLabel' for='subject'>Subject</label></td>
			<td><input type='text' placeholder='Subject' id='subject' class='form-control' name='subject'/></td>
			
		</tr>
		<tr class="pt-3">
			<td><label class='cLabel' for='email'>E-mail</label></td>
			<td><input type='email' placeholder='E-mail' class='form-control' id='email' name='email'/></td>
		</tr>
		<tr class="pt-3">
			<td><label class='cLabel' for='textArea'>Message</label></td>
			<td><textarea id='textArea' rows='5' cols='55' class='form-control' name='textmessage'> </textarea> </td>
		</tr> 
		<tr class="pt-3">
			<td colspan='2' style='text-align: center;'>
			<button type="submit" class='a-btns'>Send Message</button>
			</td>
		</tr>
		</table>
		</form> 
	</div>
	</div>
</div>
<!-- Contact Us - END -->

<?php /*require_once('includes/cart.php');*/ ?>

<?php require_once('includes/templates/menubar.php'); ?>

<?php require_once('includes/templates/footer.php'); ?>