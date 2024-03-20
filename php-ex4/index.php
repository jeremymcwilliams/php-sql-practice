<?php
/* For displaying errors....good practice while developing */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*

Exercise 4: Dynamically creating form HTML content with PHP, and passing GET variables to a page

This is the same as exercise three, except:
--rather than making up ice cream names and values, use the $shoes array below
--Use a foreach loop to loop through $shoes. In this case, you want to use the syntax:

foreach($shoes as $shoe => $id) {
  //code here
}
This will let you access both the key and the value in the associative array.

Your select element should use the name 'shoeId'. Your options should use the identifier 
as the value, and the shoe (e.g. "Sandals") in the option text.

The form action should point to results.php, using the GET method.

More instructions on results.php.

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
        <h1>Select your shoes:</h1>







    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>