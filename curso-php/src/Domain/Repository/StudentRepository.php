<?php

namespace Src\Domain\Repository;

require_once __DIR__ . "/../../../vendor/autoload.php";

use PDO;
use Src\Domain\Model\Student;
use Src\Infrastructure\ConnectionCreator;


class StudentRepository implements IStudentRepository
{
    private PDO $connection;

    //without dependency injection
    // public function __construct()
    // {
    //     $this->connection = ConnectionCreator::createConnection();
    // }

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function allStudents(): array
    {
        $query = "SELECT * FROM student";

        $stmt = $this->connection->query($query);

        while ($studentData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $students[] = Student::updateStudent($studentData);
        }

        return $students;
    }

    public function studentById(int $id): Student
    {
        $query = "SELECT * FROM student WHERE id = :id";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        $studentData = $stmt->fetch(PDO::FETCH_ASSOC);

        $student = Student::updateStudent($studentData);

        return $student;
    }

    public function remove(Student $student): bool
    {
        $query = "DELETE * FROM student WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":id", $student->getId(), PDO::PARAM_INT);

        return $stmt->execute();
    }
}
