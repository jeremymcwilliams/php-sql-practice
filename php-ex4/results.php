<?php
/* For displaying errors....good practice while developing */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
First, confirm that this page is receiving GET paramaters, by using this code below in the container:
<?php
var_dump($_GET);
?>

Once you confirm that you're receiving GET variables, create a variable $shoeId
and set it equal to the value for shoeId in the $_GET array.

Then create a variable $shoe, and use $shoeId to access the shoe name from the $shoes array.

Finally, include a paragraph reading "You selected $shoe." in the div.container. 


*/

$shoes=array(1=>"Sandals", 2=>"Flip-flops", 3=>"Sneakers", 4=>"Loafers", 5=>"Wing tips", 6=>"Boots");




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Shoe results:</h1>







    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>