<?php
$pageTitle = 'Home'; $active = 'index.php';
require 'includes/services_data.php';
include 'includes/header.php';
?>
<header class="cl-hero">
  <div class="container">
    <h1>Detailing that leaves your car showroom-ready.</h1>
    <p>Pick a package, choose a time and book online at any hour. No phone calls, no waiting in line.</p>
    <a href="booking.php" class="btn btn-brass btn-lg">Book a wash</a>
  </div>
</header>

<section class="cl-section">
  <div class="container">
    <h2>Our packages</h2>
    <div class="row g-3">
      <?php foreach ($services as $s): ?>
        <div class="col-sm-6 col-lg-3">
          <div class="cl-card h-100">
            <h3 class="h5"><?= htmlspecialchars($s['name']) ?></h3>
            <p class="cl-price fs-4 mb-2">Rs <?= number_format($s['price']) ?></p>
            <p class="mb-0"><?= htmlspecialchars($s['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cl-section pt-0">
  <div class="container">
    <div class="cl-card">
      <h2 class="h4">Visit us</h2>
      <p class="mb-1"><strong>Opening hours:</strong> Monday to Saturday, 8:00 to 18:00</p>
      <p class="mb-1"><strong>Phone:</strong> +230 5000 0000</p>
      <p class="mb-0"><strong>Email:</strong> carlux@umail.com</p>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
