<?php
/*
Library of Student related functions for adding, editing, removing, and otherwise manipulating the Student table
*/
require_once '__DIR__./../Config/database.php';
//Students table structure is 
/*
|studentid | int unsigned | NOT NULL | Primary key | No default | auto_increment
|firstname | varchar(50)  | NOT NULL |             | No default |
|lastname  | varchar(50)  | NOT NULL |             | No default |
|dob       | varchar(50)  | NOT NULL |             | No default |
|email     | varchar(50)  | NOT NULL |             | No default |
*/

function createStudent($fn, $ln, $dob, $email) {
    global $db;
    $sql = "INSERT INTO Students (firstname, lastname, dob, email)
                    VALUES (:firstname, :lastname, :dob, :email)";
    $stmt = $db->prepare($sql);

    return $stmt->execute([
        ':firstname' => $fn,
        ':lastname' => $ln,
        ':dob' => $dob,
        ':email' => $email
    ]);
}

function listAllStudents() {
    global $db;
    $sql = "SELECT *
    FROM Students";
}

function retrieveStudent() {

}

function editStudent() {

}
?>