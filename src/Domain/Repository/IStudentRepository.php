<?php

namespace Src\Domain\Repository;

use Src\Domain\Model\Student;

interface IStudentRepository
{
    public function getStudents(): array;
    public function getStudent(int $id): Student;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;

}