<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class ArrayKoans extends TestCase
{
    /**
     * @testdox
     */
    public function testGetTheValueOfAnArray()
    {
        $cars = array("BMW", "Mercedes", "Aston Martin");

        $this->assertEquals(__, $cars[0]);
    }

    /**
     * @testdox
     */
    public function testArrayLength()
    {
        $fruits = array("Apple", "Banana", "Pineaple", "Cherry");

        // is_string() returns a true or false
        $this->assertEquals(__, count($fruits));
    }

    /**
     * @testdox
     */
    public function testGetTheAgeOnAssociativeArrays()
    {
        $age = array("Joe"=>"49", "Mike"=>"27", "Charles"=>"32");

        // Extract the Joe´s Age
        $this->assertEquals(__, "49");
    }

    /**
     * @testdox
     */
    public function testForEachOnAssociativeArrays()
    {
        $age = array("Joe"=>"49", "Mike"=>"27", "Charles"=>"32");

        //Create a ForEach Loop to pass the test

        // Extract the Joe´s Age
        $this->assertEquals(__, "Key= Joe, Value= 49 ; Key= Mike, Value= 27 ; Key= Charles, Value= 32 ; ");
    }

    /**
     * @testdox
     */
    public function testMultidimensionalArray()
    {
        $cars = array (
            array("BMW","Blue","6913 CMC"),
            array("Mercedes","White","5052 ZZA"),
            array("Aston Martin","Black","3878 PXI")
        );

        // Extract the data to pass the test
        $this->assertEquals(__, "Model Car: BMW , Car Color: White, Car Id: 3878 PXI");
        $this->assertEquals(__, "Model Car: Mercedes , Car Color: Blue, Car Id: 6913 CMC");
        $this->assertEquals(__, "Model Car: Aston Martin , Car Color: Black, Car Id: 5052 ZZA");
    }

}
