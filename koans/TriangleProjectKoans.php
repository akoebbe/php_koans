<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

# You need to finish implementing triangle() in the file 'triangle.php'
class TriangleProjectKoans extends TestCase
{
    
    private Triangle $triangle;

    /**
     * @setUp
     */
    protected function setUp() : void
    {
        $this->triangle = new Triangle();
    }

    public function correctTriangleProvider()
    {
        return [
            yield 'Equilateral triangle has equals sides 1' => [2, 2, 2, 'equilateral'],
            yield 'Equilateral triangle has equals sides 2' => [10, 10, 10, 'equilateral'],
            yield 'Isosceles triangle has two sides equals 1' => [3, 4, 4, 'isosceles'],
            yield 'Isosceles triangle has two sides equals 2' => [4, 3, 4, 'isosceles'],
            yield 'Isosceles triangle has two sides equals 3' => [4, 4, 3, 'isosceles'],
            yield 'Scalene triangle do not have equals sides 1' => [3, 4, 5, 'scalene'],
            yield 'Scalene triangle do not have equals sides 2' => [12, 11, 10, 'scalene'],
        ];
    }

    /**
     * @test
     * @dataProvider correctTriangleProvider
     */
    public function testTrianglesThrowExceptions(int $a, int $b, int $c,string $expected)
    {
        $this->assertEquals($expected, $this->triangle->typeOf($a,$b, $c));
    }
}
