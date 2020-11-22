<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/Animal.php";
require_once "vendor/autoload.php";
require_once 'vendor/phpunit/phpunit/src/Framework/TestCase.php';
class AnimalTest extends TestCase
{
    private $animal;
    public function __construct()
    {
        $this->animal = new Animal("billy");
    }
    

    public function testDogNameWithConstructor()
    {
        $this->assertAttributeEquals("billy", "name", $this->animal);
    }

    public function testIsBarking(){
        $this->assertEquals("wuf wuf",$this->animal->bark());
    }

    public function testIsRespondingAgree(){
        $this->assertEquals("wuf wuf",$this->animal->respond("billy"));
    }
    public function testIsRespondingDisagree(){
        $this->animal->respond("bobby");
    }
}

$test = new AnimalTest();
$test->testDogNameWithConstructor();
$test->testIsBarking();
$test->testIsRespondingAgree();
$test->testIsRespondingDisagree();