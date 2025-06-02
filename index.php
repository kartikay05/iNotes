<?php include 'config/conn.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap 5 JS Bundle (includes Popper) -->
  <title>Home || notes taking made easy</title>
  <link rel="shortcut icon" href="/inotes/assets/images/favicon/apple-touch-icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="/inotes/assets/images/favicon/favicon-16x16.png" type="image/x-icon">
  <link rel="stylesheet" href="/inotes/assets/css/style.css">
</head>

<body>
  <?php include 'includes/header.php' ?>
  <div class="content">
    <?php include 'includes/message.php' ?>
    <?php include 'partials/edit_modal.php' ?>
    <?php include 'partials/add_note_form.php' ?>
    <?php include 'partials/notes_table.php' ?>
  </div>
  <hr>
  <?php include 'includes/footer.php' ?>
</body>

</html>