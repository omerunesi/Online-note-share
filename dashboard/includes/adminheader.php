<?php
session_start();
include('connection.php');
if (isset($_SESSION['role'])) {

}
else {
    echo "<script>alert('Önce giriş yapmalısınız!');
    window.location.href='../index.php';</script>";
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONLINENOTE - <?php echo $_SESSION['username']; ?></title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/script.js"></script>
    
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>