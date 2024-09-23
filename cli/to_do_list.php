<?php

$tasklist =["first", "second"];
function showAlltask($inputTask){
    foreach($inputTask as $task);
}

$name = readline("Ievadi savu vārdu:\n");
echo "Your name is $name";

do {
    echo "Uzdevumu pārvaldnieks\n";
    echo "Ievadīt jaunu uzdevumu => 1\n";
    echo "Apskatīt visis uzdevumus => 2\n";

    $choice = readline("Izvēlies darbību: ");

    switch ($choice) {
        case '1':
          showAllTask;
          break;
        case '2':
          addTask($tasklist);
          break;
        case '3':
          echo "To be implemented\n";
          break;
        default:
          echo "Invalid option\n";
      }

    $continue = readline("Vai vēlies turpināt");
  } while ($continue != "N");
  