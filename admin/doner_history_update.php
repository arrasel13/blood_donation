<?php
session_start();
include_once 'db/connection.php';

if (isset($_POST['update_history'])){

    $dh_id = $_POST['dh_id'];
    $uid = $_POST['uid'];
    $donate_date = date("d-m-Y", strtotime($_POST['donate_date']));


    $sql = "UPDATE b_d_history SET donate_date='$donate_date' WHERE id=$dh_id AND u_id=$uid ";
    $run = $conn->query($sql);

    if ($run){
        $_SESSION['msg'] = "Record Updated Successfully";
        header("Location: donation_history.php?status=success");
        exit(0);
    }else{
        $_SESSION['msg'] = "Record Didn't Update";
        header("Location: donation_history.php?status=error");
        exit(0);
    }
}