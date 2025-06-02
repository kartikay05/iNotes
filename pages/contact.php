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
    <title>Contact || Notes taking made easy</title>
    <link rel="shortcut icon" href="/inotes/assets/images/favicon/apple-touch-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/inotes/assets/images/favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="/inotes/assets/css/style.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <div class="content">

        <?php
        $statusMessage = '';
        $statusClass = '';
        $showForm = true;

        if (isset($_GET['status'])) {
            if ($_GET['status'] === 'success') {
                $statusMessage = 'Message sent successfully!';
                $statusClass = 'success';
                $showForm = false; // Hide form
            } elseif ($_GET['status'] === 'error') {
                $statusMessage = 'Something went wrong. Please try again.';
                $statusClass = 'danger';
            }
        }
        ?>

        <div class="container my-5">
            <?php if ($showForm): ?>
                <h2>Contact Us</h2>
                <?php if (!empty($statusMessage)): ?>
                    <div class="thank-you w-100 d-flex justify-content-center">
                        <div class="alert alert-<?= $statusClass ?> alert-dismissible fade show" role="alert">
                            <?= $statusMessage ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                <?php endif; ?>

                <form action="../process.php" method="POST" class="mt-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>

            <?php else: ?>
                <div class="mt-4 d-flex flex-column align-items-center justify-content-center">
                    <h2 class="dt fs-1">Thank you!</h2>
                    <p>Our team will connect with you soon.</p>
                    <a href="../index.php" class="btn btn-outline-primary mt-3">← Back to Home</a>
                </div>

            <?php endif; ?>
        </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>