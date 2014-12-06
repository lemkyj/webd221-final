<?php 
	$page_title = "about";
	include 'header.php'; ?>

<main>

	<section id="WhoWeAre">
		<div class="container">
			<h1><span style="color:white">Who</span> We Are</h1>
			<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
		</div>
	</section>

	<section id="AboutUs">
		<div class="container">
			<h2><span class="underline">About Us</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  Lorem ipsum dolor       sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  </p>
		</div>
	</section>

	<section id="Team">
		<div class="container clearfix">
			<h2><span class="underline">Our Team</span></h2>
			<ul>
				<li>
					<img src="img/profile1.png" alt="">
					<h3>Christina</h3>
					<h4>Financial Manager</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</li>
				<li>
					<img src="img/profile2.png" alt="">
					<h3>Christina</h3>
					<h4>Project Manager</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</li>
				<li>
					<img src="img/profile3.png" alt="">
					<h3>Christina</h3>
					<h4>Marketing Executive</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</li>
				<li>
					<img src="img/profile4.png" alt="">
					<h3>Christina</h3>
					<h4>CEO</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</li>
			</ul>
		</div>
	</section>

	<section id="OurMission">
		<div class="container clearfix">
			<div class="leftbox">
				<h5><span class="underline">Our Mission</span></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. </p>				
			</div>

			<div class="rightbox">
				<img src="img/picture1.png" alt="">				
			</div>
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