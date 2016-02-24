<?php
$shmop_key = ftok(__FILE__, 'p');
$shmop_id = shmop_open($shmop_key, 'c', 0600, 16384);
$population = shmop_red($hmop_id, 0, 0);

