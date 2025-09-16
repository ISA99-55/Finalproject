<?php
if (isset($_POST['addAnnouncement'])) {
    $title = $_POST['title'];
    $message = $_POST['message'];

    $sql = "INSERT INTO announcements (title, message) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $message);

    if ($stmt->execute()) {
        echo "✅ Announcement published";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
