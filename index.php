<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'class/article.php';

        $article1=new Article();
        $article1->setTitre('Ma vie, mon oeuvre');
        $article1->setContenu('
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, repellat
             saepe quod rem beatae, fugit aliquid quibusdam cumque vitae repudiandae adipisci 
             voluptatem dolorum laboriosam soluta facilis quasi magnam architecto culpa.
            ');
        $article1->setDateDePublication('2021-04-13');
        $article1->afficher();

        $article2=new Article('Découverte importante', 'Lorem lorem lorem', '2020-04-12');
        $article2->afficher();

    ?>
</body>
</html>
