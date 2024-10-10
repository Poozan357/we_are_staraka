<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="portfolio.php">Talent Portfolios</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form method="POST" action="contact.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Send</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include 'db.php';
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Message sent successfully!</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
                $conn->close();
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 We are Stars. All rights reserved.</p>
    </footer>
</body>
</html>
