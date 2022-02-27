<!-- Header Include -->
<?php require_once 'includes/templates/header.php'; ?>


<!-- Map Style - START -->
<style>
<span class="metadata-marker" style="display: none;" data-region_tag="css"></span>      
	#map {
        width: 100%;
        height: 400px;
        background-color: grey;
     }
</style>
<!-- Map Style - END -->

<!-- Google Map - START -->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Our Location</h1>
<div class="container mt-5 pb-5 text-center">
    <!--The div element for the map -->
	
    <div id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4677.982387603552!2d31.4566735615517!3d30.028731913035124!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145822d3598ade7b%3A0x4c2aa11b0b3f4c38!2sPetrosport+Sporting+Club!5e0!3m2!1sen!2seg!4v1551204357459" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div> 
</div>
<!-- Google Map - END -->

<!-- Address - START -->
<div class="container">
	<div class="half">
		<p class="p-space"><b class="letter-space">Address</b></br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<div class="p-space">
			 <address>
			<strong>Address, Inc.</strong><br>
				400 Degla St, Yasmeen 6<br>
				New Cairo, Egypt<br>
			<abbr title="Phone">P:</abbr> (123) 456-7890
			</address>

			<address>
			<strong>Full Name</strong><br>
			<a href="mailto:#">first.last@example.com</a>
			 </address>
		</div>
	</div>
</div>
<!-- Address - END -->
 
 
<!-- Cart Include -->
<?php // require_once('includes/cart.php'); ?>

<!-- Menubar Include -->
<?php require_once('includes/templates/menubar.php'); ?>

<!-- Footer Include -->
<?php require_once('includes/templates/footer.php'); ?>