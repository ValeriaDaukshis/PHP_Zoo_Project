<?php
echo 'hbh';
include 'requestToDataBase.php';
$id = $_SERVER['REMOTE_ADDR'];
$date =date('d m y');
$a=$db->query("SELECT * FROM statistics2");
$bool = true;
while ($row=$a->fetch(PDO::FETCH_ASSOC))
{
    if($row['Id'] === $id && $row['Date'] === $date)
    {
       $bool = false;
       echo 'bad';
       break;
    }
}

if ($bool){
    $db ->exec("INSERT INTO statistics2 (Name, Date, StartTime, Time) VALUES (".$db->quote($id).", ".$db->quote($date).")");

}
$db = null;
?>
