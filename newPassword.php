

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

            <form action="newPassword.php" method="post">
                <h2>Write your name</h2>
                <input type="text" name="name" value= "name"><br>

                <h2>Write old password</h2>
                <input type="text" name="password" value= "password"><br>

                <h2>Write new password</h2>
                <input type="text" name="newPassword" value= "old"><br>

                <h2>Confirm new password</h2>
                <input type="text" name="confirmPassword" value= "confirmPassword"><br><br>

                <input type="submit" value="Rewrite">
            </form>

            <form action="autorization.php">
                <input type="submit" value="Autorization">
            </form>
        </div>

        <?php
        $isWriten = false;
        if (isset($_POST['name']) & isset($_POST['password']) & isset($_POST['newPassword']) & isset($_POST['confirmPassword']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $new = $_POST['newPassword'];
            $confirm = $_POST['confirmPassword'];
            $isWriten = true;
        }

        if ($isWriten & $new === $confirm)
        {

            include 'requestToDataBase.php';
            $a=$db->query("SELECT * FROM usersdata");

            $bool = false;
            while ($row=$a->fetch(PDO::FETCH_ASSOC))
            {
                if($row['Password'] === sha1($new))
                {
                    echo "Change new password";
                    exit;
                }
                else if($row['Password']=== sha1($password) & $row['Name']=== $name)
                {
                    $query = "UPDATE usersdata SET Password = ".$db->quote(sha1($new))." WHERE Id =:id";
                    $res = $db->prepare($query);
                    $res-> BindValue(':id', $row['Id'], PDO::PARAM_INT);
                    $res->execute();

                    ?>
                    <h3>Is Writen</h3>
                    <?php
                    $db = null;
                    exit;
                }

            }
            print ("Incorrect password or name");

            $db = null;
        }
        else if ($isWriten & $new !== $confirm)
            echo "Passwords are different";
        ?>


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

