<?php
require 'config.php';
$conn->query("CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100), email VARCHAR(150), subject VARCHAR(200),
    message TEXT, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");
$result = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/style.css">
<title>Admin Dashboard</title>
</head>
<body>

<nav>
  <div><strong>Mohit Portfolio</strong></div>
  <div>
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="skills.html">Skills</a>
    <a href="projects.html">Projects</a>
    <a href="achievements.html">Achievements</a>
    <a href="contact.php">Contact</a>
    <a href="admin.php">Admin</a>
  </div>
</nav>

<section class="container">
<div class="card">
<h1>Admin Dashboard</h1>
<table>
<tr><th>Name</th><th>Email</th><th>Subject</th><th>Date</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo htmlspecialchars($row['name']); ?></td>
<td><?php echo htmlspecialchars($row['email']); ?></td>
<td><?php echo htmlspecialchars($row['subject']); ?></td>
<td><?php echo $row['created_at']; ?></td>
</tr>
<?php endwhile; ?>
</table>
</div>
</section>
<footer>© 2026 Mohit R | Advanced ApexPlanet Portfolio</footer>
</body></html>
