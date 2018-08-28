<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringKoans extends TestCase
{
    /**
     * @testdox Double-quoted strings are strings.
     */
    public function testDoubleQuotedStringsAreStrings()
    {
        $string = "Hello, world.";

        // is_string() returns a true or false
        $this->assertEquals(__, is_string($string));
    }

    /**
     * @testdox Single-quoted strings are also strings.
     */
    public function testSingleQuotedStringsAreAlsoStrings()
    {
        $string = 'Goodbye, world.';

        $this->assertEquals(__, is_string($string));
    }

    /**
     * @testdox Use the backslash for escaping quotes in strings.
     */
    public function testUseBackslashForEscapingQuotesInStrings()
    {
        $a = "He said, \"Don't\"";
        $b = 'He said, "Don\'t"';

        $this->assertEquals(__, ($a == $b));
    }

    /**
     * @testdox Use single-quotes to create a string that contains double-quotes.
     */
    public function testUseSingleQuotesToCreateAStringWithDoubleQuotes()
    {
        $string = 'He said, "Go Away."';

        $this->assertEquals(__, $string); // Replace __ with a double quoted escaped version of the string
    }

    /**
     * @testdox Use double-quotes to create a string that contains single-quotes.
     */
    public function testUseDoubleQuotesToCreateAStringWithSingleQuotes()
    {
        $string = "Don't";

        $this->assertEquals(__, $string); // Replace __ with a single quoted escaped version of the string
    }

    /**
     * @testdox Strings can continue onto multiple lines.
     */
    public function testStringsCanContinueOntoMultipleLines()
    {
        $string = "It was the best of times,
It was the worst of times.";

        // strlen() returns the length of a string as an integer (Hint: line breaks count as a character)
        $this->assertEquals(__, strlen($string));
    }

    /**
     * @testdox Strings can be wrapped in a heredoc syntax.
     */
    public function testStringsCanBeWrappedInAHeredocSyntax()
    {
        $string = <<<EOT
Howdy,
world!
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, strlen($string));
    }

    /**
     * @testdox A heredoc identifier can be arbitrary.
     *
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

    /**
     * @testdox Strings can be wrapped in a nowdoc syntax.
     */
    public function testStringsCanBeWrappedInANowdocSyntax()
    {
        // Note the single quotes around EOT, this is the Nowdoc syntax
        $string = <<<'EOT'
Howdy,
world!
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, strlen($string));
    }

    /**
     * @testdox A dot concatenates strings.
     */
    public function testDotConcatenatesStrings()
    {
        $string = "Hello, " . "World";

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Dot-concatenation works with variables.
     */
    public function testDotWorksWithVariables()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Dot-concatenation will not modify the original strings.
     */
    public function testDotWillNotModifyOriginalStrings()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals(__, $hi);
        $this->assertEquals(__, $there);
    }

    /**
     * @testdox Dot-equals will append to the end of a string.
     */
    public function testDotEqualsAppendsToEndOfString()
    {
        $hi = "Hello, ";
        $there = "World";
        $hi .= $there;

        $this->assertEquals(__, $hi);
    }
}
