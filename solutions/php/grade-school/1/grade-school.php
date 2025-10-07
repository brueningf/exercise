<?php


class School {

    protected $grades;

    public function __construct()
    {
        $this->grades = [];
    }

    public function add(string $name, int $grade)
    {
        $this->grades[$grade][] = $name;

        sort($this->grades[$grade]);
        ksort($this->grades);
    }

    public function grade(int $key): array
    {
        return array_key_exists($key, $this->grades) ? $this->grades[$key] : [];
    }

    public function studentsByGradeAlphabetical(): array
    {
        return $this->grades;
    }
}