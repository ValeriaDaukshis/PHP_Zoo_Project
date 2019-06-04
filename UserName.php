<?php
$bool = false;
session_start();
if (isset($_SESSION['name'])){
    $UserName = $_SESSION['name'];
    $bool = true;
}

if ($bool)
    echo '<h4 align="right">Пользователь: '.$UserName.'</h4>';


