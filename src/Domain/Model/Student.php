<?php
namespace Src\Domain\Model;

use DateTimeImmutable;
use DateTimeInterface;

class Student
{
    private int $id;
    private string $name;
    private DateTimeInterface $createdAt;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->createdAt = new DateTimeImmutable();
    }

    public static function updateStudent(array $studentData): self
    {
        $student = new self($studentData['name']);
        $student->id = $studentData['id'];
        $student->createdAt = new DateTimeImmutable($studentData['created_at']);

        return $student;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }
}


//código antigo que não funcionava com o repository pattern porque não conseguia retornar o objeto
//
//namespace Src\Domain\Model;
//
//use DateTimeInterface;
//
//class Student
//{
//    public int $id;
//    public string $name;
//    public DateTimeInterface $createdAt;
//
//    public function __construct(
//        string $name,
//    ) {
//        $this->name = $name;
//        $this->createdAt = new \DateTimeImmutable();
//    }
//}