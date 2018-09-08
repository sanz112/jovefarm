<?php
include 'header.php';
?>

<title>Jovefarm - SignUp</title>
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
                <div class="container py-4">
				<h2 class="text-center"> Sign Up </h2>
                <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">First name</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip02">Last name</label>
                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltipUsername">Username</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                              </div>
                              <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                              <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">City</label>
                            <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                            <div class="invalid-tooltip">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip04">State</label>
                            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                            <div class="invalid-tooltip">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Zip</label>
                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                            <div class="invalid-tooltip">
                              Please provide a valid zip.
                            </div>
                          </div>
                        </div>
                     
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                            </form>
                    </div>
					</section>
					
					<?php
					include 'footer.php';
					?>
