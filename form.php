<?php


    // here the htmlspecialchars is used to avoid the cross scripting//
    $name = "";
    $password = "";
    $gender = "";
    $color = "";
    $languages = [];
    $comments = "";
    $tc = "";

    if (isset($_POST['submit'])){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        };
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        };
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        };
        if(isset($_POST['color'])){
            $color = $_POST['color'];
        };
        if(isset($_POST['languages'])){
            $languages = $_POST['languages'];
        };
        if(isset($_POST['comments'])){
            $comments = $_POST['comments'];
        };
        if(isset($_POST['tc'])){
            $tc = $_POST['tc'];
        };
        printf('User name: %s
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
        htmlspecialchars($tc, ENT_QUOTES));
}
?>
<form action="" method="post">
<input type= "text" name="name"><br>
<input type= "password" name="password"><br>
Gender:
<input type="radio" name="gender" value="f">female
<input type="radio" name="gender" value="m">male
<input type="radio" name="other" value="o">other <br>
Favorite Color:
<select name="color">
    <option value="">Please select</option>
    <option value="#f00">red</option>
    <option value="#0f0">green</option>
    <option value="#00f">blue</option>
</select><br>
Languages Spoken:
<select name="languages[]" multiple size="3">
    <option value="en">English</option>
    <option value="ta">Tamil</option>
    <option value="hi">Hindi</option>
</select><br>
Comments: <textarea rows="3" cols="10" name="comments"></textarea><br>
<input type="checkbox" name="tc" value="ok">I accept the T&amp;C<br>
<input type="submit" name="submit" value = "register">

</form>