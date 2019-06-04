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
					<li id="link3"><a href="info.php">Visitors Info</a></li>
					<li id="link4"><a href="tickets.php">Tickets</a></li>
					<li id="link5" class="selected"><a href="events.php">Events</a></li>
					<li id="link6"><a href="gallery.php">Gallery</a></li>
                    <li id="link7"><a href="contact.php">Log In</a></li>
				</ul>
			</header>
			<main id="content">
				<div id="events">
					<h1>Events</h1>
					<ul>
						<li>
							<div><a href="#"><img src="images/event-lion.jpg" alt="лева"/></a></div>
							<h4>Cras sit amet orci at magna ornare porta nec et neque</h4>
							<p>Date : Feb 15 - 20 2019</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur .
							</p>
						</li>
						<li>
							<div><a href="#"><img src="images/event-dolphin.jpg" alt="дельфин"/></a></div>
							<h4><a href="#">Suspendisse nunc nibh, commodo Nulla ac accumsan ante</a></h4>
							<p>Date : Feb 15 - 20 2019</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur .
							</p>
						</li>
						<li>
							<div><a href="#"><img src="images/event-gorilla.jpg" alt="горилла"/></a></div>
							<h4><a href="#">Cras tempus varius mauris, et dictum neque malesuada vitae. Cras sit amet orci at magna ornare porta nec et neque. Cras congue nibh eu felis dictum non aliquam elit scelerisque</a></h4>
							<p>Date : Feb 15 - 20 2019</p>
							<p> Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue. Vivamus eget justo libero.
								Quisque molestie ante vitae quam euismod quis vehicula nisi placerat.</p>
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
