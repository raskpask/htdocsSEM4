
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/reset.css" />
    <title>Pancakes</title>
    <link rel="icon" href="../resourses/img/Muffin.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/mainDesign.css" />
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/RecipeDesign.css" />
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
        <h4>Meatballs</h4>
        <a href="/TastyRecipe/MeatballPage"><img src="../resourses/img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
        <img src="../resourses/img/meatballsServing.jpg" alt="Serving Sugegstion" id="pancakeServing">
    </div>
    <div class="itemmainleft" id="mainleft">
        <h5> Meatballs</h5>
        <h2> Ingredients (6 Persons):</h2>
        <ul class="a">
            <li>1kg of ground beef</li>
            <li>Some salt</li>
            <li>2 garlic cloves</li>
            <li>4 eggs</li>
            <li>0.25 dl of olive oil</li>
            <li>2dl of water</li>
            <li>salt and pepper</li>
            <li>bread crums</li>
        </ul>

        <h2>Method</h2>
        <ul class="a">
            <li> Combine beef, veal, and pork in a large bowl. Add garlic, eggs, cheese, parsley, salt and pepper.
            </li>
            <li> Blend bread crumbs into meat mixture. Slowly add the water 1/2 cup at a time. The mixture should be
                very moist but still hold its shape if rolled into meatballs. (I usually use about 1 1/4 cups of water).
                Shape into meatballs.
            </li>
            <li> Heat olive oil in a large skillet. Fry meatballs in batches. When the meatball is very brown and
                slightly crisp remove from the heat and drain on a paper towel. (If your mixture is too wet, cover the
                meatballs while they are cooking so
                that they hold their shape better.
            </li>
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
            <p><input type="text" id="username" placeholder="Enter comment" name="message" required /></p>
            <p><input type="submit" value="Send"/>
        </form>

    </div>
    <div class="itemfooter" id="footer">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'footer.php' ?>
    </div>
</div>


</body>

</html>
