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

				<a href="index.php" id="logo"><img src="images/logo.jpg" alt="логотип"/></a>
				<ul id ="sometext">
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

				<a href="tickets.php" class="button">Buy tickets / Check Events</a>
				<ul id="navigation">
					<li id="link1" class="selected"><a href="index.php">Home</a></li>
					<li id="link2"><a href="zoo.php">The Zoo</a></li>
					<li id="link3"><a href="info.php">Visitors Info</a></li>
					<li id="link4"><a href="tickets.php">Tickets</a></li>
					<li id="link5"><a href="events.php">Events</a></li>
					<li id="link6"><a href="gallery.php">Gallery</a></li>
                    <li id="link7"><a href="contact.php">Log In</a></li>
				</ul>
				<img src="images/lion-family.jpg" alt="figure"/>

			</header>

			<main id="content">
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
							<a href="gallery.php"><img src="images/button-view-gallery.jpg" alt="галерея животных"
                                                       border="0"/></a>
							<a href="gallery.php">Gallery</a>
						</li>
					</ul>
				</div>
				<div class="section1">
					<h2>Events</h2>
					<ul id="article">
						<li class="first">
							<a href="#"><span>Jul 17</span></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
								et dolore magna aliqua</p>
						</li>
						<li>
							<a href="#"><span>Aug 23</span></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
								et dolore magna aliqua</p>
						</li>
						<li>
							<a href="#"><span>Oct 01</span></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
								et dolore magna aliqua</p>
						</li>
					</ul>
				</div>
				<div class="section2">
					<h2>Blog : Curabitur sodales</h2>
					<p>Mauris dictum augue non sapien interdum cursus. Phasellus nisl eros, viverra nec blandit</p>
					<a href="#"><img src="images/dolphins.jpg" alt="дельфин"/></a>
					<ul>
						<li>
							<p>Duis a est eget nunc pretium laoreet</p>
						</li>
						<li>
							<p> Mauris dictum augue non sapien interdum cursus.   </p>
						</li>
						<li>
							<p>Mauris dictum augue non sapien interdum cursus</p>
						</li>
						<li>
							<p>Phasellus nisl eros, viverra nec blandit et, pellentesque ut augue</p>
						</li>
					</ul>
					<div id="subsection1">
						<ul>
							<li>
								<a href="#"><img src="images/gorilla-2.jpg" alt="горилла"/></a>
								<h4><a href="#">Malesuada fames turpis egestas</a></h4>
								<p>QUisque lobortis, sem condimentum lacinia</p>
							</li>
							<li>
								<a href="#"><img src="images/snake-2.jpg" alt="змея"/></a>
								<h4><a href="#">Morbi eu lacus lorem, sed venenatis ligula</a></h4>
								<p>Fusce eratenim, lacinia eget pretium vitae</p>
							</li>
						</ul>
					</div>
					<div id="subsection2">
						<ul>
							<li>
								<a href="#"><img src="images/butterfly-2.jpg" alt="бабочка"/></a>
								<h4><a href="#">Morbi eu lacus lorem</a></h4>
								<p>Fusce eratenim, lacinia eget pretium vitae</p>
							</li>
						</ul>
					</div>
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


