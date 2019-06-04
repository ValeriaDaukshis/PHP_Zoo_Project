

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
        <a href="index.php" id="logo"><img src="images/logo-page.jpg" alt="логотип"/></a>
        <ul id="navigation">
            <li id="link1"><a href="index.php">Home</a></li>
            <li id="link2"><a href="zoo.php">The Zoo</a></li>
            <li id="link3"><a href="info.php">Visitors Info</a></li>
            <li id="link4"><a href="tickets.php">Tickets</a></li>
            <li id="link5"><a href="events.php">Events</a></li>
            <li id="link6"><a href="gallery.php">Gallery</a></li>
            <li id="link7" class="selected"><a href="contact.php">Contact Us</a></li>
        </ul>
    </header>
    <main id="content">
        <div id="contact">

            <form action="registration.php" method="post">
                <h2>Write your name</h2>
                <input type="text" name="name" value= "name"><br>

                <h2>Write your email</h2>
                <input type="text" name="email" value= "email" ><br><br>

                <h2>Write your password</h2>
                <input type="text" name="password" value= "password"><br>

                <h2>Confirm your password</h2>
                <input type="text" name="confirmPassword" value= "confirmPassword"><br><br>

                <input type="submit" value="Registrate">
            </form>
            <form action="autorization.php">
                <input type="submit" value="Autorization">
            </form>
            <?php
            $isWriten = false;
            $confirm='';
            $password='';
            if (isset($_POST['name']) & isset($_POST['password']) & isset($_POST['confirmPassword'])& isset($_POST['email']))
            {
                $name = $_POST['name'];
                $password = $_POST['password'];
                $confirm = $_POST['confirmPassword'];
                $email = $_POST['email'];
                $isWriten = true;
            }

            if ($isWriten & $password === $confirm)
            {
                include 'requestToDataBase.php';

                $a=$db->query("SELECT Password FROM usersdata");
                while ($row=$a->fetch(PDO::FETCH_ASSOC))
                {
                    if($row['Password']=== sha1($password))
                    {
                        ?>
                        <h2>Change your password</h2>
                        <?php
                        //echo "Change your password";// in database
                        exit;
                    }
                }
                $db ->exec("INSERT INTO usersdata ( Name, Password, Email) VALUES (".$db->quote($name).",".$db->quote(sha1($password)).", ".$db->quote($email).")");
                $db = null;
                ?>
                <h2>Ok. Come to Registrate button</h2>
                <?php
            }
            else if ($isWriten & $password !== $confirm)
                echo "Passwords are different";

            ?>
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

