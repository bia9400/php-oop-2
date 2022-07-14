<?php 
require_once "classi/PaymentMethods.php";
require_once "classi/User.php";
require_once "classi/Products.php";
$user1= new User("Biagio Ferro","ciaopeppe");
$carta1= new PaymentMethods();
$carta1->setCardId(234258735623875)->setDataScadenza(2025)->paymentSucsesss();
$croccantini= new Food();
$cuccia=new Toys();
$croccantini->setPrice(100)->getSconto($user1->status);
$cuccia->setPrice(200)->getSconto($user1->status);
if($carta1->canIBuy){
    echo "Benvenuto:". " " .  $user1->getUserName() ." <br>";
    if($user1->status){
        echo "Hai ottenuto uno sconto perché sei registrato";
    }
    else{
        echo "Prezzo pieno, non sei registrato";
    }
    var_dump($croccantini,$cuccia);
}
else{
    echo "Carta scaduta non puoi acquistare il prodotto";
}

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