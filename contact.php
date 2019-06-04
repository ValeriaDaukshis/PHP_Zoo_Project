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
				<ul id="navigation">
					<li id="link1"><a href="index.php">Home</a></li>
					<li id="link2"><a href="zoo.php">The Zoo</a></li>
					<li id="link3"><a href="info.php">Visitors Info</a></li>
					<li id="link4"><a href="tickets.php">Tickets</a></li>
					<li id="link5"><a href="events.php">Events</a></li>
					<li id="link6"><a href="gallery.php">Gallery</a></li>
					<li id="link7" class="selected"><a href="contact.php">Log In</a></li>
				</ul>
			</header>
			<main id="content">
				<div id="contact">
					<h1>Contact Information</h1>
					<h4>Location :</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
						et dolore magna aliqua</p>
					<h4>Ticketing Office :</h4>
					<p>285 067-39 282 or 5282 9273 999</p>

					<a href="http://facebook.com/freewebsitetemplates" id="facebook">Facebook</a>
					<a href="http://twitter.com/fwtemplates" id="twitter">Twitter</a>

					<form action="autorization.php">
						<input type="submit" value="LOG IN">
					</form>
                    <form action="logout.php">
                        <input type="submit" value="LOG OUT">
                    </form>
				</div>
				<!--here-->

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

