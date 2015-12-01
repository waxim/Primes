# Primes
A very simple script to generate primes to a given number.

## Install
```
composer install
```

## Test
```
phpunit
```

### Usage Example
```php
require "vendor/autoload.php";

use AlanCole\Maths\Primes as Prime;

$sieve = new Prime\Sieve;
$primes = $sieve->getPrimesUnder(10);

// Get the sum of our primes.
$total = array_reduce($primes, function ($running, $next) {
    return $running + $next;
});

print $total;
```
