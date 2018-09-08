<?php
require'header.php';
?>
   <title>Jovefarm</title>
  </head>
    <body onload="myFunction()">
        
		<div id="loadingContent">
            <div id="loader">
                    <span id="loader__inner"></span>
                    <span id="loader__inner"></span>
            </div><br>
            <h1> We are loading the page for you. Please wait...</h1>
            <img src="jovefarmpic/logo.jpg" width="100px" height="100px" alt="jovefarm logo" />
           
        </div>
                   
        <main id="myDiv" style="display: none;" class="animate-bottom">
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
      
      <button class="open-button" onclick="openForm()">Chat With Us</button>
      
      <div class="chat-popup" id="myForm">
        <form action="#" class="form-container">
          <h1>Chat</h1>
      
          <label for="msg"><b>Message</b></label>
          <textarea placeholder="Type message.." name="msg" required></textarea>
      
          <button type="submit" class="btn">Send</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
      
      <div class="icon-bar">
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a> 
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a> 
        <a href="#" class="google"><i class="fab fa-google"></i></a> 
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a> 
      </div>
      
    <section class="sec-home-slider bg-white">
    
            <div class="row no-gutters align-items-center text-left justify-content-between">
                <div class="col-xl-4 col-lg-5 offset-md-1 pl-xl-5 pl-lg-0 pr-xl-0 pr-lg-3 py-lg-0 p-4">
                <div class="hero-content py-3">
                    <div class="hero-text">
                    <h1 class="animated BounceInRight delay-anim-xs cl-yellow"><b>Jolase Ventures Farms Limited</b></h1>
                    
                          <h5 class="animated fadeInRight delay-anim-xs cl-yellow">  We Are Transforming Agriculture </h5>
                            <p class="animated fadeInLeft delay-anim-sm lead my-4 font-weight-normal">
                            Jolase Venture Farms Ltd is a well-established Farming Business based in Nigeria. We operate a sustainable approach to farming and the environment. </p>
                    </div>
                    <div class="animated fadeInLeft delay-anim-md hero-cta">
                    <a href="about-us.php" class="btn btn-yellow btn-sm">Apply Now</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="slider-div animated slideInRight">
                        <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/img1.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/img2.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/img3.jpg" alt="Third slide">
                                  </div>
                            
                                <div class="carousel-item">
                                        <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/img4.jpg" alt="Third slide">
                                      </div>
                                    
                                    <div class="carousel-item">
                                            <img style="height: 500px;" class="d-block w-100" src="jovefarmpic/img5.jpg" alt="Third slide">
                        
                                        </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="sr-only carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span style=" padding: 40px; border-radius: 50%; background: chartreuse;" class="fa fa-arrow-left fa-2x"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="sr-only carousel-control-next-icon" aria-hidden="true"></span>
                                  <span style=" padding: 40px; border-radius: 50%; background: chartreuse;" class="fa fa-arrow-right fa-2x"></span>
                                </a>
                              </div>
                   <!-- <div class="owl-carousel owl-theme" id="product-slider">
                    <div class="slide">
                        <img src="jovefarmpic/img1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="jovefarmpic/img5.jpg" alt="">
                    </div>
                    </div>-->
                </div>
                </div>
            </div>
        
        </section>
        <section class="sec-about-event py-4 bg-dark animated slideInRight delay-anim-md">
	<div class="container-fluid my-lg-2">
		<div class="row no-gutters drop-shadow drop-shadow-xl">
			<div class="col-lg-8 bg-white">
				<div  class="hero-text p-5">
					 
                        <h5 style="padding-top: 12%;" >  We Are Transforming Agriculture </h5>
                        <p>
                        Jolase Venture Farms Ltd is a well-established Farming Business based in Nigeria. We operate a sustainable approach to farming and the environment. Complemented by our highly skilled and experienced workforce we gain optimum crop production results, within a cost effective system. A Self-motivated, dedicated workforce has been key to the Business’s success. Jolase Ventures Farms Limited is on a mission to transform agriculture by building and operating environmentally responsible farms.</p>
					<div class="jumbo cta  text-center">
						<a href="about-us.php" class="btn btn-sm btn-fbn">Read more 
						<!-- <i class="fa fa-arrow-right ml-2"></i> -->
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg bg-white d-flex flex-column">
				<div class="d-flex tile-box flex-fill">
					<div class="tile d-flex align-items-center col">
						<h2 class="text-center text-green w-100 text-capitalize">Our Logo</h2>
					</div>
				
				</div>
				<div class="">
                    <img src="jovefarmpic/logo.jpg" width="250px" height="300px" alt="logo">
                </div>
				

			</div>
		</div>
    </div>

                       <section class="sec-calculator bg-blue-fade py-5">
                    <div class="container my-4">
                     <div class="col-lg-12 col-md-10 text-left">
                          <h2 class="mb-4 cl-blue">Farm Calculator</h2>
                          <p class="">Your monthly mortgage payment is calculated by adding the costs of the loan’s principal and interest, as well as any money held in escrow for taxes and insurance. How much will it be? Get an idea now and compare different loan terms.</p>
                        </div>
                      <div class="row justify-content-left">
                        <!-- <div class="col-lg-8 col-md-10 text-left">
                          <h2 class="mb-4 cl-blue">Mortgage Calculator</h2>
                          <p class="">Your monthly mortgage payment is calculated by adding the costs of the loan’s principal and interest, as well as any money held in escrow for taxes and insurance. How much will it be? Get an idea now and compare different loan terms.</p>
                        </div> -->
                        <div class="col-lg-6 col-md-4">
                          <div class="card border-0 mt-3 drop-shadow drop-shadow-xs">
                            <div class="card-body px-lg-5 py-lg-4">
                              <form action="" class="my-3">
                                <div class="row">
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <input type="text" class="form-control b-line" placeholder="&#8358; Price Of unit(s)">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control b-line" placeholder="% interest Rate">
                                    </div>
                                  </div>
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <input type="text" class="form-control b-line" placeholder="&#8358; Loan Amount">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control b-line" placeholder="&#8358; Property Taxes">
                                    </div>
                                  </div>
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <button class="btn btn-yellow btn-sm dropdown-toggle w-100" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Loan Term
                                  </button>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control b-line" placeholder="&#8358; Homeowners Insurance">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    
                                    <div class="form-group">
                                      <button class="btn btn-yellow btn-sm mt-3" type="submit">Calculate</button>
              
                                      <button class="btn btn-fbn btn-sm mt-3" type="submit" >Reset</button>
                                    </div>
              
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
              
                        <div class="col-lg-6 col-md-4">
                          <div class="card border-0 mt-3  drop-shadow drop-shadow-xs">
                            <div class="card-body px-lg-5 py-lg-4">
              
                            <div class="row">
                            <div class="col-8">
                            <p>Per Month, You Repay
                            <br>
                            <small class="font-weight-light">assuming your interest rate stays the same</small>
                            </p>
                            
                            </div>
                            <div class="text-right mr-0">
                            <p>&#8358;12,000</p>
                            </div>
                            </div>
              
              
                             <div class="row mt-3">
                            <div class="col-8">
                            <p>Total you'll repay over full term
                            <br>
                            <small class="font-weight-light">(Includes mortgage debt, ₦ 10,000 + fees paid upfront ₦ 1,000 + total interest ₦ 1,587)</small>
                            </p>
                            
                            </div>
                            <div class="text-right mr-0">
                            <p>&#8358;12,587</p>
                            </div>
                            </div>
              
                            <div class="row">
                            <a href="about-us.php" class=" ml-3 btn btn-sm btn-fbn">
                            Read more   
                              </a>
                            </div>
              
                          
                            </div>
                            </div>
                            </div>
              
              
                      </div>
                    </div>
                  </section>          
                  <section class="py-2 bg-white p-3">
                  <div class="container">
                        <h2>What will do</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified " role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">What will do</a>
                          </li>
                        </ul>
                      <script>
					  var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loadingContent").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

function openForm() {
          document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
          document.getElementById("myForm").style.display = "none";
      }

					  </script>
                        <div class="tab-content">
                          <div id="home" class="container tab-pane active text-justify animated slideInLeft"><br>
                            <h3 class="py-2 bg-yellow ">We are Agriculture Farm</h3>
                           <p> We combine the benefits of the best local farms with advances made possible by technology to grow produce you can feel good about eating.
                            Jolase Ventures Farms Limited was founded in 2015 by Toyosi S. Olanrewaju

                            We have a state-inspected facility on the farm where we wash, grade and package the eggs. We are a fully vertically integrated organization with assets including more than a six (6) arces of poultry rearing area, significant agricultural land, grain storage facilities, feed manufacturing, poultry processing, warehousing and logistics.

                            At Jolase Ventures Farms Limited Our passion is great tasting food and sharing our harvest with the world. There has never been a greater need for safe, dependable, nutritious food, and we are scaling quickly to transform agriculture around the world.</p>


                          </div>
                          <div id="menu1" class="container tab-pane text-left fade animated slideInUp"><br>
                            <h3 class="py-2 bg-yellow">We are Agriculture Farm</h3>
                            <p> We combine the benefits of the best local farms with advances made possible by technology to grow produce you can feel good about eating.
                             Jolase Ventures Farms Limited was founded in 2015 by Toyosi S. Olanrewaju
 
                             We have a state-inspected facility on the farm where we wash, grade and package the eggs. We are a fully vertically integrated organization with assets including more than a six (6) arces of poultry rearing area, significant agricultural land, grain storage facilities, feed manufacturing, poultry processing, warehousing and logistics.
 
                             At Jolase Ventures Farms Limited Our passion is great tasting food and sharing our harvest with the world. There has never been a greater need for safe, dependable, nutritious food, and we are scaling quickly to transform agriculture around the world.</p>
 
 
                          </div>
                          <div id="menu2" class="container tab-pane fade animated slideInRight"><br>
                            <h3 class="py-2 bg-yellow">We are Agriculture Farm</h3>
                            <p> We combine the benefits of the best local farms with advances made possible by technology to grow produce you can feel good about eating.
                             Jolase Ventures Farms Limited was founded in 2015 by Toyosi S. Olanrewaju
 
                             We have a state-inspected facility on the farm where we wash, grade and package the eggs. We are a fully vertically integrated organization with assets including more than a six (6) arces of poultry rearing area, significant agricultural land, grain storage facilities, feed manufacturing, poultry processing, warehousing and logistics.
 
                             At Jolase Ventures Farms Limited Our passion is great tasting food and sharing our harvest with the world. There has never been a greater need for safe, dependable, nutritious food, and we are scaling quickly to transform agriculture around the world.</p>
 
 
                          </div>
                        </div>
                      </div>
                    </section>
                    <hr>
                  <section class="sec-contact bg-white">
                    <div class="">
                      <div class="row no-gutters justify-content-center justify-content-lg-between align-items-center">
                        <div class="col-md-9 col-xl-5 col-lg-6 offset-lg-1 pl-xl-4  p-4">
                          <div>
                            <div class="text-left mb-3 ">
                              <h2 class="text-capitalize cl-blue mt-4">Contact us at:</h2>
                              <hr>
                             <address>
                                    <h3>Addresses:</h3>
                                    <ul class="text-capitalize">
                                 <li> totoola agbonyin village at oko oba, jobele road. oyo state.</li>
                                    <li>Plot No.21 Community, Oko Olowo / Bode - Saadu Express Road, Ilorin Kwara State</li>
                             </ul>
                             </address>
                              
                             
                            </div>
                            <h2 class="text-center">OR</h2> 
                            <?php
                              $to = "witttechnologies@gmail.com";
                              $subject = $_POST['subject'];
                              $txt = $_POST['message'];
                              $txt = $_POST['email'];
                              $headers =$_POST['name'];

                              mail($to,$subject,$txt,$headers);
                              ?>
                            <form action="" class="mt-4" method="POST">
                              <h6><strong>BEEP US A MAIL</strong></h6>
                                <div class="row">
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <input name="name" type="text" class="p-2 form-control b-line" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="col-lg">
                                    <div class="form-group">
                                      <input name='email'  type="text" class="p-2 form-control b-line" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    
                                    <div class="form-group">
                                      <input name="subject"  type="text" class="p-2 form-control b-line" placeholder="subject">
                                    </div>
              
                                    <div class="form-group">
                                      <textarea name='message' style="resize: none; outline: none; " rows="6" class="p-2 form-control b-line" placeholder="Message"></textarea>
                                    </div>
              
                                    <div class="form-group">
                                      <button class="form-control btn btn-yellow btn-md mt-3" type="submit">Submit</button>
                                    </div>
              
                                  </div>
                                </div>
                              </form>
                          </div>
                        </div>
                        <div class="col-lg-6 map-view bg-dark">
                          <iframe id="map" class="x-map " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15858.510985034074!2d3.4153855!3d6.4418242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6398eb486f05c88!2sFBN+Mortgages+Limited!5e0!3m2!1sen!2sng!4v1532418294334" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="sec-subscribe bg-green">
                        <div class="container py-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 col-md-11">
                                    <div class="subscribe-box d-flex align-items-center">
                                        <div class="text-center col-md-8">
                                            <h6 class="text-white text-uppercase mb-0">Subscribe to Our Mailing lists to get more updates on Agricultural Products</h6>
                                        </div>
                                        <form action="">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <input placeholder="Your Email Address" aria-label="Recipient's username" aria-describedby="button-addon2" class="form-control border-0" style="border-radius: 0;" type="text">
                                                    <div class="input-group-append">
                                                        <button class="btn text-white bg-yellow" type="button" id="button-addon2" style="border-radius: 0;">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
        <?php
		include 'footer.php';
		?>