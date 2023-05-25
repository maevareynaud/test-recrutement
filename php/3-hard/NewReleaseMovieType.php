<?php 
declare(strict_types=1);

namespace App;

use App\Interface\MovieTypeInterface;


class NewReleaseMovieType implements MovieTypeInterface
{
    public function getCharge(int $daysRented): float
    {
        return $daysRented * 3.0;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}