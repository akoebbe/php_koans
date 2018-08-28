<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringManipulationKoans extends TestCase
{
    /**
     * @testdox One can interpolate variables in a double-quoted string.
     */
    public function testStringInterpolationInDoubleQuotedString()
    {
        $value = "one";
        $string = "The value is $value";

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox One cannot interpolate variables in a single-quoted string.
     */
    public function testStringInterpolationWillNotWorkInSingleQuotedString()
    {
        $value = "one";
        $string = 'The value is $value';

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Another option for variable iterpolation in a double-quoted string is with curly brackets.
     */
    public function testStringInterpolationWithCurlyBrackets()
    {
        $value = "one";
        $string = "The value is {$value}";

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox If one wants to interpolate associative array elements, one must use curly brackets.
     */
    public function testInterpolatingAssociativeArrayElementsMustBeInCurlyBrackets()
    {
        $values = ["test" => "one", "foo" => "two"];
        $string = "The value is {$values["test"]}";

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Heredoc interpolates like a double-quoted string.
     */
    public function testHeredocInterpolatesLikeADoubleQuotedString()
    {
        $value = "one";
        $string = <<<EOT
The value is $value
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Nowdoc interpolates like a single-quoted string.
     */
    public function testNowdocInterpolatesLikeASingleQuotedString()
    {
        $value = "one";
        $string = <<<'EOT'
The value is $value
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, $string);
    }

    /**
     * @testdox One can format a string using sprintf.
     */
    public function testStringFormattingWithSprintf()
    {
        $product = "banana";

        $string = sprintf('He bought a %s.', $product);

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox When formatting a string with sprintf, use different type specifiers for the different types of variables.
     */
    public function testStringFormattingWithSprintfTypeSpecifiers()
    {
        $product = "bananas";
        $quantity = 3;
        $pricePer = 2.5;

        // Be careful of the default floating point precision (6 decimal places)
        $string = sprintf('He bought %d %s for $%f.', $quantity, $product, $pricePer);

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Complex string formatting can be done with sprintf.
     */
    public function testComplexStringFormattingWithSprintf()
    {
        $product = "bananas";
        $quantity = 3;
        $pricePer = 2.5;

        // For more information see: https://secure.php.net/manual/en/function.sprintf.php
        $string = sprintf(
            'He bought %d %s for $%.2f each, but those %1$d %2$s were not worth the price.',
            $quantity,
            $product,
            $pricePer
        );

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox One can extract a substring from another string.
     */
    public function testExtractAStringFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals(__, substr($string, 7, 10));
    }

    /**
     * @testdox One can get a single character from a string using an array index.
     */
    public function testYouCanGetASingleCharacterFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals(__, $string[1]);
    }

    /**
     * @testdox Strings can be split.
     */
    public function testStringsCanBeSplit()
    {
        $string = "Sausage Egg Cheese";
        $words = explode(" ", $string);

        $this->assertEquals([__, __, __], $words);
    }

    /**
     * @testdox Strings can be joined.
     */
    public function testStringsCanBeJoined()
    {
        $words = ["Now", "is", "the", "time"];
        $string = implode(" ", $words);

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox One can change the case of strings.
     */
    public function testChangeCaseOfStrings()
    {
        $this->assertEquals(__, ucwords('one hand clap'));
        $this->assertEquals(__, strtoupper('one hand clap'));
        $this->assertEquals(__, strtolower('Sausage EGG Cheese'));
    }
}
