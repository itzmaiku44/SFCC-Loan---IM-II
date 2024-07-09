<?php
// Database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$db = "loan_db";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contact-container">
        <div class="contact-info">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $conn->real_escape_string($_POST['name']);
                $email = $conn->real_escape_string($_POST['email']);
                $phone = $conn->real_escape_string($_POST['phone']);
                $message = $conn->real_escape_string($_POST['message']);

                // Insert data into database
                $sql = "INSERT INTO contact_form (Name, Email, Phone, Message) VALUES ('$name', '$email', '$phone', '$message')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p>Thank you, $name! Your message has been sent.</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            }

            // Close connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
