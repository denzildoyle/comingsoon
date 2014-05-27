<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Apsolute</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    
    <center>
    <img id="logo" src="img/logo.png"><br>
    <!--<img id="comingsoon"src="img/comingsoon.png">-->

    <p>Building application solutions for a changing world</p>
    
    <?php 
      if(isset($msg)){ // Check if $msg is not empty
        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and add a div around it with the class statusmsg
    }?>

    <form action="http://www.apsolute-tt.com/subscribe/subscribe.php" method="post">
      <input type="email" name="email" placeholder="Subscribe to mailing list">
      <input type="submit" value="add">
    </form>

    <ul>
      <li><a href=""><img src="img/social/linkedin.png"></a></li>
      <li><a href=""><img src="img/social/twitter.png"></a></li>
      <li><a href=""><img src="img/social/pinterest.png"></a></li>
      <li><a href=""><img src="img/social/facebook.png"></a></li>
      <li><a href=""><img src="img/social/email.png"></a></li>
    </ul>    
    </center>
  </body>
</html>


