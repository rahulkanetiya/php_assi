<?php

class Student {
    public $id;
    public $firstName;
    public $lastName;
    public $contactNumber;
    public $marks;

    public function __construct($id, $firstName, $lastName, $contactNumber, $marks = []) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->contactNumber = $contactNumber;
        $this->marks = $marks;
    }

    public function __toString() {
        return "ID: $this->id, Name: $this->firstName $this->lastName, Contact: $this->contactNumber, Marks: " . implode(", ", $this->marks);
    }
}

class Counsellor {
    private $students = [];

    public function addStudent() {
        echo "Enter Student ID: ";
        $id = trim(fgets(STDIN));

        if (!ctype_digit($id)) {
            echo "Invalid ID. Please enter a numeric value.\n";
            return;
        }

        echo "Enter First Name: ";
        $firstName = trim(fgets(STDIN));
        if (!$this->validateName($firstName)) {
            echo "Invalid First Name. Please try again.\n";
            return;
        }

        echo "Enter Last Name: ";
        $lastName = trim(fgets(STDIN));

        echo "Enter Contact Number: ";
        $contactNumber = trim(fgets(STDIN));
        if (!$this->validateContactNumber($contactNumber)) {
            echo "Invalid Contact Number. Please try again.\n";
            return;
        }

        $this->students[] = new Student($id, $firstName, $lastName, $contactNumber);
        echo "Student added successfully!\n";
    }

    public function removeStudent() {
        echo "Enter Student ID to remove: ";
        $id = trim(fgets(STDIN));
        foreach ($this->students as $key => $student) {
            if ($student->id == $id) {
                echo "Are you sure you want to delete student ID $id? (Y/N): ";
                $confirm = trim(fgets(STDIN));
                if (strtoupper($confirm) == 'Y') {
                    unset($this->students[$key]);
                    echo "Student removed successfully!\n";
                    return;
                } else {
                    echo "Operation cancelled.\n";
                    return;
                }
            }
        }
        echo "Student not found.\n";
    }

    public function viewAllStudents() {
        if (empty($this->students)) {
            echo "No students available.\n";
            return;
        }
        foreach ($this->students as $student) {
            echo $student . "\n";
        }
    }

    public function viewStudent() {
        echo "Enter Student ID to view: ";
        $id = trim(fgets(STDIN));
        foreach ($this->students as $student) {
            if ($student->id == $id) {
                echo $student . "\n";
                return;
            }
        }
        echo "Student not found.\n";
    }

    private function validateName($name) {
        return preg_match("/^[a-zA-Z]+$/", $name);
    }

    private function validateContactNumber($contactNumber) {
        return preg_match("/^\d{10}$/", $contactNumber);
    }
}

class Faculty {
    private $students;

    public function __construct($students) {
        $this->students = $students;
    }

    public function addMarks() {
        echo "Enter Student ID to add marks: ";
        $id = trim(fgets(STDIN));
        foreach ($this->students as $student) {
            if ($student->id == $id) {
                echo "Enter marks (comma-separated): ";
                $marks = array_map('trim', explode(',', trim(fgets(STDIN))));
                $student->marks = $marks;
                echo "Marks added successfully!\n";
                return;
            }
        }
        echo "Student not found.\n";
    }

    public function viewOwnStudents() {
        foreach ($this->students as $student) {
            echo $student . "\n";
        }
    }
}

// Main Program
function showMenu() {
    echo "\n--- Student Management System ---\n";
    echo "1. Counsellor Menu\n";
    echo "2. Faculty Menu\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
}

function counsellorMenu() {
    echo "\n--- Counsellor Menu ---\n";
    echo "1. Add Student\n";
    echo "2. Remove Student\n";
    echo "3. View All Students\n";
    echo "4. View Specific Student\n";
    echo "5. Back to Main Menu\n";
    echo "Enter your choice: ";
}

function facultyMenu() {
    echo "\n--- Faculty Menu ---\n";
    echo "1. Add Marks\n";
    echo "2. View Own Students\n";
    echo "3. Back to Main Menu\n";
    echo "Enter your choice: ";
}

$counsellor = new Counsellor();

while (true) {
    showMenu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            while (true) {
                counsellorMenu();
                $subChoice = trim(fgets(STDIN));
                switch ($subChoice) {
                    case 1:
                        $counsellor->addStudent();
                        break;
                    case 2:
                        $counsellor->removeStudent();
                        break;
                    case 3:
                        $counsellor->viewAllStudents();
                        break;
                    case 4:
                        $counsellor->viewStudent();
                        break;
                    case 5:
                        break 2;
                    default:
                        echo "Invalid choice. Please try again.\n";
                        break;
                }
            }
            break;
        case 2:
            $faculty = new Faculty($counsellor->students);
            while (true) {
                facultyMenu();
                $subChoice = trim(fgets(STDIN));
                switch ($subChoice) {
                    case 1:
                        $faculty->addMarks();
                        break;
                    case 2:
                        $faculty->viewOwnStudents();
                        break;
                    case 3:
                        break 2;
                    default:
                        echo "Invalid choice. Please try again.\n";
                        break;
                }
            }
            break;
        case 3:
            echo "Exiting the program. Goodbye!\n";
            exit;
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
}
?>
