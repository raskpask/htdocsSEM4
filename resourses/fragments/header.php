<?php
require_once 'keys.php';
?>
<!DOCTYPE html>
<html lang="en">


<div><a href="/Index.php"><img src="img/homepage1.png" alt="Link to homepage" id="homebutton"></a>
    <h1> Tasty Recipes </h1>
    <?php
    if (isset($_SESSION[LOGIN_USERNAME])) {
        echo "<button id='logoutbutton'> Logout </button>";
    } else {
        echo "<button id='loginbutton'> Login </button>";
        echo "<button id='signupbutton'> Signup </button>";
    }
    ?>
</div>
</body>


</html>
