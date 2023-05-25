<?php

declare(strict_types=1);

namespace App\Enum;


enum Direction: string
{
    case LEFT = 'l';
    case RIGHT = 'r';
    case FORWARD = 'f';
    case BACKWARD = 'b';
}