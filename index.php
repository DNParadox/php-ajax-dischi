<?php
    include __DIR__  . '/database.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php dischi</title>
</head>
<body>
    <header>
        <div class="boxlogo">
            <img src="./img/logo-small.svg" alt="Qui logo">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="column">
            <?php foreach($database as $data_list) { ?>
            <div class="col">
                    <!-- Carta -->
                    <div class="card">
                        <figure>
                            <img src="<?php echo $data_list['poster']; ?>" alt="<?php echo $data_list['author']; ?>" />
                                <figcaption class="title">  <?php echo $data_list['title'] ?> </figcaption>
                                <figcaption class="author">  <?php echo $data_list['author'] ?> </figcaption>
                                <figcaption class="author">  <?php echo $data_list['year'] ?> </figcaption>
                        </figure>
                    </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>