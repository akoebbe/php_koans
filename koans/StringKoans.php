<?php

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringKoans extends TestCase
{
    public function testDoubleQuotedStringsAreStrings()
    {
        $string = "Hello, world.";

        // is_string() returns a true or false
        $this->assertEquals(true, is_string($string));
    }

    public function testSingleQuotedStringsAreAlsoStrings()
    {
        $string = 'Goodbye, world.';

        $this->assertEquals(true, is_string($string));
    }

    public function testUseBackslashForEscapingQuotesInStrings()
    {
        $a = "He said, \"Don't\"";
        $b = 'He said, "Don\'t"';

        $this->assertEquals(true, ($a == $b));
    }
    
    public function testUseSingleQuotesToCreateAStringWithDoubleQuotes()
    {
        $string = 'He said, "Go Away."';

        $this->assertEquals("He said, \"Go Away.\"", $string); // Replace __ with an escaped version of the string
    }

    public function testUseDoubleQuotesToCreateAStringWithSingleQuotes()
    {
        $string = "Don't";

        $this->assertEquals('Don\'t', $string); // Replace __ with an escaped version of the string
    }

    public function testStringsCanContinueOntoMultipleLines()
    {
        $string = "It was the best of times,
It was the worst of times.";

        // strlen() returns the length of a string as an integer (Hint: line breaks count as a character)
        $this->assertEquals(52, strlen($string));
    }

    public function testStringsCanBeWrappedInAHeardocSyntax()
    {
        $string = <<<EOT
Howdy,
world!
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(13, strlen($string));
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

        $this->assertEquals(13, strlen($string));
    }

    public function testDotConcatenatesStrings()
    {
        $string = "Hello, " . "World";

        $this->assertEquals("Hello, World", $string);
    }

    public function testDotWorksWithVariables()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals("Hello, World", $string);
    }

    public function testDotWillNotModifyOriginalStrings()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals("Hello, ", $hi);
        $this->assertEquals("World", $there);
    }

    public function testDotEqualsAppendsToEndOfString()
    {
        $hi = "Hello, ";
        $there = "World";
        $hi .= $there;

        $this->assertEquals("Hello, World", $hi);
    }
}