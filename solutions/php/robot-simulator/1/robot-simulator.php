<?php

class Robot {

    const DIRECTION_NORTH = 1;
    const DIRECTION_EAST = 2;
    const DIRECTION_SOUTH = 3;
    const DIRECTION_WEST = 4;

    public $position;
    public $direction;

    protected $directions = [Robot::DIRECTION_NORTH, Robot::DIRECTION_EAST, Robot::DIRECTION_SOUTH, Robot::DIRECTION_WEST];

    public function __construct(array $position, int $direction)
    {
        $this->position = $position;
        $this->direction = $direction;

        /* SET POINTER */
        while (current($this->directions) !== $this->direction) next($this->directions);
    }

    /**
     * Turn to the right
     *
     * @return $this
     */
    public function turnRight()
    {
        next($this->directions) ?
            $this->direction = current($this->directions) :
            $this->direction = reset($this->directions);

        return $this;
    }

    /**
     * Turn to the left
     *
     * @return $this
     */
    public function turnLeft()
    {
        prev($this->directions) ?
            $this->direction = current($this->directions) :
            $this->direction = end($this->directions);

        return $this;
    }


    /**
     * Move forward
     *
     * @return $this
     */
    public function advance()
    {
        $this->direction <= Robot::DIRECTION_EAST ?
            $this->position[(int) ($this->direction & 1)]++ :
            $this->position[(int) ($this->direction & 1)]--;

        return $this;
    }

    /**
     * Follow given instructions
     *
     * @param string $instructions
     */
    public function instructions(string $instructions)
    {
        foreach (str_split($instructions) as $instruction) {
            switch ($instruction) {
                case 'R':
                    $this->turnRight();
                    break;
                case 'L':
                    $this->turnLeft();
                    break;
                case 'A':
                    $this->advance();
                    break;

                default:
                    throw new InvalidArgumentException();
                    break;
            }
        }
    }
}

