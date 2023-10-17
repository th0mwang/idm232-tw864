<!DOCTYPE html>
<html>

<head>
  <title>PHP Main Menu</title>
  <link rel="stylesheet" href="general.css">
</head>

<body>
  <h1>PHP Main Menu</h1>

<div id="content">
  <?php
$rNum = rand(1,15);
for ($lp = 0; $lp <=$rNum; $lp++) {

  echo "<figure class='oneRec'>";
  echo "<img src='/images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png'>";
  echo "<figcaption>" . $lp . "Anco-Oragnge Chicken </figcaption>";
  echo "</figure>";

}
  ?>
</div>

</body>

</html>