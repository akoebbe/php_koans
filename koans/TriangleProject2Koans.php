<?php

namespace PhpKoans;
require_once 'Triangle.php';
use PHPUnit\Framework\TestCase;

# You need to finish implementing triangle() in the file 'triangle.php'
class TriangleProject2Koans extends TestCase
{

    private Triangle $triangle;

    /**
     * @setUp
     */
    protected function setUp() : void
    {
        $this->triangle = new Triangle();
    }

    public function notValidTriangleProvider()
    {
        return [
            yield 'At least one side is 0' => [3, 4, 0],
            yield 'At least one side is minor than 0' => [3, 4, -5],
            yield 'The sum of any two sides should be greater than the third one' => [1, 1, 3]
        ];
    }

    /**
     * @test
     * @dataProvider notValidTriangleProvider
     */
    public function testIlegalTrianglesThrowExceptions(int $a, int $b, int $c)
    {
        $this->expectException(TriangleError::class);
        $this->triangle->typeOf($a,$b, $c);
    }
}
