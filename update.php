<?php
    // here the htmlspecialchars is used to avoid the cross scripting//
    //update.php?id=2
    if (isset($_GET['id']) && ctype_digit($_GET['id'])){
        $id = $_GET['id'];
    } else {
        header('Location: select.php');
    }

    $name = "";
    $password = "";
    $gender = "";
    $color = "";
     

    if (isset($_POST['submit'])){
        if(!isset($_POST['name']) || $_POST['name'] === ''){
            $ok = false;
        } else {
            $name = $_POST['name'];
        };
        if(!isset($_POST['password']) || $_POST['password'] === ''){
            $ok = false;
        } else {
            $password = $_POST['password'];
        };
        if(!isset($_POST['gender']) || $_POST['gender'] === ''){
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        };
        if(!isset($_POST['color']) || $_POST['color'] === '' || count($_POST['languages']) == 0){
            $ok = false;
        } else {
            $color = $_POST['color'];
        };
        if(!isset($_POST['languages']) || !array($_POST['languages']) === ''){
            $ok = false;
        } else {
            $languages = $_POST['languages'];
        };
        if(!isset($_POST['comments']) || $_POST['comments'] === ''){
            $ok = false;
        } else {
            $comments = $_POST['comments'];
        };
        if(!isset($_POST['tc']) || $_POST['tc'] === ''){
            $ok = false;
        } else {
            $tc = $_POST['tc'];
        };
        if ($ok){
        // add the database code here
        $db = new mysqli(
            'localhost',
            'root',
            '',
            'php');

        $sql = sprintf(
            "UPDATE users set name='%s', gender='%s', color='%s') VALUES (
            '%s', '%s', '%s' WHERE id=%s",
            $db->real_escape_string($name),
            $db->real_escape_string($gender),
            $db->real_escape_string($color),
            $id);
            

        $db->query($sql);
        echo '<p>User Added</p>';
        $db->close();


   
      /*  printf('User name: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Languages(s): %s
        <br>Comments: %s
        <br>T&amp;C',
        htmlspecialchars($name, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($color, ENT_QUOTES),
        htmlspecialchars(implode(' ',$languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES));*/
    }
}
?>
<form action="" method="post">
User name: <input type= "text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES);?>"><br>
<input type= "password" name="password"><br>
Gender:
<input type="radio" name="gender" value="f"<?php 
if ($gender === 'f'){
    echo ' checked';
}
?>>female
<input type="radio" name="gender" value="m"<?php 
if ($gender === 'm'){
    echo ' checked';
}
?>>male
<input type="radio" name="gender" value="o"<?php 
if ($gender === 'o'){
    echo ' checked';
}
?>>other <br>
Favorite Color:
<select name="color">
    <option value="">Please select</option>
    <option value="#f00"<?php 
    if ($color === '#f00'){
        echo ' selected';
    }?>>red</option>
    <option value="#0f0"<?php 
    if ($color === '#0f0'){
        echo ' selected';
    }
    ?>>green</option>
    <option value="#00f"<?php 
    if ($color === '#00f'){
        echo ' selected';
    }
    ?>>blue</option>
</select><br>
Languages Spoken:
<select name="languages[]" multiple size="3">
    <option value="en"<?php 
    if (in_array("en", $languages)){
        echo ' selected';
    }
    ?>>English</option>
    <option value="ta"<?php 
    if (in_array("ta", $languages)){
        echo ' selected';
    }
    ?>>Tamil</option>
    <option value="hi"<?php 
    if (in_array("hi", $languages)){
        echo ' selected';
    }
    ?>>Hindi</option>
</select><br>
Comments: <textarea rows="3" cols="10" name="comments">
<?php echo htmlspecialchars($comments, ENT_QUOTES);?>
</textarea><br>
<input type="checkbox" name="tc" value="ok"<?php 
if($tc === 'ok'){
    echo ' checked';
}
?>
>I accept the T&amp;C<br>
<input type="submit" name="submit" value = "register">

</form>