<?php 



define("NAME","Anil");
// $name ="Anil";
$age = 33;
$stringOne = "my email is: ";
$stringTwo = "anilensari@gmail.com";

// echo 'hello, world!' ;
// echo 'hello again';
$blogs = [
    ["name"=> "meat","price"=>50],
    ["name"=> "coke","price"=>20],
    ["name"=> "chicken","price"=>40],
    ["name"=> "salad","price"=>35],
] ;
$totalPrice = 0 ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Php File</title>
</head>
<body>

<h1> <?php   echo "Hello World"  ?></h1>
<div> <?php  echo "Hey ".$stringOne.$stringTwo ?> </div>
<div> <?php echo NAME ?></div>
<div> <?php echo $age ?></div>
<div> <?php echo NAME." Screamed: \"WHOAAA\"" ?>
<div> <?php echo NAME." Screamed: 'aboo'" ?>
<div> <?php echo NAME[0]." Screamed: 'aboo'" ?>
<ul >

<?php  foreach( $blogs as $blog ){ 
    $totalPrice += $blog["price"] ?>

<h3> <?php echo $blog["name"]; ?></h3>
<p>  <?php echo $blog["price"]; ?>  </p>

<?php } ?> 
<p>  <?php echo "Total Price is: ". $totalPrice; ?>  </p>


</ul>


    
</body>
</html>
