<?php require_once 'includes/templates/header.php'; ?>

<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<h1 class="allHeaders border-bottom pb-4 mb-5 text-center"> Product </h1>
 
<div class="container sale mb-5 p-2 text-center text-danger">
	This item in sale
</div>
 
<div class="container">
 <!-- JQuery Part --> 
	
	<script>
	var Right = 0;  
	var width = 0;
	
	function setSliderWidthtoFitImages(element){ 
		var length = element.children.length;
		var i = 0;
		width = 0;
		for ( i = 0 ; i < length ; i++ ){
			width += element.children.item(i).clientWidth;
			width += 14; 	// for margin left and right
		} 
		var forSure = 100;
		// alert(width);
		
		$("#d-slider").css("width",width+forSure);
	}
	  
	function scrolltoLeft(){ 
		Right = 200 + Right;
		if(Right >= (width))
			Right = width-400;
		$("#d-slider").css("right", Right);
		$("#d-slider").css( "transition", "right 0.4s ease 0s");
	} 
	function scrolltoRight(){
		Right = Right - 200 ;
		if(Right <= 0)
			Right = 0;
		$("#d-slider").css( "right", Right);
		$("#d-slider").css( "transition", "right 0.4s ease 0s");
	}
	</script>
 
 <!----------- VueJs --------  Start -------->
 <div id="app">
	
	<product :premium="premium"  @add-to-cart="updateCart" class="pb-5 mb-5"></product>
	 
	
<!---------------- Card Slider For Other Images For the Same Product ----------------------->
	<div class="slider" onclick="setSliderWidthtoFitImages(document.getElementById('d-slider'))">
	<span id="s-left-arrow" onclick="scrolltoRight()"> 
		<i class="fas fa-angle-left"></i> 
	</span>
	<div id="d-b-slider" class="mt-5 mb-5">
		<div id="d-slider">
			<img src="layouts/images/1.png" class="d-slider-image"/> 
			<img src="layouts/images/5.png" class="d-slider-image"/> 
			<img src="layouts/images/4.png" class="d-slider-image"/> 
			<img src="layouts/images/5.png" class="d-slider-image"/> 
			<img src="layouts/images/2.png" class="d-slider-image"/> 
			<img src="layouts/images/3.png" class="d-slider-image"/> 
			<img src="layouts/images/4.png" class="d-slider-image"/> 
			<img src="layouts/images/5.png" class="d-slider-image"/> 	
			<img src="layouts/images/6.png" class="d-slider-image"/> 
		</div> 
	</div>
	<span id="s-right-arrow" onclick="scrolltoLeft()"> 
			<i class="fas fa-angle-right"></i> 
	</span>
	</div>
	
<!---------------- Card Slider ------- End --------->
	
	<!------ Size Block ----------------->
	<div class="container sizes">
		<div class="row justify-content-around">
			<div class="col-sm-3 s-size select-size">
				<form>
				<!--------------------------------------->
				<label class="radio-btn">
				<input type="radio" name="size" id="small" onclick="changeSize(this)"/><span class="checkmark"></span> </label><div>Small</div><br/>
				<!--------------------------------------->
				<label class="radio-btn">
				<input type="radio" name="size" id="medium" onclick="changeSize(this)"/><span class="checkmark"></span>  
				</label><div>Medium</div><br/>
				<!--------------------------------------->
				<label class="radio-btn">
				<input type="radio" name="size" id="large" onclick="changeSize(this)" checked/><span class="checkmark"></span> </label><div>Large</div><br/>
				<!--------------------------------------->
				<label class="radio-btn">
				<input type="radio" name="size" id="xlarge" onclick="changeSize(this)"/><span class="checkmark"></span> </label><div>X Large</div><br/>
				</form>
			</div>
			<div class="col-sm-2 s-size shape"> <img src="layouts/images/size.svg"/> </div>
			<div class="col-sm-2 s-size shape"><h4> Chest </h4>
				<ul>
					<li class="s-color s-small">33" - 35"</li>
					<li class="s-color s-medium">35" - 37"</li>
					<li class="s-color s-large">37" - 39<sup>1/2</sup>"</li>
					<li class="s-color s-xlarge">39<sup>1/2</sup>" - 42<sup>1/2</sup>"</li>
				</ul>
			</div>
			<div class="col-sm-2 s-size shape"><h4> Waist </h4> 
			    <ul>
					<li class="s-color s-small">26" - 28"</li>
					<li class="s-color s-medium">28" - 30"</li>
					<li class="s-color s-large">30" - 32<sup>1/2</sup>"</li>
					<li class="s-color s-xlarge">32<sup>1/2</sup>" - 35<sup>1/2</sup>"</li>
				</ul>
			</div>
			<div class="col-sm-2 s-size shape"><h4> Hips </h4>
				<ul>
					<li class="s-color s-small">36" - 38"</li>
					<li class="s-color s-medium">38" - 40"</li>
					<li class="s-color s-large">40" - 42"</li>
					<li class="s-color s-xlarge">42" - 45"</li>
				</ul>
			</div> 
		</div>
	</div>
	
	
	<!----- More Details ------------------------------------>
	<div class="mt-5">
		<ul class="a-lists">
			<li><div class="s-number">#</div><div class="s-details top-h"><h3 class="h-style">Details</h3></div></li>
			<li><div class="s-number">1</div><div class="s-details">You will find what you love.</div></li>
			<li><div class="s-number">2</div><div class="s-details">You will find smile.</div></li>
			<li><div class="s-number">3</div><div class="s-details">You will be happy.</div></li>
			<li><div class="s-number">4</div><div class="s-details">You will be beatiful.</div></li>
			<li><div class="s-number">5</div><div class="s-details">It will be a great gift.</div></li>
		</ul>
	</div>
	
	
	 
	<!---- Cart --------------- Start ----> 
	<svg   width="200" height="130" viewBox="0 0 100 100" class="fixed-cart">
	  <g transform="translate(0,-952.36216)">
	  
	  <path style="color:#000000;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;fill:#ffcc00;fill-opacity:1;fill-rule:evenodd;stroke:#ffffff;stroke-width:1.99999988;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate"
       d="m 98,970 -93,0 21,32 -17,32 90,0 z"
       id="path4278" />
		   
	
	  </g>
	  <text x="30" y="55"  style="fill:#828282;font-size:1rem; font-family: 'Lato', sans-serif;">Cart({{cart.length}})</text>
	</svg>
<!---- Cart --------------- End ------>
</div>
<!----------- VueJs -------- End  -------->
  <script>
		function changeSize(ele){
			var id = ele.id;
			$('.s-small').css("color", "#ccc");
			$('.s-medium').css("color", "#ccc");
			$('.s-large').css("color", "#ccc");
			$('.s-xlarge').css("color", "#ccc"); 
			$('.s-'+id).css("color", "black");
		}
		window.onload = function (){
			$('input:radio').each(function() {
			  if($(this).is(':checked')) {
				$('.s-'+this.id).css("color", "black");
			  } 
			});
		}
	</script>
</div>
<!--- Review Part --------- Start -------->
	<div id="review" class="container-fluid border-top pt-5 mt-5">
	<div class="row justify-content-around">
	
	 <div class="col-3">
		 <h3>Reviews (0)</h3>
		 <p>There is no reviews yet.</p>
	 </div>
	 <div class="col-6">
		 <h3>Add Your Review</h3>
		 <input type='email' placeholder='Email' class="form-control mt-3">
		 <input type='text' placeholder='In brief' class="form-control mt-3"/>
		 <textarea class="form-control mt-3">In detail</textarea>
		 <button class="a-btns mt-3">Add Review</button>
	 </div>
	 
	</div>
	</div>
<!------ Review Part --------- End ------->
<!--- Review Part --------- Start -------->
	<div id="review" class="container-fluid border-top pt-5 mt-5">
	<div class="row justify-content-around">
	
	 <div class="col-10 mt-5">
		 
		 <ul class="a-lists yellow stars">
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
					</ul>
					<h3>Review Subject</h3>
		 <div class="date">2020-02-14 20:00</div>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	 </div> 
	 <div class="col-10 mt-5">
		 
		 <ul class="a-lists yellow stars">
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
					</ul>
					<h3>Review Subject</h3>
		 <div class="date">2020-02-14 20:00</div>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	 </div>
	 <div class="col-10 mt-5">
		 
		 <ul class="a-lists yellow stars">
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
						<li><i class="fas fa-star"></i></li>
					</ul>
					<h3>Review Subject</h3>
		 <div class="date">2020-02-14 20:00</div>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	 </div>
	</div>
	</div>
<!------ Review Part --------- End ------->
	
<script src="layouts/js/vue.js"></script>
   
<?php require_once('includes/templates/menubar.php'); ?>

<?php require_once('includes/templates/footer.php'); ?>