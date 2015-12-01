<?php
class SieveTest extends PHPUnit_Framework_TestCase
{

    public function testSieve()
    {
        $sieve = new AlanCole\Maths\Primes\Sieve;
        $primes = implode(",", $sieve->getPrimesUnder(10));
        $under_ten = implode(",", [2,3,5,7]);

        $this->assertEquals($primes, $under_ten);
    }
}
