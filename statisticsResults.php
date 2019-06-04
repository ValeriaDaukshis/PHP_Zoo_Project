

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
            <li id="link2" class="selected"><a href="zoo.php">The Zoo</a></li>
            <li id="link3"><a href="info.php">Visitors Info</a></li>
            <li id="link4"><a href="tickets.php">Tickets</a></li>
            <li id="link5"><a href="events.php">Events</a></li>
            <li id="link6"><a href="gallery.php">Gallery</a></li>
            <li id="link7"><a href="contact.php">Contact Us</a></li>
        </ul>
    </header>
    <main id="content">
        <div id = "orderTickets">

            <?php
               include 'requestToDataBase.php';
            $now = strtotime("now");
            $weekdate = strtotime("-1 weeks");
            $monthdate = strtotime("-1 month");

            $dateToday =date('Y-m-d',$now);
            $dateWeek =date('Y-m-d',$weekdate);
            $dateMonth =date('Y-m-d',$monthdate);

                $a=$db->query("SELECT * FROM statistics2");
                $today = 0;
                $week = 0;
                $month = 0;
                while ($row=$a->fetch(PDO::FETCH_ASSOC))
                {
                    if( $row['Date'] === $dateToday)
                    {
                        $today++;
                    }
                    if ($row['Date'] >= $dateWeek){
                        $week++;
                    }
                    if ($row['Date'] >= $dateMonth){
                        $month++;
                    }
                }

                echo '<h2 align="center" >STATISTICS: </h2><br>';
                echo '<h4 align="center">Today: '.$today.'</h4>';
                echo '<h4 align="center">On this Week: '.$week.'</h4>';
                echo '<h4 align="center">On this Month: '.$month.'</h4>';
                $db = null;
            /*session_start();

            function GetUsersOnline(){
                //clearstatcache();
                $SessionDir = session_save_path();
                $Timeout = 60 * 3;
                if ($Handler = scandir ($SessionDir)){
                    $count = count ($Handler);
                    $users = 0;

                    for ($i = 2; $i < $count; $i++){
                        if (time() - fileatime ($SessionDir . '/' . $Handler[$i]) < $Timeout){
                            $users++;
                        }
                    }

                    return $users;
                } else {
                    return 'error';
                }
            }

            echo 'Online: ' . GetUsersOnline();*/
            ?>
        </div>

    </main>

</div>
</body>
</html>
