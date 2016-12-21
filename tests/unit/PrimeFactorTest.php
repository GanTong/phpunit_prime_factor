<?php

use App\PrimeFactor;


class PrimeFactorsTest extends PHPUnit_Framework_TestCase

{


    /** @test */

  function it_calculates_that_1_does_not_have_prime_factors()
 
    {

     $test1 = new PrimeFactor();

      $this->assertEquals(array(), $test1->generate(1));

    }

    /** @test */

    function it_computes_prime_factors_of_2()
 
    {

        $test2 = new PrimeFactor();

        $this->assertEquals(array(2), $test2->generate(2));

    }

    /** @test */

    function it_computes_prime_factors_of_3()
 
    {

        $test3 = new PrimeFactor();

        $this->assertEquals(array(3), $test3->generate(3));

    }

     /** @test */

    function it_computes_prime_factors_of_4()
 
    {

        $test4 = new PrimeFactor();

        $this->assertEquals(array(2, 2), $test4->generate(4));

    }

         /** @test */

    function it_computes_prime_factors_of_5()
 
    {

        $test5 = new PrimeFactor();

        $this->assertEquals(array(5), $test5->generate(5));

    }


          /** @test */

    function it_computes_prime_factors_of_6()
 
    {

        $test6 = new PrimeFactor();

        $this->assertEquals(array(2, 3), $test6->generate(6));

    }


          /** @test */

    function it_computes_prime_factors_of_8()
 
    {

        $test7 = new PrimeFactor();

        $this->assertEquals(array(2, 2, 2), $test7->generate(8));

    }


              /** @test */

    function it_computes_prime_factors_of_9()
 
    {

        $test8 = new PrimeFactor();

        $this->assertEquals(array(3, 3), $test8->generate(9));

    }


              /** @test */

    function it_computes_prime_factors_of_100()
 
    {

        $test9 = new PrimeFactor();

        $this->assertEquals(array(2, 2, 5, 5), $test9->generate(100));

    }

} 
    
