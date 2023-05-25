<?php

declare(strict_types=1);

namespace App\Enum;


enum CardinalDirection: string
{
    case NORTH = 'N';
    case SOUTH = 'S';
    case WEST = 'W';
    case EAST = 'E';
}