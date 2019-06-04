<?php
$bool = false;
session_start();
if ($_SESSION['name'])
    $UserName = $_SESSION['name'];
//foreach($_COOKIE as $key => $val)
//        if($key=='Name'){
//            $UserName = $val;
//            $bool = true;
//        }


if ($bool)
    echo '<h4 align="right">Пользователь: '.$UserName.'</h4>';


