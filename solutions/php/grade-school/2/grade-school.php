<?php


class School
{

    protected $grades;

    public function __construct()
    {
        $this->grades = [];
    }

    public function add(string $name, int $grade)
    {
        $this->grades[$grade][] = $name;

        sort($this->grades[$grade]);
    }

    public function grade(int $key): array
    {
        return $this->grades[$key] ?? [];
    }

    public function studentsByGradeAlphabetical(): array
    {
        ksort($this->grades);

        return $this->grades;
    }
}
