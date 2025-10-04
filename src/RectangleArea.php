<?php

namespace Hexlet\Phpunit\RectangleArea;


function calculate(int $length, int $width): int|null
{
    if ($length <= 0 || $width <= 0) {
        return null; // Invalid dimensions
    }
    return $length * $width;
}
