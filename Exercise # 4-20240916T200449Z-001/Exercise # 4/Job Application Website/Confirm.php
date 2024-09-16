<?php
// POST, kailangan para maretrive yung info na binigay ni user
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$dob = isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : ''; 
$age = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '';
$gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Opportunity Hub</h1>
    </header>
    <main>
        <div class="confirmation-container">
            <h2>Application Received</h2>
            <p>Dear <?php echo $name; ?>,</p>
            <p>Thank you for applying for the job with us. We have received your application and will review it shortly. Here is a summary of the information you provided:</p>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Gender:</strong> <?php echo $gender; ?></p>
            <p>Thank you for your interest in joining our team! If your qualifications align with our needs, we will reach out to schedule your initial interview</p>
            <p>Sincerely,</p>
            <p><strong>Opportunity Hub</strong></p>
        </div>
    </main>
</body>
</html>
