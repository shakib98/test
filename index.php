<?php
include_once ('User.php');
$ali = new User();
$ali->setName('Ali Ahmad');
$ali->setLastname('Ahmadi')
$ali->setAge(21);

echo $ali->getName();
echo $ali->getLastname();
$ali->setAge(21);
