<?php
require_once 'keys.php';
?>
<!DOCTYPE html>
<html lang="en">


<div><a href="/Index.php"><img src="img/homepage1.png" alt="Link to homepage" id="homebutton"></a>
    <h1> Tasty Recipes </h1>
    <?php
    if (isset($_SESSION[LOGIN_USERNAME])) {
        echo "<a href='/logout.php' id='loginbutton'> Logout </a>";
    } else {
        echo "<a href='/login_page.php' id='loginbutton'> Login </a>";
        echo "<a href='/signup_page.php' id='loginbutton'> Signup </a>";
    }
    ?>
</div>
</body>


</html>
