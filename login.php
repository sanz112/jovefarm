<?php
include 'header.php';
?>
<title>Jovefarm- Login</title>
  </head>
    <body>
       
        <main>
        <header class="d-inline">

 
    <div id="top-head" class=" animated slideInUp bg-blue py-2">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between text-white">
                <div class="small d-flex">
                    <div class="mr-3 d-none d-md-block">Follow us</div>
                    <div>
                        <a class="text-light" href=""><i class="fab fa-lg fa-facebook mr-0 mr-md-3"></i></a>
                        <a class="text-light" href=""><i class="fab fa-lg fa-twitter mr-0 mr-md-3"></i></a>
                        <a class="text-light" href=""><i class="fab fa-lg fa-linkedin mr-0 mr-md-3"></i></a>
                        <a class="text-light" href=""><i class="fab fa-lg fa-youtube mr-0 mr-md-3"></i></a>
                        <a class="text-light" href=""><i class="fab fa-lg fa-pinterest mr-0 mr-md-3"></i></a>
                    </div>

                </div>
                <div class="small d-flex contact-info">
                    <div style="border: none; border-right: 1px solid #fff; padding-right: 20px;"class="mr-4 d-none d-md-block">
                        <a href="telto:+393511067606"><i class="fa fa-phone mr-2"></i>+393511067606</a>
                    </div>
                    <div style="border: none; border-right: 1px solid #fff; padding-right: 20px;" class="mr-4 d-none d-md-block">
                        <a href="telto:+2348079745493"><i class="fa fa-phone mr-2"></i>+2348079745493</a>
                    </div>
                    <div class="mr-0">
                        <a href="mailto:info@fbnmortgages.com"><i class="fa fa-envelope mr-2"></i>info@jovefarm.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
      <nav class="navbar animated slideInDown navbar-expand-lg navbar-dark sticky-top">

        <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="jovefarmpic/jovelogo.png" alt="">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link px-lg-3" style=" color: green;" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link px-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Who We Are
                </a>
                <div class="dropdown-menu bg-yellow my-0 py-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="about-us.php">About Us</a>
                <a class="dropdown-item" href="the-team.php">The Team</a>
                <a class="dropdown-item" href="contact-us.php">Contact Us</a>
                
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link px-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products & Services
                </a>
                <div class="dropdown-menu bg-yellow my-0 py-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="mortgage-services.php">Mortgage Services</a>
                <a class="dropdown-item" href="real-estate-services.php">Real Estate Services</a>
                <a class="dropdown-item" href="savings-product.php">Saving Product</a>
                <a class="dropdown-item" href="home-back-home.php">Home Back Home Products</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link px-lg-4 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register
                </a>
                <div class="dropdown-menu bg-yellow my-0 py-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="signup.php">SignUp</a>
                <a class="dropdown-item" href="login.php">LogIn</a>
               
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link pl-lg-4" href="#">Applications</a>
            </li>
            

            <li class="nav-item dropdown">
                <a class="nav-link px-lg-4 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
                </a>
                <div class="dropdown-menu bg-yellow my-0 py-0" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="events.php">Events</a>
                <a class="dropdown-item" href="news.php">News</a>
                
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <div class="collapse">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </div>
            </form>
        </div>
        </div>

    </nav>
    </header>
            <section>
                <div class="no-gutters align-items-center text-left justify-content-between">
                        <div class=" col-lg-6 offset-md-3 py-lg-0 p-4">
    <form class="form-signin">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
        </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <!--<label for="inputEmail">Email address</label>-->
      </div>

      <div class="py-3 pt-4 form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <!--<label for="inputPassword">Password</label>-->
      </div>

      <div class=" py-2 form-check form-check-inline mb-3">
          <input class="form-check form-check-inline" type="checkbox" value="remember-me"> 
		  <label class="form-check-label" >Remember me
        </label>
      </div>
	 <div class="py-2 offset-md-6 form-check form-check-inline mb-3 text-right ">
      
          <input class="form-check form-check-inline" type="checkbox" value="forgot-password"> 
		    <a href="#"><label class="form-check-label"> Forgot Password</label></a>
		</div>
		
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  
    </form>
    </div>
</div>
</section>
<?php
include 'footer.php';
?>