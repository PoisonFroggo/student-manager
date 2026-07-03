<?php
require_once __DIR__.'/../Config/database.php';
require_once __DIR__.'/../Config/paths.php';

require MODELS_PATH.'student_add.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = trim($_POST['firstname']);
    $lastname  = trim($_POST['lastname']);
    $dob       = $_POST['dob'];
    $email     = trim($_POST['email']);

    $result = createStudent(
        $firstname,
        $lastname,
        $dob,
        $email
    );

    if ($result === true) {
        $message = "Student created successfully!";
    } else {
        $message = $result;
    }
}

require VIEWS_PATH.'/createStudentView.php';