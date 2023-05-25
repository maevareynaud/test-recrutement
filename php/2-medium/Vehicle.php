<?php

declare(strict_types=1);

namespace App;

 use App\Enum\CardinalDirection;
 use App\Enum\Direction;

class Vehicle 
{
    private CardinalDirection $direction;
    private int $y;
    private int $x;

    public function __construct(int $x, int $y, CardinalDirection $direction)
    {
        $this->direction = $direction;
        $this->y = $y;
        $this->x = $x;
    }

    /**
     * Moves vehicle 
     * Manages the rotation and position of the vehicle
     *
     * @param array $movingInstructions
     * @return void
     */
    public function move(array $movingInstructions)
    {
        foreach($movingInstructions as $instruction)
        {
            if(self::isRotationInstruction($instruction))
            {
                $this->rotate($instruction);
            } else {
                $this->displace($instruction);
            }
        }
    }

    private function rotate(Direction $direction_instruction)
    {

        switch ($this->direction) {
            case CardinalDirection::NORTH:
                $this->updateDirection($direction_instruction, CardinalDirection::EAST, CardinalDirection::WEST);
                break;
            case CardinalDirection::SOUTH:
                $this->updateDirection($direction_instruction, CardinalDirection::WEST, CardinalDirection::EAST);
                break;
            case CardinalDirection::WEST:
                $this->updateDirection($direction_instruction, CardinalDirection::NORTH, CardinalDirection::SOUTH);
                break;
            default:
                $this->updateDirection($direction_instruction, CardinalDirection::SOUTH, CardinalDirection::NORTH);
                break;
}
    }

    public function updateDirection(Direction $direction_instruction, CardinalDirection $left_direction, CardinalDirection $right_direction)
    {
        if ($direction_instruction === Direction::RIGHT) {
            $this->setDirection($right_direction);
        } else {
            $this->setDirection($left_direction);
        }
    }

    public function setDirection(CardinalDirection $direction)
    {
        $this->direction = $direction;
    }

    public function setX(int $x)
    {
        $this->x = $x;
    }

    private function isRotationInstruction(string $instruction)
    {
        return $instruction === Direction::LEFT || $instruction === Direction::RIGHT;
    }

    /**
     * Displace vehicle
     *
     * @param Direction|CardinalDirection $instruction
     * @return void
     */
    private function displace(string $instruction)
    {
        $displacement = ($instruction === 'f') ? 1 : -1;
        if ($this->direction === CardinalDirection::NORTH) {
            $this->y += $displacement;
        } elseif ($this->direction === CardinalDirection::SOUTH) {
            $this->y -= $displacement;
        } elseif ($this->direction === CardinalDirection::WEST) {
            $this->x -= $displacement;
        } else {
            $this->x += $displacement;
        }
    }
}