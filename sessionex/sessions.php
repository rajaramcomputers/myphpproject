<?php
//Intializing a session

session_start();

$_SESSION['username'] = 'ram';
echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Not Available';

session_destroy;
