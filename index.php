<?php 
require_once "classi/PaymentMethods.php";
require_once "classi/User.php";
require_once "classi/Products.php";
$user1= new User("Biagio Ferro","ciaopeppe");
$carta1= new PaymentMethods();
$carta1->setCardId(234258735623875)->setDataScadenza(2025)->paymentSucsesss();
$croccantini= new Food(21987295817259175,12,"http://cdn.shopify.com/s/files/1/2605/3526/articles/ret-3_1024x1024.jpg?v=1551805299");
$cuccia=new Toys(283741248762948762,124,"https://arcaplanet.vtexassets.com/arquivos/ids/253067/elbi-cuccia-woody-elbc2.jpg?v=637501893967070000");
$osso=new Toys(23472174674,4,"https://www.reviewbox.it/wp-content/uploads/2019/10/osso-per-cani-principale-xcyp1-1300x803.jpg");
$croccantini->setPrice(100)->getSconto($user1->status);
$croccantini->setScadenza("12-12-23")->setIngredients(["pollo","manzo","tuorlo","burro"]);
$cuccia->setPrice(200)->getSconto($user1->status);
$cuccia->setAgeOfToy("Vietato minori di 5 anni")->setSize("12cmx34cmx1m");
$osso->setPrice(10)->getSconto($user1->status);
$cuccia->setAgeOfToy("Tutte le età")->setSize("5cm x 3cm");
if($carta1->canIBuy){
    echo "Benvenuto:". " " .  $user1->getUserName() ." <br>";
    if($user1->status){
        echo "Hai ottenuto uno sconto perché sei registrato";
    }
    else{
        echo "Prezzo pieno, non sei registrato";
    }
    var_dump($croccantini,$cuccia,$osso);
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