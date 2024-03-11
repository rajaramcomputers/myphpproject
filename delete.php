<?php

require 'auth.inc.php';
require 'config.inc.php';

readfile('header.tmpl.html');

//delte.php?id=2
if (isset($_GET['id']) && ctype_digit($_GET['id']))
{
    $id = $_GET['id'];
} else {
    header('Location:select.php');
}
$db = new mysqli(
    'localhost',
    'root',
    '',
    'php');

$sql = "DELETE FROM users WHERE id=$id";
$db->query($sql);
echo '<p>User Deleted</p>';
$db->close();
?>