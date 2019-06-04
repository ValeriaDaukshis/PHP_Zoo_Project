<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Zoo</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="page">
			<header>
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
				<a href="tickets.php" id="button">Buy tickets / Check Events</a>
				<ul id="navigation">
					<li id="link1"><a href="index.php">Home</a></li>
					<li id="link2"><a href="zoo.php">The Zoo</a></li>
					<li id="link3"><a href="info.php">Visitors Info</a></li>
					<li id="link4"><a href="tickets.php">Tickets</a></li>
					<li id="link5"><a href="events.php">Events</a></li>
					<li id="link6" class="selected"><a href="gallery.php">Gallery</a></li>
                    <li id="link7"><a href="contact.php">Log In</a></li>
				</ul>
			</header>
			<main id="content">
				<div id="gallery">
					<h1>Meet our Animals</h1>
							<div class = "image"><a href="#"><img src="images/gallery-lion.jpg" alt="лева"/></a>
							<a href="#">Morbi Suscipit</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-turtle.jpg" alt="черепаха"/></a>
							<a href="#">Donec Augue</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-elephant.jpg" alt="слон"/></a>
							<a href="#">Rhoncus Rutrum</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-penguin.jpg" alt="пингвин"/></a>
							<a href="#">Donec Lacus</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-dolphin.jpg" alt="дельфин"/></a>
							<a href="#">Vestibulum Libero</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-buterfly.jpg" alt="бабочка"/></a>
							<a href="#">Integer Libero</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-gorilla.jpg" alt="горилла"/></a>
							<a href="#">Malesuada Lacinia</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-owl.jpg" alt="сова"/></a>
							<a href="#">Praesent Odio</a></div>

							<div class = "image"><a href="#"><img src="images/gallery-blue-butterfly.jpg" alt="галерея"/></a>
							<a href="#">Pulvinar Ultrices</a></div>

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
