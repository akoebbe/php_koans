<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringManipulationKoans extends TestCase
{
    public function testStringInterpolationInDoubleQuotedString()
    {
        $value = "one";
        $string = "The value is $value";

        $this->assertEquals(__, $string);
    }

    public function testStringInterpolationWillNotWorkInSingleQuotedString()
    {
        $value = "one";
        $string = 'The value is $value';

        $this->assertEquals(__, $string);
    }

    public function testStringInterpolationWithCurlyBrackets()
    {
        $value = "one";
        $string = "The value is {$value}";

        $this->assertEquals(__, $string);
    }

    public function testInterpolatingAssociativeArrayElementsMustBeInCurlyBrackets()
    {
        $values = ["test" => "one", "foo" => "two"];
        $string = "The value is {$values["test"]}";

        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Heredoc interpolates like a double-quoted string
     */
    public function testHeredocInterpolatesLikeDoubleQuotedStrings()
    {
        $value = "one";
        $string = <<<EOT
The value is $value
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, $string);
    }

    /**
     * @testdox Nowdoc interpolates like a single-quoted string
     */
    public function testNowdocInterpolatesLikeSingleQuotedStrings()
    {
        $value = "one";
        $string = <<<'EOT'
The value is $value
EOT;
        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, $string);
    }

    public function testStringFormattingWithSprintf()
    {
        $product = "banana";

        $string = sprintf('He bought a %s.', $product);

        $this->assertEquals(__, $string);
    }

    public function testStringFormattingWithSprintfTypeSpecifiers()
    {
        $product = "bananas";
        $quantity = 3;
        $pricePer = 2.5;

        // Be careful of the default floating point precision (6 decimal places)
        $string = sprintf('He bought %d %s for $%f.', $quantity, $product, $pricePer);

        $this->assertEquals(__, $string);
    }

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

    public function testExtractAStringFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals(__, substr($string, 7, 10));
    }

    public function testYouCanGetASingleCharacterFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals(__, $string[1]);
    }

    public function testStringsCanBeSplit()
    {
        $string = "Sausage Egg Cheese";
        $words = explode(" ", $string);

        $this->assertEquals([__, __, __], $words);
    }

    public function testStringsCanBeJoined()
    {
        $words = ["Now", "is", "the", "time"];
        $string = implode(" ", $words);

        $this->assertEquals(__, $string);
    }

    public function testChangeCaseOfStrings()
    {
        $this->assertEquals(__, ucwords('one hand clap'));
        $this->assertEquals(__, strtoupper('one hand clap'));
        $this->assertEquals(__, strtolower('Sausage EGG Cheese'));
    }
}
