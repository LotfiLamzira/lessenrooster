<?php
    require_once "mustache.php-2.12.0/mustache.php";

    $profiel = array(
        "profiel" => array(
            array("imageSrc" => "image.png"),
            array("title" => "Ahmed El-Hila"),
          
        
        )
    );
    
    $headerRooster = array(
        "headerRooster" => array(
            array("header" => "Lessenrooster van Ahmed")
           
        
        )
    );

     $rooster = array(
        "rooster" => array(
            array("lestitel" => "informatica"),
            array("lesonderwerp" => "SQL")
        
        )
    );


    $mustache = new Mustache_Engine(array("loader" => new Mustache_Loader_FilesystemLoader(__DIR__ . "/templates")));
    $profielGridHTML = $mustache->render("profiel", $profiel);
    $headerRoosterGridHTML = $mustache->render("headerRooster", $headerRooster);
    $roosterGridHTML = $mustache->render("rooster", $rooster);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>roosterpagina</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body id="roosterindex">
  <div id="mainLayoutGrid">
    <div id="menu">
     <?php
        echo  $profielGridHTML;
       ?>

      <ul class="menu">
        <li><a href="index.php" class="knop"><i class="fas fa-th-large"></i>UITLOGGEN</a></li>
        <li><a href="contactindex.php"><i class="fas fa-envelope"></i>CONTACT</a></li>
        <li><a href="#"><i class="fas fa-search"></i>ZOEK LESSENROOSTER</a></li>
      </ul>

    </div>

    <div id="index">

      <div id="header">
        <p>
          <a href="#menu"><i class="fas fa-bars"></i></a>
        </p>
        <?php
        echo  $headerRoosterGridHTML;
       ?>
      </div>
      <div id="content">
        <div id="maandag" class="dag">
          <p>
            Maandag
          </p>
        </div>
        <div id="dinsdag" class="dag">
          <p>
            Dinsdag
          </p>
        </div>
        <div id="woensdag" class="dag">
          <p>
            Woensdag
          </p>
        </div>
        <div id="donderdag" class="dag">
          <p>
            Donderdag
          </p>
        </div>
        <div id="vrijdag" class="dag">
          <p>
            Vrijdag
          </p>
        </div>
        <div id="roosterMa1" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa2" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa3" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa4" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa5" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa6" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa7" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterMa8" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi1" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi2" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi3" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi4" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi5" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi6" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi7" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDi8" class="lesvak">
        <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterWo1" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterWo2" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterWo3" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterWo4" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDo1" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDo2" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDo3" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>

        <div id="roosterDo4" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDo5" class="lesvak">
        <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDo6" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterDo7" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>

        <div id="roosterDo8" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr1" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr2" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr3" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr4" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr5" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr6" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr7" class="lesvak">
          <?php
            echo  $roosterGridHTML;
           ?>
        </div>
        <div id="roosterVr8" class="lesvak">
         <?php
            echo  $roosterGridHTML;
           ?>
        </div>
      </div>

      <div id="footer">
        <p>
          powered by Lotfi & Ahmed
        </p>
      </div>
    </div>
  </div>
</body>

</html>