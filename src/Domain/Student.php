<?php

namespace Src\Domain;

use DateTimeInterface;

class Student
{
    public int $id;
    public string $name;
    public DateTimeInterface $createdAt;

    public function __construct(
        string $name,
    ) {
        $this->name = $name;
        $this->createdAt = new \DateTimeImmutable();
    }
}
