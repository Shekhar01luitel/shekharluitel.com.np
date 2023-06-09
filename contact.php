<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'shekhar01luitel@gmail.com';
    $headers = "From: ".$email;

    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($to, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shekhar Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Shekhar Luitel is a front-end web developer based in [your location]. With expertise in HTML, CSS, JavaScript, and responsive design, he creates visually stunning and user-friendly websites that drive business growth. Browse his portfolio for examples of his work.">
	<meta name="keywords" content="web development, front-end development, HTML, CSS, JavaScript, portfolio, IT sector, Shekhar Luitel">
	<meta name="author" content="Shekhar Luitel">
	<meta name="language" content="English">

  <!-- Twitter integration -->
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Facebook integration -->
	<meta property="og:title" content="Shekhar Luitel - Portfolio">
	<meta property="og:image" content="images/about.jpg">
	<meta property="og:url" content="https://shekharluitel.com.np">
	<meta property="og:site_name" content="Shekhar Luitel - Portfolio">
	<meta property="og:description" content="I am a front-end web developer with experience in HTML, CSS, and JavaScript. Visit my portfolio website to see my latest projects.">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="../panel/images/logosashwatum.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<!-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- fabric img -->
	<link rel="icon" type="image/x-icon" href="/panel/images/logosashwatum.ico"/>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(images/about.jpg);"></div>
				<h1 id="colorlib-logo"><a href="home.html">Shekhar Luitel</a></h1>
				<span class="position"><a href="#">Junior Fontend Developer</a> From NEPAL</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy;
Copyright <script>document.write(new Date().getFullYear());</script> Shekhar</small></p>
				<ul>
					<li><a href="https://www.facebook.com/shekharluitel.IT"><i class="icon-facebook2"></i></a></li>
					<!-- <li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li> -->
					<li><a href="https://www.linkedin.com/in/shekhar-luitel33/"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(#);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>Hi! <br>I'm Shekhar</h1>
											   <p><a href="CV/Profile.pdf" class="btn btn-primary btn-learn" download>Download CV <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(#);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>I am <br>a Designer</h1>
												<p><a href="#about" class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about" id="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Us</span>
										<h2 class="colorlib-heading">Who Am I?</h2>
										<p><strong>Hi I'm Shekhar Luitel</strong>,as a profession I am a junior frontend developer but with a passion for coding I am a hunger Shark. A Detail-oriented and Motivated learner I am skilled and experience in web application development, information graphics, digital marketing, and content creation. Proficient in Bootstrap, graphic design, web design, HTML, front-end development and IOS developer. Dedicated to creating user-friendly and visually appealing websites and applications that meet clients' needs and exceed their expectations. Skilled in collaborating with clients and team members to achieve project goals. Currently seeking new opportunities on WEB DEVELOPMENT AND IOS DEVELOPMENT to further develop my skills and contribute to innovative development projects.</p>
										<p> I am constantly seeking to improve my skills and knowledge in the field and stay up-to-date with the latest industry trends. Without any doubt I am a hardworking and fast learner, I am a dedicated worker with a strong work ethic and an eye for detail, making me a valuable addition to any team. If you are looking for a motivated and skilled developer, I would be delighted to discuss how I can contribute to your team.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>Graphic Design</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3>Web Design</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-3">
										<span class="icon2"><i class="icon-android"></i></span>
										<h3>OOPS Language</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div class="services color-4">
										<span class="icon2"><i class="icon-time"></i></span>
										<h3>C-Programming</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>In this early stage, I want you to know <br>that 5+ projects done sucessfully!</h2>
										<a href="mailto:shekhar01luitel@gmail.com?subject=Hire Request&body=Please provide details of the project." class="btn-hire">Hire me</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			
			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading">Here are some of my expertise</h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-6 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3>Innovative Ideas</h3>
									<p> With a keen eye for design and a deep understanding of user behavior, I consistently push the boundaries of what is possible in web development.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>Graphic Design</h3>
									<p>I am a Designer with a strong eye for creating visually compelling designs that leave a lasting impressiona high level of creativity and attention to detail to every project.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="1" data-speed="50" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Internship</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="6" data-speed="50" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="0" data-speed="50" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Clients</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="1" data-speed="50" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div>

			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>As a skilled developer, I excel in creating user-friendly and visually appealing websites and applications that meet clients' needs. With expertise in Bootstrap, HTML, and front-end development, I am dedicated to exceeding expectations. Additionally, my skills in information graphics, digital marketing, and content creation allow me to collaborate with clients and team members to achieve project goals.</p>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Java</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="50"
								  	aria-valuemin="0" aria-valuemax="100" style="width:50%">
								    <span>50%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Basic C-Programming</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>75%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>SEO</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="40"
								  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
								    <span>40%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Canva</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HTML5</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>CSS</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="30"
								  	aria-valuemin="0" aria-valuemax="100" style="width:30%">
								    <span>30%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>WordPress</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Magento</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="40"
								  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
								    <span>40%</span>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#BCA" aria-expanded="false" aria-controls="collapseTwo">Bachelor in Computer Application <abbr>(BCA)</abbr>
									            </a>
									        </h4>
									    </div>
									    <div id="BCA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									        <div class="panel-body">
									            <p>BCA <strong>(Bachelor of Computer Applications)</strong> is a popular undergraduate degree program in Nepal for students who want to pursue a career in the field of computer science. The BCA program is designed to provide students with a strong foundation in computer science, programming, and software development.</p>
													<ul>
														<li>I am currently pursuing BCA from <a href="http://nihareekacollege.edu.np/" target="_blank">Nihareeka College</a> and I am in my 3rd semester as of 2023.</li>
														<li>In my 1st semester, I achieved an SGPA of 3.19.</li>
													</ul>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#HAN" aria-expanded="false" aria-controls="collapseThree">Diploma in Computer Hardware and Networking
									            </a>
									        </h4>
									    </div>
									    <div id="HAN" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									            <p>The Diploma in Hardware and Networking is a course in Information Technology that is taught at the diploma level. This program teaches students technical skills such as building a computer from scratch, as well as managing and maintaining computer and network configurations to make sure they perform well.</p>
												<ul>
													 <li>I completed a 6-month course of Diploma in Hardware and Networking from the College of Information and Technology <strong>(COIT)</strong> in August 2019.</li>
												</ul>
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFour">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Higher Secondary Education
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									        <div class="panel-body">
									            <p>I completed my higher secondary education in the Management faculty, with a focus on Computer Science, from <a href="https://lordbuddha.edu.np/" target="_blank">Lord Buddha School</a> in 2021.</p>
												<ul>
													<li>Achieved a CGPA of <strong>3.35</strong> in the +2 level examination.</li>
											   </ul>	
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFive">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									        <div class="panel-body">
									            <p>I completed my secondary education at <a href="https://lordbuddha.edu.np/" target="_blank">Lord Buddha School</a> in 2019.</p>
												<ul>
													<li>Achieved a GPA of <strong>3.60</strong> in the Secondary Education Examination <abbr>(SEE)</abbr>.</li>
											   </ul>	
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">MY WORK</span>
							<h2 class="colorlib-heading animate-box">RECENT WORK</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="/admin/index.html"><B>MSS</B> RPM</a> <span>2023</span></h2>
					                  <p>Admin Panel of <B>MSS</B> RPM</a> still lots of changes required on it. <br><strong>Username :</strong>shekhar<br><strong>Password :</strong>shekhar</p>
					               </div>
					            </div>
					         </article>


					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Internship <a href="https://infiniteitsolutionsnepal.com/">Infinite IT Solutions Nepal</a> <span>3 Months </span></h2>
					                  <p>In my 3 Months internship I have learned how the realworld programming works, types of problems, how to speak with clients, how the things goes and so many things. </p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="https://www.youtube.com/@sashwat_um">Recent Video On Youtube</a> <span>600+ subs</span></h2>
					                  <p>I am not a professional content created, Just for passion I startd a gaming channel. <br><strong>Channel Name :</strong>SASHWAT UM</p>
									  <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/YR7V9J98CKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
					               </div>
					            </div>
					         </article>

					         <!--<article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
					                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					               </div>
					            </div>
					         </article> -->

					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>

			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="mailto:shekhar01luitel@gmail.com?subject=Hire Request&body=Please provide details of the project.">info@shekharluitel.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>Biratnagar,Morang,Nepal</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">9846684310</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<form action="contact.php" method="POST">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject">
										</div>
										<div class="form-group">
											<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
	</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>