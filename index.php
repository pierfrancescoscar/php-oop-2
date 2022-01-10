<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi. -->

<?php
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/PremiumUser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop shop</title>
</head>

<body>

    <header>
        <h1>My Little Php Shop</h1>
    </header>

    <main>

        <h1>Normal User</h1>
        
            <?php
            $user1 = new User('Pierfrancesco', "Scarinci", 24, 0);
            ?>

            <h3>User name: <?php echo $user1->getName()?></h3>
            <h3>User last name: <?php echo $user1->getLastName()?></h3>
            <h3>User age: <?php echo $user1->getAge()?></h3>
            <h3>Sale percentage: <?php echo $user1->getSale()?>% </h3>

        <h1>Premium User</h1>

            <?php
            $user2 = new PremiumUser('Pietrofranco', "Scarci", 36, 0);
            ?>

            <h3>User name: <?php echo $user2->getName()?></h3>
            <h3>User last name: <?php echo $user2->getLastName()?></h3>
            <h3>User age: <?php echo $user2->getAge()?></h3>
            <h3>Sale percentage: <?php echo $user2->getSale()?>% </h3>

    </main>
    
</body>
</html>