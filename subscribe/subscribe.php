    <?php
        mysql_connect("apsolute.db.10200332.hostedresource.com", "apsolute", "Magentic@1") or die(mysql_error()); // Connect to database server(localhost) with username and password.
        mysql_select_db("apsolute") or die(mysql_error()); // Select registration database.
        
        if(isset($_POST['email']) && !empty($_POST['email'])){
          $email = mysql_escape_string($_POST['email']);

        if(!preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/', $email)){
          // Return Error - Invalid Email
          $msg = 'The email you have entered is invalid, please try again.';
          http_redirect("http://www.apsolute-tt.com", array("msg" => "The email you have entered is invalid, please try again."), true, HTTP_REDIRECT_PERM);
        }

        $sql = "SELECT * FROM emails WHERE email ='".$email."'"; 
        $result = mysql_query($sql) or die(mysql_error());
        if(mysql_num_rows($result) > 0) {
            $msg = 'The email address you entered already exist';
          }else{
          // Return Success - Valid Email
          $msg = 'Thank you for subscribing we hope to be up and running soon.';
          
          $hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable. 
          
          mysql_query("INSERT INTO emails (email) VALUES(
          '". mysql_escape_string($email) ."')") or die(mysql_error());  
          
          $to      = $email; //Send email to our user
          $subject = 'Thank You :)'; //// Give the email a subject 
          $message = '

          Thanks you again for subscribing!
          We are excited to have you. Hope to have our site up and running soon! So we can deliver valued service to you, our friend and valued client.
          '; // Our message above including the link
          
          $headers = 'From:info@apsolute-tt.com' . "\r\n"; // Set from headers
          mail($to, $subject, $message, $headers); // Send the email

          }       
        }
      ?>
    <?php
