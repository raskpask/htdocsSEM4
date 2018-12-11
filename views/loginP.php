<!DOCTYPE html>
<html lang="eng">

<head>
  <link rel="stylesheet" type="text/css" href="../resourses/CSS/reset.css" />
  <title>Login</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../resourses/CSS/mainDesign.css" />
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/LoginDesign.css" />
    <script type="text/javascript"
            src="../resourses/js/login.js"></script>
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'header.php' ?>
    </div>

    <div class="itemmainleft" id="mainleft">
        <form data-bind="submit: login" id = 'login'>

            <h2>Fill the form to Login</h2>

                <p><label for="username"><b>Username</b></label>
                <input type="text" data-bind ="value: username, valueUpdate: 'afterkeydown'" id="username" placeholder="Enter Username" name="username" required>
                </p><p>
                <label for="password"><b>Password</b></label>
                <input type="password" data-bind ="value: password, valueUpdate: 'afterkeydown'" id="password" placeholder="Enter Password" name="password" required>
            </p><p>
                <button type="submit">Login</button>
            </p>


        </form>

    </div>


    <div class="itemfooter" id="footer">
        <?php include '../resourses/fragments/footer.php' ?>
    </div>
  </div>


</body>

</html>
