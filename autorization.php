<?php
$isWriten = false;
if (isset($_POST['name']) & isset($_POST['password']) )
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $isWriten = true;
}

if ($isWriten ) {
    include 'requestToDataBase.php';

    $a = $db->query("SELECT * FROM usersdata");
    $bool = false;
    while ($row = $a->fetch(PDO::FETCH_ASSOC)) {
        if ($row['Password'] === sha1($password) & $row['Name'] === $name) {
            $bool = true;
            session_start();
            $_SESSION['time'] = time();
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $row['Email'];

        }
    }
    if (!$bool) {
        echo "Not correct name or password";
    }
    else
    {
        $bool2 = true;
        $date =date('Y-m-d');
        $a = $db->query("SELECT * FROM statistics2");
        while ($row = $a->fetch(PDO::FETCH_ASSOC)) {
            if ($row['Date'] === $date && $row['Name'] === $name) {
                $db = null;
                header('Location: http://localhost:8080/zootemplate/zootemplate/index.php');
            }
        }

        $db->exec("INSERT INTO statistics2 ( Name, Date, Time) VALUES (" . $db->quote($name) . "," . $db->quote($date) . ", " . $db->quote(300) . ")");
        $db = null;
        header('Location: http://localhost:8080/zootemplate/zootemplate/index.php');

    }
}

?>

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

            <form action="autorization.php" method="post">
                <h2>Write your name</h2>
                <input type="text" name="name" value= "name" ><br><br>

                <h2>Write your password</h2>
                <input type="text" name="password" value= "password"> <br> <br>
                <input type="submit" value="Autorize"  >
            </form>

            <form action="newPassword.php">
                <input type="submit" value="Change password"  >
            </form>
            <form action="registration.php">
                <input type="submit" value="Registrate">
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





