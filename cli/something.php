<?php

//1. while cikls
//2. izvēlne
//3. switch case nosacījumi
//4. izveidojam testu datus

$taskList = ["izpildīt mājasdarbu", "aiziet gulēt laicīgi"];
$continue = 'y';

do {
    echo "Uzdevumu pārvaldnieks\n";
    echo "Izvadīt visu uzdevumu sarakstu => 1\n";
    echo "Apskatīt visis uzdevumus => 2\n";
    echo "Apskatīt vienu uzdevumu => 3\n";
    echo "iziet => 4 \n";

    $choice = readline("Izvēlies darbību: ");

    switch ($choice) {
        case 1:
            //foreach($taskList as $task){
            //    echo ""
            // }
            for($i = 0; $i < count($taskList); $i++){
                $id = $i + 1;
                echo "$id" . ". $taskList[$i]";
            }
            break;
        case 2:
            echo "to be implemented";
            break;
        case 3:
            echo "to be implemented";
            break;
        case 4:
            $continue = null;
            echo "Goodbye";
            break;
        default:
            echo "to be implemented";
            break;
      }

    

}
while ($continue == 'y');

?>