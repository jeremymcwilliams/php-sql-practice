<?php

function dbConnect(){
    /*** connection credentials *******/
    $servername = "localhost";
    $username = "fakeAirbnbUser";
    $password = "apples11Million!";
    $database = "fakeAirbnb";
    $dbport = 3306;
    /****** connect to database **************/

    try {
        $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4;port=$dbport", $username, $password);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    return $db;
}


/* query with no SQL arguments */
function getTwentyListings($db){
    try {
        $stmt = $db->prepare("select * from listings limit 20");   
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    
    }
    catch (Exception $e) {
        echo $e;
    }
    
}


/* query with one SQL argument */
function getListingsBelowPrice($db, $price){

    try {
        $stmt = $db->prepare("select * from listings where price < ? order by price desc limit 20");   
       // $stmt->bindParam(':price',$price);
        $data=array($price);
        $stmt->execute($data);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    
    }
    catch (Exception $e) {
        echo $e;
    }
    
}

/* query with two SQL arguments */
function getListingsByNeighborhoodIdAndMaxPrice($db, $price, $neighborhoodId){
    try {
        $stmt = $db->prepare("select * from listings
        join neighborhoods  on neighborhoods.id=listings.neighborhoodId 
        where listings.price <= ? and neighborhoods.id = ? 
        order by listings.price desc  
        limit 5       
        ");   
        $stmt->execute(array($price, $neighborhoodId));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        /** see the resulting array **/
        return $rows;
    
    }
    catch (Exception $e) {
        echo $e;
    }
    
}

//get database connection
$db=dbConnect();


?>

<pre>
    <code>
<?php
//get 20 listings from listings table
//$rows=getTwentyListings($db);
//var_dump($rows);

//get x number of listings
//$price=150;
//$rows=getListingsBelowPrice($db, $price);
//var_dump($rows);

// get listings from neighborhood (given id) and max price (given price)
//$neighborhoodId=22; //Eastmoreland
//$price=100;
//$rows=getListingsByNeighborhoodIdAndMaxPrice($db, $price, $neighborhoodId);
//var_dump($rows);

/** loop through the rows: **/
/*
foreach ($rows as $row){
    // access values via associated array 
    // keys match the database table field names 
    $id=$row["id"];
    $name=$row["name"];
    $price=$row["price"];

    echo "<p>id: $id, name: $name, price: $price</p>";
}
*/


?>
    </code>
</pre>