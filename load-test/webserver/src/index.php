<?php

session_start();


echo 'hooooo : ' .  $_SERVER['SERVER_ADDR'];

if(empty($_SESSION['tjo'])) {
    $_SESSION['tjo'] = time();
}

echo '<br>' . $_SESSION['tjo'];
