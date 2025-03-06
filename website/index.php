<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    
    <link rel = "stylesheet" href = "resources/style.css">
    <title>
     <?php
      echo "Home";
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
    

      <div id="content1">
        <?php 
        include "resources/scripts/welcome.txt"; 
        ?>
      </div>
      <div id="content2">
        <img src="resources/imgs/experiences.jpg">
      </div>
      <div id="content3">
        <?php
        echo "Life is all about experiences and we, at the exclusive club, aim to provide the best for our customers.\n"; 
        echo"\n
        The club is all about experiences hence it is not just a regular clothing brand, we treat our customers as a family.\n";
        echo"\n
        Life is short and deserves to be well lived join today so you don't miss out!!";
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
