<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\RectangleArea\calculate;

class RectangleAreaTest extends TestCase
{
    #[DataProvider('rectangleNormalDataProvider')]
    public function testCalculateNormal(int $square, array $data): void
    {
        $result = calculate(...$data);
        $this->assertEquals($square, $result);
    }

    public static function rectangleNormalDataProvider(): array
    {
        return [
            'values1' => [10, [2, 5]],
            'values2' => [9, [3, 3]],
            'values3' => [6, [3, 2]]
        ];
    }

    #[DataProvider('rectangleWrongDataProvider')]
    public function testCalculateWrong(array $data): void
    {
        $result = calculate(...$data);
        $this->assertNull($result);
    }

    public static function rectangleWrongDataProvider(): array
    {
        return [
            'wrongLength' => [[0, 5]],
            'wrongWidth' => [[3, 0]]
        ];
    }
}