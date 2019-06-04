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
        <a href="tickets.php" id="button">Buy tickets / Check Events</a>
        <ul id="navigation">
            <li id="link1"><a href="index.php">Home</a></li>
            <li id="link2"><a href="zoo.php">The Zoo</a></li>
            <li id="link3"><a href="info.php">Visitors Info</a></li>
            <li id="link4" class="selected"><a href="tickets.php">Tickets</a></li>
            <li id="link5"><a href="events.php">Events</a></li>
            <li id="link6"><a href="gallery.php">Gallery</a></li>
            <li id="link7"><a href="contact.php">Log In</a></li>
        </ul>
    </header>
    <main id="content">
        <div id = "orderTickets">
            <h1>Tickets</h1>

            <form action="orderAndSendMessage.php" method="post">
                <p>Event<select name="event" >
                    <option value = "Gorillas">Gorillas</option>;
                    <option value = "Dolphins">Dolphins</option>;
                    <option value = "Lions">Lions</option>;
                    </select></p>
                <p>Kids
                    <input type="text" name="kids"  ></p>
                <p>Old
                    <input type="text" name="old" ></p>

                <p>Date<input type="date" name="calendar" value = "calendar"></p><br><br>
                <input type="submit" value="Заказать" id ="orderButton">
            </form>
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



