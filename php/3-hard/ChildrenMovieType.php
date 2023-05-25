<?php 
declare(strict_types=1);

namespace App;

use App\Interface\MovieTypeInterface;


class ChildrenMovieType implements MovieTypeInterface
{
    public function getCharge(int $daysRented): float
    {
        $amount = 1.5;
        if ($daysRented > 3) {
            $amount += ($daysRented - 3) * 1.5;
        }
        return $amount;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}