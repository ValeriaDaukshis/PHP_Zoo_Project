<?php
session_start();
$endTime = time();
include 'requestToDataBase.php';
$date =date('d m y');
$a=$db->query("SELECT * FROM statistics2");
$name = $_SESSION['name'];
$time = $endTime-$_SESSION['time'];
while ($row=$a->fetch(PDO::FETCH_ASSOC))
{
     if($row['Name']=== $name )
    {
        $query = "UPDATE statistics2 SET Time = ".$db->quote($time)." WHERE Name =".$db->quote($name);
//        $res = $db->prepare($query);
//        $res-> BindValue(':id', $row['Id'], PDO::PARAM_INT);
//        $res->execute();
        $db = null;
        exit;
    }

}

//if ($bool){
//    $db ->exec("INSERT INTO statistics2 (Name, Date, StartTime, Time) VALUES (".$db->quote($id).", ".$db->quote($date).")");

//}
//$db = null;
?>
