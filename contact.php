<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Information - Drone AI</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Contact Information</h1>
    <?php
    $filename = 'contacts.txt';
    if (file_exists($filename)) {
        $contacts = file_get_contents($filename);
        echo nl2br(htmlspecialchars($contacts));
    } else {
        echo "Contact information is currently unavailable.";
    }
    ?>
</body>
</html>
