<?php
/*
include "resources/extensions/connection.php";
//establishing connection to the database
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    
    <link rel = "stylesheet" href = "resources/style.css">
    <title>
     <?php
      echo "Login";
      ?>
    </title>
  </head>

  <body>


    <div class="container1">
      <h1>

        <?php
        include "resources/extensions/navbar.php";
        ?>
    
      </h1>
    

      <div id="content9">
        <div>
          <?php
          echo "Login";
          ?>
        </div>
        <div id="box">
          <form method="post">
          <div>
              <?php
              echo "username";
            ?>
            </div>
            <input id="text" type="text" name="username" ><br><br>
            <div>
              <?php
              echo "password";
            ?>
            </div>
            <input id="text" type="text" name="password" ><br><br>
            <input id="button" type="submit" value= "login" ><br><br>

            <a id="button" href="register.php">Register here</a><br>

          </form>
        
      </div>
      <footer>
        <div id = "footerscript">
          <?php
          include "resources/scripts/footer.txt";
          ?>
        </div>

      </footer>
    

    </div>  
  </body>
</html>
