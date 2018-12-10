<!DOCTYPE html>
<html lang="eng">

<head>
  <link rel="stylesheet" type="text/css" href="../resourses/CSS/reset.css" />
  <title>Login</title>
  <link rel="icon" href="../img/Muffin.ico">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../resourses/CSS/mainDesign.css" />
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/LoginDesign.css" />
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>

    <script type="text/javascript"
            src="../resourses/js/login.js"></script>
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'header.php' ?>
    </div>

    <div class="itemmainleft" id="mainleft">
      <h2>Fill the form to Login</h2>

      <p><label for="username">Username:</label></p>
      <p><input type="text" id="username" placeholder="Enter Username" name="username" data-bind="textInput: username"required /></p>

      <p><label for="password">Password:</label></p>
      <p><input type="password" id="password" placeholder="Enter Password" name="password" data-bind="textInput: password" required /></p>

        <p><button id="loginbutton">Login</button></p>
      </form>


    </div>


    <div class="itemfooter" id="footer">
        <?php include '../resourses/fragments/footer.php' ?>
    </div>
  </div>


</body>

</html>
