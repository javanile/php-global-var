# PHP Global Var

This project supports replacement into old PHP code written with abuse of `global` directive, and give a strategy to step by step remove and refacoty code in a modern way.

## Installation

```shell
composer require javanile/php-global-var
```

## Usage

```php
<?php

function getNewEntity() 
{
   // Replace the following line
   global $entityManager;
   // With `get_global_var` call
   $entityManager = get_global_var('entityManager');
   
   .
   .
   .
}
```
