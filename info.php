<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Zoo</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="page">
			<header >
                <?php  include 'UserName.php';
                ?>
				<a href="index.php" id="logo"><img src="images/logo-page.jpg" alt="логотип"/></a>
				<ul id="links">
					<li class="first">
						<h2>Live</h2>
						<span>Have fun in your visit</span>
					</li>
					<li>
						<h2>Love</h2>
						<span>Donate for the animals</span>
					</li>
					<li>
						<h2>Learn</h2>
						<span>Get to know the animals</span>
					</li>
				</ul>
                <a href="statisticsResults.php" id="button">Look our statistics</a>
				<ul id="navigation">
					<li id="link1"><a href="index.php">Home</a></li>
					<li id="link2"><a href="zoo.php">The Zoo</a></li>
					<li id="link3" class="selected"><a href="info.php">Visitors Info</a></li>
					<li id="link4"><a href="tickets.php">Tickets</a></li>
					<li id="link5"><a href="events.php">Events</a></li>
					<li id="link6"><a href="gallery.php">Gallery</a></li>
                    <li id="link7"><a href="contact.php">Log In</a></li>
				</ul>
			</header>
			<main id="content">
				<div id="info">
					<h1>Visitors Info</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur .
					</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<ul>
						<li>
							<h2><a href="#">Lorem accumsan consect</a></h2>
							<p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.
							Quisque molestie ante vitae quam euismod quis vehicula nisi placerat.</p>
						</li>
						<li>
							<h2><a href="#">sitamet bibendum ultricies</a></h2>
							<p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.
							Quisque molestie ante vitae quam euismod quis vehicula nisi placerat.</p>
						</li>
						<li>
							<h2><a href="#">Etiam eu ante vitae eros</a></h2>
							<p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.
							Quisque molestie ante vitae quam euismod quis vehicula nisi placerat.</p>
						</li>
						<li>
							<h2><a href="#">Etiam eu ante vitae eros</a></h2>
							<p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.
								Quisque molestie ante vitae quam euismod quis vehicula nisi placerat.</p>
						</li>
					</ul>
				</div>
				<!--here-->
				<div id="featured">
					<h2>Meet our Animals</h2>
					<ul>
						<li class="first">
							<a href="gallery.php"><img src="images/penguin.jpg" alt="пингвин"/></a>
							<a href="gallery.php">Duis laoreet</a>
						</li>
						<li>
							<a href="gallery.php"><img src="images/elephant.jpg" alt="слон"/></a>
							<a href="gallery.php">Curabitur</a>
						</li>
						<li>
							<a href="gallery.php"><img src="images/owl.jpg" alt="сова"/></a>
							<a href="gallery.php">Adipiscing</a>
						</li>
						<li>
							<a href="gallery.php"><img src="images/butterfly.jpg" alt="бабочка"/></a>
							<a href="gallery.php">Sed Volutpat</a>
						</li>
						<li>
							<a href="gallery.php"><img src="images/turtle.jpg" alt="черепаха"/></a>
							<a href="gallery.php">Nulla lobortis</a>
						</li>
						<li>
							<a href="gallery.php"><img src="images/snake.jpg" alt="змея"/></a>
							<a href="gallery.php">Suspendisse</a>
						</li>
						<li>
							<a href="gallery.php"><img src="images/gorilla.jpg" alt="горилла"/></a>
							<a href="gallery.php">Tincidunt</a>
						</li>
						<li class="last">
							<a href="gallery.php"><img src="images/button-view-gallery2.jpg" alt="галерея"/></a>
							<a href="gallery.php">View  </br> Gallery</a>
						</li>
					</ul>
				</div>
			</main>
			<footer>
				<a href="index.php" class="logo">
					<img src="images/animal-kingdom.jpg" alt="просто картинка"/>
				</a>
				<div class = "footerinfo">
					Lorem ipsum dolor sit amet, consecteturrfgef
					<br>sed do eiusmod tempor incididunt ut labore
					<br> 285 067-39 282 / 5282 9273 999
					<br>     email@animalkingdomzoo.com
				</div>
				<p>Copyright &#169; 2019. All Rights Reserved.</p>
			</footer>
		</div>
	</body>
</html>
