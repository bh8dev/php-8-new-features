<?php

require 'Constructor/Constructor.php';
require 'Named/Named.php';
require 'Match/MatchOperator.php';

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