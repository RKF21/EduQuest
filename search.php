<?php
require 'connection/config.php';

$query = $_GET['query'];
$sql = "SELECT * FROM courses WHERE course_name LIKE ? OR description LIKE ?";
$stmt = $conn->prepare($sql);
$searchQuery = "%" . $query . "%";
$stmt->bind_param("ss", $searchQuery, $searchQuery);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <div class="container mt-4">
        <h2>Search Results for "<?php echo htmlspecialchars($query); ?>"</h2>
        <?php if ($result->num_rows > 0): ?>
            <ul class="list-group">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="list-group-item">
                        <h5><?php echo htmlspecialchars($row['course_name']); ?></h5>
                        <p><?php echo htmlspecialchars($row['description']); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No courses found matching your query.</p>
        <?php endif; ?>
    </div>
    <?php include 'templates/footer.php'; ?>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
