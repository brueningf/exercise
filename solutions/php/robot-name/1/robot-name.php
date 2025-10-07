<?php

class Robot
{
    public $name;
    public $status;
    public static $counter = 0;

    public function __construct()
    {
        $this->status = 'AA';
        $this->name = $this->status . sprintf('%03d', self::$counter);;
        
        self::$counter++;
    }

    public function getName()
    {
        return $this->name;
    }

    public function reset()
    {
        ++$this->status;
        $this->name = $this->status . sprintf('%03d', self::$counter);;
    }
}
