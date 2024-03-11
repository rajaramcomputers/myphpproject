<?php
require 'config.inc.php';
readfile('header.tmpl.html');
session_start();

?>

<?php
$message ='';

if (isset($_POST['name']) && isset($_POST['password'])){
 
    $db = new mysqli(
        MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
    $sql = sprintf("SELECT * from users WHERE name='%s'",
            $db->real_escape_string($_POST['name']));

    $result = $db->query($sql);

    $row = $result->fetch_object();

    if ($row != null){
        $hash = $row->hash;
    if (password_verify($_POST['password'], $hash)){
        $message = 'Login Successful';

        $_SESSION['username'] = $row->name;
        $_SESSION['isAdmin'] = $row->isAdmin;

    } else {
        $message = 'Login Unsuccessful';
    } 
    } else {
        $message = 'Login Unsuccessful';
    }

    $db->close();
    echo "<div class='text-info'>$message</div>";
}
?>
<form method="post" action="">
    <div class="form-group">
        <label for="name">User name</label><input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
         <label for="name">Password</label><input type="password" class="form-control" name="password" id="password"><br>
    </div>
   
        <input type="submit" value="Login" class="btn btn-primary">
</form>

<?php
readfile('footer.tmpl.html');
 
?>

