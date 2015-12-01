<?php

namespace AlanCole\Maths\Primes;

class Sieve
{

    /*
     * Upper limit for our sieve
    */
    protected $limit = 1000;

    /*
     * Holder for our sieve
    */
    protected $sieve = [];

    /*
     * Will return primes up to a given limit.
     *
     * @param int $limit
     * @return array $primes
    */
    public function getPrimes($limit = 0)
    {
        if ($limit) {
            $this->limit = $limit;
        }

        $this->seedToLimit();
        $this->filterPrimes();
        $this->unsetOne();

        return $this->sieve;
    }

    /*
     * Fill an array with a range up to limit
     *
     * @return void
     */
    public function seedToLimit()
    {
        $this->sieve = range(1, $this->limit);
    }

    /*
     * Unset 1 its not prime.
     *
     * @return void
     */
    public function unsetOne()
    {
        if (isset($this->sieve[0]) && $this->sieve[0] == 1) {
            unset($this->sieve[0]);
        }
    }

    /*
     * Filter our array to contain only primes.
     * this is a best guess for primes using Eratosthenes
     *
     * @return void
     */
    public function filterPrimes()
    {
        for ($i = 2; $i*$i <= $this->limit; $i++) {
            if (array_key_exists($i-1, $this->sieve)) {
                for ($a = $i; $a * $i <= $this->limit; $a++) {
                    unset($this->sieve[$a * $i - 1]);
                }
            }
        }

    }
}
