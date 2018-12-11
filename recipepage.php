<?php
$xml=simplexml_load_file("recipe.xml");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="resourses/CSS/reset.css" />
  <title>Pancakes</title>
  <link rel="icon" href="img/Muffin.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="resourses/CSS/mainDesign.css" />
  <link rel="stylesheet" type="text/css" href="resourses/CSS/RecipeDesign.css" />
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>

    <script type="text/javascript"
            src="resourses/js/comment.js"></script>
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header"> <?php
      include 'resourses/fragments/header.php';
      ?>
    </div>
    <div class="itemmenu" id="menu">
      <h4>Recipes</h4>
      <h4><br>Pancakes</h4>
      <a href="/pancake.php"><img src="img/panncake.jpg" alt=pancake id="pancake"></a>
      <h4>Meatballs</h4>
      <a href="/meatballs.php"><img src="img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
      <img src="<?php echo $xml->recipe[$_SESSION['RECIPE_NUMBER']]->imagepath ; ?>" alt="Serving Sugegstion" id="pancakeServing"></img>
    </div>
    <div class="itemmainleft" id="mainleft">
      <h5> <?php echo $xml->recipe[$_SESSION['RECIPE_NUMBER']]->title; ?></h5>
      <h2> <?php echo $xml->recipe[$_SESSION['RECIPE_NUMBER']]->description->li; ?></h2>
      <ul class="a">
          <?php foreach($xml->recipe[$_SESSION['RECIPE_NUMBER']]->ingredient->children() as $ingredient) {
              echo "<li>$ingredient</li>";
          }?>
      </ul>

      <h2><?php echo $xml->recipe[$_SESSION['RECIPE_NUMBER']]->description->li[1]; ?></h2>
        <ul class="a">
            <?php foreach($xml->recipe[$_SESSION['RECIPE_NUMBER']]->recipetext->children() as $recipetext) {
                echo "<li>$recipetext</li>";
            }?>
        </ul>

    </div>
    <div class="itemcomments" id="comments">
      <h2> Comments </h2>
    <div id="commentsPlace">


    </div>


  <h3>Wrtie something about the recipe!</h3>

        <p> <label for="Comment"><b>Comment</b></label>
            <input type="text" data-bind ="value: comment, valueUpdate: 'afterkeydown'" id="comment" placeholder="Enter comment" name="comment" required></p>

        <p> <button type="submit" id="comment">Send</button> <button id="reload">Reload Conversation</button></p>

</div>
    <div class="itemfooter" id="footer">
      <?php
        include 'resourses/fragments/footer.php';
      ?>
    </div>
  </div>


</body>

</html>
