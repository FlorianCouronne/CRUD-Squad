<?php
// Shared header + navigation (FR-V4). Set $pageTitle and $active before including.
$pageTitle = $pageTitle ?? 'Car Lux';
$active    = $active ?? '';
$nav = ['index.php' => 'Home', 'services.php' => 'Services', 'gallery.php' => 'Gallery', 'booking.php' => 'Book Online', 'login.php' => 'Account'];
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <title><?= htmlspecialchars($pageTitle) ?> | Car Lux</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@75..125,500..900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md cl-nav">
  <div class="container">
    <a class="navbar-brand cl-brand" href="index.php"><span class="cl-logo">C</span>CARLUX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <?php foreach ($nav as $file => $label): ?>
          <li class="nav-item">
            <a class="nav-link <?= $active === $file ? 'active' : '' ?>" href="<?= $file ?>"><?= $label ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
