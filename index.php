<?php 

require_once "classi/User.php";
require_once "classi/Products.php";


$user= new User("biagio Ferro","ciccino56");
$user2= new User("Turidu dd","dhdhdh");

$user->setDataScadenza(2025);
$user2->setDataScadenza(2020);

$user->setProducts(new Products("dasda",2,2,));
$user->setProducts(new Food("dda",2,2,));


var_dump($user,$user->getProducts(),$user->checkout());
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croccantini-Per-Il-Tuo-Cane</title>
</head>
<body>
    
</body>
</html>