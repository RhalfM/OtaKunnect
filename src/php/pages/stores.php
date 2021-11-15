<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stores - Otakunnect</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/script.js"></script>
</head>

<body class="body-stores">
    <?php include('../layout/header.php'); ?>
    <main></main>
</body>

</html>