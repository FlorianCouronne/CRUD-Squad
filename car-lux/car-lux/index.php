<?php
$pageTitle = 'Home'; $active = 'index.php';
require 'includes/services_data.php';
include 'includes/header.php';
$hero = file_exists(__DIR__ . '/images/hero.jpg') ? "style=\"background-image: linear-gradient(90deg, rgba(10,15,26,.95) 30%, rgba(10,15,26,.45)), url('images/hero.jpg');\"" : '';
?>
<header class="cl-hero" <?= $hero ?>>
  <div class="container">
    <span class="cl-tag">THE DETAILING STANDARD</span>
    <h1>Your Car Deserves The Best.</h1>
    <p>Professional car washing and detailing designed to restore your vehicle's shine, cleanliness and freshness. Book online at any hour.</p>
    <a href="booking.php" class="btn btn-cyan btn-lg me-2">Book appointment now</a>
    <a href="services.php" class="btn btn-ghost btn-lg">Our packages</a>
  </div>
</header>

<section class="cl-section">
  <div class="container">
    <span class="cl-tag">INDIVIDUAL TREATMENTS</span>
    <h2>Services</h2>
    <div class="row g-3">
      <?php foreach ($services as $s): ?>
        <div class="col-sm-6 col-lg-3">
          <div class="cl-svc">
            <div class="cl-photo">
              <?php if (file_exists(__DIR__ . '/images/' . $s['image'])): ?>
                <img src="images/<?= htmlspecialchars($s['image']) ?>" alt="<?= htmlspecialchars($s['name']) ?>" loading="lazy">
              <?php endif; ?>
            </div>
            <div class="body">
              <h3 class="h6"><?= htmlspecialchars($s['name']) ?></h3>
              <p class="cl-price mb-2">Rs <?= number_format($s['price']) ?></p>
              <ul class="cl-list">
                <?php foreach ($s['features'] as $f): ?><li><?= htmlspecialchars($f) ?></li><?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cl-section pt-0">
  <div class="container">
    <h2 class="text-center">Specialized Wash Packages</h2>
    <p class="text-center cl-muted mb-5">Maximise value and depth of care with our bundle programs.</p>
    <div class="row g-4">
      <?php foreach ($packages as $p): ?>
        <div class="col-md-4">
          <div class="cl-card position-relative <?= $p['popular'] ? 'popular' : '' ?>">
            <?php if ($p['popular']): ?><span class="cl-badge">MOST POPULAR</span><?php endif; ?>
            <h3 class="h5"><?= htmlspecialchars($p['name']) ?></h3>
            <p class="cl-muted small"><?= htmlspecialchars($p['blurb']) ?></p>
            <p class="cl-price fs-3 mb-3">Rs <?= number_format($p['price']) ?></p>
            <ul class="cl-list mb-4">
              <?php foreach ($p['items'] as $i): ?><li><?= htmlspecialchars($i) ?></li><?php endforeach; ?>
            </ul>
            <a href="booking.php" class="btn <?= $p['popular'] ? 'btn-cyan' : 'btn-ghost' ?> w-100">Choose package</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
