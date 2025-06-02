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
}
?>
