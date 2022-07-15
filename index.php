<?php
require_once "classi/CreditCard.php";
require_once "classi/User.php";
require_once "classi/Products.php";

$metodopagamento = key_exists("metodo", $_GET) ? (int) $_GET["metodo"] : null;
$userName=key_exists("userName",$_GET) ?  $_GET["userName"] : "";
$userLastName=key_exists("userLastName",$_GET) ?  $_GET["userLastName"] : "";
if($userName=="" || $userLastName==""){
    echo "Inserire delle key userName e userLastName nell'url per accedere ed avere lo sconto <br><br><br>";
}
$user = new User($userName, $userLastName);
$user2 = new User("Turidu dd", "dhdhdh");

$user->addPaymentMethods(new CreditCard("Master Card",32421434124,123,2025));
$user->addPaymentMethods(new CreditCard("Visa",2397311212,998,2020));
$user->addPaymentMethods(new CreditCard("American Express",2873462837461238,555,2027));

$shopProduct=[
    new Food("Croccantini", 2.25, "2",),
    new Toys("Cuccia", 85.9, "2",),
    new Food("Osso", 3.69, "2",),
    new Toys("Pulisci Unghia", 1.25, "2",),
    new Toys("Palla", 3.8, "2",)
];




$user->setProducts($shopProduct[0]);
$user->setProducts($shopProduct[2]);
$user->setProducts($shopProduct[4]);



var_dump($user, $user->checkout($user->arrayPayments[$metodopagamento]));
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