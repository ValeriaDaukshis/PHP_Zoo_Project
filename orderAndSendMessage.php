
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
            <li id="link7"><a href="contact.php">Contact Us</a></li>
        </ul>
    </header>
    <main id="content">
        <div id = "orderTickets">
            <?php
            $isWriten = false;
            if (isset($_POST['event']) &  isset($_POST['kids']) & isset($_POST['old']) & isset($_POST['calendar']) )
                $event = $_POST['event'];
            $old = $_POST['old'];
            $kids = $_POST['kids'];
            $calendar = $_POST['calendar'];
            $isWriten = true;

            if ($isWriten)
            {
                $theme = 'Order tickets';
                $thisText = 'Hello, you order ticket to '.$event.' event for '.$kids.' kids and '.$old.' olds. Your event will be on '.$calendar;
                $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
                $headers .= "From: От кого письмо <daukshislera@mail.ru>\r\n";
                $headers .= "Reply-To: daukshislera@mail.ru\r\n";
                $addr;
                $isWriten = false;
                foreach($_COOKIE as $key => $val)
                    if($key==='Email'){
                        $addr = $val;
                        if(mail($addr, $theme, $thisText, $headers))
                        {
                            $isWriten = true;
                            ?>
                        <h2>Order is accepted</h2>
                            <?php
                            break;
                            //header('Location: http://localhost:8080/zootemplate/zootemplate/index.php');

                            //exit;
                        }
                        else
                            ?>
                            <h2>Smth wrong. Pleese try again</h2>
                            <?php
                        $isWriten = true;
                        break;
                    }
                if (!$isWriten)
                {
                    ?>
                    <h2>Log In to order tickets</h2>
                    <?php
                }
            }

            ?>
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
