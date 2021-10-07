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
        for ($i=0; $i < 20; $i++) 
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
                  if ($set->pointJ1 > $set->pointJ2) 
                  {
                    echo "Le set est gagné par : ".$joueur1->getName()."<br>";
                    $partie->nbSetJ1 = $partie->nbSetJ1 +1;
                  }
                  else
                  {
                    echo "Le set est gagné par : ".$joueur2->getName()."<br>";
                    $partie->nbSetJ2 = $partie->nbSetJ2 +1;
                  }
                  $partie->startNouveauSet();
                }
                
            }
        }
    ?>



  <div class="container px-3">
    <div class="row row-cols-auto">
      <div class="col">
        <button onclick="$set.addPoint(1,0)" id="pointJ1"> + </button>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><?php echo $joueur1->getName(); ?></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><?php echo "  ".$set->pointJ1."     :    ".$set->pointJ2."  "; ?></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light"><?php echo $joueur2->getName(); ?></div>
      </div>
      <div class="col">
        <button onclick="$set.addPoint(0,1)" id="pointJ1"> + </button>
      </div>
    </div>
  </div>


<div id="board">
        <div id="divider"></div>
        <div id="score1" class="score">0</div>
        <div id="score2" class="score">0</div>
        <div id="status" class="score">Ready</div>
        <button onclick="start()" id="start">Start</button>
    </div>
</div>


</body>
</html>