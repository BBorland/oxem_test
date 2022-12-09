<?php

namespace Farm;

include('loader.php');

$farm = new Farm;
$farm->addAnimal(new Chicken, 20);
$farm->addAnimal(new Cow, 10);
$farm->getAllProducts(7);
?>
<pre>
<?php
print_r($farm->getAnimalsList());
print_r($farm->getProductsCount());

$farm->addAnimal(new Chicken, 5);
$farm->addAnimal(new Cow, 1);
$farm->getAllProducts(7);

print_r($farm->getAnimalsList());
print_r($farm->getProductsCount());
?>
</pre>
