<!DOCTYPE html>

<html>

<head>
  <title>PHP Main Menu Dynamic</title>
  <link rel="stylesheet" href="./styles/general.css">
</head>

<body>

<?php
  // $msg = "HOWDY";
  // echo '<script type="text/javascript">console.log("'. $msg .'");</script>';

  require_once './includes/fun.php';
  consoleMsg("PHP to JS .. is Wicked FUN");

  // Include env.php that holds global vars with secret info
  require_once './env.php';

  // Include the database connection code
  require_once './includes/database.php';

?>

  <h1>PHP Main Menu Dynamic</h1>

  <div id="content">
    <?php
      // // echo "Holla";
      // $rNum = rand(1, 15);
      // for ($lp = 0; $lp <= $rNum; $lp++) {
      //   // echo "works";

      //   if ($lp % 2 == 0) {
      //     echo "<figure class='oneRec'>";
      //   } else {
      //     echo "<figure class='oneRecOdd'>";
      //   }

      //   echo "<img src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png' alt='FPP Chicken Rice'>";
      //   echo "<figcaption>" . $lp . " Ancho-Orange Chicken</figcaption>";
      //   echo "</figure>";
      // }
    ?>

    <?php
      // Get all the recipes from "recipes" table in the "idm232" database
      $query = "SELECT * FROM recipes";
      $results = mysqli_query($db_connection, $query);
      if ($results->num_rows > 0) {
        consoleMsg("Query successful! number of rows: $results->num_rows");
        while ($oneRecipe = mysqli_fetch_array($results)) {
          // echo '<h3>' .$oneRecipe['Title']. ' - '  . $oneRecipe['Cal/Serving']  .  '</h3>'; 
          $id = $oneRecipe['id'];
          if ($id % 2 == 0) {
            echo '<figure class="oneRec">';
          } else {
            echo '<figure class="oneRecOdd">';
          }
          echo '<img src="./images/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">';
          echo '<figcaption>' . $id . ' ' . $oneRecipe['Title'] . '</figcaption>';
          echo '</figure>';
        }

      } else {
        consoleMsg("QUERY ERROR");
      }
    ?>

<img src="./images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png" alt="FPP Chicken Rice">

  </div>
`
</body>

</html>