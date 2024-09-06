<?php

require_once __DIR__ . '/../vendor/autoload.php';

Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);

// Arahkan ke index.php di root folder
require_once __DIR__ . '/../index.php';
