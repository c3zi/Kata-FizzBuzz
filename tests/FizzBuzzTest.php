<?php
/**
 * This file is part of the Kata package. 
 *
 * User: Przemyslaw Furtak
 * Date: 2015-06-08
 * Time: 14:52
 */

namespace Kata\FizzBuzz\Test;

use Kata\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function isFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isFizz', array(3)), true);
    }

    /**
     * @test
     */
    public function isFizzOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isFizz', array(1)), false);
    }

    /**
     * @test
     */
    public function isBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isBuzz', array(5)), true);
    }

    /**
     * @test
     */
    public function isNotFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isFizz', array(4)), false);
    }

    /**
     * @test
     */
    public function isNotBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isBuzz', array(4)), false);
    }

    /**
     * @test
     */
    public function show1To2()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(2), '1 2');
    }

    /**
     * @test
     */
    public function show1To3()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(3), '1 2 Fizz');
    }

    /**
     * @test
     */
    public function show1To4()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(4), '1 2 Fizz 4');
    }

    /**
     * @test
     */
    public function show1To5()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(5), '1 2 Fizz 4 Buzz');
    }

    /**
     * @test
     */
    public function show1To15()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(15), '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz');
    }


    /**
     * Call protected/private method of a class.
     *
     * @param object &$object    Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method.
     *
     * @return mixed Method return.
     */
    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }
}