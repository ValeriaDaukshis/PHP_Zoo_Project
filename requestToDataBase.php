<?php
try
{
    $db = new PDO('mysql:dbname=website; host=127.0.0.1', 'root', '1234');
}
catch(PDOException $e)
{
    die($e->getMessage());
}
?>
