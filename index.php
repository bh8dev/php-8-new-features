<?php

require('Constructor/Constructor.php');
require('Named/Named.php');
require('Match/MatchOperator.php');
require('NullSafeOperator/NullSafeOperator.php');
require('ClassObjects/ClassObjects.php');
require('UnionTypes/UnionTypes.php');

echo '<strong>Constructor property promotion</strong>' . '<br>' . '<br>';

$constructor = new Constructor(name: 'Luiz Gustavo', age: 22);

echo $constructor->getName() . '<br>';
echo $constructor->getAge() . '<br>' . '<br>';

echo '<strong>Named Arguments</strong>' . '<br>' . '<br>';

$namedArguments = new Named();

echo $namedArguments->info(name: 'Lojahub', isAdmin: true) . '<br>' . '<br>';

echo '<strong>Match Operator</strong>' . '<br>' . '<br>';

$matchOperator = new MatchOperator();

echo $matchOperator->usingMatch(name: 'Luiz') . '<br>' . '<br>';
echo $matchOperator->usingMatch(name: 'Joao') . '<br>' . '<br>';
echo $matchOperator->usingMatch(name: 'Maria') . '<br>' . '<br>';
echo $matchOperator->usingMatch(name: 'undefined') . '<br>' . '<br>';

echo '<strong>Null Safe Operator</strong>' . '<br>' . '<br>';

$nullSafeOperator = new NullSafeOperator();

$nullSafeOperator->pushData(dataToInclude: 'Gustavo')?->info();

echo '<br><br>';

echo '<strong>::class em Objetos</strong>' . '<br>' . '<br>';

$classObject = new ClassObjects();

echo 'Nome da classe: ' . $classObject::class . '<br><br>';

echo '<strong>Union Types</strong>' . '<br>' . '<br>';

$unionTypes = new UnionTypes();

$unionTypes->setData('some data')?->info();

echo '<br><br>';
