<?php

include_once 'Cat.php';
include_once 'Collar.php';

// Sans collier
$gwenoa = new Cat('Gwenoa', 'gris');
$gwenoa->setImage('http://www.toutpourmonchat.fr/wp-content/uploads/2016/02/chat-qui-miaule.jpg');
$gwenoa->setFatigue(50);
// echo $gwenoa->getName();


if	($gwenoa->isTired() == false) {
	$gwenoa->walk();
}
while ($gwenoa->isTired() == false) {
	$gwenoa->walk();
}
if ($gwenoa->isTired() == true) {
	$gwenoa->rest();
}

echo $gwenoa . '<br>';


// Avec collier
$collier_gege = new Collar ('12 cm', 'red');
$gege = new Cat('Gege', 'red', $collier_gege);
$gege->setFatigue(20);
$gege->setImage('http://www.toutpourmonchat.fr/wp-content/uploads/2013/07/chat-bien-etre.jpg');

if ($gege->isTired() == false) {
	$gege->walk();
}

while ($gege->isTired() == false) {
	$gege->walk();
}

if ($gege->isTired() == true) {
	$gege->rest();
}
//echo $gege->getName() . ' ' . $gege->getColor() . $gege->getCollar();
echo $gege;
echo $collier_gege;



/*

<?php

include_once "Cat.php";

// Fifi
$fifi = new Cat('fifi', '12', 'blue');

// Riri
$riri = new Cat('riri', '1', 'red');

// Loulou
$loulou = new Cat('Kristen', '20', 'yellow');

echo $loulou;


$loulou->donneUnNomAMonChat('lili');
$loulou->color = 'pink';

// echo $fifi;
// echo $riri;
echo $loulou;