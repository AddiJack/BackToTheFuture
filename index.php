<?php
require 'functions.php';
echo "Doc a commencé son voyage dans le <b>31 décembre 1985. </b><br><br>";

$travel = new TimeTravel();

$start = $travel->start->setDate(1985, 12, 31);

$interval = new DateInterval("PT1000000000S");
echo "Il s'est retrouvé projeté dans le temps à la date du <b>" . $travel->findDate($interval) . "</b><br><br>";

$start = $travel->start->setDate(1954, 4, 24);
$start = $travel->start->setTime(06, 35, 00);
$end = $travel->end->setDate(1985, 12, 31);
$end = $travel->end->setTime(00, 00, 00);

echo $travel->getTravelInfo() . "<br><br>";

$interval = new DateInterval("P1M7D");

$step = New DatePeriod($start, $interval, $end);

echo "Voici toutes les étapes du voyage pour aller chercher Doc :";
echo "<pre>";
print_r($travel->backToFutureStepByStep($step));
echo "</pre>";