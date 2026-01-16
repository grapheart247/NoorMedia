<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Define Site Source Tag
    $site_source = "nm.noorgee.pk";

    // 2. Collect Input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']); // Collected from form
    $subject = htmlspecialchars($_POST['subject']);
    $raw_msg = htmlspecialchars($_POST['message']);

    // 3. Append Contact No to Message Body (since DB has no specific phone column)
    $final_message = "Contact No: " . $contact . "\n\n" . $raw_msg;

    // 4. Insert into Database
    // Columns: site_source, name, email, subject, message
    $stmt = $conn->prepare("INSERT INTO messages (site_source, name, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("sssss", $site_source, $name, $email, $subject, $final_message);

        if ($stmt->execute()) {
            header("Location: index.php?status=success");
            exit();
        } else {
            echo "Error executing query: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
