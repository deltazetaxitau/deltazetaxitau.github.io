<?php
  session_start(); //starts the session in the website
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to the Delta Zeta Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Abel|Amatic+SC|Cinzel|Cormorant+Garamond|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="dz.css">
  </head>
  <body>
    <header>
        <section class="container">
          <a href="contactDZ.php">Contact</a>
          <a href="aboutDZ.php">About</a>
          <a href="members.php">Members</a>
          <h2>Delta Zeta Xi Tau</h2>
        </section>
    </header>
    <main>
      <h2 class="dzLogo">△Z</h2>
      <?php
        if(!isset($_SESSION['uid'])){ //this means the user hasnt logged in yet
          echo '<form class="login" action="includeSS/loggedinSS.php" method="POST">
            <h2>Login</h2>
            <input type="text" name="uid" value="">
            <input type="password" name="pwd" value="">
            <button class="button" type="submit" name="submit">Login</button>
          </form>';
        }
      ?>
    </main>
    <footer>
      <section class="footer"> <!--links on the bottom of the page -->
        <h1>Follow us on social media!</h1>
        <a href="https://www.youtube.com/watch?v=hSeSz727bfs" target="blank"><img class = "YT" src="picturesSS/youtubeHome.png" alt="youtube"></a>
        <a href="https://www.instagram.com/deltazetanatl/?hl=en" target="blank"><img src="picturesSS/instagramHome.png" alt="instagram"></a>
        <a href="https://www.facebook.com/XiTauDZMU/" target="blank"><img src="picturesSS/facebookHome.png" alt="facebook"></a>
        <a href="https://twitter.com/deltazetanatl?lang=en" target="blank"><img src="picturesSS/twitterHome.png" alt="twitter"></a>
      </section>
    </footer>
  </body>
</html>
