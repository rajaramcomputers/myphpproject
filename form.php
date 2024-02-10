<?php

if (isset($_POST['searchitem'])){
    // here the htmlspecialchars is used to avoid the cross scripting//

    echo htmlspecialchars($_POST['searchitem'], ENT_QUOTES);
    echo htmlspecialchars($_POST['age'], ENT_QUOTES);
    
}
?>
<form action="" method="post">
<input type= "text" name="searchitem">
<input type= "text" name="age">
<input type="submit" value = "search">

</form>