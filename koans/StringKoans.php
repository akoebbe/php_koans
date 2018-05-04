<?php

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringKoans extends TestCase
{
    public function testDoubleQuotedStringsAreStrings()
    {
        $string = "Hello, world.";

        // is_string() returns a true or false
        $this->assertEquals(__, is_string($string));
    }

    public function testSingleQuotedStringsAreAlsoStrings()
    {
        $string = 'Goodbye, world.';

        $this->assertEquals(__, is_string($string));
    }

    public function testUseBackslashForEscapingQuotesInStrings()
    {
        $a = "He said, \"Don't\"";
        $b = 'He said, "Don\'t"';

        $this->assertEquals(__, ($a == $b));
    }
    
    public function testUseSingleQuotesToCreateAStringWithDoubleQuotes()
    {
        $string = 'He said, "Go Away."';

        $this->assertEquals(__, $string); // Replace __ with a double quoted escaped version of the string
    }

    public function testUseDoubleQuotesToCreateAStringWithSingleQuotes()
    {
        $string = "Don't";

        $this->assertEquals(__, $string); // Replace __ with a single quoted escaped version of the string
    }

    public function testStringsCanContinueOntoMultipleLines()
    {
        $string = "It was the best of times,
It was the worst of times.";

        // strlen() returns the length of a string as an integer (Hint: line breaks count as a character)
        $this->assertEquals(__, strlen($string));
    }

    public function testStringsCanBeWrappedInAHeardocSyntax()
    {
        $string = <<<EOT
Howdy,
world!
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, strlen($string));
    }

    /**
     * Reference: https://secure.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
     */
    public function testHeredocIdentifierIsArbitrary()
    {
        $string = <<<OMPHALOSKEPSIS
Howdy,
world!
OMPHALOSKEPSIS;

        $this->assertEquals(__, strlen($string));
    }

    public function testDotConcatenatesStrings()
    {
        $string = "Hello, " . "World";

        $this->assertEquals(__, $string);
    }

    public function testDotWorksWithVariables()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals(__, $string);
    }

    public function testDotWillNotModifyOriginalStrings()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals(__, $hi);
        $this->assertEquals(__, $there);
    }

    public function testDotEqualsAppendsToEndOfString()
    {
        $hi = "Hello, ";
        $there = "World";
        $hi .= $there;

        $this->assertEquals(__, $hi);
    }
}