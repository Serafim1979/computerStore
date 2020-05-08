<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \myStore\App();

throw new Exception('Pages not found', 404);
