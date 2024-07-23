<?php

namespace Src\Model;

use DateTime;

class Student
{
    public readonly int $id;
    public readonly string $name;
    public readonly DateTime $createdAt;

    public function __construct(
        string $name,
    ) {
        $this->name = $name;
        $this->createdAt = new DateTime();
    }
}
