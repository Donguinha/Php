<?php

namespace Src\Domain\Repository;

use Src\Domain\Model\Student;

interface IStudentRepository
{
    public function allStudents(): array;
    public function studentById(int $id): Student;
    public function remove(Student $student): bool;

}