<?php 
	$page_title = "home";
	include "header.php"; ?>

	<main>

		<section id="slider">
			<div class="headertext">
				<h1>Welcome To UIBrush</h1><br>
				<h4>We Provide Ultimate Free PSD Templates</h4>
			</div>
		</section>

	<section id="extrainfo">
		<div class="container">
			<p>Lorem ipsum dolor sit amet <span>consectetuer adipiscing elit</span></p>
		</div>
	</section>

	<section id="uibrush">
		<div class="container clearfix">
			<h2><span class="underline">UIBrush</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
	voluptate velit esse cillum.</p>
			<ul>
				<li>
					<i class="fa fa-th-list fa-2x"></i>
					<h3>Innovative Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>

				</li>
				<li>
					<i class="fa fa-code fa-2x"></i>
					<h3>Clean Coding</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
				</li>
				<li>
					<i class="fa fa-location-arrow fa-2x"></i>
					<h3>Quick Delivery</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
				</li>
				<li>
					<i class="fa fa-phone fa-2x"></i>
					<h3>Best Support</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
				</li>
			</ul>
		</div>
	</section>

	<section id="recent">
		<div class="container clearfix">
			<h2><span class="underline">Recent Projects</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
				<ul>
					<li>
						<div class="cover">
							<img src="https://placeimg.com/250/167/any/grayscale" alt="">
							<h4>Portfolio One</h4>
							<div class="line"></div>
							<p>Lorem ipsum dolor sit amet.</p>				
						</div>
					</li>
					<li>
						<div class="cover">
							<img src="https://placeimg.com/250/167/any/sepia" alt="">
							<h4>Portfolio Two</h4>
							<div class="line"></div>
							<p>Lorem ipsum dolor sit amet.</p>				
						</div>
					
					</li>
					<li>
						<div class="cover">
							<img src="https://placeimg.com/250/167/people/grayscale" alt="">
							<h4>Portfolio Three</h4>
							<div class="line"></div>
							<p>Lorem ipsum dolor sit amet.</p>				
						</div>					
					</li>
					<li>
						<div class="cover">
							<img src="https://placeimg.com/250/167/arch/sepia" alt="">
							<h4>Portfolio Four</h4>
							<div class="line"></div>
							<p>Lorem ipsum dolor sit amet.</p>				
						</div>	
					</li>
				</ul>
		</div>
	</section>
	<footer>
		<p>Copyright © 2014 UIBrush.</p>	
	</footer>

	<script>
				$(document).ready(function(){
					$(".main").on("click", function(){
						$(".dropdown").toggleClass("open");
					});
				});
	</script>

	</body>
	</html>

</main>
