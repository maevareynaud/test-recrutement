<?php 
declare(strict_types=1);

namespace App;

use App\Interface\MovieTypeInterface;

class RegularMovieType implements MovieTypeInterface
{
    public function getCharge(int $daysRented): float
    {
        $amount = 2.0;
        if ($daysRented > 2) {
            $amount += ($daysRented - 2) * 1.5;
        }
        return $amount;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}