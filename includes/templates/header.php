<!DOCTYPE html>
<html>
<head>
	<!-- Site Title -->
	<!-- #Title -->
	<!-- Here's What you want --->
	<title> E-Commerce Site </title>
	
	<!-- Style Links -->
	<link  rel="stylesheet" href="layouts/css/main.css"/>
	<link  rel="stylesheet" href="layouts/css/bootstrap.min.css"/>
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Tangerine|Thasadith|Lato:300" rel="stylesheet"/>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
</head>


<body style="font-family: 'Thasadith', sans-serif;"> 
<nav class="navbar border-bottom">
  <!--<div class="dropdown">
  
  <a class="navbar-brand badge gray-Color" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fas fa-language" title="Language" style="font-size: 1.5em; color: #cccccc;"></i> 
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">English</a>
    <a class="dropdown-item" href="#">Arabic</a> 
  </div>
  </div>-->
  <div class="call-us"> Call us <a href="tel:01234567890">01234-567-890</a> </div>
  <div>
  <a class="navbar-brand badge" href="#" data-toggle="modal" data-target="#login"> 
    <i class="fas fa-sign-in-alt" title="Login" style="font-size: 1.2em; color: #cccccc;"></i>
	 
  </a>
  <a class="navbar-brand badge" href="#" data-toggle="modal" data-target="#sign-up"> 
   <i class="fas fa-user-plus" title="Sign Up" style="font-size: 1.2em; color: #cccccc;"></i></i>
  </a></div>
</nav>
<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <!-- #LoginData 1/3 -->
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="login-page">
		  <div class="form">
			 
			<form class="text-center">
			  <input type="text" placeholder="User Name" class="input-l-u" autocomplete='off'/><br/>
			  <input type="password" placeholder="Password" class="input-l-u" autocomplete='new-password'/><br/>
			  <!-- #LoginData 2/3 -->
			  <button class="a-btns input-btn">Login</button><br/>
			  <!-- #LoginData 3/3 -->
			  <p class="message">Not registered? <a href="#" data-toggle="modal" data-target="#sign-up">Create an account</a></p>
			</form>
		  </div>
		</div>
      </div>
      
    </div>
  </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <!-- #RegisterData 1/3 -->
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="login-page">
		  <div class="form">
			<form class="text-center">
			  <input type="text" placeholder="User Name" class="input-l-u" autocomplete='off'/><br/>
			  <input type="password" placeholder="Password" class="input-l-u" autocomplete='new-password'/><br/>
			  <input type="email" placeholder="Email Address" class="input-l-u" autocomplete='off'/><br/>
			  <!-- #RegisterData 2/3 -->
			  <button class="a-btns input-btn">Register</button><br/>
			  <!-- #RegisterData 3/3 -->
			 <p class="message">Already registered? <a href="#" data-toggle="modal" data-target="#login">Sign In</a></p>
			</form> 
		  </div>
		</div>
      </div>
      
    </div>
  </div>
</div>


<div class="container-svg mb-5">
<svg xmlns="http://www.w3.org/2000/svg" viewBox ="0 0 743 275" class="svg-header" >
	<!-- Defenitions Part -->
	 
	<defs>
       <linearGradient id="backgroundGradient" x1="0%" y1="0%" x2="0%" y2="100%">
         <stop offset="0%" stop-color="#d9d6d6" />
         <stop offset="95%" stop-color="#fff" />
       </linearGradient>
     </defs>
	<rect width="100%" height="350" style="fill:url(#backgroundGradient)"/>
	<!-- Next Paths For The Tapes -->
	<!-- Tapes in the center -->
	<path d="M 372,5 367,105 l 6,-15 6,15 0,-100" style="clip-rule:nonzero;display:inline;fill:#ff1680;fill-rule:evenodd; stroke-width:1px;" class="tape"/>
	
	<path d="m 383,9 10,56 -9,-9 -6,9 0,-60" style="clip-rule:nonzero;display:inline;fill:#27cdde;fill-rule:evenodd; stroke-width:1px;" class="tape"/>
	
	<path d="m 367,10 -11,68 8,-11 6,12 2.5,-73.5" style="clip-rule:nonzero;display:inline;fill:#ffe600;fill-rule:evenodd; stroke-width:1px;" class="tape"/>
	
	<!-- Tapes in the first right side -->
	<!-- Yellow -->
	<path d="m 448.08009,1.849117 -6.98041,103.522903 7.06598,-11.077161 6.56127,11.077161 L 453.2117,3" style="fill:#ffd42a;stroke:#ffffff;stroke-width:1px;"/>
	<!-- Green -->;
	<path d="m 443.39532,8.6685824 -11.45801,71.3270766 7.86807,-6.383538 6.23409,7.771225 2.64415,-76.6002856" style="fill:#66ff00;stroke:#ffffff;stroke-width:1px;"/>
	<!-- Blue -->
	<path d="m 454.10472,5 9,65.5045824 -8.05644,-6.61944 -6.26612,6.85921 1.56896,-68.4092831" style="fill:#80e5ff;stroke:#ffffff;stroke-width:1px;"/>
	
	
	<!-- Tapes in the second right side -->
	<path d="m 530,5 10,61 -7,-5 -6,6 -2,-65" style="fill:#ff7f2a;stroke:#ffffff;stroke-width:1px;"/>
	
	<path d="m 522,4 -8,55 6,-6 6,7 0,-56" style="fill:#d937b9;stroke:#ffffff;stroke-width:1;" />
	
	<!-- Next Paths for the first left side tapes -->
	<path d="m 298,2 -5.5,100 7,-10 6.5,10 -1.5,-94" style="fill:#ffd42a;stroke:#ffffff;stroke-width:1px;"/>
	
	<path d="m 306,7 7.5,69 -8,-7.5 -6,7.5 3,-69" style="fill:#ff5555;stroke:#ffffff;stroke-width:1px;"/>
	
	<path d="m 294,7 -11,76 8,-7 6,8 2,-80.5" style="fill:#ff0066;stroke:#ffffff;stroke-width:1px;"/>
	
	<!-- Tapes in the second left side -->
	<path d="m 231.5,6 7,55 -7.5,-5 -7,5 1,-61" style="fill:#cc00ff;stroke:#ffffff;stroke-width:1px;"/>
	
	<path d="m 222,5.5 -10.4,64 7.5,-8 5,9 2.4,-68" style="fill:#ff0066;stroke:#ffffff;stroke-width:1px;"/>
	
	
	
	<!-- Next Path For The shape of the curtain -->
	<!--<path d="m 742.9667,1.2997682 c 0,0 -62.40169,87.7591328 -124.17935,0 0,0 -62.4017,87.7591328 -123.55535,0 0,0 -61.77766,86.5054228 -123.55533,0 0,0 -61.77767,85.2517328 -123.55534,0 0,0 -55.53748,85.8785828 -123.55534,0 0,0 -60.529637,87.1322828 -123.5553361,0" style="color:#000000;clip-rule:nonzero;display:inline;opacity:1;fill:none; fill-rule:evenodd;stroke:#fff;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;  stroke-opacity:1; " />-->
	<path d="m 744.5,2 c 0,0 -33,54 -69,-1 0,0 -35,56 -75,-0.5 0,0 -38,58 -74,-1 0,0 -28.78935,58 -76,2.5 0,0 -33,54.5 -75,0 0,0 -34,54 -75,-0.5 0,0 -35,54.5 -74,0 C 227,2 190,60 149.5,0 148.5,3 117,60 75,-0 76,1 43,59 -0.5,-0.5" style="color:#000000;clip-rule:nonzero;display:inline;opacity:1;fill:none; fill-rule:evenodd;stroke:#fff;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;  stroke-opacity:1; "/>
	
	<!-- #Name -->
	<!-- Here's What you want --->
	<a href="index.php"><text x="100" y="200" style="fill:#828282;font-size:6em; font-family: 'Lato', sans-serif;">Simple</text></a>
	
	<!-- #Description -->
	<!-- Here's What you want --->
	<text x="350" y="250" style="fill:#828282;font-size:1.5em; font-family: 'Lato', sans-serif;">Almost before we knew it.</text>
</svg>
</div> 