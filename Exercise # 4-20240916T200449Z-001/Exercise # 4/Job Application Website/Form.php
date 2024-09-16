<?php
//get, para maretrive yung job id. Kailangan para malaman sa page kung anong trabaho yung pinindot
$job_id = isset($_GET['job_id']) ? intval($_GET['job_id']) : 0;

$jobs = [
    ['id' => 1, 'title' => 'Software Engineer'],
    ['id' => 2, 'title' => 'Data Analyst'],
    ['id' => 3, 'title' => 'Graphic Designer'],
    ['id' => 4, 'title' => 'Project Manager']
];

$selected_job = null;
foreach ($jobs as $job) {
    if ($job['id'] === $job_id) {
        $selected_job = $job;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunity Hub - Application Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Opportunity Hub</h1>
    </header>
    <main>
        <div class="form-container">
            <h2>Application Form</h2>
            <?php if ($selected_job): ?>
                <p class="job-info"><strong>Applying for:</strong> <?php echo htmlspecialchars($selected_job['title']); ?></p>
            <?php else: ?>
                <p class="error">Invalid job ID.</p>
            <?php endif; ?>
            <form action="Confirm.php" method="post">
                <input type="hidden" name="job_id" value="<?php echo htmlspecialchars($job_id); ?>">
                
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" required>
                
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="1" required>
                
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                
                <div class="form-buttons">
                    <button type="submit">Submit Application</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
