<?php

$fileName       = $argv[1];
$numberOfWeeks  = $argv[3];
$subject        = $argv[2];

$currentWeekNumber  = 0;
$content            = PHP_EOL . '# ' . $subject . PHP_EOL . PHP_EOL;
$weeks              = array(
    'Erste',
    'Zweite',
    'Dritte',
    'Vierte',
    'Fuenfte',
    'Sechse',
    'Siebte',
    'Achte',
    'Neunte',
    'Zehnte',
    'Elfte',
    'Zwoelfte'
);

while ($currentWeekNumber < $numberOfWeeks) {
    $content .= '## ' . $weeks[$currentWeekNumber] . ' Woche' . PHP_EOL . PHP_EOL;
    ++$currentWeekNumber;
}

file_put_contents($fileName, $content, FILE_APPEND);
