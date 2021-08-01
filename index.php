<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TechBorg</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="shaun" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo.png">
	</head>
	
	<body>
	
		<div class="wrapper">
		
			<!-- header -->
			<header>
				<!-- navigation -->
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php"><h1>TECHBORG</h1></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="registration.php">Signup</a></li>
								<li><a href="login.php">Login</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#article">Articles</a></li>
										<li><a href="#project">Projects</a></li>
										<li><a href="#subscribe">Subscribe</a></li>
										<li><a href="#team">Executive Team</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<!-- heading -->
					<h2>TechBorg</h2>
					<!-- paragraph -->
					<p>It is our belief that in order to be most efficient it requires adaptive technology and software our customers can focus on their core business.</p>
				</div>
			</div>
			<!-- banner end -->
			
			
			
			<!-- events -->
			<div class="article" id="article">
				<div class="container">
					<div class="default-heading">
						<!-- heading -->
						<h2>Articles</h2>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- event item -->
							<div class="event-item">
								<!-- image -->
								<img class="img-responsive" src="img/event/1.png" alt="article" />
								<!-- heading -->
								<h4><a href="cpp.php">C++</a></h4>
								<!-- sub text -->
								<span class="sub-text">C++ is a high-level.</span>
								<!-- paragraph -->
								<p>general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- event item -->
							<div class="event-item">
								<!-- image -->
								<img class="img-responsive" src="img/event/2.png" alt="article" />
								<!-- heading -->
								<h4><a href="weblang.php">Web Programming</a></h4>
								<!-- sub text -->
								<span class="sub-text">Web development is the work involved in developing a website for the Internet or an intranet.</span>
								<!-- paragraph -->
								<p>Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- event item -->
							<div class="event-item">
								<!-- image -->
								<img class="img-responsive" src="img/event/3.png" alt="Events" />
								<!-- heading -->
								<h4><a href="android.php">Smart Device Programming</a></h4>
								<!-- sub text -->
								<span class="sub-text">Android is a mobile operating system based on a modified version of the Linux kernel and other open source software</span>
								<!-- paragraph -->
								<p>designed primarily for touchscreen mobile devices such as smartphones and tablets.</p>
							</div>
						</div>
						</div>
					<div class="text-center">
						<a href="article.php" class="btn btn-default">See More</a>
					</div>
					</div>
				</div>
			</div>
			<!-- events end -->
			
			<!-- blog -->
			<div class="project" id="project">
				<div class="container">
					<div class="default-heading">
						<!-- heading -->
						<h2>Projects</h2>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- blog entry -->
							<div class="entry">
								<!-- blog entry image -->
								<img class="img-responsive" src="img/blog/1.jpg" alt="Blog" />
								<!-- heading / blog post title -->
								<h3><a href="projects/electronics/electronic.php">Computing and electronics</a></h3>
								<!-- blog information -->
								<span class="meta">
									
								</span>
								<!-- paragraph -->
								<p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- blog entry -->
							<div class="entry">
								<!-- blog entry image -->
								<img class="img-responsive" src="img/blog/2.jpg" alt="Blog" />
								<!-- heading / blog post title -->
								<h3><a href="projects/softwares/software.php">Computing and Software</a></h3>
								<!-- blog information -->
								<span class="meta">
									
								</span>
								<!-- paragraph -->
								<p>We combine continuing education and constant monitoring us with your project details if you are interested to ge of industry trends and innovations to provide the right IT solution at the right time. Contact us with your project details if you are interested to get our Web Solution or Software Development Services.</p>
							</div>
						</div>
			</div>
					<div class="text-center">
						<a href="project.php" class="btn btn-default">See More</a>
					</div>
					</div>
				</div>
			</div>
			<!-- blog end -->
			
			<!-- subscribe -->
			<div class="subscribe" id="subscribe">
				<div class="container">
					<!-- subscribe content -->
					<div class="sub-content">
						<h3>Subscribe Here for Updates</h3>
						<form role="form">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Email...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Subscribe</button>
									</span>
							</div><!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			<!-- subscribe end -->
			
			<!-- team -->
			<div class="team" id="team">
				<div class="container">
					<div class="default-heading">
						<!-- heading -->
						<h2>Executing Team</h2>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<!-- team member -->
							<div class="member">
								<!-- images -->
								<img class="img-responsive" src="img/team/2.png" alt="Team Member" />
								<!-- heading -->
								<h3>Shaun Sebastian</h3>
								<!-- designation -->
								<span class="dig">Team Lead</span>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<!-- team member -->
							<div class="member">
								<!-- images -->
								<img class="img-responsive" src="img/team/2.png" alt="Team Member" />
								<!-- heading -->
								<h3>Team member</h3>
								<!-- designation -->
								<span class="dig">Senior Developer</span>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<!-- team member -->
							<div class="member">
								<!-- images -->
								<img class="img-responsive" src="img/team/2.png" alt="Team Member" />
								<!-- heading -->
								<h3>Team member</h3>
								<!-- designation -->
								<span class="dig">Developer</span>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<!-- team member -->
							<div class="member">
								<!-- images -->
								<img class="img-responsive" src="img/team/4.png" alt="Team Member" />
								<!-- heading -->
								<h3>Team member</h3>
								<!-- designation -->
								<span class="dig">Desginer</span>
								
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="team.php" class="btn btn-default">See More</a>
					</div>
					</div>
				</div>
			</div>
			<!-- team end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<p><a href="#">Home</a> | <a href="works.php">works</a> | <a href="team.php">Team</a> | <a href="contact.php">Contact</a></p>
					<div class="social">
						<a href="https://www.facebook.com/technologyborg/"><i class="fa fa-facebook"></i></a>
						<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<!-- copy right -->
					<!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
					<p class="copy-right">Copyright &copy; 2020 |  All rights reserved. </p>
				</div>
			</footer>

		</div>
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>