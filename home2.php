<?php require_once 'includes/templates/header.php'; ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	function changeImage(element){
		var id = $(element).attr("id");
		alert(id);
		// var id = document.getElementById('');
	}
</script>

<!-- Best Offers - START -------------->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Best Offers</h1>
<div class="flex-container best-offers container pt-5">
		<div class="flex-item picture shadow" >
			<a href="#">
			<img class="height-img" src="layouts/images/7" alt="Card image cap" />
			<div class="b-overlay"></div>
			<div id="drag1" class="b-price-overlay">Only 10$</div>
			</a>
	    </div>
		<div class="flex-item picture shadow"><a href="#">
			<img    class="height-img" src="layouts/images/2" alt="Card image cap" />
			<div class="b-overlay"></div>
			<span id="drag2" class="b-price-overlay">Only 10$</span>
			</a>
	    </div>
		<div class="flex-item picture shadow"><a href="#">
			<img  id="drag3"  class="height-img" src="layouts/images/8" alt="Card image cap" />
			<div class="b-overlay"></div>
			<span class="b-price-overlay">Only 10$</span>
			</a>
	    </div>
</div>

<!--<div id="div1" style="width: 100%; height: 200px;background-color: gray;">
</div>-->
<!-- Best Offers - END -------------->
<script>
$( document ).ready(function() {
	makeDraggable();
	function makeDraggable() {
		$( "#drag1" ).draggable({ 
		  revert: "invalid"
		}); 
		$( "#drag1" ).draggable({ 
		  revert: "invalid"
		}); 
		$( "#drag1" ).draggable({ 
		  revert: "invalid"
		}); 
	};
	
});
</script>


<!-- Parallax Scrolling Effect Start ----------------->
<div class="parallax"></div>
<!-- Parallax Scrolling Effect End   ----------------->

<!-- Recommendation - START -->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Recommendation</h1>
<div class="container mt-5 pb-5 text-center">
	
	<blockquote class="blockquote mb-0 card-body text-center">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
           <cite title="Source Title">Someone famous</cite>
        </small>
      </footer>
    </blockquote>
</div>
<!-- Recommendation - END -->


<!-- Our Customers - START -->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Our Customers</h1>
<div class="container mt-5 pb-5 text-center">
	
	<div class="text-center">
	<ul class="nav text-center pt-3 d-inline-flex gray-Color">
	 <!-- <li class="nav-item p-4">
		<a class="nav-link display-4" href="#"><i class="fab fa-apple" style="color: gray;"></i></a>
		<p>  Apple </p>
	  </li> -->
	  <li class="nav-item p-4">
		<a class="nav-link display-4" href="#"><i class="fab fa-adobe" style='color: red;'></i></a>
		<p>  Adobe </p>
	  </li>
	  <li class="nav-item p-4">
		<a class="nav-link  display-4" href="#"><i class="fab fa-500px" style='color: green;'></></i></a>
		<p>  500 </p>
	  </li>
	  <li class="nav-item p-4">
		<a class="nav-link  display-4" href="#"><i class="fab fa-adn"></i></a>
		<p>  ADN </p>
	  </li>
	  <li class="nav-item p-4">
		<a class="nav-link  display-4" href="#"><i class="fas fa-atom" style="color: gray;"></i></a>
		<p>  Atom </p>
	  </li>
	  <li class="nav-item p-4">
		<a class="nav-link  display-4" href="#"><i class="fas fa-award" style="color: yellow;"></i></a>
		<p>  Award </p>
	  </li>
	  <li class="nav-item p-4">
		<a class="nav-link  display-4" href="#"><i class="fab fa-autoprefixer" style="color: #9ae334;"></i></a>
		<p>  Autoprefixer </p>
	  </li>
	</ul>
	</div>
</div>
<!-- Our Customers - END -->


<!-- Our Products - START -----------  -->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center"> Products </h1>
<div class="flex-container container mt-5 pb-5 products text-center">

  <a href="#">
	<div class="flex-item shadow">
    <img id="drag4" class="card-img-top" src="layouts/images/1" alt="Card image" draggable="true" ondragstart="drag(event)">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div>
	</a>
  <a href="#"><div class="flex-item shadow">
    <img id="drag5" class="card-img" src="layouts/images/2" alt="Card image" draggable="true" ondragstart="drag(event)">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
  <a href="#"><div class="flex-item shadow">
    <img class="card-img-top" src="layouts/images/3" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
  <a href="#"><div class="flex-item shadow">
    <img class="card-img" src="layouts/images/4" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
 <a href="#">  <div class="flex-item shadow">
    <img class="card-img" src="layouts/images/5" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
 <a href="#">  <div class="flex-item shadow">
    <img class="card-img" src="layouts/images/6" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
  
 <a href="#"> 
 <div class="flex-item shadow">
    <img class="card-img-top" src="layouts/images/7" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
  <a href="#"><div class="flex-item shadow">
    <img class="card-img" src="layouts/images/8" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
 <a href="#"> <div class="flex-item shadow">
    <img class="card-img-top" src="layouts/images/9" alt="Card image">
	<div class="s-overlay"><span class='i-name'><b>Item name</b></span><br/><span class='i-price'>Price 40$</span><br/><span class='i-stock'>Only 3 left in stock</span></div>
  </div></a>
</div> 
<!-- Products Part - END ------------->


<!---------------- Card Slider ----------------------->
<!--<h1 id="d-s-header">Main Slider</h1>-->

<!--<h1 class="allHeaders border-bottom pb-4 mb-5 text-center"> Card Slider </h1>
<div class="slider">
	<span id="s-left-arrow"> 
		<i class="fas fa-angle-left"></i> 
	</span>
	<div id="d-b-slider" class="mt-5 mb-5">
	<div id="d-slider">
		<div class="d-card">
			<img src="layouts/images/1.png" class="d-slider-image"/> 
		</div>
		<div class="d-card">
			<img src="layouts/images/2.png" class="d-slider-image"/> 
		</div>	
		<div class="d-card">
			<img src="layouts/images/3.png" class="d-slider-image"/> 
		</div>
		<div class="d-card">
			<img src="layouts/images/4.png" class="d-slider-image"/> 
		</div>
		<div class="d-card">
			<img src="layouts/images/5.png" class="d-slider-image"/> 
		</div>
		
		<div class="d-card">
			<img src="layouts/images/6.png" class="d-slider-image"/> 
		</div>
	</div> 
	</div>
	<span id="s-right-arrow"> 
			<i class="fas fa-angle-right"></i> 
	</span>
	</div>
	<script>
	var Right = 0;
	$("#s-right-arrow").click(function() {
		Right = 100 + Right;
		if(Right >= 900)
			Right = 900;
		$("#d-slider").css("right",Right);
		$("#d-slider").css("transition","right 0.3s linear 0s");
	});
	$("#s-left-arrow").click(function() {
		Right = Right - 100 ;
		if(Right <= 0)
			Right = 0;
		$("#d-slider").css("right",Right);
		$("#d-slider").css("transition","right 0.3s linear 0s");
	});
	</script>-->
	
<!---------------- Card Slider ------- End --------->
استعن بالله ولا تعجز


<?php // require_once('includes/cart.php'); ?>

<?php require_once('includes/templates/menubar.php'); ?>

<?php require_once('includes/templates/footer.php'); ?>