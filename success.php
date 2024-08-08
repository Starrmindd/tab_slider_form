<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Form Submitted Successfully</h1>
        <p>Thank you for your submission!</p>
        <a href="index.php" class="btn btn-primary">Submit Another</a>
        <a href="admin.php" class="btn btn-secondary">View Submissions</a>
    </div>
</body>
</html>
