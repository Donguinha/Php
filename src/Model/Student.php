<?php

namespace Src\Model;

use DateTimeImmutable;

class Student
{
    public readonly int $id;
    public readonly string $name;
    public readonly DateTimeImmutable $createdAt;

    public function __construct(
        string $name,
    ) {
        $this->name = $name;
        $this->createdAt = new DateTimeImmutable();
    }
}
