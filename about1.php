<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // For demonstration: just print, or write to file/db/send email, etc.
    echo "Thank you! You have subscribed with email: " . htmlspecialchars($email);
}
?>
