<?php

//item-test.php

/* 
This serves as a resource for our second 
group project
*/

include 'Item.php';

$items[] = new Item("Burrito", "Inculdes awesome sauce!", 7.95);
$items[] = new Item("Taco", "Inculdes carne asada", 1.90);
$items[] = new Item("Fried Ice Cream", "Inculdes free sprinkles", 5);


echo '<pre>';
var_dump($items);
echo '</pre>';
