<?php
$string='21-11-2015';

$pattern='/([0-9]{2} - [0-9] {2} - [0-9] {4})/';
$replacement= 'Год $3, месяц $2, день $1';

echo preg_replace("$pattern", "$replacement", "$string");

