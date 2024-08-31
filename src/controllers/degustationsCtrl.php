<?php
session_start();
require './models/Calendar.php';
require './models/Events.php';

$month = new Calendar($_GET['month'] ?? null, $_GET['year'] ?? null);
$start = $month->getStartingDay();
$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
$events = new Events();
$allEvent = $events->getEventOfMonth($month->month);
function eventOnDate($date)
{
    global $allEvent;

    $eventOfDay = [];

    foreach ($allEvent as $event) {
        if ($date == $event->date) {
            array_push($eventOfDay, $event);
        }
    }

    return !empty($eventOfDay) ? $eventOfDay : false;
}

