<?php
//job array, dito nakalagay yung details ng bawat job title
$jobs = [
    ['id' => 1, 'title' => 'Software Engineer', 'description' => 'Develop and maintain software applications.', 'image' => 'software.jpg'],
    ['id' => 2, 'title' => 'Data Analyst', 'description' => 'Analyze and interpret complex data sets.', 'image' => 'data.jpg'],
    ['id' => 3, 'title' => 'Graphic Designer', 'description' => 'Create visual concepts to communicate ideas.', 'image' => 'graphic.jpg'],
    ['id' => 4, 'title' => 'Project Manager', 'description' => 'Manage and oversee projects to ensure timely completion.', 'image' => 'manager.jpg']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunity Hub - Home</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS -->
</head>
<body>
    <header>
        <h1>Opportunity Hub</h1>
    </header>
    <main>
        <div class="container">
            <!-- foreach loop, para automatic na magegenarate yung details sa bawat card -->
            <?php foreach ($jobs as $job): ?> 
                <div class="card">
                    <img src="<?php echo $job['image']; ?>" alt="<?php echo $job['title']; ?>">
                    <h2><?php echo $job['title']; ?></h2>
                    <p><?php echo $job['description']; ?></p>
                    <a href="Form.php?job_id=<?php echo $job['id']; ?>">Apply</a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
