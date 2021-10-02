<?php

namespace Service;

$message = 'Hello PHPUG Darmstadt 2021!';

// xdebug_break();

echo $message;

preg_match('/^\w+ (\w+ \w+) \d+.$/', $message, $match);

print_r($match);
