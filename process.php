<?php
include 'config/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['snoEdit'])) {
    $sno = intval($_POST['snoEdit']);
    $title = mysqli_real_escape_string($conn, $_POST['titleEdit']);
    $desc = mysqli_real_escape_string($conn, $_POST['descriptionEdit']);

    $sql = "UPDATE `notes` SET `title` = '$title', `desp` = '$desc' WHERE `s_no` = $sno";
    mysqli_query($conn, $sql);
    header("Location: index.php?msg=Success! updated successfully");
    exit;
  }

  if (isset($_POST['delete'])) {
    $sno = intval($_POST['delete']);
    $sql = "DELETE FROM `notes` WHERE `s_no` = $sno";
    mysqli_query($conn, $sql);
    header("Location: index.php?msg=Success! deleted successfully");
    exit;
  }

  if (isset($_POST['title']) && isset($_POST['description'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);

    $sql = "INSERT INTO `notes` (`title`, `desp`) VALUES ('$title', '$desc')";
    mysqli_query($conn, $sql);
    header("Location: index.php?msg=Success! added successfully");
    exit;
  }

  if (isset($_POST['name']) && isset($_POST['email'])) {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Prepare SQL
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
      header("Location: pages/contact.php?status=success");
    } else {
      header("Location: pages/contact.php?status=error");
    }

    $stmt->close();
  }
}
?>