<?php require_once 'includes/templates/header.php'; ?>


<!-- About Us - START -->

<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">About Us</h1>
<div class="container mt-5 m-bottom text-center">
	<div class="row justify-content-around">
	
		<div class="col-sm-4 h-100 w-75 mb-5 image-frame shadow">
			<!-- Here You Will Set About US Image -->
			<img class="fit-width im-about" src="layouts/images/tree8"/>
		</div>
		
		<div class="col-sm-6 mr-5 ml-5">
			<blockquote class="blockquote mb-0 text-center">
				<!-- Here You Will Set About US Paragraph -->
				<p class="p-space">
				<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b>
				</p>
			</blockquote>
		</div>
	
	</div>
</div>
<!-- About Us - END -->
 
<!-- Our Worker - START -->

<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Our Developers</h1>
<div class="container mt-5 pb-5 text-center">
<div class="flex-container">

	<div class="worker col-sm-5 pb-5">
		<!---------- IMAGE MUST BE 150px * 150px ---------->
		<img class="shadow" src="layouts/images/mariam"/>
		<div class="pt-3">
			<p class="p-space"><b class="letter-space">Sarah Zaki</b></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
	<div class="worker col-sm-5 pb-5">
		<!---------- IMAGE MUST BE 150px * 150px ---------->
		<img class="shadow" src="layouts/images/ahmed.png"/>
		<div class="pt-3">
			<p class="p-space"><b class="letter-space">Ahmed Nabil</b></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	</div>
	
</div>
</div>
<!-- Our Worker - END -->

  

<?php /*require_once('includes/cart.php');*/ ?>

<?php require_once('includes/templates/menubar.php'); ?>

<?php require_once('includes/templates/footer.php'); ?>