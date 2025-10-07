<?php

class Robot
{
    public $name;    
    public $id;
    public $status;
    public static $counter = 0;

    public function __construct()
    {
        $this->status = 'AA';
        $this->id = self::$counter;
        $this->name = $this->status . sprintf('%03d', $this->id);
        
        self::$counter++;
    }

    public function getName()
    {
        return $this->name;
    }

    public function reset()
    {
        ++$this->status;
        $this->name = $this->status . sprintf('%03d', $this->id);
    }
}
