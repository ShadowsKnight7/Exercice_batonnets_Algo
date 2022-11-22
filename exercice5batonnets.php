<?php
/* L'objectif principal est de faire en sorte que l'ordinateur remporte la partie */
/* Les joueurs ont le droit de retirer 1 à 3 batonnets par tour et il y a 20 batonnets */
$res=20;
echo "Nombre de batonnets restants : ".$res."\n";

// Je fait une boucle qui dit que tant qu'il y a des batonnets
while ($res > 0) {
    // Le joueur joue
    echo "Combien de batonnet(s) voulez-vous prendre ?\n";
    // Je renvoie le résultat
    $x = readline();
    // Je dis que le $res vaut $x-1
    $res = $res-$x;
    echo "Nombre de batonnet(s) restants ".$res."\n";

    // L'ordinateur joue
    $res = joueurOrdi($res, $x);
    echo "Nombre de batonnet(s) restants ".$res."\n";
}

echo "L'ordinateur a gagné !";

// Je créé une fonction pour que l'ordinateur joue à son tour
function joueurOrdi($res, $x){
    $coup = 4-$x;
    $res = $res-$coup;
    echo "L'ordinateur a retiré ". $coup." batonnets\n";
    return $res;
}
?>