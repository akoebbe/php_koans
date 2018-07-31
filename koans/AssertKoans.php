<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class AssertKoans extends TestCase
{
    /**
     * We shall contemplate truth by testing reality, via asserts.
     */
    public function testAssertTruth()
    {
        // Change FALSE to TRUE
        $this->assertTrue(FALSE);
    }

    /**
     * Enlightenment may be more easily achieved with appropriate messages.
     */
    public function testAssertWithMessage()
    {
        // Change FALSE to TRUE
        $this->assertTrue(FALSE, "This should be True, please fix this");
    }

    /**
     * Sometimes we will ask you to fill in the values
     */
    public function testFillInValues()
    {
        // Replace __ with your answer
        $this->assertEquals(__, 1+1);
    }

    /**
     * To understand reality, we must compare our expectations against reality.
     */
    public function testAssertEquality()
    {
        $expected_value = __; // Replace __ with your answer
        $actual_value = 1 + 1;
        
        $this->assertTrue($expected_value == $actual_value);
    }

    /**
     * Some ways of asserting equality are better than others.
     */
    public function testABetterWayToAssertEquality()
    {
        $expected_value = __; // Replace __ with your answer
        $actual_value = 1 + 1;

        $this->assertEquals($expected_value, $actual_value);
        
    }

    public function testThatSometimesWeNeedToKnowTheVariableType()
    {
        $this->assertEquals(__, gettype("What am I"));
    }

    public function testThatSometimesWeNeedToKnowTheClassType()
    {
        // See bottom of this file for class definition
        $object = new Enlightenment();

        $this->assertEquals(__, get_class($object));
    }
}

/**
 * Empty class for testThatSometimesWeNeedToKnowTheClassType()
 */
class Enlightenment {};