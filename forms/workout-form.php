<?php

require '../database.php';
require_once '../generated-conf/config.php';

Propel::init();

$exercise = new Exercise;

var_dump($exercise);

// require '../classes/Insert.php';

// if (isset($_POST['submit'])) {

//     $exercises = [];

//     foreach ($_POST['exercises'] as $exercise) {
//         $exercises[] = $exercise;
//     }
    
//     Traintrack\Insert::begin();
//     Traintrack\Insert::exercise($exercises);
//     Traintrack\Insert::$pdo->lastInsertId();
//     Traintrack\Insert::commit();

// }

//     $pdo->beginTransaction();
//     try {
//         // Insert the workout name into the Workout table
//         $sql = $pdo->prepare("
//             INSERT INTO workout (name) VALUES (:name)
//         ");
//         $sql->bindParam(':name', $_POST['workout']);
//         $sql->execute();

//         // Insert the workout ID into the Week table
//         $sql = $pdo->prepare("
//             INSERT INTO week (workout_id) VALUES (:id)
//         ");
//         $sql->bindParam(':id', $id);
//         $id = $pdo->lastInsertId();
//         $sql->execute();

//         // Insert the exercise name and ID into the Exercise table
//         $sql = $pdo->prepare("
//             INSERT INTO exercise (name, type) VALUES (:name, :type)
//         ");
//         $sql->bindParam(':name', $name);
//         $sql->bindParam(':type', $type);
//         $name = $_POST['exercise-name'];
//         $type = $_POST['exercise-type'];
//         $sql->execute();        

//         $pdo->commit();
//     } catch (PDOException $e) {
//         $pdo->rollback();
//         echo $e->getMessage();
//     }
// } else {
//     echo 'Failure message';
// }
