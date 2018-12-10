
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/reset.css" />
    <title>Tasty Recipes</title>
    <link rel="icon" href="Muffin.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/mainDesign.css" />
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/RecipeDesign.css" />
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>

</head>

<body>
<div class="container">
    <div class="itemhead" id="header">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'header.php' ?>
    </div>
    <div class="itemmenu" id="menu">
        <h4>Recipes</h4>
        <h2><br>Pancakes</h2>
        <a href="/TastyRecipe/RecipePage"><img src="../resourses/img/panncake.jpg" alt=pancake id="pancake"></a>
        <h2>Meatballs</h2>
        <a href="/TastyRecipe/MeatballPage"><img src="../resourses/img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
        <img src="../resourses/img/pancakebackground.png" alt="pancakepicture" id="pancakepicture">
        <img src="../resourses/img/meatballsfront.png" alt="meatballs" id="meatballspicture">
    </div>
    <div class="itemmainleft" id="mainleft">
        <h2> This website contains swedish recipes!</h2>
        <h6> Click on the calendar to find out what to eat on which day! </h6>
        <a href="/TastyRecipe/CalendarPage"><img src="../resourses/img/calendar.jpg" alt=calendar id="calendar"></a>
    </div>
    <div class="itemfooter" id="footer">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'footer.php' ?>
    </div>
</div>
</body>

</html>
