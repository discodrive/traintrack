<?php

namespace Traintrack;

class Insert {

    public static $pdo;

    public static function begin()
    {
        global $pdo;

        if (!self::$pdo) {
            self::$pdo = $pdo->beginTransaction();
        }

        return self::$pdo;
    }

    public static function exercise(array $params)
    {
        global $pdo;
        self::begin();

        // Insert the exercise name and ID into the Exercise table
        $sql = $pdo->prepare("
            INSERT INTO exercise (name, type) VALUES (:name, :type)
        ");

        return self::execute($sql, $params);
    }

    private static function execute($sql, $params)
    {
        foreach ($params as $column => $value) {
            $sql->bindParam(":{$column}", $value);
        }
        return $sql->execute();
    }

    public static function commit()
    {
        $commit    = self::$pdo->commit();        
        self::$pdo = null;
        return $commit;
    }

}

// foreach ($exercises as $exercise) {
//     Insert::Exercise([
//         'name' => $_POST['exercise-name'] ?: '',
//         'type' => $_POST['exercise-type'] ?: '',
//     ]);    
// }