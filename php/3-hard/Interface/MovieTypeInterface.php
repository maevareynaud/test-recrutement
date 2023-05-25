<?php

namespace App\Interface;

interface MovieTypeInterface
{
    public function getCharge(int $daysRented): float;
    public function getFrequentRenterPoints(int $daysRented): int;
}