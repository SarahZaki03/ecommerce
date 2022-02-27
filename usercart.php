<?php require_once 'includes/templates/header.php'; ?>
 
<h1 class="allHeaders border-bottom pb-4  mb-5  text-center">My Cart</h1>
<div class="container mt-5 m-bottom">
	
	<div class="row justify-content-around">
		<div class="col-3 image-frame h-100"><img class="fit-width" src="layouts/images/tree8"/></div>
		
		<div class="col-6 i-description ">
					<h3>Item Name Here</h3> 
					<label>Price: </label>20$<br/> 
					<label>Qty: </label>
					<select>
					<option value="1">1</option>
					<option value="2">2</option>
					</select>
				<br/>
				
				<label>Color: </label><select><option value="1">red</option><option value="2">blue</option></select><br/>
				<label>Size: </label><select><option value="1">small</option><option value="2">large</option></select> 
			<a href="#" class="delete"><i class="fas fa-times"></i></a>
		</div>
	</div>
	<div class="row justify-content-around mt-5">
		<div class="col-3 image-frame h-100"><img class="fit-width" src="layouts/images/tree8"/></div>
		
		<div class="col-6 i-description ">
					<h3>Item Name Here</h3> 
					<label>Price: </label>20$<br/> 
					<label>Qty: </label>
					<select>
					<option value="1">1</option>
					<option value="2">2</option>
					</select>
				<br/>
				
				<label>Color: </label><select><option value="1">red</option><option value="2">blue</option></select><br/>
				<label>Size: </label><select><option value="1">small</option><option value="2">large</option></select> 
			<a href="#" class="delete"><i class="fas fa-times"></i></a>
		</div>
	</div>
</div> 

<?php // require_once('includes/cart.php'); ?>

<?php require_once('includes/templates/menubar.php'); ?>

<?php require_once('includes/templates/footer.php'); ?>