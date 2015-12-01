<?php

require "vendor/autoload.php";

use AlanCole\Maths\Primes as Prime;

$sieve = new Prime\Sieve;
$primes = $sieve->getPrimes(10);

print_r($primes);

$total = array_reduce($primes, function ($running, $next) {
    return $running + $next;
});

echo $total;
