<?php

namespace PhpKoans;
use PHPUnit\Framework\TestCase;
defined('__') or define('__', null);

class EmptyIsNullOrIssetKoan extends TestCase
{
    /**
     * @test
     */
    function testMethodIsNull()
    {
        //is_null return true if variable is null
        $this->assertEquals(__, is_null(NULL));
        $this->assertEquals(__, is_null(""));
    }

    /**
     * @test
     */
    function testMethodIsset()
    {
        //isset return true if variable exist and it is not null
        $this->assertEquals(__, isset($something));

        $array = array('bar' => 1, 'foo' => null);
        $this->assertEquals(__, isset($array));
        $this->assertEquals(__ , isset($array['bar']));
        $this->assertEquals(__ , isset($array['foo']));
        $this->assertEquals(__ , isset($array['barfoo']));

    }

    /**
     * @test
     */
    function testMethodEmpty()
    {
        //Working with numbers. Returns true if is 0
        $this->assertEquals(__, empty(0));
        $this->assertEquals(__, empty(1));

        //Working with decimals. Returns true if is 0.0
        $this->assertEquals(__, empty(0.0));
        $this->assertEquals(__, empty(0.1));

        //Working wiht strings. Return false if has any character.
        $this->assertEquals(__, empty(""));
        $this->assertEquals(__, empty(" "));

        //Working with booleans. Return false if is true
        $this->assertEquals(__, empty(false));
        $this->assertEquals(__, empty(true));

        //working with arrays. Return true if the array has any value.
        $this->assertEquals(__, empty(array()));
        $this->assertEquals(__, empty(array(1)));

        //working with objects. Return true if value is an instance
        $this->assertEquals(__, empty((object)array()));
        $this->assertEquals(__, empty(null));
        $this->assertEquals(__, empty($something));
    }
}
?>
