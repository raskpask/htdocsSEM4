<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/reset.css"/>
    <title>Pancakes</title>
    <link rel="icon" href="../resourses/img/Muffin.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/mainDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/RecipeDesign.css"/>
</head>

<body>
<div class="container">
    <div class="itemhead" id="header">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'header.php' ?>
    </div>
    <div class="itemmenu" id="menu">
        <h4>Recipes</h4>
        <h4><br>Pancakes</h4>
        <a href="/TastyRecipe/RecipePage"><img src="../resourses/img/panncake.jpg" alt=pancake id="pancake"></a>
        <h2>Meatballs</h2>
        <a href="/TastyRecipe/MeatballPage"><img src="../resourses/img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
        <img src="../resourses/img/pancakeServing.jpg" alt="Serving Sugegstion" id="pancakeServing">
    </div>
    <div class="itemmainleft" id="mainleft">
        <h5> Pancakes</h5>
        <h2> Ingredients (6 Persons):</h2>
        <ul class="a">
            <li>6 eggs</li>
            <li>Some salt</li>
            <li>5dl of flour</li>
            <li>1l of milk</li>
        </ul>

        <h2>Method</h2>
        <ul class="a">
            <li> In a bowl, mix all the ingredients together, breaking up any lumps.</li>
            <li> Add butter to the pan and pour a ladle full of batter for each pancake onto a hot griddle.</li>
            <li> Flip the pancakes when the edges appear cooked and the batter bubbles on top.</li>
            <li> Serve immediately.</li>
            <li> Repeat util you don't have any more batter.</li>
            <li>A serving suggestion can be with banana, nutella and whipped cream.</li>
        </ul>

    </div>
    <div class="itemcomments" id="comments">
        <h2> Comments </h2>

        <?php
        foreach ($entries as $entry) {
            echo("<p class='author'>" . $entry->getUsername() . ":</p>");
            echo("<p class='entry'>");
            echo(nl2br($entry->getMessage()));
            echo("</p>");
            if ($entry->getUsername() === $username) {
                echo("<form action='DeleteEntry' method='POST'>");
                echo("<input type='hidden' name='timestamp' value='" .
                    $entry->getTimestamp() . "'/>");
                echo("<input type='submit' value='Delete'/>");
                echo("</form>");
            }
        }
        ?>
        <h3>Wrtie something about the recipe!</h3>
        <form action="StoreEntry" method="post">
            <p><label for="Comment">Comment:</label></p>
            <p><input type="text" id="username" placeholder="Enter comment" name="message" required/></p>
            <p><input type="submit" value="Send"/>
        </form>

    </div>
    <div class="itemfooter" id="footer">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'footer.php' ?>
    </div>
</div>


</body>

</html>
