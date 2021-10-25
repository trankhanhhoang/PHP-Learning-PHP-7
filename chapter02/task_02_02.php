<?php
$burger = 4.95;
$cocktail = 1.95;
$coca = 0.85;
$NDS = 0.075;
$TIPS = 0.16;

$meal = ($burger * 2 + $cocktail + $coca);
$tips = $meal * $TIPS;
$nds = $meal  * $NDS;
print "Стоимость трапезы = " . ($meal + $tips +$nds);
