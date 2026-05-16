<?php
require 'config.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $msg = $conn->real_escape_string($_POST['message']);
    $conn->query("CREATE TABLE IF NOT EXISTS contacts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100), email VARCHAR(150), subject VARCHAR(200),
        message TEXT, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    $conn->query("INSERT INTO contacts(name,email,subject,message)
                  VALUES('$name','$email','$subject','$msg')");
    $message = 'Message submitted successfully!';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/style.css">
<title>Contact</title>
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
<h1>Contact Me</h1>
<p><?php echo $message; ?></p>
<form method="POST">
<input name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<input name="subject" placeholder="Subject" required>
<textarea name="message" rows="6" placeholder="Message" required></textarea>
<button class="btn" type="submit">Send Message</button>
</form>
</div>
</section>
<footer>© 2026 Mohit R | Advanced ApexPlanet Portfolio</footer>
</body></html>
