<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jeu ping pong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'Joueur.php';
        include 'Partie.php';
        include 'Set.php';
        $joueur1=new Joueur("Meriam");
        $joueur2=new Joueur("Thomas");
        $partie  = new Partie($joueur1, $joueur2);
        $partie->startNouveauSet();
        for ($i=0; $i < 80; $i++) 
        {
            $set = $partie->getDernierSet();
            $numJoueur = rand(0,1);
            if ($numJoueur == 0) $set->addPoint(1,0);
            if ($numJoueur == 1) $set->addPoint(0,1);
            if (!$set->estFini()) 
            {
                echo $joueur1->getName()." ".$set->pointJ1."  -  ".$set->pointJ2." ".$joueur2->getName()."<br>";
            }
            else 
            {
                if (!$partie->estFini()) 
                {
                    echo "Le set fini avec un score de ".$set->pointJ1."-".$set->pointJ2."<br>";
                    $partie->startNouveauSet();
                }
                
            }
        }
    ?>
</body>
</html>