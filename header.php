<?php
include "koneksi.php";

$profile = $conn->query("SELECT * FROM profile LIMIT 1")->fetch_assoc();
$experiences = $conn->query("SELECT * FROM experiences");
$skills = $conn->query("SELECT * FROM skills");
$certificates = $conn->query("SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Professional Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body></body>