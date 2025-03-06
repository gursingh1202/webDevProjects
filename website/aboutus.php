<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel = "stylesheet" href = "resources/style.css">
    <title>
     <?php
      echo "About us";
      ?>
    </title>
  </head>

  <body>


    <div class="container">
      <h1>

        <?php
        include "resources/extensions/navbar.php";
        ?>
    
      </h1>
    

      <div id="content5">
        <?php 
        echo "About Us"; 
        ?>
      </div>
      <div id="content6">
        <img src="resources/imgs/logo.png">
      </div>
      <div id="content7">
        <?php
        echo "We have started this club with aim of providing luxurious experiences, which are one of a kind along with providing clothing as part of 
        an investment tool for the future.\n"; 
        echo"\n
        We aim to have a large amount of members before we start with the sale of the merchandise and we will keep you posted via email with any updates.\n";
        echo"\n
        If you havent already done so become a member and buckle up for the ride!!!"
        ?>
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
