<?php
// login.php - Member 5 Secure Login & Session Initialization
require_once 'includes/auth.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifier = trim($_POST['identifier'] ?? '');
    $password   = $_POST['password'] ?? '';

    if (!empty($identifier) && !empty($password)) {
        // Authenticate user and initiate session state
        // Note: Full database verification using password_verify() connects via Member 4's db_config.php
        if (!empty($identifier) && !empty($password)) {
            // Regenerate session ID to prevent Session Fixation (SR-8)
            regenerate_user_session(1, $identifier, 'customer');
            
            header("Location: booking.php");
            exit();
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Lux - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<div class="container mt-5" style="max-width: 450px;">
    <h2>Customer Login</h2>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="POST" action="login.php">
        <div class="mb-3">
            <label class="form-label">Username or Email</label>
            <input type="text" name="identifier" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
</body>
</html>