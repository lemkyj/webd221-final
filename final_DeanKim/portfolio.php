<?php 
	$page_title = "portfolio";
	include 'header.php'; ?>

<main>

	<section id="OurWorks">
		<div class="container">
			<h1><span style="color:white">Our</span> Works</h1>
			<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
		</div>
	</section>

	<section id="Portfolio">
		<div class="container clearfix">
			<h2><span class="underline">Our Portfolio</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  Lorem ipsum dolor       sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
			<nav class="options">
				<ul>
					<li>All</li>
					<li>HTML</li>
					<li>jQuery</li>
					<li>UI Design</li>
					<li>Wordpress</li>
				</ul>
			</nav>

			<nav class="mobile_options">
				<ul>
					<li class="column12">All</li>
					<li class="column12">HTML</li>
					<li class="column12">jQuery</li>
					<li class="column12">UI Design</li>
					<li class="column12">Wordpress</li>

				</ul>
			</nav>

			<ul id="pictures">
				<li>
					<figure>
						<img src="https://placeimg.com/273/200/animals" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="https://placeimg.com/273/200/arch" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>

				</li>
				<li>
					<figure>
						<img src="https://placeimg.com/273/200/nature" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="https://placeimg.com/273/200/people" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>
				</li>

				<li>
					<figure>
						<img src="https://placeimg.com/273/200/tech" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>
				</li>


				<li>
					<figure>
						<img src="https://placeimg.com/273/200/any/grayscale" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>
				</li>

				<li>

					<figure>
						<img src="https://placeimg.com/273/200/any/sepia" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>

				</li>

				<li>
					<figure>
						<img src="https://placeimg.com/273/200/arch" alt="">
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>
	
				</li>

				<li>
					<figure>
						<img src="https://placeimg.com/273/200/people" alt="">	
						<figcaption>
							<span>
								<img src="img/zoom.png" alt="">
								<h3>Project Name</h3>
							</span>
						</figcaption>
					</figure>

			
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