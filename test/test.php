<?php

require_once __DIR__.'/../functions.php';

set_global_var('var', 'value');

if (get_global_var('var') !== 'value') {
    exit(1);
}

