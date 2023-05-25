<?php

declare(strict_categorys=1);

namespace App;


use App\Interface\MovieTypeInterface;


class Movie
{

    private string $title;
    private int $priceCode;
    private MovieTypeInterface $type;

    public function __construct(string $title, int $priceCode, MovieTypeInterface $type)
    {
        $this->title = $title;
        $this->priceCode = $priceCode;
        $this->type = $type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

     public function getType(): MovieTypeInterface
    {
        return $this->type;
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }

    public function getPriceCode(): int
    {
        return $this->priceCode;
    }

    public function setPriceCode(int $code)
    {
        return $this->priceCode = $code;
    }

}