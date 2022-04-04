<?= $this->extend('template');?>
<?= $this->section('bodycontent');?>

		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>,</span> i am <br> Dennis Saputra Ariansyah</h2>
							<p>ui/ux designer, web developer and IT Support</p>
							<a href="assets/download/cvdennis.jpg" download>download My CV</a>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
		<section id="about" class="about">
			<div class="section-heading text-center">
				<h2>Tentang Saya</h2>
			</div>
			<div class="container">
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<h3>
									Saya seorang UI/UX Designer, web developer dan IT Support. ada beberapa projek yang saya kerjakan dari beberapa client terkenal.
								</h3>
								<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<div class="row">
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>Nomor</h3>
											<p>0896-0236-2493</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>email</h3>
											<p>dennissptr@gmail.com</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>website</h3>
											<p>www.brownsine.com</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
								<img src="assets/images/about/web1.jpg" alt="profile_image">
								<div class="about-list-icon">
									<ul>
										<li>
											<a href="https://www.facebook.com/Aku.adalah.Dennis/">
												<i  class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://www.linkedin.com/in/dennis-saputra-02b86a221/">
												<i  class="fa fa-linkedin" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://www.instagram.com/dennis_saputra1/">
												<i  class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										
										
									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->
		<!--about end -->
		
		<!--education start -->
		<section id="education" class="education">
			<div class="section-heading text-center">
				<h2>education</h2>
			</div>
			<div class="container">
				<div class="education-horizontal-timeline">
					<div class="row">
					<?php foreach ($porto as $row): ?>
						<div class="col-sm-4">
							<div class="single-horizontal-timeline">
								<div class="experience-time">
									<h2><?=$row['edu_in']?> <i>to</i> <?=$row['edu_out']?></h2>
									<h3> <?=$row['edu_name']?></h3>
								</div><!--/.experience-time-->
								<div class="timeline-horizontal-border">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<span class="single-timeline-horizontal"></span>
								</div>
								<div class="timeline">
									<div class="timeline-content">
										<h4 class="title">
										<?=$row['edu_detail']?>
										</h4>
										<h5>Sukabumi, Jawa Barat</h5>
									</div><!--/.timeline-content-->
								</div><!--/.timeline-->
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section><!--/.education-->
		<!--education end -->

		<!--skills start -->
		<section id="skills" class="skills">
				<div class="skill-content">
					<div class="section-heading text-center">
						<h2>skills</h2>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<table cellspacing="20">
									<tr>
									<td colspan="10">adobe Photoshop</td>
									<td><img src="assets/images/skills/photoshop.png" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">Figma</td>
									<td><img src="assets/images/skills/figma.png" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">CodeIginiter 4</td>
									<td><img src="assets/images/skills/CI.png" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">IT Support</td>
									<td><img src="assets/images/skills/it_support.png" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">Java</td>
									<td><img src="assets/images/skills/java.png" alt="" width="50px"></td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
							<table cellspacing="20">
									<tr>
									<td colspan="10">Fluter</td>
									<td><img src="assets/images/skills/fluter.png" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">Photografy</td>
									<td><img src="assets/images/skills/photo.jpg" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">UI/UX</td>
									<td><img src="assets/images/skills/uiux.jpg" alt="" width="50px"></td>
									</tr>
									<tr>
									<td colspan="10">Network Engginer</td>
									<td><img src="assets/images/skills/network.png" alt="" width="50px"></td>
									</tr>
								</table>
							</div>
						</div><!-- /.row -->
					</div>	<!-- /.container -->		
				</div><!-- /.skill-content-->

		</section><!--/.skills-->
		<!--skills end -->

	<!--experience start -->
	<section id="experience" class="experience">
			<div class="section-heading text-center">
				<h2>experience</h2>
			</div>
			<div class="container">
				<div class="experience-content">
						<div class="main-timeline">
							<ul>
							<?php foreach ($pengalaman as $row): ?>
								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-5">
												<div class="experience-time text-right">
													<h2> <?=$row['tahun']?> </h2>
													<h3> <?=$row['posisi']?></h3>
												</div><!--/.experience-time-->
											</div><!--/.col-->
											<div class="col-md-offset-1 col-md-5">
												<div class="timeline">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															<?=$row['pt']?>
														</h4>
														<h5> <?=$row['lokasi']?></h5>
														<p class="description">
														<?=$row['kegiatan']?>
														</p>
													</div><!--/.timeline-content-->
												</div><!--/.timeline-->
											</div><!--/.col-->
										</div>
									</div><!--/.single-timeline-box-->
								</li>
								<?php endforeach?>
							</ul>
						</div><!--.main-timeline-->
					</div><!--.experience-content-->
			</div>

		</section><!--/.experience-->
		<!--experience end -->

		<!--profiles start -->
		<section id="profiles" class="profiles">
			<div class="profiles-details">
				<div class="section-heading text-center">
					<h2>profiles</h2>
				</div>
				<div class="container">
					<div class="profiles-content">
						<div class="row">
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="fa fa-facebook"></i></a>
										<div class="profile-icon-name">Facebook</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="fa fa-facebook"></i></a>
											<div class="profile-icon-name">themeforest</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-dribbble"></i></a>
										<div class="profile-icon-name">dribbble</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-dribbble"></i></a>
											<div class="profile-icon-name">dribbble</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href="ttps://www.linkedin.com/in/dennis-saputra-02b86a221/"><i class="fa fa-linkedin"></i></a>
										<div class="profile-icon-name">Linkdln</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href="ttps://www.linkedin.com/in/dennis-saputra-02b86a221/"><i class="fa fa-linkedin"></i></a>
											<div class="profile-icon-name">Linkdln</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile profile-no-border">
									<div class="profile-txt">
										<a href="https://github.com/Dennissaputra"><i class="flaticon-github-logo"></i></a>
										<div class="profile-icon-name">github</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href="https://github.com/Dennissaputra"><i class="flaticon-github-logo"></i></a>
											<div class="profile-icon-name">github</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="profile-border"></div>
						<div class="row">
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href="https://www.instagram.com/dennis_saputra1/"><i class="fa fa-instagram"></i></a>
										<div class="profile-icon-name">Instagram</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href="https://www.instagram.com/dennis_saputra1/"><i class="fa fa-instagram"></i></a>
											<div class="profile-icon-name">Instagram</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-smug"></i></a>
										<div class="profile-icon-name">smungMung</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-smug"></i></a>
											<div class="profile-icon-name">smungMung</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile">
									<div class="profile-txt">
										<a href=""><i class="flaticon-squarespace-logo"></i></a>
										<div class="profile-icon-name">squareSpace</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href=""><i class="flaticon-squarespace-logo"></i></a>
											<div class="profile-icon-name">squareSpace</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-profile profile-no-border">
									<div class="profile-txt">
										<a href="https://www.figma.com/files/user/964061184348956670?fuid=964061184348956670"><i class="fa fa-globe"></i></a>
										<div class="profile-icon-name">Figma</div>
									</div>
									<div class="single-profile-overlay">
										<div class="profile-txt">
											<a href="https://www.figma.com/files/user/964061184348956670?fuid=964061184348956670"><i class="fa fa-globe"></i></a>
											<div class="profile-icon-name">figma</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!--/.profiles-->
		<!--profiles end -->

		<!--portfolio start -->
		<section id="portfolio" class="portfolio">
			<div class="portfolio-details">
				<div class="section-heading text-center">
					<h2>portfolio</h2>
				</div>
				<div class="container">
					<div class="portfolio-content">
						<div class="isotope">
							<div class="row">

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/Android.jpg" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												Android Devloper
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
									<div class="item">
										<img src="assets/images/portfolio/agency.png" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="assets/web1/index.php">
												Web Devloper
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/Homepage.png" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												UI/UX IOS
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->

								<div class="col-sm-4">
									<div class="item">
										<img src="assets/images/portfolio/uiux.png" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="https://www.figma.com/file/Fds2j7TWGO0T4YlAsgN7uY/UI-Kits-Event-App">
												UI/UX Android
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
									<div class="item">
										<img src="assets/images/portfolio/fluter.png" alt="portfolio image"/>
										<div class="isotope-overlay">
											<a href="#">
												Fluter
											</a>
										</div><!-- /.isotope-overlay -->
									</div><!-- /.item -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!--/.isotope-->
					</div><!--/.gallery-content-->
				</div><!--/.container-->
			</div><!--/.portfolio-details-->

		</section><!--/.portfolio-->
		<!--portfolio end -->

		<!--clients start -->
		<section id="clients" class="clients">
			<div class="section-heading text-center">
				<h2>clients</h2>
			</div>
			<div class="clients-area">
				<div class="container">
					<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="https://jmasagi.com/">
								<img src="assets/images/clients/client.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c2.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c3.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c4.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c5.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c6.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="assets/images/clients/c7.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->
				</div><!--/.container-->
			</div><!--/.clients-area-->

		</section><!--/.clients-->

		</section><!--/.clients-->
		<!--clients end -->

		<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>contact me</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-form">
									<form>
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
												  <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
												</div><!--/.form-group-->
											</div><!--/.col-->
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email*" name="email">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea class="form-control" rows="8" id="comment" placeholder="Message" ></textarea>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="single-contact-btn">
													<a class="contact-btn" href="#" role="button">submit</a>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								</div><!--/.contact-form-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-adress">
									<div class="contact-add-head">
										<h3>Dennis Saputra A</h3>
										<p>IT Support</p>
									</div>
									<div class="contact-add-info">
										<div class="single-contact-add-info">
											<h3>phone</h3>
											<p>0896 0236 2493</p>
										</div>
										<div class="single-contact-add-info">
											<h3>email</h3>
											<p>dennissptr@gmail.com</p>
										</div>
										<div class="single-contact-add-info">
											<h3>website</h3>
											<p>www.brownsine.com</p>
										</div>
									</div>
								</div><!--/.contact-adress-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-twitter"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-instagram"></i></a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->

		</section><!--/.contact-->
		<!--contact end -->
        
    </body>
	
</html>
<?= $this->endSection();?>