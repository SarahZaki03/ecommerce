<?php require_once 'includes/templates/header.php'; ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- Best Offers - START -------------->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Best Offers</h1>
<div class="flex-container best-offers container">
		<div class="forloved">
		<div class="flex-item shadow" >
			<a href="#">
			<img class="height-img" src="layouts/images/7" alt="Card image cap" />
			<div class="b-overlay"></div>
			<div id="drag1" class="b-price-overlay">Only 10$</div>
			</a>
	    </div>
		</div>
		<div class="flex-item shadow"><a href="#">
			<img    class="height-img" src="layouts/images/2" alt="Card image cap" />
			<div class="b-overlay"></div>
			<span id="drag2" class="b-price-overlay">Only 10$</span>
			</a>
	    </div>
		<div class="flex-item shadow"><a href="#">
			<img  id="drag3"  class="height-img" src="layouts/images/8" alt="Card image cap" />
			<div class="b-overlay"></div>
			<span class="b-price-overlay">Only 10$</span>
			</a>
	    </div>
</div>
<!-- Best Offers - END -------------->


<!-- Collections - START -------------->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Our Collections</h1>
<div class="flex-container m-bottom container">
	<div class="collection-element"><a href="collection.php"> Dresses </a></div>
	<div class="collection-element"><a href="collection.php"> Shoes </a></div>
	<div class="collection-element"><a href="collection.php"> Children </a></div>
	<div class="collection-element"><a href="collection.php"> Gift </a></div>
	<div class="collection-element"><a href="collection.php"> Women </a></div>
	<div class="collection-element"><a href="collection.php"> Men </a></div>
</div>
<!-- Collections - END ----------------> 
 
 
<!-- Parallax Scrolling Effect Start ----------------->
<div class="parallax"></div>
<!-- Parallax Scrolling Effect End   ----------------->

<!-- Recommendation - START -->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center">Recommendation</h1>
<div class="container mt-5 m-bottom text-center">
	
	<blockquote class="blockquote mb-0 text-center">
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
<div class="container mt-5 m-bottom text-center">
	
	<div class="text-center">
	<ul class="nav text-center d-inline-flex gray-Color justify-content-center"> 
	  <li class="nav-item pr-4">
		<a class="nav-link display-4" href="#"><i class="fab fa-adobe" style='color: red;'></i></a>
		<p>  Adobe </p>
	  </li>
	  <li class="nav-item pr-4">
		<a class="nav-link  display-4" href="#"><i class="fab fa-500px" style='color: green;'></></i></a>
		<p>  500 </p>
	  </li>
	  <li class="nav-item pr-4">
		<a class="nav-link  display-4" href="#"><i class="fab fa-adn"></i></a>
		<p>  ADN </p>
	  </li>
	  <li class="nav-item pr-4">
		<a class="nav-link  display-4" href="#"><i class="fas fa-atom" style="color: gray;"></i></a>
		<p>  Atom </p>
	  </li>
	  <li class="nav-item pr-4">
		<a class="nav-link  display-4" href="#"><i class="fas fa-award" style="color: yellow;"></i></a>
		<p>  Award </p>
	  </li>
	  <li class="nav-item pr-4">
		<a class="nav-link  display-4" href="#"><i class="fab fa-autoprefixer" style="color: #9ae334;"></i></a>
		<p>  Autoprefixer </p>
	  </li>
	</ul>
	</div>
</div>
<!-- Our Customers - END -->


<!-- Our Products - START -----------  -->
<h1 class="allHeaders border-bottom pb-4 mb-5 text-center"> Products </h1>
<div class="flex-container container mt-5 m-bottom products text-center">

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

استعن بالله ولا تعجز




<?php require_once('includes/templates/menubar.php'); ?>
<?php require_once('includes/templates/footer.php'); ?>