<?php

echo "This is my firsy CLI script in PHP";

//1
for ($x = 1; $x < 10; $x++) {
    echo "Number: $x <br>";
  }
for ($x = 10; $x > 1; $x--) {
    echo "Number: $x <br>";
  }

//2
$people = [
    $person1,[
      'first_name' => 'John',
      'Age' => 20,
    ],
    [
      'first_name' => 'Erick',
      'Age' => 40,
    ],
    [
        'first_name' => 'Dumbass',
        'Age' => 19,
      ],
  ];
  