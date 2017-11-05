<?php

require_once '../vendor/autoload.php';
require_once '../generated-conf/config.php';

$workout = new Workout;
$workout->setName($_POST['workout']);
$workout->save();
