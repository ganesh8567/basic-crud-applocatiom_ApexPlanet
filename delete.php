<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM posts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        echo "Post deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    die("Post not found.");
}

header("Location: read.php");
exit();
?>
