<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="css/owl.theme.default.css" type="text/css">
		<link rel="stylesheet" href="css/slimNav_sk78.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="https://gijsroge.github.io/owl-carousel2-thumbs/assets/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" type="text/css">
    <style type="text/css">
  button:focus{
    outline: none;
  }
  .hamburger-menu-button {
  width: 36px;
  height: 36px;
  padding: 0;
  display: block;
  position: relative;
  z-index: 100;
  background: none;
  border: 1px solid transparent;
  box-sizing: content-box;
  border-radius: 50%;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
  cursor: pointer;
  overflow: hidden;
  position: absolute;
  right: 110px;
  top: 16px;
}
.hamburger-menu-button-open {
  top: 50%;
  margin-top: -1px;
  left: 50%;
  margin-left: -12px;
}
.hamburger-menu-button-open, 
.hamburger-menu-button-open::before, 
.hamburger-menu-button-open::after {
  position: absolute;
  width: 24px;
  height: 2px;
  background: #000;
  border-radius: 4px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.hamburger-menu-button-open::before, 
.hamburger-menu-button-open::after {
  left: 0;
  content: "";
}
.hamburger-menu-button-open::before {
  top: 6px;
}
.hamburger-menu-button-open::after {
  bottom: 6px;
}
.hamburger-menu-button-close {
  background: transparent;
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.hamburger-menu-button-close::before {
  -webkit-transform: translateY(-6px) rotate(45deg);
          transform: translateY(-6px) rotate(45deg);
}
.hamburger-menu-button-close::after {
  -webkit-transform: translateY(6px) rotate(-45deg);
          transform: translateY(6px) rotate(-45deg);
}
.ham-menu {
  position: absolute;
  top: 89px;
  right: 0;
  margin: auto;
  max-width: 570px;
  overflow: hidden;
}
.ham-menu ul {
  -webkit-transform: translateX(110%);
          transform: translateX(110%);
  background-color: #3896d3;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.ham-menu.on ul {
  -webkit-transform: translateX(0px);
          transform: translateX(0px);
}
.ham-menu ul {
  font-size: 0;
  display: block;
    height: 100vh;
    width: 300px;
    background: #273a93;
}
.ham-menu ul li {
  display: block;
}
.ham-menu ul li:first-child .ham-menu ul li a {
  padding-left: 30px;
}
.ham-menu ul li a {
  padding: 15px;
  display: block;
  background-color: transparent;
  color: #fff;
  text-transform: uppercase;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  font-size: 13px;
}
.ham-menu ul li.active a, .ham-menu ul li a:hover {
  background-color: #2980b9;
  color: #fff !important;
}
</style>
	</head>
	<body>
		<header>
			<div class="modal fade search-hold" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Get In Touch</h4>
					      </div>
						<div class="modal-body">
							<form>
								<input type="text" name="" placeholder="Your Name">
								<input type="email" name="" placeholder="Your Email">
								<input type="submit" name="" value="Submit">
							</form>
						</div>
					</div>
					
				</div>
			</div>
			<div class="header_mid">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-4 logo_con">
							<a href="index.php"><img src="images/logo.png" alt=""></a>
						</div>
						<div class="col-md-9 col-8">
							<div class="header_right">
								<div class="menu-part">
									<div id="navigation">
										<nav>
											<ul>
												<li class="current-menu-item"><a href="#">ABOUT US</a></li>
												<li><a href="about.php">OUR OFFERING <!-- <i class="fas fa-angle-down"> --></i></a>
													<!-- <ul class="sub-menu">
														<li><a href="#">Birthday Party</a></li>
														<li><a href="#">Wedding Ceremony</a></li>
													</ul> -->
												</li>
												<li><a href="shop.php">SOLUTION SUITE</a>
												</li>
												<li><a href="shop.php">RESOURCES</a>
												</li>
												<li><a href="contact.php">CONTACT US</a></li>

											</ul>
										</nav>
									</div>
								</div>
								<div class="cart_h_con">
									<img src="images/shopping_bag.svg">
								</div>
								<button id="hamburger-menu" data-toggle="ham-navigation" class="hamburger-menu-button"><span class="hamburger-menu-button-open">Menu</span></button>
				                <nav id="ham-navigation" class="ham-menu">
				                  <ul class="menu">
				                    <li><a href="#">Home</a></li>
				                    <li class="active"><a href="#">About</a></li>
				                    <li><a href="#">Services</a></li>
				                    <li><a href="#">Features</a></li>
				                    <li><a href="#">Products</a></li>
				                    <li><a href="#">Contact</a></li>
				                  </ul>
				                </nav>
				                <div class="head_right_logo">
				                	<img src="images/header_right_logo.png">
				                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		 