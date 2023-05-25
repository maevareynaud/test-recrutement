<?php

declare(strict_types=1);


namespace App;


class Customer
 {
    private string $name;
    
    /**
     * Rentals
     *
     * @var Rental[]
     */
    private array $rentals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addRental(Rental $rental): void
    {
        $this->rentals[] = $rental;
    }

    public function getStatementInformation(): string
    {
        $total_amount = 0.0;
        $frequent_renter_points = 0;
        $result = "Rental Record for " . $this->getName() . "\n";

        foreach ($this->rentals as $rental) {
            $rental_amount = $rental->getAmount();

            $frequent_renter_points += $rental->getFrequentRenterPoints();

            $result .= "\t" . $rental->getMovie()->getTitle() . "\t" . number_format($rental_amount, 1) . "\n";
            $total_amount += $rental_amount;
        }

        $result .= "You owed " . number_format($total_amount, 1) . "\n";
        $result .= "You earned " . $frequent_renter_points . " frequent renter points\n";

        return $result;
    }
 }