<?php 
    require __DIR__ . '/db/database.php'; 
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Php Dischi</title>
    </head>
    <body>
        <header>
        <h1>Header</h1>
        </header>

        <main>
            <div class="discs_container">
                
                <?php foreach($discs as $disc) { ?>
                    <div class="disc">
                        <img src="<?= $disc["image"]?>" alt="">
                        <h2><?= $disc["title"]?></h2>
                        <h3><?= $disc["author"]?></h3>
                        <h4><?= $disc["year"]?></h4>
                        <small><?= $disc["genre"]?></small>
                    </div>
                <?php } ?>

            </div>
        </main>
    </body>
</html>