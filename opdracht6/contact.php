<?php
    require_once "mustache.php-2.12.0/mustache.php";

    $profiel = array(
        "profiel" => array(
            array("imageSrc" => "image.png"),
            array("menu" => "Ahmed El-hila")
         
        )
    );

    $mustache = new Mustache_Engine(array("loader" => new Mustache_Loader_FilesystemLoader(__DIR__ . "/templates")));
    $profielGridHTML = $mustache->render("profiel", $profiel);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>contactpagina</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body id="contactindex">
  <div id="contactpagina">
    <div id="menu">
       <?php
        echo  $profielGridHTML;
       ?>


      <ul class="menu">
        <li><a href="index.php" class="knop"><i class="fas fa-th-large"></i>UITLOGGEN</a></li>
        <li><a href="rooster.php"><i class="fas fa-home"></i>HOME</a></li>
      </ul>

    </div>

    <div id="contact">
      <div id="header">
        <p>
          <a href="#menu"><i class="fas fa-bars"></i></a>CONTACT
        </p>
      </div>
      <div id="mail">
        <p>
          <i class="fas fa-envelope"></i><br><br>lotfi_ahmed@gmail.com
        </p>
      </div>
      <div id="location">
        <p>
          <i class="fas fa-map-marker-alt"></i><br><br>Antwerpen, BE
        </p>
      </div>
      <div id="phone">
        <p>
          <i class="fas fa-phone"></i><br><br>0489958991
        </p>
      </div>
      <div id="name">
        Name:<br>
        <div id="blank1">
          -
        </div>
      </div>
      <div id="e-mail">
        Email:<br>
        <div id="blank2">
          -
        </div>
      </div>
      <div id="message">
        Message:<br>
        <div id="blank3">
          -
        </div>
      </div>
      <div id="send">
        <p>
          <i class="fas fa-paper-plane"></i> &nbsp Send Message
        </p>
      </div>
      <div id="about">
        <p>
          Lessenrooster
        </p>
        <p>
          dit is het lessenrooster...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent venenatis justo at egestas hendrerit. Pellentesque euismod porta cursus. Suspendisse consectetur ipsum sed massa maximus malesuada. Cras vel magna non sem aliquet
          tincidunt. Aenean lectus odio, vestibulum ut cursus id, faucibus eu nisl. Nullam id porttitor turpis, sit amet varius est. Ut interdum diam eu diam commodo molestie sed eget elit. Fusce sed sem nec erat luctus convallis eget ut enim. Quisque
          consequat mattis lacus non viverra. Aenean et tortor tincidunt, tempor orci et, malesuada erat. Ut vitae semper justo. Integer nec odio pretium lectus commodo pretium. Nam eget tellus vitae est blandit vehicula nec eu erat. Suspendisse sed quam
          ut dui dictum ornare. Nullam dui sem, pellentesque ut lobortis non, ultrices vitae lorem. Aenean euismod mi nec ligula blandit bibendum. Curabitur in dolor eget urna pharetra mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
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