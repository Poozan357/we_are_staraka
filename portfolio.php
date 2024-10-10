<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Talent Portfolios</title>
</head>
<body>
    <header>
        <h1>Talent Portfolios</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="portfolio">
            <?php
            include 'db.php';
            $sql = "SELECT * FROM portfolios";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='portfolio-item'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No portfolios found.</p>";
            }
            $conn->close();
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 We are Stars. All rights reserved.</p>
    </footer>
</body>
</html>
