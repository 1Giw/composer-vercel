<?php

require_once __DIR__ . '/../vendor/autoload.php';

Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);

// Redirect ke index.php di root folder
header('Location: /index.php');
exit;