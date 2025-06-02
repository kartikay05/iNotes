<?php include '../config/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 JS Bundle (includes Popper) -->
    <title>iNotes - Notes taking made easy</title>
    <link rel="shortcut icon" href="/inotes/assets/images/favicon/apple-touch-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/inotes/assets/images/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="/inotes/assets/css/style.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] === 'success') {
            $statusMessage = 'Message sent successfully!';
            $statusClass = 'success';
        } elseif ($_GET['status'] === 'error') {
            $statusMessage = 'Something went wrong. Please try again.';
            $statusClass = 'danger';
        }
    }
    ?>
    <div class="container mt-5 mb-5">
        <h2>Contact Us</h2>
        <form action="../process.php" method="POST" class="mt-4">
            <?php if (!empty($statusMessage)): ?>
                <div class="thank-you w-100 d-flex justify-content-center">
                    <div class="alert alert-<?= $statusClass ?> alert-dismissible fade show" role="alert">
                        <?= $statusMessage ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com"
                    required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject"
                    placeholder="Subject of your message" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="5"
                    placeholder="Write your message here..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>


    <?php include '../includes/footer.php'; ?>
</body>

</html>