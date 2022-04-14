<?php
session_start();
include('../config/db.php');
include('../config/root.php');


//Delete Vacancies 

if (isset($_SESSION['admin'])) {
    if (isset($_GET['vacancy_id'])) {

        $vacancy_id = $_GET['vacancy_id'];

        // $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

        $sql = "DELETE FROM `vacancy` WHERE `vacancy_id` = '$vacancy_id';";
        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo ("<script>alert('Record deleted successfully');</script>");
            echo ("<script>window.location.href='" . ROOT . "views/view_vacancy.php';</script>");
        } else {

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
        // header('Location:./Admin_view_vacancy.php');
        // exit();

    }
} else {
    echo ("<script>alert('login as admin')</script>");
    echo ("<script>window.location.href='" . ROOT . "views/login.php';</script>");
}
