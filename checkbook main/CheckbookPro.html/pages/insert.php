<?php
session_start();
require 'connection.php';

if (isset($_POST['submit'])) {
    $accountNumber = $_POST['Accountnumber'];
    $iban = $_POST['IBAN'];
    $accounttitle = $_POST['Accounttitle'];
    $selectbank = $_POST['banks'];
    $branchname = $_POST['Branchname'];
    $branchcode = $_POST['Branchcode'];
    $bankbalance = $_POST['Bankbalance'];
    $chequebalance = $_POST['Chequebalance'];

    $id = $_SESSION['id'];

    $filname = $_FILES['uploadfile']['name'];
    $dir = " uploads/";

    $file_tmp = $_FILES['uploadfile']['tmp_name'];
    $flag = 1;

    $filepath = $dir . $filname;
    $extension = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));

    if ($extension != 'jpeg' && $extension != 'jpg' && $extension != 'png') {
        header('location:dashboard.php?message=image_extension_should_be_jpeg_png_jpg');
    } else {
        move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filepath);
        $query = "INSERT INTO Dashboard_details (bankSelect,accountno,ibanNo,accountTitle,branchName,branchCode,bankBalance,checkqueBalance,sigimg,userid)  values ('$selectbank','$accountNumber','$iban','$accounttitle','$branchname','$branchcode','$bankbalance','$chequebalance','$filepath','$id')";
        $exec = mysqli_query($conn, $query);

        if ($exec) {
            header('location:dashboard.php?message=data_inserted');
        } else {
            echo 'data not inserted';
        }
    }
}
