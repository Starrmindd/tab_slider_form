<?php
$file = 'submissions.txt';

if (file_exists($file)) {
    $submissions = file($file, FILE_IGNORE_NEW_LINES);
} else {
    $submissions = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Submissions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Submitted Data</h1>
        <?php if (empty($submissions)): ?>
            <p>No submissions yet.</p>
        <?php else: ?>
            <?php foreach ($submissions as $submission): ?>
                <?php $data = json_decode($submission, true); ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Customer Details</h3>
                        <pre><?php print_r($data['Customer Details']); ?></pre>
                        <h3>Service Details</h3>
                        <pre><?php print_r($data['Service Details']); ?></pre>
                        <h3>Meter Details</h3>
                        <pre><?php print_r($data['Meter Details']); ?></pre>
                        <h3>Location Details</h3>
                        <pre><?php print_r($data['Location Details']); ?></pre>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
